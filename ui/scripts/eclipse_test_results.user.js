/*******************************************************************************
 * Copyright (c) 2012, 2013 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *******************************************************************************/
// ==UserScript==
// @name          Eclipse Test Results
// @namespace     org.eclipse.jdt.ui
// @description   implements Bug 290883: Add links to XML test results and Bug 420296: devise "poor mans" performance assessment of unit tests
// @downloadURL   https://www.eclipse.org/jdt/ui/scripts/eclipse_test_results.user.js
// @updateURL     https://www.eclipse.org/jdt/ui/scripts/eclipse_test_results.user.js
// @version       1.20140505T1658

// @include       http*://*/downloads/drops*/*/testResults.php
// @include       http*://*/downloads/drops*/*/testresults/html/*.html
// @include       http*://hudson.eclipse.org/hudson/view/*/eclipse-testing/results/html/*.html
// ==/UserScript==

if (window.location.pathname.match(/.*\/(test)?results\/html\/.*\.html/)) { // individual test results page

	function sortTable(table) {
		var rows= Array.prototype.slice.call(table.getElementsByTagName('tr'), 0);
		rows.sort(function(a,b) {
			function getTime(row) { return parseFloat(row.cells[3].innerHTML); }
			return getTime(b) - getTime(a);
		});
		for (var i= 0; i < rows.length; i++) {
			table.appendChild(rows[i]);
		}
	}
	
	function makeTableSortable(table) {
		var timeElem= table.getElementsByTagName('th')[3];
		if (timeElem.textContent == "Time(s)") {
			var sortElem= document.createElement("a");
			sortElem.style= "cursor: pointer; text-decoration: underline;";
			sortElem.title= "Sort by time (descending)";
			sortElem.innerHTML= timeElem.innerHTML;
			var titleRewritten= false;
			var sortTables= function () {
				if (!titleRewritten) {
					sortElem.innerHTML= sortElem.innerHTML + " &#x25BC;";
					sortElem.style= "";
					titleRewritten= true;
				}
				sortTable(table);
			};
			sortElem.addEventListener("click", sortTables, false);
			
			timeElem.innerHTML= "";
			timeElem.appendChild(sortElem);
		}
	}
	
	var tables= document.getElementsByClassName('details');
	for (var i= 0; i < tables.length; i++) {
		makeTableSortable(tables[i]);
	}

} else { // testResults.php summary page


var anchors= document.getElementsByTagName("a");
var htmlResultRegex= /testresults\/html\/(.*)\.html/; // <a href="testresults/html/org.eclipse.ant.tests.core_linux.gtk.x86.html">(0)</a>

function getXmlRef(ref) {
	return ref.replace(htmlResultRegex, "testresults/xml/$1.xml");
}

function getAppendTimeFunction(myElem) { // JavaScript garbage to capture aElem
	return function () { // function I want to assign to XMLHttpRequest::onload
		var xml= this.responseXML;
		var testsuites= xml.getElementsByTagName("testsuite");
		for (var i= 0; i < testsuites.length; i++) {
			var testsuite= testsuites[i];
			var time= testsuite.getAttribute("time");
			myElem.parentNode.appendChild(document.createTextNode(" " + time + "s"));
		}
	};
}

function loadTestTimes() {
	for (var i= 0; i < anchors.length; i++) {
		var aElem= anchors[i];
		
		if (aElem.href.search(htmlResultRegex) != -1) {
			var r= new XMLHttpRequest();
			// JavaScript closure madness: getAppendTimeFunction(..) cannot be inlined here,
			// since that would create a closure on variable aElem. In JavaScript, the value of is aElem not captured,
			// but the variable becomes part of the closure and is shared among all references to the function, i.e.
			// it *changes its value* as the 'for' loop proceeds!
			// 
			// The solution to capture a value is to create a dummy intermediate function.
			// How crazy is that? Normal references to a variable work as expected (passed by object), but as soon as
			// you reference a variable from a nested function, it's suddenly not a normal reference any more,
			// but shares state with other invocations of the same method?
			// In other words: The behavior of a reference to a variable is completeley different,
			// depending on whether the variable was declared in the same function (normal scoping rules, passed by object)
			// or in an enclosing function ('shared' variable).
			// And to fix the crap, you have to introduce another nested function.
			// This is another proof that JavaScript is unsuitable for real-world projects.
			// A "language" that doesn't support local reasoning and trivial refactorings has no credibility.
			//
			// Note: ES5 strict mode doesn't allow a function statement here, see https://whereswalden.com/2011/01/24/new-es5-strict-mode-requirement-function-statements-not-at-top-level-of-a-program-or-function-are-prohibited/
			// But an anonymous function has the same problem.
			r.onload= getAppendTimeFunction(aElem); // JavaScript garbage to capture aElem
			r.open("GET", getXmlRef(aElem.href), true);
			r.send();
		}
	}
}

for (var i= 0; i < anchors.length; i++) {
    var aElem= anchors[i];
    
    if (aElem.href.search(htmlResultRegex) != -1) {
        var xmlElem= document.createElement("a");
        xmlElem.textContent= "xml";
        xmlElem.setAttribute("style", "color:#AAAAAA");
        xmlElem.href= getXmlRef(aElem.href);
        xmlElem.title= "XML Test Result (e.g. for importing into the Eclipse JUnit view)";
        aElem.parentNode.appendChild(document.createTextNode(" "));
        aElem.parentNode.appendChild(xmlElem);
    } else if (aElem.name == "UnitTest") {
        var pElem= document.createElement("p");
        pElem.style= "text-align:right;";
        aElem.parentNode.parentNode.insertBefore(pElem, aElem.parentNode.nextElementSibling.nextElementSibling);
        
        var loadElem= document.createElement("button");
        pElem.appendChild(loadElem);
        loadElem.innerHTML= "Load test times <img src='http://wiki.greasespot.net/favicon.ico' style='vertical-align: top'>";
        loadElem.addEventListener("click", loadTestTimes, false);
    }
}


}