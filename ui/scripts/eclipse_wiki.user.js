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
// @downloadURL   https://www.eclipse.org/jdt/ui/scripts/eclipse_wiki.user.js
// @updateURL     https://www.eclipse.org/jdt/ui/scripts/eclipse_wiki.user.js
// @version 1.20120912T1218

// @include       http://wiki.eclipse.org/*
//
// ==/UserScript==

var anchors = document.getElementsByTagName("a");
for (var i = 0; i < anchors.length; i++) {
    var anchor = anchors[i];
    if (anchor.textContent === "Log in" && anchor.href.indexOf("action=submitlogin")) {
        GM_log("clicking 'Log in': " + anchor.href);
        location.href= anchor.href;
        return;
    }
}
GM_log("no 'Log in' found (probably already logged in)");
