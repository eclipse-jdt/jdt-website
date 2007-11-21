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
	$pageTitle 		= "JDT Core R3.4.x";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.4";
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
			   <a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_4.html">official plan</a>, 
			   to be delivered according to the <a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html">build
               schedule</a>.<br>
            </p>
     <a name="release-plan"></a>
     <p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
        For <b>release 3.4</b> the major focus points are listed below. Note that <b>items in bold</b> are high priority for 3.4, and
        <i>items in italic</i> will be investigated time permitting.</p>
    <ul>
	<li>Java Compiler
	  <ul>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	        <b>Support for "-target cldc1.1"</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=120223">120223</a>) [olivier]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	        <b>Improve "Unnecessary declaration of thrown checked exceptions"</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=73244">73244</a>) [maxime]</li>
	    <li><img src="../progress.gif" height="5" width="14">
	        <b>Concurrent Java compiler (so as to leverage multi-core CPU)</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=126121">126121</a>) [kent]</li>
	    <li><i>Need annotation bindings even when code contains errors</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=196200">196200</a>) [philippe]</li>
	    <li><img src="../progress.gif" height="5" width="14">
	    	<b>Improve syntax recovery around annotations</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=130778">130778</a>) [david]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Add CompilationParticipant.buildComplete() API</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=180107">180107</a>) [kent]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	        <b>Improve support for generics</b>
	        <ul>
		        <li><b>capture semantics</b>
					(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=159214">159214</a>, 
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=203318">203318</a>, 
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=202404 ">202404 </a>) [philippe]</li>
		        <li><b>method override semantics</b>
					(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=202830">202830</a>) [kent]</li>
		        <li><b>stricten cast rules</b>
					(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=165352">165352</a>, 
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=90437">90437</a>, 
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=89940 ">89940 </a>,
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=158870 ">158870 </a>,
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=120088  ">120088  </a>) [philippe]</li>
			</ul>
			</li>	
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Tune warning for missing serialVersionUID</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=203241">203241</a>) [olivier]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Enable null-pointer access warning by default</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=192875">192875</a>) [maxime]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Improve compiler fault resilience</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=196653">196653</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=204536">204536</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=204534">204534</a>) [philippe, kent]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Augment warning for assignment having no effect</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=200724">200724</a>) [maxime]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Improve 1.6 code generation performance</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=185350">185350</a>) [olivier]</li>
	  </ul>
	</li>
	<li>DOM AST
	  <ul>
	    <li><b>Issue with nested wildcards</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=103643">103643</a>) [frederic]</li>
	    <li><b>Surface intersection types</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=99931">99931</a>) [frederic]</li>
	    <li><i>Don't surface unresolved types</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=187430">187430</a>) [frederic]</li>
	  </ul>
	<li>Build Path
	  <ul>
		<li><i>Allow classpath containers to contain containers</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110176">110176</a>) [jerome]</li>
		<li><i>Binary/virtual projects</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7497">7497</a>, <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=80162">80162</a>, <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=78067">78067</a>) [jerome]</li>
		<li><i>Exclusion/inclusion filters for libraries</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=119419">119419</a>) [jerome (model) & kent (compiler)]</li>
	  </ul>
	</li>
	<li>Code Assist
	  <ul>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	        <i>Improve content assist after 'instanceof'</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=193909">193909</a>) [david]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	        <i>Improve content assist for static members when import missing</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=44627">44627</a>) [david]</li>
	    <li><i>Constructor proposals after "new" for compatible types</i> (low priority)
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6930">6930</a>) [david]</li>
	    <li><img src="../progress.gif" height="5" width="14">
	    	<i>Enrich completion context</i> (low priority)
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=202467">202467</a>, <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=202470">202470</a>) [david]</li>
	  </ul>
	</li>
	<li>Code Formatter
	  <ul>
	    <li><img src="../progress.gif" height="5" width="14">
	    	<b>Formatting should all be done at the core level</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=102780">102780</a>) [eric]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Allow to format set of regions</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=203304">203304</a>) [olivier]</li>
	    <li><img src="../progress.gif" height="5" width="14">
	    	<b>Tune up region formatting</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=208541">208541</a>) [eric]</li>
	  </ul>
	</li>
	<li>Javadoc
	  <ul>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	        <i>@link to inner types</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=195374">195374</a>) [eric]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Error reporting tuning</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=125518">125518</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=86769">86769</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=168849">168849</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=192449">192449</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=73352">73352</a>) [eric]</li>
	  </ul>
	<li>Java Model
	  <ul>
		<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
		    <b>Support annotations as Java elements</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=79112">79112</a>) [jerome]</li>
		<li><b>Improve NamingConventions</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=38111">38111</a>, <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=85946">85946</a>) [eric]</li>
		<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
		    <b>Java element delta for all classpath changes</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=154071">154071</a>) [jerome]</li>
		<li><b>API to get from binding key to a IJavaElement</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=192670">192670</a>) [jerome]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Improve Java model caching heuristic to better handle large JARs</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=190094">190094</a>) [jerome]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Improve "Initializing Java Tooling" job performance</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=206027">206027</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=181488">181488</a>) [jerome, frederic]</li>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>Honor build path when looking up working copies</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=169970">169970</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=194399">194399</a>) [jerome]</li>
	  </ul>
	</li>
	<li>Search
	  <ul>
	    <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
	    	<b>CamelCase tuning</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=109695">109695</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=201064">201064</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=200400">200400</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=124624">124624</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=201426">201426</a>) [frederic]</li>
	    <li><img src="../progress.gif" height="5" width="14">
	        <b>More finegrained options for Java search</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=155013">155013</a>) [frederic]</li>
	    <li><i>Optimization of JavaWorkspaceScope</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=182738">182738</a>) [frederic]</li>
	    <li><i>Text search in Java elements</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=199994">199994</a>) [frederic]</li>
	  </ul>
	</li>
	</ul>
	</p>
	
     <a name="milestone-plan"></a>
     <p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
           For <b>3.4-Milestone 4 (2007/12/14)</b>, we will mainly focus on:</p>
      <ul>
	    <li>Investigate <b>Concurrent Java compiler (so as to leverage multi-core CPU)</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=126121">126121</a>) [kent]</li>
	    <li><b>Improve syntax recovery around annotations</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=130778">130778</a>) [david]</li>
	    <li>Investigate <i>Enrich completion context</i> (low priority)
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=202470">202470</a>) [david]</li>
		<li><b>API to get from binding key to a IJavaElement</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=192670">192670</a>) [jerome]</li>
		<li>Investigate <i>Allow classpath containers to contain containers</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110176">110176</a>) [jerome]</li>
	    <li><b>More finegrained options for Java search</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=155013">155013</a>) [frederic]</li>
	    <li><b>Tune up region formatting</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=208541">208541</a>) [eric]</li>
	    <li>Investigate <b>Formatting should all be done at the core level</b>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=102780">102780</a>) [eric]</li>
        <li>Bug fixing 
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M4">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M4">resolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=VERIFIED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M4">verified</a>)</li>
      </ul>
		</div>
