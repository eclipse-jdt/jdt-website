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
// @description   implements Bug 290883: Add links to XML test results
// @downloadURL   https://www.eclipse.org/jdt/ui/scripts/eclipse_test_results.user.js
// @updateURL     https://www.eclipse.org/jdt/ui/scripts/eclipse_test_results.user.js
// @version       1.20131113T2023

// @include       http*://*/downloads/drops*/*/testResults.php
// ==/UserScript==

var anchors= document.getElementsByTagName("a");
var htmlResultRegex= /testresults\/html\/(.*)\.html/; // <a href="testresults/html/org.eclipse.ant.tests.core_linux.gtk.x86.html">(0)</a>

function getXmlRef(ref) {
	return ref.replace(htmlResultRegex, "testresults/xml/$1.xml");
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
        loadElem.textContent= "Load test times";
        loadElem.addEventListener("click", loadTestTimes, false);
    }
}

function loadTestTimes() {
	for (var i= 0; i < anchors.length; i++) {
		var aElem= anchors[i];
		
		if (aElem.href.search(htmlResultRegex) != -1) {
			function appendTimeTo(myElem) { // JavaScript garbage to capture aElem
				return function () { // function I want to assign to XMLHttpRequest::onload
					var xml= this.responseXML;
					var testsuites= xml.getElementsByTagName("testsuite");
					for (var i= 0; i < testsuites.length; i++) {
						var testsuite= testsuites[i];
						var time= testsuite.getAttribute("time");
						myElem.parentNode.appendChild(document.createTextNode(" " + time + "s"));
					}
				};
			};
			var r= new XMLHttpRequest();
			r.onload= appendTimeTo(aElem); // JavaScript garbage to capture aElem
			r.open("GET", getXmlRef(aElem.href), true);
			r.send();
		}
	}
}
