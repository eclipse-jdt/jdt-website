//---------------------------------------------------------------------
//
// JDT Bugzilla Add-on V 1.1 for Bugzilla 3.4
//
// This is a Greasemonkey user script.  To install it, you need
// Greasemonkey: http://greasemonkey.mozdev.org/
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


var textCategories= [
"-- Text category --",
"-- clean --",
"[api]",
"[BiDi]",
"[block selection]",
"[breadcrumb]",
"[clean up]",
"[content assist]",
"[correction]",
"[dnd]",
"[encoding]",
"[find/replace]",
"[formatting]",
"[help]",
"[hovering]",
"[implementation]",
"[javadoc]",
"[key binding]",
"[language family]",
"[linked mode]",
"[navigation]",
"[nls tooling]",
"[painting]",
"[performance]",
"[preferences]",
"[printing]",
"[projection]",
"[quick diff]",
"[RCP]",
"[reconciling]",
"[rulers]",
"[spell checking]",
"[syntax highlighting]",
"[templates]",
"[templates view]",
"[typing]",
"[validateEdit]",
"[wording]",
"[5.0]",
];

var jdtCategories= [
"-- JDT category --",
"-- clean --",
"[actions]",
"[api]",
"[ast rewrite]",
"[BiDi]",
"[browsing]",
"[build path]",
"[call hierarchy]",
"[ccp]",
"[change method signature]",
"[clean up]",
"[code style]",
"[code templates]",
"[common navigator]",
"[compare]",
"[convert anonymous]",
"[convert local]",
"[create on paste]",
"[dcr]",
"[dnd]",
"[encapsulate field]",
"[expand selection]",
"[expressions]",
"[extract constant]",
"[extract interface]",
"[extract local]",
"[extract method]",
"[extract superclass]",
"[generalize type]",
"[generate constructor]",
"[generate delegate]",
"[getter setter]",
"[hashcode/equals]",
"[imports on paste]",
"[infer type arguments]",
"[inline]",
"[introduce factory]",
"[introduce indirection]",
"[introduce parameter]",
"[jar exporter]",
"[javadoc wizard]",
"[JUnit]",
"[ltk]",
"[mark occurrence]",
"[migrate jar]",
"[move member type]",
"[move method]",
"[move static members]",
"[nls tooling]",
"[open type]",
"[organize imports]",
"[override method]",
"[package explorer]",
"[plan item]",
"[preferences]",
"[pull up]",
"[push down]",
"[quick assist]",
"[quick fix]",
"[refactoring]",
"[rename]",
"[render]",
"[reorg]",
"[search]",
"[surround with try/catch]",
"[toString]",
"[type hierarchy]",
"[type wizards]",
"[use supertype]",
"[working sets]",
];


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
	var regex= /(Bug\s*)\n(\d+)/i;
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
				linkNode.href= "show_bug.cgi?id=" + res[2];
				linkNode.appendChild(document.createTextNode(res[1] + " #\n" + res[2]));
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
    var href= 'javascript:document.getElementById("bug_status").value="' + status + '";';
    if (resolution) {
        href += 'document.getElementById("resolution").value="' + resolution + '";';
    }
    href += 'showHideStatusItems("", ["",""]);'
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

function createCategoriesChooser(categories) {
	var categoriesElem= document.createElement("select");
	categoriesElem.setAttribute("name", "categories_selection");
	categoriesElem.setAttribute("onchange", 
		"var form= document.changeform;" +
		"if (this.value[0] != '[') {" +
		"    if (this.value == '-- clean --') {" +
		"        form.short_desc.value= form.short_desc.value.replace(/^(\\[[\\w ]*\\]\\s*)+/, '');" +
		"    }" +
		"    return;" +
		"}" +
		"var hasCat= form.short_desc.value.indexOf('[') == 0;" +
		"form.short_desc.value= this.value + (hasCat ? '' : ' ') + form.short_desc.value;"
	);
	for (var k= 0; k < categories.length; k++) {
		var newOption= document.createElement("option");
		var categoriesName= categories[k];
		newOption.setAttribute("value", categoriesName);
		newOption.innerHTML = categoriesName.substring(1, categoriesName.length - 1);
		categoriesElem.appendChild(newOption);
	}
	return categoriesElem;
}

