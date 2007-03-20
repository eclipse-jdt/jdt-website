<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# test-m6.php
	#
	# Author: 		Jerome Lanneluc
	# Date:			2007-03-20
	#
	# Description: M6 test plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT Core / 3.3 Milestone 6 : Testing Plan";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.3, M6";
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
		<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Verify all 3.3M6 fixes (David, Eric, Maxime, Olivier)</b>
<ul>
<li> already <a href="http://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=JDT&component=Core&target_milestone=3.3+M6&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=VERIFIED&emailassigned_to1=1&emailtype1=substring&email1=&emailreporter2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=1.0.x&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">verified</a>
</li>
<li> remaining <a href="http://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=JDT&component=Core&target_milestone=3.3+M6&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=anywords&keywords=&bug_status=RESOLVED&resolution=FIXED&emailassigned_to1=1&emailtype1=substring&email1=&emailreporter2=1&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&namedcmd=1.0.x&newqueryname=&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">unverified</a>
</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Leak testing (Kent, Frederic)</b>
<ul>
<li>take regular snaphots of a development workbench</li>
<li>compare these snapshots to find potential leaks</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Code coverage (Olivier)</b>
<ul>
<li>run code coverage tool to ensure our test suites have a good coverage</li>
<li>report obvious parts of our code that are not covered</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Static analysis (Jerome)</b>
<ul>
<li>run static analysis tool on our code</li>
<li>report potential bugs</li>
</ul><hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>1.5 snippet support (Eric)</b>
<ul>
<li>snippet support for 1.5 may have been left behind</li>
<li>ensure that scrapbook page behaves correctly with 1.5 code</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Scalability (David, Eric)</b>
<ul>
<li>ensure good performance of Java editor on big files (e.g. GenericTypeTests.java) (typing, undo, revert, code assist, format, etc.)</li>
<li>open a monster workspace</li>
<li>paste contents of rt.jar in Java editor</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Backward compatibity (Maxime)</b>
<ul>
<li>ensure 3.2 development workspace behaves correctly when opened with 3.3M6</li>
<li>variant 1: leave the 3.2 workspace with 'Link with Editor' and 1 editor open, restart with 3.3M6</li>
<li>variant 2: leave the 3.2 workspace in the Resources perspective, restart with 3.3M6, switch to the Java perspective</li>
<li>...</li>
</ul>
<hr size="1" />
<IMG src="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE border="0" height="16" width="16">&nbsp;<b>Jar exporter (Olivier)</b>
<ul>
<li>ensure the Jar exporter behaves correctly with the new support introduced in M6</li>
<li>ensure that <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=53284">bug 53284</a> is still fixed</li>
</ul>
</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
