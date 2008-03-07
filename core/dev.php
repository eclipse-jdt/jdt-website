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
<td ALIGN=RIGHT VALIGN=TOP WIDTH="2%"><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16></td>
<td WIDTH="98%"><b>Bug resolution</b>
<ul>
<li>
<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&changedin=7&product=JDT&component=Core" >Resolved in the last week</a></li>

<li>
<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&product=JDT&component=CORE" >New, Assigned and Reopened</a>&nbsp;
(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&priority=P1&product=JDT&version=&component=CORE" >priority 1</a>)
(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&product=JDT&component=Core&target_milestone=---" >uncommitted</a>
)
</li>

<li>
<a href="http://dev.eclipse.org/bugs/buglist.cgi?resolution=LATER&product=JDT&component=Core" >Deferred</a></li>

</ul>
</td>
</tr>
  <tr>
    <td align=right valign=top width="2%"><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
    <td width="98%"> <b>How To</b>
      <ul>
        <li><a href="http://help.eclipse.org/help31/topic/org.eclipse.jdt.doc.isv/guide/jdt_api_compile.htm">run the batch compiler</a> </li>
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
        <li><a href="tools/diff/index.php">Diff</a></li>
        <li><a href="tools/internal/index.php">Internal</a></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td align=right valign=top width="2%"><img src="http://dev.eclipse.org/images/Adarrow.gif" border=0 height=16 width=16></td>
    <td width="98%"> <b>Compiler DTD file</b><p>
      The compiler DTD for XML compiler log can be found here: </p>
      <ul>
       <li><a href="compiler_32_001.dtd" type="text/plain">Version 3.2.001 compiler.dtd</a></li>
      </ul>
    </td>
  </tr></table>
		</div>
		<div class="homeitem3col">
			<a name="#RELEASES"></a>
			<h3>Releases</h3>
<p>JDT/Core exists in multiple flavors, depending on which delivery it is part of.</p>
			<table>
<tr>
<td ALIGN=RIGHT VALIGN=TOP WIDTH="2%"><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16></td>
<td WIDTH="98%"><b>R3.4.x (development in progress)</b>
<ul>
<li>Detailed <a href="r3.4/index.php">description</a></li>
<li>Get the official <a href="r3.4/index.php#SOURCES">sources for JDT/Core</a></li>
<li><a href="r3.4/index.php#BUG_RESOLUTION">Bug resolution</a></li>
<li>Available <a href="r3.4/index.php#UPDATES">updates</a></li>
</ul>
</td></tr>

<tr>
<td ALIGN=RIGHT VALIGN=TOP WIDTH="2%"><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16></td>
<td WIDTH="98%"><b>R3.3.x</b>
<ul>
<li>Detailed <a href="r3.3/index.php">description</a></li>
<li>Get the official <a href="r3.3/index.php#SOURCES">sources for JDT/Core</a></li>
<li><a href="r3.3/index.php#BUG_RESOLUTION">Bug resolution</a></li>
<li>Available <a href="r3.3/index.php#UPDATES">updates</a></li>
</ul>
</td></tr>

<tr>
<td ALIGN=RIGHT VALIGN=TOP WIDTH="2%"><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16></td>
<td WIDTH="98%"><b>R3.2.x</b>
<ul>
<li>Detailed <a href="r3.2/index.php">description</a></li>
<li>Get the official <a href="r3.2/index.php#SOURCES">sources for JDT/Core</a></li>
<li><a href="r3.2/index.php#BUG_RESOLUTION">Bug resolution</a></li>
<li>Available <a href="r3.2/index.php#UPDATES">updates</a></li>
</ul>
</td></tr>

<tr>
<td ALIGN=RIGHT VALIGN=TOP WIDTH="2%"><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16></td>
<td WIDTH="98%"><b>R3.1.x</b>
<ul>
<li>Detailed <a href="r3.1/index.php">description</a></li>
<li>Get the official <a href="r3.1/index.php#SOURCES">sources for JDT/Core</a></li>
<li><a href="r3.1/index.php#BUG_RESOLUTION">Bug resolution</a></li>
<li>Available <a href="r3.1/index.php#UPDATES">updates</a></li>
</ul>
</td></tr>

<tr>
<td ALIGN=RIGHT VALIGN=TOP WIDTH="2%"><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16></td>
<td WIDTH="98%"><b>R3.0.x</b>
<ul>
<li>Detailed <a href="r3.0/main.html">description</a></li>
<li>Get the official <a href="r3.0/main.html#source">sources for JDT/Core</a></li>
<li><a href="r3.0/main.html#bugs">Bug</a> resolution</li>
<li>Design <a href="r3.0/main.html#notes">notes</a></li>
<li>Available <a href="r3.0/main.html#updates">updates</a></li>
</ul>
</td></tr>

<tr>
<td ALIGN=RIGHT VALIGN=TOP WIDTH="2%"><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16></td>
<td WIDTH="98%"><b>R2.1.x</b>
<ul>
<li>Detailed <a href="r2.1/main.html">description</a></li>
<li>Get the official <a href="r2.1/main.html#source">sources for JDT/Core</a></li>
<li><a href="r2.1/main.html#bugs">Bug</a> resolution</li>
<li>Design <a href="r2.1/main.html#notes">notes</a></li>
<li>Available <a href="r2.1/main.html#updates">updates</a></li>
</ul>
</td></tr>

<tr>
<td ALIGN=RIGHT VALIGN=TOP WIDTH="2%"><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16></td>
<td WIDTH="98%"><b>R2.0.x</b>
<ul>
<li>Detailed <a href="r2.0/main.html">description</a></li>
<li>Get the official <a href="r2.0/main.html#source">sources for JDT/Core</a></li>
<li><a href="r2.0/main.html#bugs">Bug</a> resolution</li>
<li>Design <a href="r2.0/main.html#notes">notes</a></li>
<li>Available <a href="r2.0/main.html#updates">updates</a></li>
<li><a href="r2.0/main.html#maintenance">Maintenance</a> effort</li>
</ul>
</td></tr>

<tr>
<td ALIGN=RIGHT VALIGN=TOP WIDTH="2%"><img SRC="http://dev.eclipse.org/images/Adarrow.gif" NOSAVE BORDER=0 height=16 width=16></td>
<td WIDTH="98%"><b>R1.0.x </b>
<ul>
<li>Some <a href="r1.0/main.html">description</a></li>
<li>Get the official <a href="r1.0/main.html#source">sources for JDT/Core</a></li>
<li>Available <a href="r1.0/main.html#updates">updates</a></li>
</ul>
</td></tr>
			</table>
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
