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
// @include       https://bugs.eclipse.org/bugs/attachment.cgi
// @include       https://bugs.eclipse.org/bugs/enter_bug.cgi*
// @include       https://bugs.eclipse.org/bugs/post_bug.cgi*
// @include       https://bugs.eclipse.org/bugs/query.cgi*
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
    var short_descElem= document.getElementById("short_desc");
    var bugRegex= /Bug\s+(\d+)/i
    if (short_descElem && bugRegex.test(titleElem.textContent)) {
	    var bugElem= document.createElement("p");
	    bugElem.innerHTML= "Bug " + bugRegex.exec(titleElem.textContent)[1] + ": " + short_descElem.value;
	    titleElem.appendChild(bugElem);
	    var subtitleElem= document.getElementById("subtitle");
	    if (subtitleElem) {
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

// Edit CC list (already hacked on bugs.eclipse.org, see https://bugs.eclipse.org/bugs/show_bug.cgi?id=288125 ):
hideElem("dup_id_container");
showElem("dup_id")

// Fix Product & Component (lose focus on change):
if (! window.location.pathname.match(/.*query\.cgi/)) {
	var productElem= document.getElementById("product");
	if (productElem) {
	    productElem.setAttribute("onchange", "window.setTimeout(function() { document.getElementById('product').focus(); }, 10)");
	}
	var componentElem= document.getElementById("component");
	if (componentElem) {
	    componentElem.setAttribute("onchange", "window.setTimeout(function() { document.getElementById('component').focus(); }, 10)");
	}
}

// Fix Status & Resolution (fix focus, add accesskey):
var bug_statusElem= document.getElementById("bug_status");
if (bug_statusElem) {
//    bug_statusElem.size= 6;
    bug_statusElem.setAttribute("onchange", "window.setTimeout(function() { document.getElementById('bug_status').focus(); }, 10)");
    bug_statusElem.setAttribute("accesskey", "e");
}
var resolutionElem= document.getElementById("resolution");
if (resolutionElem) {
//    resolutionElem.size= 6;
    resolutionElem.setAttribute("onchange", "window.setTimeout(function() { document.getElementById('resolution').focus(); }, 10)");
    resolutionElem.setAttribute("accesskey", "r");
}

function addLink(name, href, parentElem) {
    var linkElem= document.createElement("a");
    linkElem.href= href;
    linkElem.innerHTML= name;
    if (parentElem.hasChildNodes()) {
        parentElem.appendChild(document.createTextNode(" | "));
    }
    parentElem.appendChild(linkElem);
}

function addStatusLink(name, status, resolution, parentElem) {
    var href= 'javascript:document.getElementById("bug_status").value="' + status + '";'
            + 'document.getElementById("resolution").value="' + resolution + '";'
            + 'showHideStatusItems("", ["",""]);'
            + 'document.getElementById("assigned_to").focus();';
            + 'void(0);';
    addLink(name, href, parentElem);
}

function addAssigneeLink(name, email, parentElem) {
    var href= 'javascript:document.getElementById("assigned_to").value="' + email + '";'
            + 'document.getElementById("assigned_to").focus();';
            + 'void(0);';
    addLink(name, href, parentElem);
}

// Move Status to right spot:
var statusElem= document.getElementById("status");
var bz_assignee_inputElem= document.getElementById("bz_assignee_input");
if (statusElem && bz_assignee_inputElem) {
	var statusTRElem= statusElem.parentNode.parentNode;
	var bz_assignee_inputTRElem= bz_assignee_inputElem.parentNode.parentNode;
	bz_assignee_inputTRElem.parentNode.insertBefore(statusTRElem, bz_assignee_inputTRElem);
	
	// Add shortcut status links:
	var dup_id_discoverableElem= document.getElementById("dup_id_discoverable");
	var dup_id_discoverableElem= document.getElementById("dup_id_discoverable");
	var statusLinksDivElem= document.createElement("div");
	dup_id_discoverableElem.parentNode.insertBefore(statusLinksDivElem, dup_id_discoverableElem.nextSibling);

	if (dup_id_discoverableElem && bug_statusElem && resolutionElem) {
	    addStatusLink("NEW", "NEW", "", statusLinksDivElem);
	    addStatusLink("ASSIGNED", "ASSIGNED", "", statusLinksDivElem);
	    
	    addStatusLink("FIXED", "RESOLVED", "FIXED", statusLinksDivElem);
	    addStatusLink("INVALID", "RESOLVED", "INVALID", statusLinksDivElem);
	    addStatusLink("WONTFIX", "RESOLVED", "WONTFIX", statusLinksDivElem);
	    addStatusLink("WORKSFORME", "RESOLVED", "WORKSFORME", statusLinksDivElem);
	    addStatusLink("NOT_ECLIPSE", "RESOLVED", "NOT_ECLIPSE", statusLinksDivElem);
	}
	
	addAssigneeLink("DM", "daniel_megert@ch.ibm.com", bz_assignee_inputElem)
	addAssigneeLink("MK", "markus_keller@ch.ibm.com", bz_assignee_inputElem)
	addAssigneeLink("RV", "raksha.vasisht@in.ibm.com", bz_assignee_inputElem)
}

// Add a convenient Commit button:
var bz_qa_contact_inputElem= document.getElementById("bz_qa_contact_input");
if (bz_qa_contact_inputElem) {
    var commitElem= document.createElement("input");
    commitElem.setAttribute("type", "submit");
    commitElem.setAttribute("value", "     Commit     ");
    bz_qa_contact_inputElem.appendChild(commitElem);
}

// Loop over <a>s:
var anchors= document.getElementsByTagName("a");
var detailsRegex= /attachment\.cgi\?id=(\d+)&action=edit/; // attachment.cgi?id=146395&amp;action=edit
for (var i in anchors) {
    var aElem= anchors[i];
    
    // Add [diff] after [details] in attachment references:
    if (aElem.textContent == "[details]" && aElem.href.search(detailsRegex) != -1) {
        var diffElem= document.createElement("a");
        diffElem.textContent= "[diff]";
        diffElem.href= aElem.href.replace(detailsRegex, "attachment.cgi?id=$1&action=diff"); // attachment.cgi?id=125382&amp;action=diff
        aElem.parentNode.appendChild(document.createTextNode(" "));
        aElem.parentNode.appendChild(diffElem);
    }
    
    // Show obsolete attachments initially:
    if (aElem.getAttribute("onclick") == "return toggle_display(this);") {
        aElem.setAttribute("name", "toggle_display"); // have to give this a name so we can refer to it from the embedded script afterwards
        var scriptElem= document.createElement("script");
        scriptElem.type="text/javascript";
        scriptElem.innerHTML= 'toggle_display(document.anchors["toggle_display"]);';
        aElem.parentNode.insertBefore(scriptElem, aElem.nextSibling)
    }
}

if (window.location.pathname.match(/.*query\.cgi/)) {
    // Fix "'Edit Search' on bug list does not fill in 'Comment' field": https://bugs.eclipse.org/bugs/show_bug.cgi?id=288654
    var longdescRegex= /.*&longdesc=([^\&]+)&.*/;
    if (location.search.match(longdescRegex)) {
	    var match= window.location.search.replace(longdescRegex, "$1");
	    var longdescElem= document.getElementById("longdesc");
	    longdescElem.value= decodeURIComponent(match);
	}
	
	// Use GET for search, not POST:
	var queryformElem= document.getElementsByName("queryform");
	if (queryformElem.length > 0) {
	    queryformElem[0].method= "get";
	}
}

// Center horizontally:
if (false) { // works, but I don't like it...
	var attachment_tableElem= document.getElementById("attachment_table");
	if (attachment_tableElem) {
	    attachment_tableElem.setAttribute("align", "center");
	}
	var comment_status_commitElem= document.getElementById("comment_status_commit");
	if (comment_status_commitElem) {
	    comment_status_commitElem.parentNode.parentNode.parentNode.setAttribute("align", "center");
	}
}

// Fix baseline of labels:
var headElem= document.getElementsByTagName("head")[0];
var styleElem= document.createElement("style");
styleElem.type= "text/css";
styleElem.innerHTML= ".field_label { padding-top: .25em; padding-bottom: .3em; }";
headElem.appendChild(styleElem);
