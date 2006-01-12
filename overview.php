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
	$pageTitle 		= "Eclipse Java Development Tools (JDT) Subproject Overview";
	$pageKeywords	= "developer, XML, Java, Web development, Security, e-business";
	$pageAuthor		= "JDT/Core Team";
	
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
		<p>The JDT project contributes 
        a set of plug-ins that add the capabilities of a full-featured Java IDE 
        to the Eclipse platform. The JDT plugins provide APIs so that they can 
        themselves be further extended by other tool builders.<br/>
        The JDT plugins are categorized into:</p>
		<a name="#JDT_APT"></a>
		<h3>JDT APT</h3>
		<p>JDT APT adds annotation processing support to Java 5 projects in Eclipse. It provides the following features:</p>
      <ul>
        <li>Support for running 
          annotation processors written for Sun&#8217;s command-line apt tool</li>
        <li>Contribution of annotation-based 
          build artifacts during incremental build</li>
        <li>Contribution of problem 
          markers for annotation-based problems</li>
      </ul>		<hr size="1" />
		<a name="#JDT_CORE"></a>
		<h3>JDT Core</h3>
		<p>JDT Core defines the non-UI 
        infrastructure. It includes:</p>
      <ul>
        <li>An incremental Java 
          builder</li>
        <li>A Java Model that provides 
          API for navigating the Java element tree. The Java element tree defines 
          a Java centric view of a project. It surfaces elements like package 
          fragments, compilation units, binary classes, types, methods, fields.</li>
        <li>Code assist and code select support</li>
        <li>An indexed based search infrastructure that is used for searching, code assist, type hierarchy 
          computation, and refactoring.</li>
        <li>Evaluation support</li>
      </ul>
      <p>The JDT Core infrastructure 
        has no built-in JDK version dependencies.</p>
		<hr size="1" />
		<a name="#JDT_DEBUG"></a>
		<h3>JDT Debug</h3>
		<p>JDT Debug implements Java 
        debugging support and works with any JDPA-compliant target Java VM. It 
        is implemented on top of the language independent &quot;debug model&quot; 
        provided by the platform debugger. </p>
      <p>JDT debug provides the 
        following debugging features:</p>
      <ul>
        <li>Launching of a Java 
          VM in either run or debug mode</li>
        <li>Attaching to a running 
          Java VM</li>
        <li>Expression evaluation 
          in the context of a stack frame</li>
        <li>Scrapbook pages for 
          interactive Java code snippet evaluation</li>
        <li>Dynamic class reloading 
          where supported by Java virtual machine</li>
      </ul>
		<hr size="1" />
		<a name="#JDT_UI"></a>
		<h3>JDT UI</h3>
		<p>JDT UI implements Java-specific 
        workbench contributions:</p>
      <ul>
        <li>Packages View</li>
        <li>Type Hierarchy View</li>
        <li>Java Outline View</li>
        <li>Wizards for creating 
          Java elements</li>
        <li>Java Editor.&nbsp; </li>
      </ul>
      <p>The Java editor provides 
        the following features:</p>
      <ul>
        <li>Keyword and syntax coloring</li>
        <li>Context specific (Java, 
          Javadoc) code assist and code select</li>
        <li>Method level edit</li>
        <li>Margin annotations for 
          problems, break points, or search matches</li>
        <li>Outliner updating as 
          editing takes place</li>
        <li>API help shows Javadoc 
          specification for selected Java element in a pop-up window</li>
        <li>Import assistance automatically 
          creates and organizes import declarations</li>
        <li>Code formatting</li>
      </ul>
      <p>The JDT UI provides refactoring 
        support like: <i>Extract Method </i>or <i>Safe Rename</i> for Java elements 
        that also updates references. Users can preview (and veto) individual 
        changes stemming from a refactoring operation.</p>
      <p>JDT searching support implements 
        precise searches like find declarations of and/or references to packages, 
        types, methods, and fields, scoped to the workspace, a working set, or 
        the current selection.</p>
      <p>JDT compare support implements 
        a structured compare of Java compilation units showing the changes to 
        individual Java methods. It supports to replace individual Java elements 
        with version of element in the local history.</p>
        <br />
	</div>
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Components</h6>
			<ul>
				<li><a href="#JDT_APT">JDT APT</a></li>
				<li><a href="#JDT_CORE">JDT Core</a></li>
				<li><a href="#JDT_DEBUG">JDT Debug</a></li>
				<li><a href="#JDT_UI">JDT_UI</a></li>
			</ul>
		</div>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
