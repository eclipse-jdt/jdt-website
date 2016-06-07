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
// @description   adds links to sort test results pages by execution time, and implements Bug 420296: devise "poor mans" performance assessment of unit tests
// @downloadURL   https://www.eclipse.org/jdt/ui/scripts/eclipse_test_results.user.js
// @updateURL     https://www.eclipse.org/jdt/ui/scripts/eclipse_test_results.user.js
// @version       1.20160607T1519

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
			var parentElem= myElem.parentNode;
			if (parentElem.tagName == "B") {
				parentElem= parentElem.parentNode;
			}
			parentElem.appendChild(document.createTextNode(" " + time + "s"));
			parentElem.removeAttribute("align");
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

var unitTestElem= document.getElementById("UnitTest");
if (unitTestElem) {
	var pElem= document.createElement("p");
	pElem.style= "text-align:right;";
	unitTestElem.parentNode.insertBefore(pElem, unitTestElem.nextElementSibling.nextElementSibling);
	
	var loadElem= document.createElement("button");
	pElem.appendChild(loadElem);
	loadElem.innerHTML= "Load test times <img src='https://addons.cdn.mozilla.net/user-media/addon_icons/0/748-64.png' style='vertical-align: top' height='16px' width='16px'>";
	loadElem.addEventListener("click", loadTestTimes, false);
}

// stolen/adapted from /eclipse.platform.releng.tychoeclipsebuilder/eclipse-junit-tests/src/main/scripts/JUNIT.XSL:
        function findTop(obj) {
          var curtop = 0;
          if (obj.offsetParent) {
            do {
              curtop += obj.offsetTop;
            } while (obj = obj.offsetParent);
            return curtop;
          }
        }

        function keyHandler(e) {
          if (typeof(e) == "undefined") {
            e = event;
          }
          if (e && e.ctrlKey) {
            if (e.keyCode == 188 /*Ctrl+,*/) {
              jumpToNextError(false);
            } else if (e.keyCode == 190 /*Ctrl+.*/) {
              jumpToNextError(true);
            }
          }
        }

        function jumpToNextError(forward) {
          if (typeof(document.getElementsByClassName) == "undefined") {
            document.getElementsByClassName = function (className) {
              var trs = document.getElementsByTagName("tr");
              var res = new Array();
              for (i = 0; i < trs.length; i++) {
                var tr = trs[i];
                var cls = tr.className;
                if (cls == className) {
                  res.push(tr);
                }
              }
              return res;
            }
          }
          var windowY = typeof(window.scrollY) != "undefined" ? window.scrollY : document.body.scrollTop;
          if (forward) {  // want to jump to the next/prev
              windowY++;
          } else {
              windowY--;
          }
          var targetY = forward ? Number.MAX_VALUE : 0;
          var target;
          var errs = document.getElementsByClassName("errorcell");
          for (var i = 0; i < errs.length; i++) {
            var elt = errs[i];
            var y = findTop(elt);
            if (forward) {
                if (y > windowY && y < targetY) {
                    target = elt;
                    targetY = y;
                }
            } else {
                if (y < windowY && y > targetY) {
                    target = elt;
                    targetY = y;
                }
            }
          }
          if (target) {
            target.firstElementChild.focus();
            target.scrollIntoView();
          } else {
            window.scrollTo(0, forward ? document.body.scrollHeight : 0);
          }

          return false;
        }

        document.onkeydown = keyHandler;
        
        // add navigation buttons:
        var div = document.createElement("div");
        div.setAttribute("style", "position:fixed; top:8px; right:8px; _position:absolute; _top:expression(eval(document.body.scrollTop + 8));");
        unitTestElem.appendChild(div);
        
        function jumpPrev() {
            jumpToNextError(false);
        }
        function jumpNext() {
            jumpToNextError(true);
        }
        
        var buttonPrev = document.createElement("button");
        buttonPrev.setAttribute("title", "Jump to previous failure/error (Ctrl+,)");
        buttonPrev.innerHTML = "&#x25B2;"
        buttonPrev.addEventListener("click", jumpPrev, false);
        div.appendChild(buttonPrev);
        
        var buttonNext = document.createElement("button");
        buttonNext.setAttribute("title", "Jump to next failure/error (Ctrl+.)");
        buttonNext.innerHTML = "&#x25BC;"
        buttonNext.addEventListener("click", jumpNext, false);
        div.appendChild(buttonNext);

}