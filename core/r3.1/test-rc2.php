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
	$pageTitle 		= "JDT Core / Release Candidate 2 : Testing Plan";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.1, RC2";
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
	      <br/>Release Candidate 1 test plan is available <a href="test-rc1.php">here</a>.
	      <br/>Release Candidate 3 test plan is available <a href="test-rc3.php">here</a>.</p>
		<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Verify all 3.1RC2 fixes (Olivier, Maxime, Frederic, David)</b>
      <ul>
        <li> already <a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&amp;short_desc=&amp;product=JDT&amp;component=Core&amp;target_milestone=3.1+RC2&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=anywords&amp;keywords=&amp;bug_status=VERIFIED&amp;emailassigned_to1=1&amp;emailtype1=substring&amp;email1=&amp;emailreporter2=1&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;changedin=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;namedcmd=1.0.x&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">verified</a>
        </li>
        <li> remaining <a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&amp;short_desc=&amp;product=JDT&amp;component=Core&amp;target_milestone=3.1+RC2&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=anywords&amp;keywords=&amp;bug_status=RESOLVED&amp;resolution=FIXED&amp;emailassigned_to1=1&amp;emailtype1=substring&amp;email1=&amp;emailreporter2=1&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;changedin=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;namedcmd=1.0.x&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">unverified</a>
        </li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Miscellaneous (Jerome, Kent, Maxime)</b>
      <ul>
        <li>check persisted classpath variables/containers are still rebound properly while opening workspace from previous version/milestones or exporting/importing preferences</li>
        <li>check access restrictions with file extension work properly</li>
        <li>hierarchy refresh while saving editor</li>
        <li>exerce formatter with static local/nested classes</li>
        <li>usage of external jar (tools.jar for example) with 1.5 code
        </li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>DOM AST (Olivier, David)</b>
      <ul>
        <li>challenge it on 1.5 source/binary code (Sun JDK sources for example)</li>
        <li>use AST view to control produced tree</li>
        <li>verify @SuppressWarnings is effective in DOM diagnostics</li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Search (Frederic)</b>
      <ul>
        <li>check refactoring on generic methods in generic/non-generic classes</li>
        <li>check declarations/references to invalid method (ie. with compiler error)</li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>CodeAssist/CodeSelect (David)</b>
      <ul>
        <li>exerce on local/nested/anonymous types</li>
        <li>exerce on generic methods/constructors calls</li>
        <li>exerce on type parameters declarations (with/without wildcards/bounds) and parameterized types arguments
        </li>
        <li>exerce on static import</li>
        <li>exerce on parameterized types</li>
        <li>control resolved key surfaced by hover selection on 1.5 source/binary code (Sun JDK sources for example)</li>
      </ul>
<hr size="1" />
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Compiler (Olivier, Philippe, Maxime)</b>
      <ul>
        <li>verify new defaults for fields/local var hiding + unused local/private (specially with anonymous)
        </li>
        <li>verify ambigous warning for generic methods in generic/non-generic types
        </li>
        <li>verify bound check in corner cases
        </li>
        <li>verify enum switch in corner cases</li>
        <li>verify nested types with 1.5 code (annotation/interface/static/ etc...)</li>
        <li>verify generic types cast</li>
        <li>check raw warnings</li>
        <li>check status of disabled regression tests</li>
      </ul>
	</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
