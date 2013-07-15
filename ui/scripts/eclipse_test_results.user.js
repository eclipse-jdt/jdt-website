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
// @version       1.20130715T1510

// @include       http*://*/downloads/drops*/*/testResults.php
// ==/UserScript==

var anchors= document.getElementsByTagName("a");
var htmlResultRegex= /testresults\/html\/(.*)\.html/; // <a href="testresults/html/org.eclipse.ant.tests.core_linux.gtk.x86.html">(0)</a>

for (var i= 0; i < anchors.length; i++) {
    var aElem= anchors[i];
    
    if (aElem.href.search(htmlResultRegex) != -1) {
        var xmlElem= document.createElement("a");
        xmlElem.textContent= "xml";
        xmlElem.setAttribute("style", "color:#AAAAAA");
        xmlElem.href= aElem.href.replace(htmlResultRegex, "testresults/xml/$1.xml");
        xmlElem.title= "XML Test Result (e.g. for importing into the Eclipse JUnit view)";
        aElem.parentNode.appendChild(document.createTextNode(" "));
        aElem.parentNode.appendChild(xmlElem);
    }
}
