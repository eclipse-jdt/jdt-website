<?php																															require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());	# All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "org.eclipse.jdt.jeview - JavaElement View";
	$pageKeywords	= "JavaElement View, JDT/UI, JDT, Java development tools UI, Java, java, development, tools, java ide, Eclipse";
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

		<div class="homeitem3col">
			<a name="purpose"></a>
			<h3>Purpose</h3>
			<p>
				A view to visualize the Java elements in Eclipse's Java model.
				The view shows the result of many method calls on model elements either as children in the tree
				or as entries in the Properties view.<br>
				A few operation on the elements are also available in the context menu and in the view menu.
			</p>

			<a name="install"></a>
			<h3>Install</h3>

			<br>
				<h4>Update Site:</h4>

			<p>
				<ul>
					<li>
						<span style="font-weight: bold;">http://www.eclipse.org/jdt/ui/update-site</span>
					</li>
				</ul>
			</p>

			<h4>Source:</h4>
				<ul>
				<li>
					Source is included in the plugin archives or available via CVS:<br>
					Repository: <code>:pserver:anonymous@dev.eclipse.org:/cvsroot/eclipse</code><br>
					Module: <code>jdt-ui-home/plugins/org.eclipse.jdt.jeview</code>
				</li>
			</ul>

			<br>
			<h4>Manual Install:</h4>
			<p>
				<ul>
					<li>
						for Eclipse 3.7 and higher
						<a href="../update-site/plugins/org.eclipse.jdt.jeview_1.0.8.201103211622.jar">org.eclipse.jdt.jeview_1.0.8.201103211622.jar</a>
						(copy to 'dropins' directory)
					</li>
					<li>
						for Eclipse 3.4 and higher
						<a href="../update-site/plugins/org.eclipse.jdt.jeview_1.0.6.200803121213.jar">org.eclipse.jdt.jeview_1.0.6.200803121213.jar</a>
						(copy to 'dropins' directory)
					</li>
					<li>
						for Eclipse 3.3 and higher
						<a href="../update-site/plugins/org.eclipse.jdt.jeview_1.0.5.200710301359.jar">org.eclipse.jdt.jeview_1.0.5.200710301359.jar</a>
						(copy to 'plugins' directory)
					</li>
				</ul>
			</p>

			<a name="usage"></a>
			<h3>Usage</h3>
			<ol>
				<li>Open the JavaElement View
					<ul>
						<li class="nodash">from the view menu: Window &gt; Show View &gt; Other..., Java &gt; JavaElement View</li>
						<li class="nodash">via shortcut: Alt+Shift+Q, E</li>
						<li class="nodash">from an element selection or from a Java editor via Navigate &gt; Show In &gt; JavaElement View</li>
					</ul>
				</li>
				<li>Open a Java file in the editor</li>
				<li>Click "Set input from current editor's selection (codeSelect)" (<img
		 style="width: 16px; height: 16px;" src="codeSelect.gif" alt="">) to use the resolved element
		 at the current caret location as view input<br>
				</li>
				<li>Click "Set input from current editor's selection location (getElementAt)" (<img
		 style="width: 16px; height: 16px;" src="setfocus.gif" alt="">) to use the element
		 that encloses the current caret location as view input<br>
				</li>
				<li>Use the view menu to create a new Java element from a handle identifier</li>
				<li>Double click an element to show it in the Package Explorer or open it in an editor</li>
				<li>Use Navigate &gt; Show In &gt; ... to show the element somewhere else</li>
				<li>Use context menu &gt; Properties to show non-structural properties of the selected element</li>
				<li>Use the context menu on JAVA PROJECT elements to find a type by name or to create an element out of a binding key</li>
			</ol>

			<br>
			<h4>Comments and Requests</h4>
			<ul>
				<li>Comments to
					<a href="mailto:markus_keller%5Bat%5Dch.ibm.com">markus_keller[at]ch.ibm.com</a>
				</li>
				<li>Bugs / enhancement requests go to the JDT/UI component (preferably with patches;-)</li>
			</ul>


	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
