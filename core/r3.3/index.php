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
			<p>This section describes the JDT/Core implementation of the 
			   <a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html">official plan</a>.<br>
            </p>
			
		<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
			<b>Rollup 3.3.1 - no date yet</b>
		<ul>
			<li> preview available in <a href="#UPDATES">update</a> area. </li>
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
		<li>Compiler API (<a href="http://jcp.org/en/jsr/detail?id=199">jsr-199</a>)<br/>
			Require 1.6 JRE libraries. Implementation of compiler API 
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=154111">154111</a>) will thus likely be made available as a separate 
			download.
	  </ul>
	</li>
	<li><b>Incremental Java Compiler</b>
	  <ul>
		<li>Compiler may ignore some specific warnings
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=156710">156710</a>)</li>
		<li>Improve compiler fault-tolerance
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=156731">156731</a>)</li>
		<li>Improve option "Unnecessary declaration of thrown checked exceptions"
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=73244">73244</a>)</li>
		<li>Null reference analysis: add interprocedural analysis
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=126551">126551</a>)</li>
		<li>Add compiler option to warn overriding methods that do not call super
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=156736">156736</a>)</li>
		<li>Tune the existing checks to avoid false positives:
		  <ul>
		  	<li>Null checks
				(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=157154">157154</a>)</li>
		  	<li>Thrown exceptions
				(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=157155">157155</a>)</li>
		  	<li>Unused parameter
				(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=157162">157162</a>)</li>
		  </ul>
		</li>
	  </ul>
	</li>
	<li><b>DOM AST</b>
	  <ul>
		<li>Need a more flexible way to create multiple ASTs
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=150657">bug 150657</a>)</li>
		<li>Reconcile should support default AST options
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=124662">(bug 124662)</a>)</li>
		<li>AST for compilation participants
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=156712">(bug 156712)</a>)</li>
		<li>Find and create bindings in existing binding environments:
		  <ul>
			<li><img src="../progress.gif" height="5" width="14"> Type binding with higher dimension
				(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=148224">bug 148224</a>)</li>
			<li>Find type binding by name or key
				(<i>bug to be opened</i>)</li>
			<li>Create or compose type binding in binding environment of AST
				(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=40096">bug 40096</a>)</li>
		  </ul>
		</li>
		<li>Offer bindings also when some information is missing
		  <ul>
			<li>variable bindings when variable type is unresolved
				(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=149567">bug 149567</a>)</li>
		  </ul>
		</li>
	  </ul>
	</li>
	<li><b>Search</b>
	  <ul>
		<li>Get IType from TypeNameRequestor result
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=148380">bug 148380</a>)</li>
		<li>Allow regex in Java search (requires JDK 1.4)
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=36897">36897</a>)</li>
		<li>Improve Camel Case matching
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=109695">109695</a>)</li>
		<li>More powerful search (Semantic Search / Search templates)
		  <ul>
		  	<li><img src="../progress.gif" height="5" width="14"> Code pattern based, e.g. search where synchronized on 'JavaModelManager'
		  		(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110157">110157</a>)</li>
			<li>Fine grain options for Java Search
				(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=155013">155013</a>)</li>
		  </ul>
		</li>
	  </ul>
	</li>
	<li><b>Java Model</b></li>
	  <ul>
		<li>Support for exclusion/inclusion filters in libraries
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=119419">119419</a>)</li>
		<li>Allow classpath variable to be marked as deprecated
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=138599">138599</a>)</li>
		<li>Allow classpath variable to be marked as non modifiable
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=156226">156226</a>)</li>
		<li>Have common supertype for ICompilationUnit and IClassFile
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=125504">125504</a>)</li>
		<li>Applying edits to a ICompilationUnit
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=117694">117694</a>)</li>
		<li>Accessing annotation on Java elements
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=79112">79112</a>)</li>
		<li>API to get type kind of a CU or class file
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=150393">150393</a>)</li>
		<li>Java model gives different results
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=129584">129584</a>)</li>
		<li>Allow containers to contain containers, variables and class folders
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=142135">142135</a>)</li>
		<li>API to create ITypeBinding from type name
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=156871">156871</a>)</li>
	  </ul>
	</li>
	<li><b>Code Assist</b>
	  <ul>
		<li>Improve code assist when import missing
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=44984">bug 44984</a>)</li>
		<li>Code assist for declarations that are already used later in the code
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=150228">bug 150228</a>)</li>
		<li><img src="../progress.gif" height="5" width="14"> Provide code assist context: AST or other way
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110181">bug 110181</a>)</li>
		<li>Constructor completion
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=6930">bug 6930</a>)</li>
		<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Improve empty completion
			(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=102875">bug 102875</a>)</li>
	  </ul>
	</li>
	<li><b>Code Formatter</b>
	  <ul>
		<li><img src="../progress.gif" height="5" width="14">
			Allow formatting directly from DOM AST by moving infrastructure from  compiler AST to DOM AST
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110194">110194</a>)
		<li>each format shifts code inside &lt;pre&gt; one space to the right
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
				<li>Release Candiate 2 : <a href="test-rc2.php">test plan</a>
		        </li>
		    </ul>
-->		    
		</div>
		<div class="homeitem3col">
			<a name="BUG_RESOLUTION"></a>
			<h3>Bug Resolution</h3>
      <ul>
        <li>Rollup 3.3.1, 2007/??/?? : 
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
<!--
			<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Batch compiler</b>
      <table>
          <tr>
			<td valign="top"><a href="../patches/ecj_3.3RC3.jar">
						     <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Binary)</a></td>
			<td valign="top">posted on 2006/05/09, 1,24 MB (click on picture)</td>
          </tr>
          <tr>
			<td valign="top"><a href="../patches/ecj_3.3RC3src.zip">
						     <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Source)</a></td>
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
			<td valign="top"><a href="../patches/org.eclipse.jdt.core_3.3.0.200604051115.jar">
						     <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20"></a></td>
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
		<li>Make sure to target a recent SDK R3.3.x <a href="http://download.eclipse.org/downloads">maintenance build</a>).
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
