<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# test-3.3.1.php
	#
	# Author: 		Jerome Lanneluc
	# Date:			2007-09-05
	#
	# Description: 3.3.1 test plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT Core / 3.3.1 : Testing Plan";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.3.1";
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
<!--		<p>Release Candidate 1 test plan is available <a href="test-rc1.php">here</a>.
	      <br/>Release Candidate 2 test plan is available <a href="test-rc2.php">here</a>.
	      <br/>Release Candidate 3 test plan is available <a href="test-rc3.php">here</a>.</p>
-->	      
		<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Verify all 3.3.1 fixes (David, Eric, Maxime, Olivier, Jerome)</b>
<ul>
<li> already <a href="http://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=JDT&component=Core&target_milestone=3.3.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=VERIFIED&emailassigned_to1=1&emailtype1=substring&email1=&emailreporter2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=1.0.x&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">verified</a>
</li>
<li> remaining <a href="http://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=JDT&component=Core&target_milestone=3.3.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailassigned_to1=1&emailtype1=substring&email1=&emailreporter2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=1.0.x&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">unverified</a>
</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Method override testing (Kent, Frederic)</b>
<ul>
<li>test various scenarios of method overriding (see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=194034"> bug 194034>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=195468"> bug 195468>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=195802"> bug 195802> for example)</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Europa (Eric, David)</b>
<ul>
<li>patch Europa with JDT/Core 3.3.1</li>
<li>run with this setup</li>
<li>ensure we behave the same (or even better)</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Formatter with exotic characters (Maxime, David)</b>
<ul>
<li>ensure that the formatter behaves correctly when the source contains exotic characters (e.g. <code>&#064;</code> in a Javadoc comment)</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Search in 1.4 project with 1.5 library(Jerome, Maxime)</b>
<ul>
<li>ensure that the behavior of Java search is acceptable (no NPE) when searching in a 1.4 project that has 1.5 libraries on its classpath</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Backward compatibity (Olivier, Jerome)</b>
<ul>
<li>ensure 3.2 development workspace behaves correctly when opened with 3.3.1</li>
<li>variant 1: leave the 3.2 workspace with 'Link with Editor' and 1 editor open, restart with 3.3.1</li>
<li>variant 2: leave the 3.2 workspace in the Resources perspective, restart with 3.3.1, switch to the Java perspective</li>
<li>...</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>User libraries (Olivier, Eric)</b>
<ul>
<li>have several projects in the workspace</li>
<li>add/remove user library</li>
<li>shutdown/restart, ensure user libraries are still present</li>
</ul>
</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
