<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		JDT Core team
	# Date:			2006-06-08
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT Core R3.3.x";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.3";
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
			<a name="maintenance"></a>
			<p>This section describes the JDT/Core implementation of the 
			   <a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html">official plan</a>.<br>
            </p>
			
		<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
			<b>Rollup 3.3.2 - completed on 2008/02/21</b>
		<ul>
			<li> available on the <a href="http://download.eclipse.org/downloads">download</a> area.</li>
			<li> final <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5933.2.82&amp;content-type=text/html">build notes</a></li>
			<li> bug fixing :
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3.2">all planned fixes</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3.2">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3.2">resolved</a>)
			</li>
		</ul>
			
		<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
			<b>Rollup 3.3.1 - completed on 2007/09/15</b>
		<ul>
			<li> available on the <a href="http://download.eclipse.org/downloads">download</a> area.</li>
			<li> final <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5933.2.38&amp;content-type=text/html">build notes</a></li>
			<li> bug fixing :
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3.1">all planned fixes</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3.1">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3.1">resolved</a>)
        	</li>
		</ul>
		
     <p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">
		&nbsp;<b>Release 3.3.0 - completed on 2007/06/29</b></p>
		<ul>
			<li> available on the <a href="http://download.eclipse.org/downloads">download</a> area. </li>
			<li> final <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5933&amp;content-type=text/html">build notes</a> </li>
	<li><b>Java SE 6 </b>(<a href="http://jcp.org/en/jsr/detail?id=270">jsr-270</a>)
	  <ul>
		<li><img src="../ok.gif" height="10" width="10"> Compiler API (<a href="http://jcp.org/en/jsr/detail?id=199">jsr-199</a>)<br/>
			Require 1.6 JRE libraries. Implementation of compiler API 
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=154111">154111</a>) will thus likely be made available as a separate 
			download.
	  </ul>
	</li>
	<li><b>Incremental Java Compiler</b>
	  <ul>
		<li><img src="../ok.gif" height="10" width="10"> Improve compiler fault-tolerance
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=156731">156731</a>)</li>
		<li><img src="../ok.gif" height="10" width="10"> Add compiler option to warn overriding methods that do not call super
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=156736">156736</a>)</li>
		<li><img src="../ok.gif" height="10" width="10"> Tune the existing null checks to avoid false positives
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=157154">157154</a>)</li>
	  </ul>
	</li>
	<li><b>DOM AST</b>
	  <ul>
		<li><img src="../ok.gif" height="10" width="10"> Offer variable bindings when variable type is unresolved
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=149567">149567</a>)</li>
	  </ul>
	</li>
	<li><b>Search</b>
	  <ul>
		<li><img src="../ok.gif" height="10" width="10"> Get IType from TypeNameRequestor result
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=148380">148380</a>)</li>
	  </ul>
	</li>
	<li><b>Java Model</b></li>
	  <ul>
		<li><img src="../ok.gif" height="10" width="10"> Allow classpath variable to be marked as deprecated
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=138599">138599</a>)</li>
		<li><img src="../ok.gif" height="10" width="10"> Allow classpath variable to be marked as non modifiable
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=156226">156226</a>)</li>
		<li><img src="../ok.gif" height="10" width="10"> Have common supertype for ICompilationUnit and IClassFile
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=125504">125504</a>)</li>
		<li><img src="../ok.gif" height="10" width="10"> Ensure Java model is always consistent
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=129584">129584</a>)</li>
	  </ul>
	</li>
	<li><b>Code Assist</b>
	  <ul>
		<li><img src="../ok.gif" height="10" width="10"> Improve code assist when import missing
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=44984">44984</a>)</li>
		<li><img src="../ok.gif" height="10" width="10"> Code assist for declarations that are already used later in the code
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=150228">150228</a>)</li>
		<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Improve empty completion
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=102875">102875</a>)</li>
	  </ul>
	</li>
	<li><b>Code Formatter</b>
	  <ul>
		<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Fine tune formatting of code in &lt;pre&gt; tags
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=99738">99738</a>)
	  </ul>
	</li>
</ul>
		</div>
		<div class="homeitem3col">
			<a name="RELEASE_PROCESS"></a>
			<h3>Release Process</h3>
<!--
			<ul>
				<li>Rollup 3.3.1 : <a href="test-3.3.1.php">test plan</a>
		        </li>
		    </ul>
