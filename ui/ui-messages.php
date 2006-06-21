<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Common Problems in Message Strings";
	$pageKeywords	= "JDT/UI, JDT, Java Development Tooling UI, Java, java, development, tools, java ide, Eclipse";
	$pageAuthor		= "JDT/UI Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
ob_start();
?>
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		
		<ul>
		  <li>use active voice instead of passive voice.</li>
		  <li>can&#8217;t &#8211;&gt; cannot</li>
		  <li>may not &#8211;&gt; cannot
		    <ul>
		      <li>selection cannot be empty.</li>
		    </ul>
		  </li>
		  <li>must not &#8211;&gt; cannot</li>
		  <li>must be [saved] &#8211;&gt; have to be
		    <ul>
		      <li>You have to save the .. (according to MS)</li>
		    </ul>
		  </li>
		  <li>Verbs: 
		    <ul>
		      <li>'click' for buttons</li>
		      <li>'press' for keyboard</li>
		      <li>'type' for words</li>
		    </ul>
		  </li>
		  <li>Do not end with a preposition
		    <ul>
		      <li>No packages to choose from -&gt; Cannot find packages to select.</li>
		    </ul>
		  </li>
		  <li>Ambiguity:
		    <ul>
		      <li>The following modified resources must be saved to continue.\n Press OK
		        to confirm or Cancel otherwise. -&gt;<br>&nbsp;&nbsp;
		        The following modified resources have to be saved to continue.\n Click
		        OK to confirm or click Cancel. </li>
		      <li>The package must exist -&gt;<br>&nbsp;&nbsp;
		        This package does not exist</li>
		      <li>If you want to proceed, please press 'Next' or 'Finish'. -&gt;<br>&nbsp;&nbsp;
		        Click 'Next' to view the next item or 'Finish'.</li>
		      <li>Searches and selects the given package. -&gt;<br>&nbsp;&nbsp;
		        Searches for and selects the package entered.</li>
		      <li>Control how text is automatically modified while typing -&gt;<br>&nbsp;&nbsp;
		        Select options for automatic text modifications</li>
		      <li>Correct package declaration -&gt;<br>&nbsp;&nbsp;
		        The package declaration needs to be corrected.</li>
		    </ul>
		  </li>
		</ul>

	</div>
	
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
