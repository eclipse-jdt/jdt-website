//---------------------------------------------------------------------
//
// JDT Bugzilla Add-on V 1.3 for Bugzilla 4.0.2
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
// @include       https://bugs.eclipse.org/bugs/attachment.cgi*
// @include       https://bugs.eclipse.org/bugs/enter_bug.cgi*
// @include       https://bugs.eclipse.org/bugs/post_bug.cgi*
// @include       https://bugs.eclipse.org/bugs/query.cgi*
// @include       https://bugs.eclipse.org/bugs/buglist.cgi*
//
// https://bugs.eclipse.org/bugs/show_bug.cgi?id=337245:
// @include       https://bugs.eclipse.org/bugstest/show_bug.cgi*
// @include       https://bugs.eclipse.org/bugstest/process_bug.cgi
// @include       https://bugs.eclipse.org/bugstest/attachment.cgi*
// @include       https://bugs.eclipse.org/bugstest/enter_bug.cgi*
// @include       https://bugs.eclipse.org/bugstest/post_bug.cgi*
// @include       https://bugs.eclipse.org/bugstest/query.cgi*
// @include       https://bugs.eclipse.org/bugstest/buglist.cgi*
// ==/UserScript==


// Add as many milestones as you like. First will be used for "Fixed (in <TM>)" link:
var target_milestones= ["3.8 M5", "3.8 M6", "3.8", "3.7.2"];

var textCategories= [
"-- Text category --",
"-- clear categories --",
"[api]",
"[BiDi]",
"[block selection]",
"[breadcrumb]",
"[compare]",
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
"[painting]",
"[preferences]",
"[printing]",
"[projection]",
"[quick diff]",
"[RCP]",
"[reconciling]",
"[rulers]",
"[save actions]",
"[spell checking]",
"[syntax highlighting]",
"[templates]",
"[templates view]",
"[typing]",
"[validateEdit]",
"[wording]",
];

var jdtCategories= [
"-- JDT category --",
"-- clear categories --",
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
"[5.0]",
"[1.7]",
];

var assignees= [
"DM", "daniel_megert@ch.ibm.com",
"MK", "markus_keller@ch.ibm.com",
"RV", "raksha.vasisht@in.ibm.com",
"DA", "deepak.azad@in.ibm.com",
];

var ccs= assignees;

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

function addLink(name, href, parentElem, tooltip, separator) {
//GM_log(name + "," + href + "," + tooltip + "," + separator)
    var linkElem= document.createElement("a");
    linkElem.href= href;
    linkElem.innerHTML= name;
    if (tooltip) {
        linkElem.title= tooltip;
    }
    if (parentElem.hasChildNodes() && !(separator == false)) {
        parentElem.appendChild(document.createTextNode(" | "));
    }
    parentElem.appendChild(linkElem);
}

function addStatusLink(name, status, resolution, parentElem) {
    var href= 'javascript:document.getElementById("bug_status").value="' + status + '";';
    href += 'showHideStatusItems("",["",""]);';
    if (resolution) {
        href += 'document.getElementById("resolution").value="' + resolution + '";';
    }
    href += 'document.getElementById("assigned_to").focus();'
            + 'document.getElementById("assigned_to").select();'
            + 'void(0);';
    addLink(name, href, parentElem);
}

function addAssigneeLink(name, email, parentElem) {
    var href= 'javascript:document.getElementById("assigned_to").value="' + email + '";'
            + 'document.getElementById("set_default_assignee").checked= false;'
            + 'document.getElementById("addselfcc") != null ? document.getElementById("addselfcc").checked= true : "";'
            + 'YAHOO.util.Dom.setStyle(document.getElementById("set_default_assignee_label"), "font-weight", "normal");'
            + 'document.getElementById("assigned_to").focus();'
            + 'void(0);';
    addLink(name, href, parentElem, email);
}

function addNewccLink(name, email, parentElem) {
    var href= 'javascript:document.getElementById("newcc").value="' + email + ' " + document.getElementById("newcc").value;'
            + 'document.getElementById("newcc").focus();'
            + 'document.getElementById("newcc").selectionStart= 0;'
            + 'document.getElementById("newcc").selectionEnd= ' + email.length + ';'
            + 'void(0);';
    addLink(name, href, parentElem, email);
}

