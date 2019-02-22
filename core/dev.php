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
	$pageTitle 		= "JDT Core Component Development Resources";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, development";
	$pageAuthor		= "JDT/Core team";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
ob_start();
?>

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<p>Back to <a href="index.php">JDT/Core main page</a>.</p>
		<div class="homeitem3col">
			<a name="#CURRENT"></a>
			<h3>Current development</h3>
			<p>Here are listed links to information about the current development stream (HEAD).</p>
			<table>
			  <tr>
</tr>
  <tr>
    <td align=right valign=top width="2%"><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
    <td width="98%"> <b>How To</b>
      <ul>
        <li><a href="http://help.eclipse.org/helios/index.jsp?topic=/org.eclipse.jdt.doc.isv/guide/jdt_api_compile.htm">run the batch compiler</a> </li>
        <li><a href="howto/generate%20parser/generateParser.html">generate the parser</a> </li>
      </ul>
    </td>
  </tr>
  <tr>
    <td align=right valign=top width="2%"><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
    <td width="98%"> <b>Plugins</b><p>The JDT Core component consists of the following plug-ins:</p>
      <ul>
        <li><a href="http://www.eclipse.org/jdt/core/index.php" >org.eclipse.jdt.core</a></li>
      </ul>
      <h4>Main Plug-ins:</h4>
			<ul>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.core/">org.eclipse.jdt.core</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.annotation/">org.eclipse.jdt.annotation</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.annotation_v1/">org.eclipse.jdt.annotation_v1</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.apt.core/">org.eclipse.jdt.apt.core</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.apt.pluggable.core/">org.eclipse.jdt.apt.pluggable.core</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.apt.ui/">org.eclipse.jdt.apt.ui</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.compiler.apt/">org.eclipse.jdt.compiler.apt</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.compiler.tool/">org.eclipse.jdt.compiler.tool</a></li>
			</ul>
			<br>
			<h4>Tests:</h4>
			<ul>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.apt.pluggable.tests/">org.eclipse.jdt.apt.pluggable.tests</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.apt.tests/">org.eclipse.jdt.apt.tests</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.compiler.apt.tests/">org.eclipse.jdt.compiler.apt.tests</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.compiler.tool.tests/">org.eclipse.jdt.compiler.tool.tests</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.core.tests.builder/">org.eclipse.jdt.core.tests.builder</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.core.tests.compiler/">org.eclipse.jdt.core.tests.compiler</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.core.tests.model/">org.eclipse.jdt.core.tests.model</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.core.git/tree/org.eclipse.jdt.core.tests.performance/">org.eclipse.jdt.core.tests.performance</a></li>
			</ul>
			<br>
			<h4>Documentation:</h4>
			<ul>
				<li><a href="http://git.eclipse.org/c/platform/eclipse.platform.common.git/tree/bundles/org.eclipse.jdt.doc.user/">org.eclipse.jdt.doc.user</a></li>
				<li><a href="http://git.eclipse.org/c/platform/eclipse.platform.common.git/tree/bundles/org.eclipse.jdt.doc.isv/">org.eclipse.jdt.doc.isv</a></li>
			</ul>
    </td>
  </tr>
  <tr>
    <td align=right valign=top width="2%"><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
    <td width="98%"> <b>Mailing Lists</b>
      <ul>
        <li><a href="http://dev.eclipse.org/mailman/listinfo/jdt-core-dev">jdt-core-dev@eclipse.org</a>
          (<a href="mailto:jdt-core-dev@eclipse.org">post</a>, <a href="http://dev.eclipse.org/mhonarc/lists/jdt-core-dev/maillist.html">archives</a>)</li>
      </ul>
    </td>
  </tr>
  <tr>
    <td align=right valign=top width="2%"><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
    <td width="98%"> <b>FAQ</b>
      <ul>
        <li><a href="http://wiki.eclipse.org/JDT_Core_Committer_FAQ">JDT Core Committer FAQ</a></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td align=right valign=top width="2%"><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
    <td width="98%"> <b>Additional tools</b><p>
      Here are tools provided as a courtesy of JDT Core Team:</p>
      <ul>
        <li><a href="tools/jdtcoretools/index.php">JDT/Core utilities</a></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td align=right valign=top width="2%"><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
    <td width="98%"> <b>Compiler DTD file</b><p>
      The compiler DTD for XML compiler log can be found here: </p>
      <ul>
       <li><a href="compiler_32_006.dtd" type="text/plain">Version 3.2.006 compiler.dtd</a></li>
      </ul>
    </td>
  </tr></table>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick links</h6>
			<ul>
				<li><a href="#CURRENT">Current Development</a></li>
				<li><a href="#RELEASES">Releases</a></li>
			</ul>
		</div>
	</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