<!--		
		<div class="homeitem3col">
			<a name="RELEASE_PROCESS"></a>
			<h3>Release Process</h3>
			<ul>
				<li>Release Candiate 2 : <a href="test-rc2.php">test plan</a>
		        </li>
		    </ul>
		</div>
-->		
		<div class="homeitem3col">
			<a name="BUG_RESOLUTION"></a>
			<h3>Bug Resolution</h3>
      <ul>
		<li>Overall R3.4, 2008/06/?? : 
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4&amp;target_milestone=3.4+M1&amp;target_milestone=3.4+M2&amp;target_milestone=3.4+M3&amp;target_milestone=3.4+M4&amp;target_milestone=3.4+M5&amp;target_milestone=3.4+M6&amp;target_milestone=3.4+M7&amp;target_milestone=3.4+RC1&amp;target_milestone=3.4+RC2&amp;target_milestone=3.4+RC3&amp;target_milestone=3.4+RC4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4&amp;target_milestone=3.4+M1&amp;target_milestone=3.4+M2&amp;target_milestone=3.4+M3&amp;target_milestone=3.4+M4&amp;target_milestone=3.4+M5&amp;target_milestone=3.4+M6&amp;target_milestone=3.4+M7&amp;target_milestone=3.4+RC1&amp;target_milestone=3.4+RC2&amp;target_milestone=3.4+RC3&amp;target_milestone=3.4+RC4">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4&amp;target_milestone=3.4+M1&amp;target_milestone=3.4+M2&amp;target_milestone=3.4+M3&amp;target_milestone=3.4+M4&amp;target_milestone=3.4+M5&amp;target_milestone=3.4+M6&amp;target_milestone=3.4+M7&amp;target_milestone=3.4+RC1&amp;target_milestone=3.4+RC2&amp;target_milestone=3.4+RC3&amp;target_milestone=3.4+RC4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4&amp;target_milestone=3.4+M1&amp;target_milestone=3.4+M2&amp;target_milestone=3.4+M3&amp;target_milestone=3.4+M4&amp;target_milestone=3.4+M5&amp;target_milestone=3.4+M6&amp;target_milestone=3.4+M7&amp;target_milestone=3.4+RC1&amp;target_milestone=3.4+RC2&amp;target_milestone=3.4+RC3&amp;target_milestone=3.4+RC4">resolved</a>)
        </li>
		<li>Milestone-5, 2008/02/08 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M5&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M5&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M5">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M5">resolved</a>)
        </li>
		<li>Milestone-4, 2007/12/14 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M4&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M4">resolved</a>)
        </li>
		<li>Milestone-3, 2007/11/02 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M3&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M3&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M3">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M3">resolved</a>)
        </li>
		<li>Milestone-2, 2007/09/21 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M2&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M2&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M2">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M2">resolved</a>)
        </li>
		<li>Milestone-1, 2007/08/10 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M1&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M1&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M1">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M1">resolved</a>)
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
		<li>Make sure to target a recent SDK R3.4.x <a href="http://download.eclipse.org/downloads">integration build</a>.
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
