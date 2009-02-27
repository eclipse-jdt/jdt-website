<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_3col.php
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
	$pageTitle 		= "JDT/Core tools";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.2";
	$pageAuthor		= "JDT/Core team";
	
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
		<p>Back to <a href="../../dev.php">JDT Core Component Development Resources page</a>.</p>
		<div class="homeitem3col">
			<a name="PURPOSE"></a>
			<h3>Purpose</h3>
			<ul>
				<li>Add to build notes:
					<blockquote>This tool can be used to add a new entry in the build notes. The user simply needs to provide the bug id
					and the tool adds the entry containing the bug description to the buildnotes. If the buildnotes are &quot;closed&quot;, then
					they are reopened automatically. A new action is provided to close them.</blockquote>
				</li>
				<li>Unnecessary NLS tag remover:
					<blockquote>This tool can be used remove unnecessary nls tags. It works on a java project, java package fragment root, java package fragment,
					or a compilation unit.</blockquote>
				</li>
				<li>Position of DOM/AST nodes:
					<blockquote>This tool can be used to check the positions of each DOM/AST nodes and its children. It works on a java project, java package fragment root, java package fragment,
					or a compilation unit.</blockquote>
				</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<a name="NEW"></a>
			<h3>What's new</h3>
			<ul>
			<li>It handles nls tags within commented code</li>
			<li>It handles multiple nls tags</li>
			<li>nls tags are ignored in isolated line comments like:<br>
				<blockquote><code>		...<br/>
					// System.out.println(""); //$NON-NLS-1$<br/>
					...<br/></code>
			  </blockquote>
			</li>
			<li>Other nls comments are reported as unnecessary if they don't match a corresponding string literal</li>
			<li>The tool removes the unnecessary nls tags even if the line comment is used for another comment:
			<blockquote>
			<code>String s = "Hello, World"; //$NON-NLS-1$ don'//$NON-NLS-2$  removed<br/></code>
			</blockquote>
			becomes:
			<blockquote>
			<code>String s = "Hello, World"; //$NON-NLS-1$ don'  removed<br/></code>
			</blockquote>
			</li>
			<li>It also removes the trailing whitespace when the nls tag is the only comment on a line.
			<blockquote>
			<code>String s = null; //$NON-NLS-1$&lt;end of line&gt;<br/></code>
			</blockquote>
			becomes:
			<blockquote>
			<code>String s = null;&lt;end of line&gt;<br/></code>
			</blockquote>
			</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<a name="INSTALL"></a>
			<h3>Install</h3>
				<p>
					Use this update site.<br/>
					<blockquote><a href="http://www.eclipse.org/jdt/core/tools/jdtcoretools/update-site/">http://www.eclipse.org/jdt/core/tools/jdtcoretools/update-sit</a></blockquote>
				</p>
		</div>
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick links</h6>
			<ul>
				<li><a href="#PURPOSE">Purpose</a></li>
				<li><a href="#NEW">What's new</a></li>
				<li><a href="#INSTALL">Install</a></li>
			</ul>
		</div>
	</div>	

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
