<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Java Development Tools (JDT) Subproject";
	$pageKeywords	= "JDT, Java, UI, Debug, APT, java, development, tools, java ide, Eclipse";
	$pageAuthor		= "JDT/Core team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
			<h3>About the JDT Subproject</h3>
			<p>The JDT project provides the tool plug-ins that implement a Java IDE 
        supporting the development of any Java application, including Eclipse 
        plug-ins. It adds a Java project nature and Java perspective to the Eclipse 
        Workbench as well as a number of views, editors, wizards, builders, and 
        code merging and refactoring tools. The JDT project allows Eclipse to 
        be a development environment for itself.<br>
        <b><a href="overview.php">More details...</a></b>
			</p>
		</div>
		<div class="homeitem3col">
			<h3>JDT Components</h3>
			<p>The JDT subproject is broken down into components. Each component operates 
      like a project unto its own, with its own set of committers, bug categories 
      and mailing lists.
			</p>
      <table width="100%" border="0">
        <tr> 
          <td width="20%" valign="top"><b>Name</b></td>
          <td width="82%"><b>Description</b></td>
        </tr>
        <tr> 
          <td valign="top" width="20%"><b><a href="http://www.eclipse.org/jdt/apt/index.html" target="_top">APT</a></b></td>
		  <td width="82%">Java 5.0 annotation processing infrastructure</td>
        </tr>
        <tr> 
          <td width="20%" valign="top"><b><a href="http://www.eclipse.org/jdt/core/index.html" target="_top">Core</a></b></td>
          <td width="82%">Java IDE headless infrastructure</td>
        </tr>
        <tr> 
          <td width="20%" valign="top"><b><a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/jdt-debug-home/index.html" target="_top">Debug</a></b></td>
          <td width="82%">Debug support for Java</td>
        </tr>
        <tr> 
          <td width="20%" valign="top"><b><a href="http://www.eclipse.org/jdt/ui/index.html" target="_top">UI</a></b></td>
          <td width="82%">Java IDE User Interface</td>
        </tr>
      </table>
		</div>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
