// ==UserScript==
// @name        Remove history.replaceState from buglist.cgi
// @namespace   http://www.eclipse.org/jdt/ui
// @description Removes history.replaceState from buglist.cgi to work around https://github.com/greasemonkey/greasemonkey/issues/1970
// @downloadURL   https://www.eclipse.org/jdt/ui/scripts/jdtbugzilla-start.user.js
// @updateURL     https://www.eclipse.org/jdt/ui/scripts/jdtbugzilla-start.user.js

// @include       https://bugs.eclipse.org/bugs/show_bug.cgi*
// @include       https://bugs.eclipse.org/bugs/process_bug.cgi
// @include       https://bugs.eclipse.org/bugs/attachment.cgi*
// @include       https://bugs.eclipse.org/bugs/enter_bug.cgi*
// @include       https://bugs.eclipse.org/bugs/post_bug.cgi*
// @include       https://bugs.eclipse.org/bugs/query.cgi*
// @include       https://bugs.eclipse.org/bugs/buglist.cgi*
// @include       https://bugs.eclipse.org/bugs/show_activity.cgi*

// @version 1.20140804T1540
// @grant       none
// @run-at document-start
// ==/UserScript==
history.replaceState = function(data, title, url) {
	console.log("caught history.replaceState(" + data + ", " + title + ", " + url + ")");
};
