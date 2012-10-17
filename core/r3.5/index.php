<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		JDT Core team
	# Date:			2007-09-12
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT Core R3.5.x";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.5";
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
		<p>Back to <a href="../dev.php">Development Resources</a>.</p>
		<div class="homeitem3col">
			<a name="HAPPENING"></a>
			<h3>What&#8217;s Happening?</h3>
			<p>The JDT/Core 3.5 plan can now be found <a href="http://www.eclipse.org/jdt/core/r3.5/plan.php">here</a>.
			</p>
	
		</div>

		<div class="homeitem3col">
			<a name="BUG_RESOLUTION"></a>
			<h3>Bug Resolution</h3>
      <ul>
		<li>Overall R3.5, 2009/06/?? : 
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5&amp;target_milestone=3.5+M1&amp;target_milestone=3.5+M2&amp;target_milestone=3.5+M3&amp;target_milestone=3.5+M4&amp;target_milestone=3.5+M5&amp;target_milestone=3.5+M6&amp;target_milestone=3.5+M7&amp;target_milestone=3.5+RC1&amp;target_milestone=3.5+RC2&amp;target_milestone=3.5+RC3&amp;target_milestone=3.5+RC4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5&amp;target_milestone=3.5+M1&amp;target_milestone=3.5+M2&amp;target_milestone=3.5+M3&amp;target_milestone=3.5+M4&amp;target_milestone=3.5+M5&amp;target_milestone=3.5+M6&amp;target_milestone=3.5+M7&amp;target_milestone=3.5+RC1&amp;target_milestone=3.5+RC2&amp;target_milestone=3.5+RC3&amp;target_milestone=3.5+RC4">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5&amp;target_milestone=3.5+M1&amp;target_milestone=3.5+M2&amp;target_milestone=3.5+M3&amp;target_milestone=3.5+M4&amp;target_milestone=3.5+M5&amp;target_milestone=3.5+M6&amp;target_milestone=3.5+M7&amp;target_milestone=3.5+RC1&amp;target_milestone=3.5+RC2&amp;target_milestone=3.5+RC3&amp;target_milestone=3.5+RC4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5&amp;target_milestone=3.5+M1&amp;target_milestone=3.5+M2&amp;target_milestone=3.5+M3&amp;target_milestone=3.5+M4&amp;target_milestone=3.5+M5&amp;target_milestone=3.5+M6&amp;target_milestone=3.5+M7&amp;target_milestone=3.5+RC1&amp;target_milestone=3.5+RC2&amp;target_milestone=3.5+RC3&amp;target_milestone=3.5+RC4">resolved</a>)
        </li>
		<li>Milestone 1, 2008/08/08 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+M1&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+M1&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M1">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M1">resolved</a>)
        </li>
		<li>Milestone 2, 2008/09/19 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+M2&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+M2&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M2">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M2">resolved</a>)
        </li>
		<li>Milestone 3, 2008/10/31 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+M3&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+M3&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M3">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M3">resolved</a>)
        </li>
		<li>Milestone 4, 2008/12/12 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+M4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+M4&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M4">resolved</a>)
        </li>
		<li>Milestone 5, 2009/01/30 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+M5&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+M5&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M5">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M5">resolved</a>)
        </li>
		<li>Milestone 6, 2009/03/13 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+M6&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+M6&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M6">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M6">resolved</a>)
        </li>
		<li>Milestone 7, 2009/05/01 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+M7&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+M7&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M7">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+M7">resolved</a>)
        </li>
		<li>Release Candidate 1, 2009/05/?? :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+RC1&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC1&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC1">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC1">resolved</a>)
        </li>
		<li>Release Candidate 2, 2009/05/?? :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+RC2&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC2&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC2">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC2">resolved</a>)
        </li>
		<li>Release Candidate 3, 2009/05/?? :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+RC3&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC3&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC3">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC3">resolved</a>)
        </li>
		<li>Release Candidate 4, 2009/06/?? :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.5+RC4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC4&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.5+RC4">resolved</a>)
        </li>
      </ul>
		</div>
		<div class="homeitem3col">
			<a name="UPDATES"></a>
			<h3>Updates</h3>
			<p>These patches are not yet part of any official release or rollup; but provide an early access to the next delivery for
			   quality assessment. If you find any regression using these patches, please inform the JDT/Core team by entering a 
			   <a href="http://dev.eclipse.org/bugs/">bug report</a>
			</p>
