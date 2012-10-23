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
// @description   adds links to raw XML test result files and fixes broken "Properties >>" links
// @downloadURL   https://www.eclipse.org/jdt/ui/scripts/eclipse_test_results.user.js
// @updateURL     https://www.eclipse.org/jdt/ui/scripts/eclipse_test_results.user.js
// @version       1.20121023T1243


// @include       http*://*/downloads/drops*/*/testResults.php
// @include       http*://*/downloads/drops*/*/testresults/html/*.html
// ==/UserScript==


// ************************** hack around https://bugs.eclipse.org/342441 ****************************
if (window.location.pathname.match(/.*\/testresults\/html\/.*\.html/)) {
    var scripts= document.getElementsByTagName("script");
    if (scripts && scripts[0]) {
	    var sElem= scripts[0];
        
        var text= sElem.textContent;
	    var regex= /(= '[^'\r\n]*)[\r\n]+([^']*')/g;
        
        var fixed= false;
		var index= text.search(regex);
		if (index != -1) {
//	    	GM_log(index + ": " + text.match(regex));
			while (index != -1) {
			    fixed= true;
	            text= text.replace(regex, "$1<br>$2");
				index= text.search(regex);
//				GM_log(index + ": " + text.match(regex));
	        }
	        
	        sElem.textContent= text;
	        
	        //unsafeWindow.eval(text); // really shouldn't do this
	        
	        // Add/remove a script node (adding runs the script, removing cleans up)
	        var script= document.createElement("script");
	        script.setAttribute("type", "application/javascript");
	        script.textContent= text;
		    document.body.appendChild(script);
		    document.body.removeChild(script);
		}
		
		if (fixed && scripts[1]) {
            var text= scripts[1].textContent;
	        regex= /(Properties of )/g;
	        index= text.search(regex);
	        if (index != -1) {
	            text= text.replace(regex, "<u>Tweaked by Greasemonkey script to work around <a href='https://bugs.eclipse.org/342441'>bug 342441</a>!</u> $1");
		        var script= document.createElement("script");
		        script.setAttribute("type", "application/javascript");
		        script.textContent= text;
			    document.body.appendChild(script);
			    document.body.removeChild(script);
	        }
	    }
	}

} else {
// ************************** END hack around https://bugs.eclipse.org/342441 ****************************


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