function addCcLink(name, email, parentElem) {
    var href= 'javascript:document.getElementsByName("cc")[0].value="' + email + ' " + document.getElementsByName("cc")[0].value;'
            + 'document.getElementsByName("cc")[0].focus();'
            + 'document.getElementsByName("cc")[0].selectionStart= 0;'
            + 'document.getElementsByName("cc")[0].selectionEnd= ' + email.length + ';'
            + 'void(0);';
    addLink(name, href, parentElem, email);
}

function addProductLink(name, parentElem) {
    var href= 'javascript:document.getElementById("product").value="' + name + '";'
            + 'document.getElementById("set_default_assignee").checked= true;'
            + 'document.getElementById("addselfcc") != null ? document.getElementById("addselfcc").checked= true : "";'
            + 'YAHOO.util.Dom.setStyle(document.getElementById("set_default_assignee_label"), "font-weight", "bold");'
            + 'document.getElementById("product").focus();'
            + 'void(0);';
    addLink(name, href, parentElem);
}

function addComponentLink(name, parentElem) {
    var href= 'javascript:document.getElementById("component").value="' + name + '";'
            + 'document.getElementById("set_default_assignee").checked= true;'
            + 'YAHOO.util.Dom.setStyle(document.getElementById("set_default_assignee_label"), "font-weight", "bold");'
            + 'document.getElementById("component").focus();'
            + 'void(0);';
    addLink(name, href, parentElem);
}

function addEmailLinks(emailElemName) {
	var emailElem= document.getElementById(emailElemName);
	if (emailElem) {
		var sp= document.createElement("span");
		sp.appendChild(document.createElement("br"));
		emailElem.parentNode.appendChild(sp);
	    for (var i= 0; i < ccs.length; i= i+2) {
	        addEmailLink(ccs[i], ccs[i + 1], emailElemName, sp);
	    }
	}
}

function addEmailLink(name, email, emailElemName, parentElem) {
    var href= 'javascript:document.getElementsByName("' + emailElemName + '")[0].value="' + email + '";'
            + 'document.getElementsByName("' + emailElemName + '")[0].focus();'
            + 'void(0);';
    addLink(name, href, parentElem, email);
}

function addFixedInTargetLink(parentElem) {
    var href= 'javascript:document.getElementById("target_milestone").value="' + target_milestones[0] + '";'
            + 'document.getElementById("bug_status").value="RESOLVED";'
            + 'document.getElementById("resolution").value="FIXED";'
            + 'showHideStatusItems("", ["",""]);'
            + 'document.getElementById("assigned_to").focus();'
            + 'document.getElementById("assigned_to").select();';
            + 'void(0);';
    addLink("(in " + target_milestones[0] + ")", href, parentElem);
}

function addTargetLink(parentElem, milestone) {
    var href= 'javascript:document.getElementById("target_milestone").value="' + milestone + '";'
            + 'var assigned_toElem=document.getElementById("assigned_to");'
            + 'if(assigned_toElem){'
            +   'assigned_toElem.focus();assigned_toElem.select();'
            + '}'
            + 'void(0);';
    addLink(milestone, href, parentElem);
}

function addQueryProductLink(parentElem, classification, product, separator) {
    var href= 'javascript:document.getElementById("classification").value="' + classification + '";'
            + 'doOnSelectProduct(1);'
            + 'document.getElementById("product").value="' + product + '";'
            + 'doOnSelectProduct(2);'
            + 'void(0);';
    addLink(product, href, parentElem, product, separator);
}

function addQueryProductsLink(parentElem, classification, products, name) {
    var href= 'javascript:document.getElementById("classification").value="' + classification + '";'
            + 'doOnSelectProduct(1);'
            + 'document.getElementById("product").value="' + products[0] + '";';
    
    for (var i = 0; i < products.length; i++) {
        href += 'var productOptions= document.getElementById("product").options;'
              + 'for (var i = 0; i < productOptions.length; i++) {'
              + '    if (productOptions[i].text == "' + products[i] + '") productOptions[i].selected= true'
              + '}';
    }
    href += 'doOnSelectProduct(2);'
            + 'void(0);';
    addLink(name, href, parentElem, products, false);
}

function addQueryStatusesLink(parentElem, statuses, name) {
    var href= 'javascript:var bug_statusOptions= document.getElementById("bug_status").options;';
    href += 'for (var i = 0; i < bug_statusOptions.length; i++) {'
          + '    bug_statusOptions[i].selected= false;'
          + '};';
    for (var i = 0; i < statuses.length; i++) {
        href += 'for (var i = 0; i < bug_statusOptions.length; i++) {'
              + '    if (bug_statusOptions[i].text == "' + statuses[i] + '") bug_statusOptions[i].selected= true;'
              + '};';
    }
    href += 'void(0);';
    addLink(name, href, parentElem);
}

