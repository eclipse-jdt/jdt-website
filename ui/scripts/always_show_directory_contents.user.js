/*******************************************************************************
 * Copyright (c) 2015, 2016 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *******************************************************************************/

// ==UserScript==
// @name        Always show directory contents
// @namespace   http://www.eclipse.org/jdt/ui
// @description Always show directory contents (Eclipse downloads pages)
// @include     http://download.eclipse.org/*
// @exclude     */?d
// @downloadURL https://www.eclipse.org/jdt/ui/scripts/always_show_directory_contents.user.js
// @updateURL   https://www.eclipse.org/jdt/ui/scripts/always_show_directory_contents.user.js
// @version     1.20161021T1446
// @grant       none
// ==/UserScript==

(function(){
  fnToggleDirList();
})();