function createCategoriesLink(title, href) {
	var categoriesLink= document.createElement("a")
	categoriesLink.textContent= title;
	categoriesLink.href= href;
	return categoriesLink;
}

function createCategoryChoosers() {
    var choosers= document.createElement("span");
	choosers.setAttribute("style", "font-size: small; font-weight: normal");
	choosers.appendChild(createCategoriesLink("Text:", "http://www.eclipse.org/eclipse/platform-text/development/bug-annotation.htm"));
	choosers.appendChild(document.createTextNode(" "));
    choosers.appendChild(createCategoriesChooser(textCategories));
	choosers.appendChild(document.createTextNode(" | "));
	choosers.appendChild(createCategoriesLink("JDT:", "http://www.eclipse.org/jdt/ui/doc/bug-annotation.php"));
	choosers.appendChild(document.createTextNode(" "));
	choosers.appendChild(createCategoriesChooser(jdtCategories));
	return choosers;
}

//-----------


// Remove Eclipse ads:
var headerElem= document.getElementById("header");
var tableElem= headerElem.getElementsByTagName("table");
headerElem.removeChild(tableElem[0]);
var headerIconsElem= document.getElementById("header-icons");
headerIconsElem.parentNode.removeChild(headerIconsElem);


var headElem= document.getElementsByTagName("head")[0];
var styleElem= document.createElement("style");
styleElem.type= "text/css";
// Fix baseline of labels:
styleElem.innerHTML= ".field_label { padding-top: .25em; padding-bottom: .3em; }\n"
// Fix attachments table width:
    + "#attachment_table { width: auto ! important; }\n"
// Make "Show Obsolete" more prominent:
    + ".bz_attach_view_hide { font-weight: bold ! important; color: red ! important}";
headElem.appendChild(styleElem);


