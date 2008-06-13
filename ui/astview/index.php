<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "org.eclipse.jdt.astview - AST View";
	$pageKeywords	= "JDT/UI, JDT, Java development tools UI, Java, java, development, tools, java ide, Eclipse";
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
				A view to visualize the AST (abstract syntax tree) of a Java
				file open in the editor. Navigate from text selection to AST nodes and
				from nodes to selections. Show bindings and compare them.<br>
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
			
			<br>
			<h4>Manual Install:</h4>
			<p>
				<ul>
					<li>
						for Eclipse 3.4 M6 and higher
						<a href="../update-site/plugins/org.eclipse.jdt.astview_1.1.6.200803260035.jar">org.eclipse.jdt.astview_1.1.6.200803260035.jar</a>
						(copy to 'dropins' directory)
					</li>				
					<li>
						for Eclipse 3.4 M3 and higher
						<a href="../update-site/plugins/org.eclipse.jdt.astview_1.1.5.200710301359.jar">org.eclipse.jdt.astview_1.1.5.200710301359.jar</a>
						(copy to 'plugins' directory)
					</li>				
					<li>
						for Eclipse 3.3.*:
						<a href="../update-site/plugins/org.eclipse.jdt.astview_1.1.4.jar">org.eclipse.jdt.astview_1.1.4.jar</a>
						(copy to 'plugins' directory)
					</li>
					<li>
						for Eclipse 3.2.*:
						<a href="../update-site/plugins/org.eclipse.jdt.astview_1.1.3.jar">org.eclipse.jdt.astview_1.1.3.jar</a>
						(copy to 'plugins' directory)
					</li>
					<li>
						for Eclipse 3.1.*:
						<a href="../update-site/plugins/org.eclipse.jdt.astview_1.0.10.jar">org.eclipse.jdt.astview_1.0.10.jar</a>
						(copy to 'plugins' directory)
					</li>
					<li>
						for Eclipse 3.0.*:
						<a href="org.eclipse.jdt.astview_1.0.1.zip">org.eclipse.jdt.astview_1.0.1.zip</a>
						(<i>extract</i> into 'plugins' directory)
					</li>
				</ul>
			</p>
  
			<a name="usage"></a>
			<h3>Usage</h3>
			<p>
		      <ol>
		        <li>Open the AST view
				  <ul>
				    <li class="nodash">from the view menu: Window &gt; Show View &gt; Other..., Java &gt; AST View</li>
				    <li class="nodash">via shortcut: Alt+Shift+Q, A</li>
				  </ul>
                </li>
		        <li>Open a Java file in the editor</li>
		        <li>Click on 'Show AST of active editor' (<img
		 style="width: 16px; height: 16px;" src="setfocus.gif" alt=""> ) to
		populate the view: The view shows the AST of the file opened in the
		editor and will also reveal the element corresponding to the current
		text selection<br>
		        </li>
		        <li><font color="#000000">Enable 'Link with editor' (</font><img
		 style="width: 16px; height: 16px;" src="synced.gif" alt="">) to
		automatically track the active editor and the selection in the active
		editor.<br>
		        </li>
		        <li>Double click on AST nodes to get the corresponding element
		revealed in the editor.</li>
		        <li>Double click again to see the 'extended range' of a node,
		that means the range including all comments associated with it (comment
		mapper heuristic).</li>
		        <li>Open the context menu on a binding to add it to the comparison tray</li>
		        <li>When the AST's underlying document has been changed use
		'Refresh' (<img style="width: 16px; height: 16px;" src="refresh.gif"
		 alt="">)&nbsp; to update the AST.<br>
		        </li>
		      </ol>
			</p>
      
      
			<h4>AST View Elements</h4>
			<p>The AST view shows the following nodes:<br>
				<img alt="AST View" src="view.gif"></p>
			<ul>
				<li>AST nodes are shown in gray color and with source range
				information. Children of AST nodes are the node properties.<br>
				</li>
				<li>node properties have names that are all all capitalized.
				Node properties represent lists of child nodes, a child node or a
				primitive node attribute (String, int or boolean)<br>
				</li>
				<li>bindings are shown in blue. Only selected bindings are
				shown</li>
			</ul>
			
			<br>
			<h4>Advanced Features</h4>
			<ul>
				<li>You can toggle between the AST Level 2 and AST level 3 in
				the view menu (triangle). AST level 3 is the extended and modified AST
				that includes the new 5.0 language constructs. Note that the AST level
				3 is only available in 3.1 and later builds
				</li>
				<li>You can choose to show or hide bindings in the view menu
				</li>
				<li>You can choose the method to generate an AST in 'Advance Options' in the view menu
				</li>
				<li>You can choose 'Add to Comparison Tray' in the context menu of a binding.
				This moves the binding to a special area in the view. When you select another binding
				in the tree, the comparison tray shows various relationships between the selection
				and the chosen binding
				</li>
			</ul>
				
				
			<br>
			<h4>Comments and Requests</h4>
			<ul>
				<li>
					Source is included in the plugin archive or available via CVS:<br>
					Repository: <code>:pserver:anonymous@dev.eclipse.org:/cvsroot/eclipse</code><br>
					Module: <code>jdt-ui-home/plugins/org.eclipse.jdt.astview</code>
				</li>
				<li>Comments to
					<a href="mailto:Martin_Aeschlimann%5Bat%5Dch.ibm.com">Martin_Aeschlimann[at]ch.ibm.com</a>
				</li>
			</ul>
			
			<p>
				Thanks and credits go to Christian Hauser: The current AST view plugin
				is based his AST view implementation from the Zuerich Code Camp. Thanks
				a lot!<br>
				Markus Keller has helped absorbing AST changes and implemented more features.
			</p>

	</div>
	
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	
# workaround for bug 148047:
	$App->AddExtraHtmlHeader("<style type=\"text/css\">
.homeitem3col ol li {
	list-style-image: none;
}
</style>");
# end of workaround

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