<!--
			<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Batch compiler</b>
      <table>
          <tr>
			<td valign="top">
						     <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Binary)</td>
			<td valign="top">posted on 2006/05/09, 1,24 MB (click on picture)</td>
          </tr>
          <tr>
			<td valign="top">
						     <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Source)</td>
			<td valign="top">posted on 2006/05/09, 1,0 MB (click on picture)</td>
           </tr>         
           <tr>
			<td valign="top"><i>extracted from</i></td>
			<td valign="top">build 3.3RC3</td>
          </tr>
          </tr>
	  </table>
			<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>3.3 integration preview </b>
      <table>
          <tr>
			<td valign="top">
						     <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20"></td>
			<td valign="top">posted on 2006/04/05, 3.78 MB (click on picture)</td>
          </tr>
          <tr>
			<td valign="top"><i>applies to</i></td>
			<td valign="top">build 3.3M6</td>
          </tr>
          <tr>
			<td valign="top"><i>description</i> </td>
			<td valign="top">Early preview of the next integration build. <br>
						     Addresses the following issues: <br>
							<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=131707">131707</a>
							Cannot add classpath variables when starting with -pluginCustomization option
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=134839">134839</a>
							[compiler] Incorrect compile errors reported in 1.3 compliance level
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=128423">128423</a>
							[1.5][compiler] ClassCastException on illegal code fragment
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=107901">107901</a>
							Clarify Javadoc for ASTParser#setUnitName
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=132841">132841</a>
							[1.5][compiler] Incorrectly compared method parameters when member types
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=132831">132831</a>
							[1.5][compiler] Compiler generate brige when not needed
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=119844">119844</a>
							javadoc extraction: type comment
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=131519">131519</a>
							JDK with attached source unnavigable.
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=92357">92357</a>
							ITypeHierarchy#getType() should return an unresolved handle
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=97494">97494</a>
							[1.5][compiler] Inappropriate error level and message for generic type mismatch
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=134172">134172</a>
							Crap Perfomance opening Java file with lots of imports
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=134255">134255</a>
							Unoptimal JavaElementInfo construction
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=134645">134645</a>
							[1.5][compiler] Java Compiler throws internal exception..
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=134118">134118</a>
							[1.5][compiler] 'ambiguous' error on legal static import
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=96648">96648</a>
							Batch compiler - error messages for duplicate output, bootclasspath, sourcepath and extdirs entries could be more explicit
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=86813">86813</a>
							[compiler] step into switch statement locate wrong line
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=83318">83318</a>
							[1.5] 'Open declaration' fails for type variables in class files
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=134345">134345</a>
							Problems from CompilationParticipants do not get cleaned up unless there are Java errors
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=133918">133918</a>
							[1.5][compiler] Duplicate return; in CastExpression line 258
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=89347">89347</a>
							[compiler] public constructor of protected inner class invisible in subclass
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=134064">134064</a>
							[1.5][compiler] Duplicate error messages when an annotation value expects a boolean but gets an array
							<br>
						     Also see corresponding 
						     <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5147&amp;content-type=text/html">build notes</a>.			
			</table>
-->
		</div>
		<div class="homeitem3col">
			<a name="SOURCES"></a>
			<h3>Getting the sources</h3>
      <ul>
		<li>Make sure to target a recent SDK R3.5.x <a href="http://download.eclipse.org/downloads">integration build</a>.
		</li>
		<li>Define a CVS connection to server <code>pserver:anonymous@dev.eclipse.org:/cvsroot/eclipse</code>
        </li>
		<li>Check out the <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.core/"><code>HEAD</code></a> branch of the 
			project <code>org.eclipse.jdt.core</code>. </li>
		<li>The sources of this project have been compiled against a 1.4 JRE. A 1.4 JRE should thus be installed.</li>
      </ul>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick links</h6>
			<ul>
				<li><a href="#HAPPENING">What&#8217;s Happening?</a></li>
				<li><a href="#BUG_RESOLUTION">Bug Resolution</a></li>
				<li><a href="#UPDATES">Updates</a></li>
				<li><a href="#SOURCES">Getting the sources</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
