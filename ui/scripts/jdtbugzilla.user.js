//---------------------------------------------------------------------
//
// JDT Bugzilla Add-on V 1.1 for Bugzilla 3.4
//
// This is a Greasemonkey user script.  To install it, you need
// Greasemonkey 0.3 or later: http://greasemonkey.mozdev.org/
// Then restart Firefox and revisit this script.
// Under Tools, there will be a new menu item to "Install User Script".
// Accept the default configuration and install.
//
// To uninstall, go to Tools/Manage User Scripts,
// select "JDT Bugzilla Add-on", and click Uninstall.
//
// --------------------------------------------------------------------
//
// ==UserScript==
// @name          JDT Bugzilla Add-On
// @namespace     http://www.eclipse.org/jdt/ui
// @description   Script to tune bugzilla for JDT
// @include       https://bugs.eclipse.org/bugs/show_bug.cgi*
// @include       https://bugs.eclipse.org/bugs/process_bug.cgi
// @include       https://bugs.eclipse.org/bugs/enter_bug.cgi*
// @include       https://bugs.eclipse.org/bugs/post_bug.cgi*
// ==/UserScript==


//----------- Functions:
function hideElem(id) {
    var elem= document.getElementById(id);
    if (elem) {
        elem.setAttribute("class", "bz_default_hidden");
    }
    return elem;
}

function showElem(id) {
    var elem= document.getElementById(id);
    if (elem) {
        elem.removeAttribute("class");
    }
    return elem;
}

function fixCheckboxField(containerId, inputId, labelText) {
	hideElem(containerId);
	var inputIdElem= showElem(inputId);
	if (inputIdElem) {
		inputIdElem.removeChild(inputIdElem.getElementsByTagName("br")[0]);
		inputIdElem.getElementsByTagName("label")[0].textContent= labelText;
	}
}
//-----------


// Remove Eclipse ads:
var headerElem= document.getElementById("header");
var tableElem= headerElem.getElementsByTagName("table");
headerElem.removeChild(tableElem[0]);
var headerIconsElem= document.getElementById("header-icons");
headerIconsElem.parentNode.removeChild(headerIconsElem);


// Rewrite header for direct copy/paste as CVS comment ("Bug xxx: Summary"):
var titleElem= document.getElementById("title");
if (titleElem) {
	var idx= titleElem.textContent.lastIndexOf('Bug');
	if (idx != -1) {
	    var subtitleElem= document.getElementById("subtitle");
	    if (subtitleElem) {
		    titleElem.textContent= titleElem.textContent.substring(idx) + ': ' + subtitleElem.textContent;
		    subtitleElem.textContent= "";
		}
	}
}

// Edit summary:
hideElem("summary_alias_container");
showElem("summary_alias_input")


// Edit CC list:
hideElem("cc_edit_area_showhide_container");
showElem("cc_edit_area")


// Edit & rearrange Assignee & QA:
fixCheckboxField("bz_assignee_edit_container", "bz_assignee_input", "Default Ass.");
fixCheckboxField("bz_qa_contact_edit_container", "bz_qa_contact_input", "Default QA");

// Edit CC list:
hideElem("dup_id_container");
showElem("dup_id")


// Fix Status & Resolution (enlarge, fix focus, add accesskey):
var bug_statusElem= document.getElementById("bug_status");
if (bug_statusElem) {
    bug_statusElem.size= 6;
    bug_statusElem.setAttribute("onchange", "window.setTimeout(function() { document.getElementById('bug_status').focus(); }, 10)");
    bug_statusElem.setAttribute("accesskey", "e");
}
var resolutionElem= document.getElementById("resolution");
if (resolutionElem) {
    resolutionElem.size= 6;
    resolutionElem.setAttribute("onchange", "window.setTimeout(function() { document.getElementById('resolution').focus(); }, 10)");
    resolutionElem.setAttribute("accesskey", "r");
}

// Add [diff] after [details] in attachment references:
var anchors= document.getElementsByTagName("a");
for (var i in anchors) {
    var aElem= anchors[i];
    var ex= /attachment\.cgi\?id=(\d+)&action=edit/; // attachment.cgi?id=146395&amp;action=edit
    if (aElem.textContent == "[details]" && aElem.href.search(ex) != -1) {
        var diffElem= document.createElement("a");
        diffElem.textContent= "[diff]";
        diffElem.href= aElem.href.replace(ex, "attachment.cgi?id=$1&action=diff"); // attachment.cgi?id=125382&amp;action=diff
        aElem.parentNode.appendChild(document.createTextNode(" "));
        aElem.parentNode.appendChild(diffElem);
    }
}


// Fix baseline of labels:
var headElem= document.getElementsByTagName("head")[0];
var styleElem= document.createElement("style");
styleElem.type= "text/css";
styleElem.innerHTML= ".field_label { padding-top: .25em; padding-bottom: .3em; }";
headElem.appendChild(styleElem);
