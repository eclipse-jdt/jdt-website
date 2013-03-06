/*******************************************************************************
 * Copyright (c) 2012 IBM Corporation and others.
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
// @description   adds links to raw XML test result files and implements https://issues.apache.org/bugzilla/show_bug.cgi?id=54180
// @downloadURL   https://www.eclipse.org/jdt/ui/scripts/eclipse_test_results.user.js
// @updateURL     https://www.eclipse.org/jdt/ui/scripts/eclipse_test_results.user.js
// @version       1.20130225T1413


// @include       http*://*/downloads/drops*/*/testResults.php
// @include       http*://*/downloads/drops*/*/testresults/html/*.html
// @include       http*://hudson.eclipse.org/hudson/view/*/eclipse-testing/results/html/*.html
// ==/UserScript==


if (window.location.pathname.match(/.*\/(test)?results\/html\/.*\.html/)) {

    var script= document.createElement("script");
    script.setAttribute("type", "application/javascript");
    script.textContent=
'        function findTop(obj) {\n' +
'          var curtop = 0;\n' +
'          if (obj.offsetParent) {\n' +
'            do {\n' +
'              curtop += obj.offsetTop;\n' +
'            } while (obj = obj.offsetParent);\n' +
'            return curtop;\n' +
'          }\n' +
'        }\n' +
'        \n' +
'        function keyHandler(e) {\n' +
'          if (typeof(e) == "undefined") {\n' +
'            e = event;\n' +
'          }\n' +
'          if (e && e.ctrlKey && e.keyCode == 190 /*Ctrl+.*/) {\n' +
'            if (typeof(document.getElementsByClassName) == "undefined") {\n' +
'              document.getElementsByClassName = function (className) {\n' +
'                var trs = document.getElementsByTagName("tr");\n' +
'                var res = new Array();\n' +
'                for (i = 0; i < trs.length; i++) {\n' +
'                  var tr = trs[i];\n' +
'                  var cls = tr.className;\n' +
'                  if (cls == className) {\n' +
'                    res.push(tr);\n' +
'                  }\n' +
'                }\n' +
'                return res;\n' +
'              }\n' +
'            }\n' +
'            var windowY = typeof(window.scrollY) != "undefined" ? window.scrollY : document.body.scrollTop;\n' +
'            windowY++; // want to jump to the next\n' +
'            var targetY = Number.MAX_VALUE;\n' +
'            var target;\n' +
'            var errs = document.getElementsByClassName("Error");\n' +
'            for (var i = 0; i < errs.length; i++) {\n' +
'              var elt = errs[i];\n' +
'              if (elt.childNodes.length > 2) {\n' +
'                  var status = elt.childNodes[2].firstChild.nodeValue;\n' +
'                  if (status != "Error" && status != "Failure")\n' +
'                      continue; // only stop in test results, not in summary header\n' +
'              }\n' +
'              var y = findTop(elt);\n' +
'              if (y > windowY && y < targetY) {\n' +
'                target = elt;\n' +
'                targetY = y;\n' +
'              }\n' +
'            }\n' +
'            if (target) {\n' +
'              target.scrollIntoView();\n' +
'            }\n' +
'            \n' +
'            return false;\n' +
'          }\n' +
'        }\n' +
'        document.onkeydown = keyHandler;\n';

    document.body.appendChild(script);
    
} else {


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

}
