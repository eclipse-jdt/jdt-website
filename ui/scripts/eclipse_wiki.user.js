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
//---------------------------------------------------------------------
//
// Hack around https://bugs.eclipse.org/376165 and https://bugs.eclipse.org/298256
//
// --------------------------------------------------------------------
//
// ==UserScript==
// @name          Eclipse Wiki Auto-login
// @namespace     http://www.eclipse.org/jdt/ui
// @description   Eclipse Wiki Auto-login
// @grant         none
// @downloadURL   https://www.eclipse.org/jdt/ui/scripts/eclipse_wiki.user.js
// @updateURL     https://www.eclipse.org/jdt/ui/scripts/eclipse_wiki.user.js
// @version 1.20121008T1253

// @include       http://wiki.eclipse.org/*
//
// ==/UserScript==

if (window.location.href.match(/.*Special:Userlogout.*/)) {
    console.debug("Logout page -- don't run into endless loop");
    return;
}

var anchors = document.getElementsByTagName("a");
for (var i = 0; i < anchors.length; i++) {
    var anchor = anchors[i];
    if (anchor.textContent === "Log in" && anchor.href.indexOf("action=submitlogin")) {
        console.debug("clicking 'Log in': " + anchor.href);
        location.href = anchor.href;
        return;
    }
}
console.debug("no 'Log in' found (probably already logged in)");

var firstHeadings = document.getElementsByClassName("firstHeading");
for (var i = 0; i < firstHeadings.length; i++) {
    var firstHeading = firstHeadings[i];
    console.debug(firstHeading);
	if (firstHeading.textContent == "Login successful") {
	    window.back();
	    return;
	}
}
