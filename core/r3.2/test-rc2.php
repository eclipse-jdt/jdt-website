<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# test-rc2.php
	#
	# Author: 		JDT Core team
	# Date:			2006-05-02
	#
	# Description: 3.2 RC2 test plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT Core / Release Candidate 2 : Testing Plan";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.2, RC2";
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
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Check presence of uncategorized problems (Jerome)</b>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Incremental compile in source 1.5 mode (Frederic)</b>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Source 1.4 compiled against 1.5 JRE (Frederic)</b>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Check no performance regression since RC1 (Frederic)</b>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Verify all 3.2RC2 fixes (Olivier)</b>
      <ul>
        <li> already <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&component=Core&target_milestone=3.2+RC2&bug_status=VERIFIED">verified</a> </li>
        <li> remaining <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&component=Core&target_milestone=3.2+RC2&bug_status=RESOLVED&resolution=FIXED">unverified</a> </li>
      </ul>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Check resilience of type hierarchies against problem types (Frederic/Jerome)</b>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Corner cases for statement recovery (David)</b>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Resilience to huge files (Jerome)</b>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Challenge generic inheritance and override semantics (Kent/Olivier)</b>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Challenge new CamelCase (NuPoEx) in open type/search/code assist (Jerome)</b>
<hr size="1" />
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Check source line numbers when stepping in debugger (Olivier)</b>
<hr size="1" />
	</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
