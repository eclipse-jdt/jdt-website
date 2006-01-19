<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT Core / Release Candidate 1 : Testing Plan";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.1, RC1";
	$pageAuthor		= "JDT/Core Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<p>Release Candidate 0 test plan is available <a href="test-rc0.php">here</a>..
	      <br/>Release Candidate 2 test plan is available <a href="test-rc2.php">here</a>.
	      <br/>Release Candidate 3 test plan is available <a href="test-rc3.php">here</a>.</p>
		<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Verify all 3.1RC1 fixes (Olivier, Maxime, Frederic, David)</b>
      <ul>
        <li> already <a href="http://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&amp;short_desc=&amp;product=JDT&amp;component=Core&amp;target_milestone=3.1+RC1&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=anywords&amp;keywords=&amp;bug_status=VERIFIED&amp;emailassigned_to1=1&amp;emailtype1=substring&amp;email1=&amp;emailreporter2=1&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;changedin=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;namedcmd=1.0.x&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">verified</a>
        </li>
        <li> remaining <a href="http://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&amp;short_desc=&amp;product=JDT&amp;component=Core&amp;target_milestone=3.1+RC1&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=anywords&amp;keywords=&amp;bug_status=RESOLVED&amp;resolution=FIXED&amp;emailassigned_to1=1&amp;emailtype1=substring&amp;email1=&amp;emailreporter2=1&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;changedin=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;namedcmd=1.0.x&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">unverified</a>
        </li>
      </ul>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>3.0 backward compatibility (David</b><b>)</b>
      <ul>
        <li>ensure we can open a relocated 3.0 dev workspace (search,
build, codeassist, package view, preferences)</li>
        <li>take a 3.1 shared project (using classpath enhancements
such as access rules or classpath attributes</li>
        <li>check persisted classpath variables/containers are still
rebound properly
        </li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Performance (Frederic)</b>
      <ul>
        <li>check behavior of startup when previous session was
interrupted abruptely, or was exited before indexing was finished</li>
        <li>immediately exit after startup, is shutdown performing
unnecessary work ?</li>
      </ul>
 <hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Access Restrictions (David, Olivier)</b>
      <ul>
        <li>setup custom access rules, using both exported entries and combine semantics.</li>
        <li>check that reconciler and builder diagnostics are consistent</li>
        <li>check codeassist filtering/depreciating restricted proposals</li>
        <li>combinations of access restrictions with other classpath
complexity: exclusion/inclusion patterns, multiple output folders,
linked folders: check package view rendering, delta issued </li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>DOM AST (Frederic)</b>
      <ul>
        <li>challenge it trying various refactoring actions on corner
cases and source with errors</li>
        <li>use AST view to control produced tree</li>
        <li>challenge DOM AST near capture conversion</li>
        <li>ensure package-info support is fine</li>
        <li>verify @SuppressWarnings is effective in DOM diagnostics</li>
      </ul>
 <hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Search (Frederic)</b>
      <ul>
        <li>check memory/performance scaling when lots of potential
matches (e.g. references to #add())</li>
        <li>check inaccurate matches (too many/not enough)</li>
        <li>check generic matches: equivalent/exact/erasure</li>
        <li>check indexer crash recovery </li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Incremental Compilation (Kent)</b>
      <ul>
        <li>check consistency between clean vs. incremental build near
generics
        </li>
        <li>check all dependency info is around, not too much
        </li>
        <li>check handling of cancel, core exception</li>
        <li>check problem count accuracy
        </li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>CodeAssist/CodeSelect (Jerome)</b>
      <ul>
        <li>inside parameterized type arguments, when empty prefix
should propose parameterized type back</li>
        <li>assist inside annotations</li>
        <li>no more type proposal on empty token</li>
        <li>challenge new behavior to ensure nothing is missing in
corner situations</li>
        <li>check resolved keys in completion proposals</li>
        <li>control codeselect handling of 1.5 constructs</li>
        <li>control resolved key surfaced by hover selection</li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Type Hierarchies (Jerome)</b>
      <ul>
        <li>missing types</li>
        <li>fault-tolerance to abort compilation errors</li>
        <li>check amount of resolution (more than supertypes?)</li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Startup (Jerome)</b>
      <ul>
        <li>check normal restart case (no change in workspace since
last proper shutdown)</li>
        <li>check restart after crash</li>
        <li>check restart of 3.0 workspace</li>
        <li>check restart of workspace where external JARs did change
        </li>
        <li>check progress issues if user manually invokes openType
dialog while heavy scenario
        </li>
        <li>check restart of monster workspace
        </li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>J2SE 5.0 (Philippe, Maxime)</b>
      <ul>
        <li>check unchecked warnings</li>
        <li>check raw conversion</li>
        <li>check assignment conversion</li>
        <li>check error messages: readability, context (show generic
vs. parameterized type)</li>
      </ul>
	</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