if (window.location.pathname.match(/.*enter_bug\.cgi/)) {
    // Remove empty <td colspan="2">&nbsp;</td>, <th>&nbsp;</th>, and <td colspan="3" class="comment">We've made a guess at your...:
    var tds= document.getElementsByTagName("td");
	for (var i= 0; i < tds.length; i++) {
		var tdElem= tds[i];
		if (tdElem.getAttribute("class") == "comment") {
		    var tbody= tdElem.parentNode.parentNode;
		    tbody.parentNode.removeChild(tbody.previousSibling.previousSibling);
		    tbody.parentNode.removeChild(tbody);
		    break;
		}
	}
    // Add another Commit button after Subject):
    var short_descElems= document.getElementsByName("short_desc");
    if (short_descElems.length > 0) {
	    var commitElem= document.createElement("input");
	    commitElem.setAttribute("type", "submit");
	    commitElem.setAttribute("value", "  Commit  ");
	    var space= document.createTextNode(" ");
	    short_descElems[0].parentNode.insertBefore(space, short_descElems[0].nextSibling);
	    short_descElems[0].parentNode.insertBefore(commitElem, space.nextSibling);
	    short_descElems[0].size= 79;
	    
		// Add bug categories choosers:
		var tr= document.createElement("tr");
		tr.appendChild(document.createElement("th"));
		var td= document.createElement("td");
		td.setAttribute("colspan", "3");
		td.appendChild(createCategoryChoosers());
		tr.appendChild(td);
		
		var summaryTr= short_descElems[0].parentNode.parentNode;
		summaryTr.parentNode.insertBefore(tr, summaryTr);
    }
    



} else if (window.location.pathname.match(/.*query\.cgi/)) {

    // Fix "'Edit Search' on bug list does not fill in 'Comment' field": https://bugs.eclipse.org/bugs/show_bug.cgi?id=288654
    var longdescRegex= /.*&longdesc=([^\&]+)&.*/;
    if (location.search.match(longdescRegex)) {
	    var match= window.location.search.replace(longdescRegex, "$1");
	    var longdescElem= document.getElementById("longdesc");
	    longdescElem.value= decodeURIComponent(match);
	}
	
	// Use GET for search, not POST (makes queries bookmarkable, avoids "do you want to resend?" messages, may fail for complex queries):
	var queryformElem= document.getElementsByName("queryform");
	if (queryformElem.length > 0) {
	    queryformElem[0].method= "get";
	}


	
} else { // For all result pages:

	// Rewrite header for direct copy/paste as CVS comment ("Bug xxx: Summary"):
	var titleElem= document.getElementById("title");
	if (titleElem) {
	    var short_descElem= document.getElementById("short_desc");
	    var bugRegex= /Bug\s+(\d+)/i
	    if (short_descElem) {
	        if (bugRegex.test(titleElem.textContent)) {
			    var bugElem= document.createElement("p");
			    bugElem.textContent= "Bug " + bugRegex.exec(titleElem.textContent)[1] + ": " + short_descElem.value;
			    titleElem.appendChild(bugElem);
			    var subtitleElem= document.getElementById("subtitle");
			    if (subtitleElem) {
				    subtitleElem.textContent= "";
				}
			}
			
			// Add bug categories choosers:
			var short_desc_divElem= short_descElem.parentNode.parentNode.parentNode.parentNode.parentNode;
            // Insert before summary:
//            short_desc_divElem.parentNode.insertBefore(createCategoryChoosers(), short_desc_divElem);
            // Insert after summary:
            var choosers= createCategoryChoosers();
            choosers.insertBefore(document.createTextNode(" "), choosers.firstChild);
            short_descElem.setAttribute("style", "width: 60%;");
            short_descElem.parentNode.insertBefore(choosers, short_descElem.nextSibling);
  		}
	}

	// Edit summary:
	hideElem("summary_alias_container");
	showElem("summary_alias_input")
	
	
	// Edit CC list (already hacked on bugs.eclipse.org, see https://bugs.eclipse.org/bugs/show_bug.cgi?id=288125 ):
	hideElem("cc_edit_area_showhide_container");
	showElem("cc_edit_area")
	
	
	// Edit & rearrange Assignee & QA:
	fixCheckboxField("bz_assignee_edit_container", "bz_assignee_input", "Default Ass.");
	fixCheckboxField("bz_qa_contact_edit_container", "bz_qa_contact_input", "Default QA");

    // Fix Product & Component (lose focus on change):
	var productElem= document.getElementById("product");
	if (productElem) {
	    productElem.setAttribute("onchange", "window.setTimeout(function() { document.getElementById('product').focus(); }, 10)");
	}
	var componentElem= document.getElementById("component");
	if (componentElem) {
	    componentElem.setAttribute("onchange", "window.setTimeout(function() { document.getElementById('component').focus(); }, 10)");
	}
	
	// Copy QA and Assignee to the right (read-only):
	var assigneeCopy, qaCopy;
	var bz_assignee_edit_containerElem= document.getElementById("bz_assignee_edit_container");
	if (bz_assignee_edit_containerElem) {
	    var spans= bz_assignee_edit_containerElem.getElementsByTagName("span");
		for (var i= 0; i < spans.length; i++) {
		    var spanElem= spans[i];
		    if (spanElem.getAttribute("class") == "vcard") {
		        assigneeCopy= spanElem.cloneNode(true);
		    }
		}
	}
	var bz_qa_contact_edit_containerElem= document.getElementById("bz_qa_contact_edit_container");
	if (bz_qa_contact_edit_containerElem) {
	    var spans= bz_qa_contact_edit_containerElem.getElementsByTagName("span");
		for (var i= 0; i < spans.length; i++) {
		    var spanElem= spans[i];
		    if (spanElem.getAttribute("class") == "vcard") {
		        qaCopy= spanElem.cloneNode(true);
		    }
		}
	}
	
    var bz_show_bug_column_2Elem= document.getElementById("bz_show_bug_column_2");
    if (bz_show_bug_column_2Elem) {
        var trs= bz_show_bug_column_2Elem.getElementsByTagName("tr");
	    if (qaCopy) {
	        var qaTr= document.createElement("tr");
	        
	        var qaTdLabel= document.createElement("td");
	        qaTdLabel.setAttribute("class", "field_label");
	        qaTdLabel.innerHTML= "<b>QA Contact</b>:";
	        qaTr.appendChild(qaTdLabel);
	        
	        var qaTdValue= document.createElement("td");
	        qaTdValue.appendChild(qaCopy);
	        qaTr.appendChild(qaTdValue);
	        
	        if (trs.length > 0) {
	            trs[1].parentNode.insertBefore(qaTr, trs[1]);
	        }
	    }
        if (assigneeCopy) {
	        var assigneeTr= document.createElement("tr");
	        
	        var assigneeTdLabel= document.createElement("td");
	        assigneeTdLabel.setAttribute("class", "field_label");
	        assigneeTdLabel.innerHTML= "<b>Assignee</b>:";
	        assigneeTr.appendChild(assigneeTdLabel);
	        
	        var assigneeTdValue= document.createElement("td");
	        assigneeTdValue.appendChild(assigneeCopy);
	        assigneeTr.appendChild(assigneeTdValue);
	        
	        if (trs.length > 0) {
	            trs[1].parentNode.insertBefore(assigneeTr, trs[1]);
	        }
        }
	}
	
	// Fix Bugzilla bug that prevents bug link at end of line (https://bugzilla.mozilla.org/show_bug.cgi?id=514703 ):
	var pres= document.getElementsByTagName("pre");
    var bugLineEndRegex= /(Bug\s+\n)(\d+)/gi;
	for (var i= 0; i < pres.length; i++) {
        // Iterate <pre class="bz_comment_text"  id="comment_text_0">, regex-replace bug <nr> with link
		var preElem= pres[i];
		var preId= preElem.getAttribute("id");
        if (preId && preId.indexOf("comment_text_") == 0) {
        	traverseLinkifyBugs(preElem);
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
		    if (bug_statusElem.options[0].value == "NEW") {
			    addStatusLink("NEW", "NEW", "", statusLinksDivElem);
			    addStatusLink("ASSIGNED", "ASSIGNED", "", statusLinksDivElem);
			} else {
			    addStatusLink("REOPENED", "REOPENED", "", statusLinksDivElem);
			    addStatusLink("VERIFIED", "VERIFIED", null, statusLinksDivElem);
			}
		    
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
	
	// Add a convenient Commit buttons:
	var bz_qa_contact_inputElem= document.getElementById("bz_qa_contact_input");
	if (bz_qa_contact_inputElem) {
	    var commitElem= document.createElement("input");
	    commitElem.setAttribute("type", "submit");
	    commitElem.setAttribute("value", "     Commit     ");
	    bz_qa_contact_inputElem.appendChild(commitElem);
	}
	
	// Another Commit button on top of Additional Comments field
	var labels= document.getElementsByTagName("label");
	for (var i= 0; i < labels.length; i++) {
	    var labelElem= labels[i];
	    if (labelElem.getAttribute("for") == "comment") {
		    var commitElem= document.createElement("input");
		    commitElem.setAttribute("type", "submit");
		    commitElem.setAttribute("class", "knob-buttons");
		    commitElem.setAttribute("value", "Commit");
		    labelElem.parentNode.insertBefore(commitElem, labelElem.nextSibling.nextSibling);
	    }
	}
	
	// Loop over <a>s:
	var anchors= document.getElementsByTagName("a");
	var detailsRegex= /attachment\.cgi\?id=(\d+)&action=edit/; // attachment.cgi?id=146395&amp;action=edit
	for (var i= 0; i < anchors.length; i++) {
	    var aElem= anchors[i];
	    
	    // Add [diff] after [details] in attachment references:
	    if (aElem.textContent == "[details]" && aElem.href.search(detailsRegex) != -1) {
	        var diffElem= document.createElement("a");
	        diffElem.textContent= "[diff]";
	        diffElem.href= aElem.href.replace(detailsRegex, "attachment.cgi?id=$1&action=diff"); // attachment.cgi?id=125382&amp;action=diff
	        aElem.parentNode.appendChild(document.createTextNode(" "));
	        aElem.parentNode.appendChild(diffElem);
	    }
	    
	//    // Show obsolete attachments initially:
	//    if (aElem.getAttribute("onclick") == "return toggle_display(this);") {
	//        aElem.setAttribute("name", "toggle_display"); // have to give this a name so we can refer to it from the embedded script afterwards
	//        var scriptElem= document.createElement("script");
	//        scriptElem.type="text/javascript";
	//        scriptElem.innerHTML= 'toggle_display(document.anchors["toggle_display"]);';
	//        aElem.parentNode.insertBefore(scriptElem, aElem.nextSibling)
	//    }
	}
}
