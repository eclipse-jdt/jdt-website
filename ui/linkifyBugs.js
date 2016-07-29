/*******************************************************************************
 * Copyright (c) 2006 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *     IBM Corporation - initial API and implementation
 *******************************************************************************/

/**
 * Replaces plain text 'bug xyz' by a link to Eclipse's Bugzilla.
 */
function linkifyBugs() {
	traverseLinkifyBugs(document.getElementsByTagName("body")[0]);
}
function nextNode(node, stopNode) {
	if (node.nextSibling) {
		return node.nextSibling;
	} else if (node.parentNode == stopNode) {
		return null;
	} else {
		return nextNode(node.parentNode);
	}
}
function traverseLinkifyBugs(node) {
    var stopNode= node.parentNode;
	var regex= /(Bug\s*)(\d+)/i;
	while (node) {
		if (node.nodeType == 1/*element*/ && node.nodeName == "a") {
			node= nextNode(node, stopNode);

		} else if (node.childNodes != null && node.childNodes.length > 0) {
			node= node.childNodes[0];

		} else if (node.nodeType == 3/*text*/) {
			var txt= node.data;
			var res= regex.exec(txt);
			if (res) {
				var matchStart= txt.indexOf(res[0]);

				var beforeNode= document.createTextNode(txt.substring(0, matchStart));
				node.parentNode.insertBefore(beforeNode, node);

				var linkNode= document.createElement("a");
				linkNode.href= "https://bugs.eclipse.org/bugs/show_bug.cgi?id=" + res[2];
				linkNode.appendChild(document.createTextNode(res[1] + res[2]));
				node.parentNode.insertBefore(linkNode, node);

				node.data= txt.substr(matchStart + res[0].length);
				// continue with current (shortened) node...
			} else {
				node= nextNode(node, stopNode);
			}

		} else {
			node= nextNode(node, stopNode);
		}
	}
}
