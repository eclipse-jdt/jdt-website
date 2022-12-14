<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT UI";
	$pageKeywords	= "JDT/UI, JDT, Java development tools UI, Java, java, development, tools, java ide, Eclipse";
	$pageAuthor		= "JDT/UI Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
	$Nav->addCustomNav( "About This Project", "/projects/project_summary.php?projectid=eclipse.jdt.ui", "", 1  );
	# End: page-specific settings
	#
		
ob_start();
?>
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<a name="dev"></a>
			<h3>Development Resources</h3>
			<p>If you are already a JDT UI developer, check out the <a href="dev.php">Development 
			Resources</a>.</p>
			<p>The project summary page contains some
			more <a href="/projects/project_summary.php?projectid=eclipse.jdt.ui">information about eclipse.jdt.ui</a>.</p>
		</div>
		<div class="homeitem3col">
			<a name="jdt ui"></a>
			<h3>JDT UI</h3>
			<p>The JDT UI implements the user interface for the Java
			IDE. It provides several workbench contributions for viewing and
			manipulating Java code:</p>
			<ul>
				<li>Package Explorer View - shows the Java element tree as defined by a
				project's build class path</li>
				<li>Type Hierarchy View - shows the sub- and supertype hierarchies</li>
				<li>Java Outline View - shows the structure of a Java compilation
				unit or class file</li>
				<li>Java Browsing Perspecitve - allows navigating the Java model
				using separate views for projects, packages, types and memebers.</li>
				<li>Wizards for creating Java elements - Java project, package,
				class, interface</li>
				<li>Java Editor - syntax coloring, content specific code assist,
				code resolve, method level edit, import assistance, quick fix and
				quick assist</li>
			</ul>
			<p>In addition to these workbench elements the following functions are
			provided:</p>
			<ul>
				<li>Refactoring support - <i>Extract Method</i>, <i>Safe Rename </i>and
				<i>Moving</i> with reference updates, <i>Self Encapsulate Field</i>
				etc.</li>
				<li>Java searching - find declarations of and/or references to
				packages, types, methods, and fields, scoped to the workspace, a
				working set, or the current selection.</li>
				<li>Java aware structured compare - determine and present changes to
				individual Java methods. It supports to replace individual Java
				elements with a version of an element from the local history.</li>
			</ul>
			<p>
				Take a look at the <a href="screenCasts/index.php">screen casts</a> to see some JDT features like the new Java 7 support and code refactoring in action.
			</p>
		</div>
				<div class="homeitem3col">
			<a name="optional"></a>
			<h3>Optional Plug-ins (maintained by JDT UI)</h3>
				<p>JDT UI contributes some plugins that are not part of
				the Eclipse SDK but can be downloaded from this update site:</p>
				<div style="margin-left: 40px;"><b>http://www.eclipse.org/jdt/ui/update-site/content</b></div>
				<p>Consult the plugin description pages for more information:</p>
				<ul>
					<li><a href="astview/index.php">org.eclipse.jdt.astview</a> - ASTView</li>
					<li><a href="jeview/index.php">org.eclipse.jdt.jeview</a> - JavaElement View</li>
				</ul>
		</div>
		<div class="homeitem3col">
			<a name="involved"></a>
			<h3>Get Involved!</h3>
			<p>If you are interested in participating in the development of the
			JDT UI component, check out the developer's mailing list: <a
				href="http://dev.eclipse.org/mailman/listinfo/jdt-ui-dev">jdt-ui-dev@eclipse.org</a>.
			Chat with people there about your problems and interests, and find
			out what you can do to help.</p>
			<p>If you have a background in the development of user interfaces,
			are interested in making the development and exploration of Java code
			fun, then don't hesitate to contact the JDT UI team. There is
			upcoming work in many areas like the Java editor or refactoring
			support. We need help for implementing many more refactorings.
			However be warned, the refactoring work is done in a strict
			test-first style, so get used to write tests before code!</p>
			<p>For more detailed information, check out the <a href="dev.html">Development
			Resources</a>.</p>
		</div>		
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick links</h6>
			<ul>
				<li><a href="#dev">Development Resources</a></li>
				<li><a href="#jdt ui">JDT UI</a></li>
				<li><a href="#optional">Optional Plug-ins</a></li>				
				<li><a href="#involved">Get Involved!</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