function setOptionSize(elementId, size) {
    var elem= document.getElementById(elementId);
    if (elem) {
        elem.setAttribute("size", size);
    }
}

function createCategoriesChooser(categories) {
	var categoriesElem= document.createElement("select");
	categoriesElem.setAttribute("name", "categories_selection");
	categoriesElem.setAttribute("onchange", 
		"var form= document.changeform;" +
		"if (!form) { form= document.queryform; }" +
		"if (!form) { form= document.Create; }" +
		"if (this.value[0] != '[') {" +
		"    if (this.value == '-- clear categories --') {" +
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
    var choosers= document.createElement("form"); // dummy form to avoid submitting fields with main form
	choosers.setAttribute("style", "font-size: small; font-weight: normal; display: inline;"); // make form behave like a <span> (inline element)
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
if (headerElem) {
    var tableElem= headerElem.getElementsByTagName("table");
    if (tableElem) {
        headerElem.removeChild(tableElem[0]);
    }
}
var headerIconsElem= document.getElementById("header-icons");
if (headerIconsElem) {
    headerIconsElem.parentNode.removeChild(headerIconsElem);
}


var headElem= document.getElementsByTagName("head")[0];
var styleElem= document.createElement("style");
styleElem.type= "text/css";
// Fix baseline of labels:
styleElem.innerHTML= ".field_label { padding-top: .25em; padding-bottom: .3em; }\n"
// Fix color of links in title:
    + "#titles a { color: #039 ! important; }\n"
    + "#titles a:visited { color: #636 ! important; }\n"
    + "#titles a:hover { color: #333 ! important; }\n"
    + "#titles a:active { color: #000 ! important; }\n"
// Fix color of comment number:
    + ".bz_comment_number { color: #65379c; }\n"
// Fix bg color of enhancements in bug lists, see https://bugs.eclipse.org/bugs/show_bug.cgi?id=331415 :
    + ".bz_enhancement { background-color: transparent ! important; }\n"
    + ".bz_row_odd { background-color: #F7F7F7 ! important; }\n"
    
// Don't wrap headers in bug lists, see https://bugs.eclipse.org/bugs/show_bug.cgi?id=333392#c4 :
    + "tr.bz_buglist_header th a { white-space: nowrap; }\n"
// Remove disgusting underlines:
    + "td.bz_short_desc_column a { text-decoration: none; }\n"
    + "td.bz_short_desc_column a:hover { text-decoration: underline; }\n"
// Highlight row background on hover:
//    + "tr.bz_bugitem:hover { background-color: #CCCCFF; ! important }" // doesnt work, since other rules are more important...

// Fix attachments table width:
    + "#attachment_table { width: auto ! important; }\n"
// Make "Show Obsolete" more prominent:
    + ".bz_attach_view_hide { font-weight: bold ! important; color: red ! important; }\n"
// Always show vertical scroll bar for Description field (gives proper wrapping-preview for short comments):
    + "#comment { overflow-y:scroll; }\n"
// Render <button> like <input>:
    + "button { font-family: Verdana, sans-serif; font-size: small; }\n"
// Don't fill whole line with email field:
    + ".bz_userfield { width: auto ! important; }\n"
    
// Search field dimensions:
    + ".search_field_grid select { height: 19ex ! important; width: 12em ! important; }\n"
    + ".search_field_grid { margin-top: 0em; }\n"
    ;
headElem.appendChild(styleElem);


// Remove info message, see https://bugs.eclipse.org/bugs/show_bug.cgi?id=333403 :
//var messageElem= document.getElementById("message");
//if (messageElem) {
//    messageElem.parentNode.removeChild(messageElem);
//}

// Add shortcut to set Platform to All/All:
var rep_platformElem= document.getElementById("rep_platform");
var op_sysElem= document.getElementById("op_sys");
if (rep_platformElem && op_sysElem) {
	var allLinkSpanElem= document.createElement("span");
	allLinkSpanElem.style.marginLeft= "1em";
	op_sysElem.parentNode.insertBefore(allLinkSpanElem, op_sysElem.nextSibling);
	
    var href= 'javascript:document.getElementById("rep_platform").value="All";'
            + 'document.getElementById("op_sys").value="All";'
            + 'void(0);';
    addLink("All", href, allLinkSpanElem);
}
	

if (window.location.pathname.match(/.*enter_bug\.cgi/)) {
    // Remove empty <td colspan="2">&nbsp;</td>, <th>&nbsp;</th>, and <td colspan="3" class="comment">We've made a guess at your...:
    var os_guess_noteElem= document.getElementById("os_guess_note");
	if (os_guess_noteElem) {
	    os_guess_noteElem.parentNode.parentNode.removeChild(os_guess_noteElem.parentNode);
	}
    // Add another Commit button after Subject):
    var short_descElems= document.getElementsByName("short_desc");
    if (short_descElems.length > 0) {
	    var commitElem= document.createElement("button");
	    commitElem.setAttribute("type", "submit");
	    commitElem.setAttribute("tabindex", "99");
	    commitElem.innerHTML= "S<u>u</u>bmit Bug";
	    commitElem.setAttribute("accesskey", "u");
	    var space= document.createTextNode(" ");
	    short_descElems[0].parentNode.insertBefore(space, short_descElems[0].nextSibling);
	    short_descElems[0].parentNode.insertBefore(commitElem, space.nextSibling);
	    short_descElems[0].size= 76;
	    
	    // set initial focus:
	    short_descElems[0].focus();
	    
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
    
	var ccElems= document.getElementsByName("cc");
	if (ccElems.length > 0) {
	    var ccElem= ccElems[0];
	    // Add shortcut cc links:
	    for (var i= 0; i < ccs.length; i= i+2) {
            addCcLink(ccs[i], ccs[i + 1], ccElem.parentNode)
        }
        // inserted cc links should not wrap:
        ccElem.parentNode.setAttribute("style", "white-space:nowrap;");
	}



} else if (window.location.pathname.match(/.*query\.cgi/)) {

//    // Fix "'Edit Search' on bug list does not fill in 'Comment' field": https://bugs.eclipse.org/bugs/show_bug.cgi?id=288654
//    var longdescRegex= /.*&longdesc=([^\&]+)&.*/;
//    if (location.search.match(longdescRegex)) {
//	    var match= window.location.search.replace(longdescRegex, "$1");
//	    var longdescElem= document.getElementById("longdesc");
//	    longdescElem.value= decodeURIComponent(match);
//	}
	
	// Use GET for search, not POST (makes queries bookmarkable, avoids "do you want to resend?" messages, may fail for complex queries):
	var queryformElem= document.getElementsByName("queryform");
	if (queryformElem.length > 0) {
	    queryformElem[0].method= "get";
	}
	
    // Remove spam headers:
    var search_helpElem= document.getElementById("search_help");
    if (search_helpElem) {
        search_helpElem.parentNode.removeChild(search_helpElem);
    }
    var titlesElem= document.getElementById("titles");
    if (titlesElem) {
        titlesElem.parentNode.removeChild(titlesElem);
    }
    
    // Reduce tabs size:
    var tabsElems= document.getElementsByClassName("tabs")
    if (tabsElems.length > 0) {
        tabsElems[0].setAttribute("cellpadding", "3");
    }
    
    // Remove section headers and expand contents:
    var bz_section_titleElems= document.evaluate("//div[@class='bz_section_title']", document, null, XPathResult.UNORDERED_NODE_SNAPSHOT_TYPE, null);
    for (var i = 0; i < bz_section_titleElems.snapshotLength; i++) {
        bz_section_titleElem= bz_section_titleElems.snapshotItem(i);
        bz_section_titleElem.parentNode.replaceChild(document.createElement("hr"), bz_section_titleElem);
    }
    
    var bz_search_sectionElems= document.evaluate("//div[contains(@class,'bz_search_section')] | //ul[contains(@class,'bz_search_section')]", document, null, XPathResult.UNORDERED_NODE_SNAPSHOT_TYPE, null);
    for (var i = 0; i < bz_search_sectionElems.snapshotLength; i++) {
        bz_search_sectionElem= bz_search_sectionElems.snapshotItem(i);
        bz_search_sectionElem.setAttribute("style", "display: block ! important;");
    }
    
	// Add bug categories choosers:
	var Search_topElem= document.getElementById("Search_top");
	if (Search_topElem) {
	    var choosers= createCategoryChoosers();
	    choosers.style.paddingRight = "1em";
	    Search_topElem.parentNode.insertBefore(choosers, Search_topElem);
	}

	// Add target milestone links:
	var targetElem= document.getElementById("field_label_target_milestone");
	if (targetElem) {
		var targetLinkSpanElem= document.createElement("span");
//		targetLinkSpanElem.style.marginLeft= ".5em";
		targetLinkSpanElem.style.fontWeight= "normal";
		targetElem.appendChild(targetLinkSpanElem);
		for (var i= 0; i < target_milestones.length; i++) {
			addTargetLink(targetLinkSpanElem, target_milestones[i]);
		}
		addTargetLink(targetLinkSpanElem, "---");
	}
	
	// Add E/JGit product links:
	var productElem= document.getElementById("field_label_product");
	if (productElem) {
	    productElem.firstElementChild.firstElementChild.setAttribute("style", "display: inline;");
	    productElem.setAttribute("style", "text-align: left;");
		var productLinkSpanElem= document.createElement("span");
//		productLinkSpanElem.style.marginLeft= ".5em";
		productLinkSpanElem.style.fontWeight= "normal";
		productElem.firstElementChild.appendChild(productLinkSpanElem);
		addQueryProductLink(productLinkSpanElem, "Technology", "EGit");
		addQueryProductsLink(productLinkSpanElem, "Technology", new Array("EGit", "JGit"), " & ");
		addQueryProductLink(productLinkSpanElem, "Technology", "JGit", false);
	}
	
	// Add open/closed links:
	var bug_statusElem= document.getElementById("field_label_bug_status");
	if (bug_statusElem) {
	    bug_statusElem.firstElementChild.firstElementChild.setAttribute("style", "display: inline;");
	    bug_statusElem.setAttribute("style", "text-align: left;");
		var statusLinkSpanElem= document.createElement("span");
		statusLinkSpanElem.style.marginLeft= ".5em";
		statusLinkSpanElem.style.fontWeight= "normal";
		bug_statusElem.firstElementChild.appendChild(statusLinkSpanElem);
		addQueryStatusesLink(statusLinkSpanElem, new Array("UNCONFIRMED", "NEW", "ASSIGNED", "REOPENED"), " Open");
		addQueryStatusesLink(statusLinkSpanElem, new Array("RESOLVED", "VERIFIED", "CLOSED"), "Closed");
	}
	
	
	// Increase option list sizes to avoid scrolling (these are probably not used any more):
	setOptionSize("classification", 6);
	setOptionSize("product", 6);
	setOptionSize("component", 6);
	setOptionSize("version", 6);
	setOptionSize("target_milestone", 6);
	
	setOptionSize("bug_status", 8);
	setOptionSize("resolution", 8);
	setOptionSize("bug_severity", 8);
	setOptionSize("priority", 8);
	setOptionSize("rep_platform", 8);
	setOptionSize("op_sys", 8);
	
	setOptionSize("chfield", 5);

    // Add shortcut email links:
	addEmailLinks("email1");
	addEmailLinks("email2");
	addEmailLinks("email3");

    // Fix layout of date fields:
    var history_filter_sectionElem= document.getElementById("history_filter_section");
    if (history_filter_sectionElem) {
        history_filter_sectionElem.lastElementChild.setAttribute("style", "width: auto");
    }
    
    // Fix label height:
    styleElem.innerHTML= styleElem.innerHTML
        + ".field_label { line-height: 1.5em ! important; }\n";
        + ".search_field_row { line-height: auto ! important; }\n";

} else if (window.location.pathname.match(/.*buglist\.cgi/)) {
    // Add access key to Edit Query:
    var bz_query_editElems= document.getElementsByClassName("bz_query_edit");
	if (bz_query_editElems.length > 0) {
	    var bz_query_editElem= bz_query_editElems[0];
	    var aElem= bz_query_editElem.childNodes[1];
		aElem.setAttribute("accesskey", "e");
		aElem.firstChild.replaceData(0, 1, "");
		var mnemonic= document.createElement("b");
		mnemonic.appendChild(document.createTextNode("E"));
		aElem.insertBefore(mnemonic, aElem.firstChild);
	}

	// Add target milestone links (for "Change Several Bugs at Once"):
	var targetElem= document.getElementById("target_milestone");
	if (targetElem) {
		var targetLinkSpanElem= document.createElement("span");
		targetLinkSpanElem.style.marginLeft= ".5em";
		targetLinkSpanElem.style.fontWeight= "normal";
		targetElem.parentNode.appendChild(targetLinkSpanElem);
		for (var i= 0; i < target_milestones.length; i++) {
			addTargetLink(targetLinkSpanElem, target_milestones[i]);
		}
		addTargetLink(targetLinkSpanElem, "---");
	}


} else { // For all result pages:
	var bugId;

	// Rewrite header for direct copy/paste as CVS comment ("Bug xxx: Summary"):
	var titleElem= document.getElementById("title");
	if (titleElem) {
	    var short_descElem= document.getElementById("short_desc");
	    var bugRegex= /Bug\s+(\d+)/i
	    if (short_descElem) {
	        if (bugRegex.test(titleElem.textContent)) {
	            bugId= bugRegex.exec(titleElem.textContent)[1];
			    var bugLink= document.createElement("a");
			    bugLink.href= "../" + bugId;
			    bugLink.appendChild(document.createTextNode("Bug " + bugId));
			    
			    var bugElem= document.createElement("p");
			    bugElem.appendChild(bugLink);
			    bugElem.appendChild(document.createTextNode(": " + short_descElem.value));

				titleElem.replaceChild(bugElem, titleElem.firstChild.nextSibling);
			    
			    // Hack to stitch header to top, so that it is also visible when scrolled down:
			    var tableElem= titleElem.parentNode.parentNode.parentNode;
			    tableElem.setAttribute("style", "position:fixed; top:0px; left:0px; right:0px;");
			    // leave some space behind the fixed table:
			    var spacerElem= document.createElement("div");
			    spacerElem.appendChild(document.createTextNode("..."));
			    tableElem.parentNode.insertBefore(spacerElem, tableElem);
			    
			    var subtitleElem= document.getElementById("subtitle");
			    if (subtitleElem) {
				    subtitleElem.textContent= "";
				}
			}
			
			// Add bug categories choosers:
            // Insert before summary:
//            var short_desc_divElem= short_descElem.parentNode.parentNode.parentNode.parentNode.parentNode;
//            short_desc_divElem.parentNode.insertBefore(createCategoryChoosers(), short_desc_divElem);

            // Insert after summary:
            var choosers= createCategoryChoosers();
            choosers.insertBefore(document.createTextNode(" "), choosers.firstChild);
            short_descElem.setAttribute("style", "width: 60%;");
            short_descElem.parentNode.insertBefore(choosers, short_descElem.nextSibling);
            var summaryElem= document.getElementById("summary");
            if (summaryElem) {
                summaryElem.setAttribute("style", "width: 100%;"); // necessary for process_bug.cgi, dont ask...
                summaryElem.parentNode.parentNode.setAttribute("style", "width: 99%;"); // fix horizonal scrollbars
            }
  		}
	}

	// Edit summary:
	hideElem("summary_alias_container");
	showElem("summary_alias_input")
	
	
	// Edit CC list (already badly hacked on bugs.eclipse.org, see https://bugs.eclipse.org/bugs/show_bug.cgi?id=334083 ):
	hideElem("cc_edit_area_showhide_container");
	var cc_edit_areaElem= showElem("cc_edit_area")
	if (cc_edit_areaElem) {
		cc_edit_areaElem.removeChild(cc_edit_areaElem.getElementsByTagName("br")[0]);
	}
	
	setOptionSize("cc", 8);
	
	// Edit & rearrange Assignee & QA:
	fixCheckboxField("bz_assignee_edit_container", "bz_assignee_input", "Default Ass.");
	fixCheckboxField("bz_qa_contact_edit_container", "bz_qa_contact_input", "Default QA");

    // Fix Product & Component (lose focus on change):
	var productElem= document.getElementById("product");
	if (productElem) {
	    productElem.setAttribute("onchange", "window.setTimeout(function() {"
	                + "document.getElementById('product').focus();"
	                + 'document.getElementById("addselfcc") != null ? document.getElementById("addselfcc").checked= true : "";'
                    + "}, 10)"
	                );
	    
	    // Add shortcuts to set Product:
		var productsLinkSpanElem= document.createElement("span");
		productsLinkSpanElem.style.marginLeft= "1em";
		productElem.parentNode.insertBefore(productsLinkSpanElem, productElem.nextSibling);
	    addProductLink("Platform", productsLinkSpanElem);
	    addProductLink("JDT", productsLinkSpanElem);
	    addProductLink("PDE", productsLinkSpanElem);
	    addProductLink("Equinox", productsLinkSpanElem);
	}
	var componentElem= document.getElementById("component");
	if (componentElem) {
	    componentElem.setAttribute("onchange", "window.setTimeout(function() {"
	                + "document.getElementById('component').focus();"
	                + 'document.getElementById("addselfcc") != null ? document.getElementById("addselfcc").checked= true : "";'
                    + "}, 10)"
	                );
	    
	    // Add shortcuts to set Component:
		var componentsLinkSpanElem= document.createElement("span");
		componentsLinkSpanElem.style.marginLeft= "1em";
		componentElem.parentNode.insertBefore(componentsLinkSpanElem, componentElem.nextSibling);
	    addComponentLink("Core", componentsLinkSpanElem);
	    addComponentLink("Debug", componentsLinkSpanElem);
	    addComponentLink("Doc", componentsLinkSpanElem);
	    addComponentLink("SWT", componentsLinkSpanElem);
	    addComponentLink("Text", componentsLinkSpanElem);
	    addComponentLink("UI", componentsLinkSpanElem);
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
	
	// Add accesskeys to Status & Resolution:
	var bug_statusElem= document.getElementById("bug_status");
	if (bug_statusElem) {
	    bug_statusElem.setAttribute("accesskey", "e");
	}
	var resolutionElem= document.getElementById("resolution");
	if (resolutionElem) {
	    resolutionElem.setAttribute("accesskey", "r");
	}
	
	// Add shortcut target milestone links:
	var targetElem= document.getElementById("target_milestone");
	if (targetElem) {
		var targetLinkSpanElem= document.createElement("span");
		targetLinkSpanElem.style.marginLeft= "1em";
		targetElem.parentNode.insertBefore(targetLinkSpanElem, targetElem.nextSibling);
		for (var i= 0; i < target_milestones.length; i++) {
			addTargetLink(targetLinkSpanElem, target_milestones[i]);
		}
		addTargetLink(targetLinkSpanElem, "---");
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
		    var firstStatus= bug_statusElem.options[0].value;
		    var secondStatus= bug_statusElem.options[1].value;
		    if ((firstStatus == "NEW" || firstStatus == "ASSIGNED" || firstStatus == "REOPENED") && secondStatus != "RESOLVED") {
			    addStatusLink("NEW", "NEW", "", statusLinksDivElem);
			    addStatusLink("ASSIGNED", "ASSIGNED", "", statusLinksDivElem);
			} else {
			    addStatusLink("REOPENED", "REOPENED", "", statusLinksDivElem);
			    addStatusLink("VERIFIED", "VERIFIED", null, statusLinksDivElem);
			}
		    
		    addStatusLink("FIXED", "RESOLVED", "FIXED", statusLinksDivElem);
		    // Add shortcut target milestone link:
		    var targetLinkSpanElem= document.createElement("span");
		    targetLinkSpanElem.style.marginLeft= ".5em";
		    statusLinksDivElem.appendChild(targetLinkSpanElem);
		    addFixedInTargetLink(targetLinkSpanElem);
		    
		    addStatusLink("INVALID", "RESOLVED", "INVALID", statusLinksDivElem);
		    addStatusLink("WONTFIX", "RESOLVED", "WONTFIX", statusLinksDivElem);
		    addStatusLink("WORKSFORME", "RESOLVED", "WORKSFORME", statusLinksDivElem);
		    addStatusLink("NOT_ECLIPSE", "RESOLVED", "NOT_ECLIPSE", statusLinksDivElem);
		}
		
	    // Add shortcut assignee links:
	    for (var i= 0; i < assignees.length; i= i+2) {
            addAssigneeLink(assignees[i], assignees[i + 1], bz_assignee_inputElem)
        }
	}
	
	var newccElem= document.getElementById("newcc");
	if (newccElem) {
	    var addDiv= newccElem.parentNode.firstElementChild;
	    // Add shortcut cc links:
	    for (var i= 0; i < ccs.length; i= i+2) {
            addNewccLink(ccs[i], ccs[i + 1], addDiv)
        }
	}
	
	// Add a convenient Commit button:
	var bz_qa_contact_inputElem= document.getElementById("bz_qa_contact_input");
	if (bz_qa_contact_inputElem) {
	    var commitElem= document.createElement("button");
	    commitElem.setAttribute("type", "submit");
	    commitElem.innerHTML= "Sa<u>v</u>e Changes";
	    commitElem.style.marginLeft= "1em";
	    bz_qa_contact_inputElem.appendChild(commitElem);
	}
	
    // Fix the "Comment" field size (too small on the "Attachment Details" page,
    //     default cols=80 is too wide for proper wrapping preview):
    var commentElem= document.getElementById("comment");
	if (commentElem) {
	    commentElem.setAttribute("rows", "10");
//	    commentElem.setAttribute("cols", "79");
	    commentElem.setAttribute("onFocus", "this.rows=25");
	}

	var detailsRegex= /attachment\.cgi\?id=(\d+)&action=edit/; // attachment.cgi?id=146395&amp;action=edit
	
	// Another Commit button on top of Additional Comments field
    if (window.location.href.search(detailsRegex) == -1) { // attachment.cgi is used for 3 purposes: add new, edit details, result after adding
		var labels= document.getElementsByTagName("label");
		for (var i= 0; i < labels.length; i++) {
		    var labelElem= labels[i];
		    if (labelElem.getAttribute("for") == "comment") {
			    var commitElem= document.createElement("button");
			    commitElem.setAttribute("type", "submit");
			    commitElem.setAttribute("class", "knob-buttons");
			    commitElem.innerHTML= "Sa<u>v</u>e Changes";
			    commitElem.setAttribute("accesskey", "v");
			    labelElem.parentNode.insertBefore(commitElem, labelElem.nextSibling.nextSibling);
		    }
		}
	}
	
	// Move "Expand / Collapse All" away to avoid interfering with selections in the comments section:
	var bz_collapse_expand_commentsElems= document.getElementsByClassName("bz_collapse_expand_comments")
	if (bz_collapse_expand_commentsElems.length > 0) {
		var bz_group_visibility_sectionElems= document.getElementsByClassName("bz_group_visibility_section")
		if (bz_group_visibility_sectionElems.length > 0) {
			bz_collapse_expand_commentsElems[0].setAttribute("style", "padding-top: 4em;");
			bz_group_visibility_sectionElems[0].parentNode.appendChild(bz_collapse_expand_commentsElems[0]);
		}
	}
	
	// Loop over <a>s:
	var anchors= document.getElementsByTagName("a");
	var diffRegex   = /attachment\.cgi\?id=(\d+)&action=diff/;
	var commentIdRegex= /^c(\d+)$/; // c42
	var commentRegex= /^show_bug\.cgi\?id=(\d+)#c(\d+)$/;
	var bugrefRegex = /show_bug\.cgi\?id=(\d+)/;
	for (var i= 0; i < anchors.length; i++) {
	    var aElem= anchors[i];
	    var aElemHref= aElem.getAttribute("href");
	    if (!aElemHref)
	        continue;
	    
	    // Fix attachment link (revert the new Bugzilla 3.6 "feature" that shows fancy patch viewer but kills copy/paste of patch into Eclipse):
	    if (aElem.name.substr(0, 7) == "attach_" && aElemHref.match(diffRegex)) {
	        aElem.setAttribute("href", aElemHref.replace(diffRegex, "attachment.cgi?id=$1"))
	        
	        // Add [diff] after [details] in attachment references:
	        var diffElem= document.createElement("a");
	        diffElem.textContent= "[diff]";
	        diffElem.href= aElemHref.replace(diffRegex, "attachment.cgi?id=$1&action=diff");
	        aElem.parentNode.appendChild(document.createTextNode(" "));
	        aElem.parentNode.appendChild(diffElem);
	        i+= 2; //skip [details] and new anchor
	    
	    // Change "Comment 42" to ">bug 170000 comment 42<" (simplifies copy/paste of reference):
	    } else if (aElemHref.match(commentRegex) && aElem.parentNode.getAttribute("class") == "bz_comment_number") {
	        aElem.textContent= "comment " + commentIdRegex.exec(aElem.parentNode.parentNode.parentNode.id)[1];
	        
	        var pre= document.createTextNode("bug " + bugId + " ");
	        aElem.parentNode.insertBefore(pre, aElem);
	        i+= 1;
	        
	    // Remove link in bug header to allow easy copying of bug number
	    } else if (aElemHref.match(bugrefRegex)) {
	        if (aElem.parentNode.getAttribute("class") == "bz_alias_short_desc_container edit_form") {
	            var pre= document.createTextNode("bug " + bugId);
	            aElem.parentNode.insertBefore(pre, aElem);
	            aElem.parentNode.removeChild(aElem);
            }
        
	    // Turn "Add comment" link into a button
	    } else if (aElem.parentNode.getAttribute("class") == "bz_add_comment") {
	        var buttonElem= document.createElement("button");
	        buttonElem.setAttribute("onclick", aElem.getAttribute("onclick"));
	        buttonElem.textContent= aElem.textContent;
	        aElem.parentNode.replaceChild(buttonElem, aElem);
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
