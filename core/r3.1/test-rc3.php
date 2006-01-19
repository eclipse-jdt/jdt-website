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
	$pageTitle 		= "JDT Core / Release Candidate 3 : Testing Plan";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.1, RC3";
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
	      <br/>Release Candidate 2 test plan is available <a href="test-rc2.php">here</a>.</p>
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Verify all 3.1RC3 fixes (Frederic)</b>
      <ul>
        <li> already <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&component=Core&target_milestone=3.1+RC3&bug_status=VERIFIED">verified</a> </li>
        <li> remaining <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&component=Core&target_milestone=3.1+RC3&bug_status=RESOLVED&resolution=FIXED">unverified</a> </li>
      </ul>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Incremental compiler (Kent)</b>
      <ul>
        <li>ensure external JAR timestamp perform as expected (migration, upgrading, manual changes)</li>
        <li>check amount of incremental recompilation on changes in 1.5 code</li>
        <li>check consistency in diagnostics in between compile against sources vs. compiler against binaries</li>
      </ul>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>1.5 support stress test (David, Olivier)</b>
      <ul>
        <li>construct 1.5 heavy duty workspace with mixed 1.5 sources and binaries (produced with Eclipse)</li>
        <li>perform incremental compilation, check consistency of source and binary compile</li>
        <li>invoke codeassist, codeselect, various refactorings watching the .log for any thrown exception</li>
        <li>try to reformat 1.5 sources: check formatting performs, and good output</li>
        <li>exerce on local/nested/anonymous types</li>
        <li>exerce on generic methods/constructors calls</li>
        <li>exerce on type parameters declarations (with/without wildcards/bounds) and parameterized types arguments</li>
        <li>exerce on static import</li>
        <li>exerce on parameterized types</li>
        <li>control resolved key surfaced by hover selection on 1.5 source/binary code (Sun JDK sources for example)</li>
      </ul>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>JavaModel &amp; Search (Jerome)</b>
      <ul>
        <li>check search in generics: accuracy, performance, footprint</li>
        <li>check model scalability</li>
        <li>check model initialization process: locking situations?</li>
      </ul>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Compiler (Philippe, Maxime)</b>
      <ul>
        <li>check 1.5 semantics on corner situations: generic inference, capture, type conversions</li>
        <li>check status of disabled regression tests</li>
      </ul>
	</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