-->
		</div>
		<div class="homeitem3col">
			<a name="BUG_RESOLUTION"></a>
			<h3>Bug Resolution</h3>
      <ul>
        <li>Rollup 3.3.2, 2008/02/29 : 
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3.2&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3.2&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3.2">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3.2">resolved</a>)
        </li>
        <li>Rollup 3.3.1, 2007/09/15 : 
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3.1&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3.1&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3.1">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3.1">resolved</a>)
        </li>
		<li>Overall R3.3, 2007/06/21 : 
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3&amp;target_milestone=3.3+M1&amp;target_milestone=3.3+M2&amp;target_milestone=3.3+M3&amp;target_milestone=3.3+M4&amp;target_milestone=3.3+M5&amp;target_milestone=3.3+M6&amp;target_milestone=3.3+M7&amp;target_milestone=3.3+RC1&amp;target_milestone=3.3+RC2&amp;target_milestone=3.3+RC3&amp;target_milestone=3.3+RC4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3&amp;target_milestone=3.3+M1&amp;target_milestone=3.3+M2&amp;target_milestone=3.3+M3&amp;target_milestone=3.3+M4&amp;target_milestone=3.3+M5&amp;target_milestone=3.3+M6&amp;target_milestone=3.3+M7&amp;target_milestone=3.3+RC1&amp;target_milestone=3.3+RC2&amp;target_milestone=3.3+RC3&amp;target_milestone=3.3+RC4">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3&amp;target_milestone=3.3+M1&amp;target_milestone=3.3+M2&amp;target_milestone=3.3+M3&amp;target_milestone=3.3+M4&amp;target_milestone=3.3+M5&amp;target_milestone=3.3+M6&amp;target_milestone=3.3+M7&amp;target_milestone=3.3+RC1&amp;target_milestone=3.3+RC2&amp;target_milestone=3.3+RC3&amp;target_milestone=3.3+RC4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3&amp;target_milestone=3.3+M1&amp;target_milestone=3.3+M2&amp;target_milestone=3.3+M3&amp;target_milestone=3.3+M4&amp;target_milestone=3.3+M5&amp;target_milestone=3.3+M6&amp;target_milestone=3.3+M7&amp;target_milestone=3.3+RC1&amp;target_milestone=3.3+RC2&amp;target_milestone=3.3+RC3&amp;target_milestone=3.3+RC4">resolved</a>)
        </li>
		<li>Release Candidate-4, 2007/06/05 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+RC4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC4&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC4">resolved</a>)
        </li>
		<li>Release Candidate-3, 2007/05/30 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+RC3&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC3&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC3">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC3">resolved</a>)
        </li>
		<li>Release Candidate-2, 2007/05/25 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+RC2&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC2&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC2">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC2">resolved</a>)
        </li>
		<li>Release Candidate-1, 2007/05/16 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+RC1&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC1&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC1">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+RC1">resolved</a>)
        </li>
		<li>Milestone-7, 2007/05/02 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+M7&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+M7&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M7">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M7">resolved</a>)
        </li>
		<li>Milestone-6, 2007/03/21 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+M6&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+M6&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M6">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M6">resolved</a>)
        </li>
		<li>Milestone-5, 2007/02/08 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+M5&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+M5&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M5">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M5">resolved</a>)
        </li>
		<li>Milestone-4, 2006/12/09 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+M4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+M4&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M4">resolved</a>)
        </li>
		<li>Milestone-3, 2006/10/30 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+M3&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+M3&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M3">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M3">resolved</a>)
        </li>
		<li>Milestone-2, 2006/09/15 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+M2&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+M2&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M2">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M2">resolved</a>)
        </li>
		<li>Milestone-1, 2006/08/06 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.3+M1&amp;target_milestone=3.1.1&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.3+M1&amp;target_milestone=3.1.1&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M1&amp;target_milestone=3.1.1">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.3+M1&amp;target_milestone=3.1.1">resolved</a>)
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
			<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Batch compiler</b>
      <table>
          <tr>
			<td valign="top"><a href="../patches/ecj_3.3.7.jar">
						     <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Binary)</a></td>
			<td valign="top">posted on 2009/01/30, 1,49 MB (click on picture)</td>
          </tr>
          <tr>
			<td valign="top"><a href="../patches/ecj_3.3.7src.zip">
						     <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Source)</a></td>
			<td valign="top">posted on 2009/01/30, 1,06 MB (click on picture)</td>
           </tr>         
	  </table>
	  
		<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Post 3.3.2 update </b>
      <table>
          <tr>
			<td valign="top"><a href="../patches/org.eclipse.jdt.core_3.3.7.jar">
						     <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20"></a></td>
			<td valign="top">posted on 2009/01/30, 7.18 MB (click on picture)</td>
          </tr>
          <tr>
			<td valign="top"><i>applies to</i></td>
			<td valign="top">Rollup 3.3.2</td>
          </tr>
          <tr>
			<td valign="top"><i>description</i> </td>
			<td valign="top">Post 3.3.2 update. <br>
	           				<b>Note:</b> No official 3.3.3 is planned so far, this is only a courtesy of the JDT/Core team. <br>
            				Plug-in revision ID is "3.3.7". Corresponding sources are versionned using tag
							<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.core/?only_with_tag=v_797_R33x">v_797_R33x</a>
							<br>
						    Addresses the following issues: <br>
							<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=257716">257716</a>
							[compiler] Erroneous blank field field may not have been initialized
						    <br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=138184">138184</a>
							[search] Type Dialog (Could not uniquely map the name to a type)
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=250975">250975</a>
							[1.5][compiler] Stack overflow on static import.
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=239273">239273</a>
							[1.5][compiler] ClassCastException in BinaryTypeBinding.convertMemberValue() trying to cast an ArrayBinding as a ReferenceBinding
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=245435">245435</a>
							[1.5][compiler] &quot;Value for annotation attribute must be a constant expression&quot; error on valid constant expression
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=240214">240214</a>
							[compiler] final bit should be cleared from class file access flag for anonymous class
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=237931">237931</a>
							[1.6][compiler] wrong signature of String[][] in class file
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=239758">239758</a>
							[1.5][compiler] Generic interface inheritance and overriding error
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=232565">232565</a>
							[1.5][compiler] wrong autoboxing code generation leads to VerifyError at runtime
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=238484">238484</a>
							[1.5][compiler] Eclipse generates bad code (major regression)
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=235921">235921</a>
							[1.5][compiler] Incorrect generic signature attribute created for inner anonymous type
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=235882">235882</a>
							[compiler] constructor-scoped inner classes unable to recognize final member variable initialization
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=235778">235778</a>
							Potential race condition computing resolved classpath
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=227941">227941</a>
							org.eclipse.jdt.internal.compiler.batch.Main writes bad characters to an xml log file
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=234619">234619</a>
							[1.5][compiler] Object#getClass() has wrong expression type binding with JRE from 1.6
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=233800">233800</a>
							[1.5][compiler] Internal compiler NPE on checkUnsafeCast
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=232814">232814</a>
							[compiler] Testcase with &quot;value1 - (-value2)&quot; not working when value2 is final
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=225737">225737</a>
							[compiler][1.5] Generics - JDT cannot compile hudson-core when javac can
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=231861">231861</a>
							[1.5][compiler] Generics: problem with partial generics
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=228291">228291</a>
							[1.5][compiler] Incorrect unsafe warning for casting complex but static types.
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=79798">79798</a>
							[compiler] Wrong compiler error when interface overrides two methods with same signature but different exceptions
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=222326">222326</a>
							[1.5][compiler] NullPointerException during: "Compute launch button tooltip"
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=219855">219855</a>
							[1.5][compiler] StackOverflowError during: &quot;Requesting Java AST from selection&quot;
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=167262">167262</a>
							[1.5][compiler] @Override specification
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=220361">220361</a>
							[1.5][compiler] Compiler incorrectly rejects static raw member type as parameterized
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=220111">220111</a>
							[1.5][compiler] Type mismatch errors on identical types; code compiles with javac
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=210425">210425</a>
							[1.5][compiler] @SuppressWarnings(&quot;unchecked&quot;)  not considered necessary for unconstrained generic parameters
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=216686">216686</a>
							[1.5][compiler] Failures of inference and overload resolution
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=216683">216683</a>
							[1.5][compiler] Confusion when homnymous types in local and enclosing scope
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=216692">216692</a>
							[1.5][compiler] Protected type not visible in subclass
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=216565">216565</a>
							[1.5][compiler] Cannot convert T to T
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=216100">216100</a>
							[1.5][compiler] Brigdes are not correcly generated
							<br>
						     Also see corresponding 
						     <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5933.2.111&amp;content-type=text/html">build notes</a>.			
			</table>

		</div>
		<div class="homeitem3col">
			<a name="SOURCES"></a>
			<h3>Getting the sources</h3>
      <ul>
		<li>Make sure to target a recent SDK R3.3.x <a href="http://download.eclipse.org/downloads">maintenance build</a>.
		</li>
		<li>Define a CVS connection to server <code>pserver:anonymous@dev.eclipse.org:/cvsroot/eclipse</code>
        </li>
		<li>Check out the <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.core/?only_with_tag=R3_3_maintenance"><code>R3_3_maintenance</code></a> branch of the 
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
