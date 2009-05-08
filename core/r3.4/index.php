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
			<a name="maintenance"></a>
			<p>This section describes the JDT/Core implementation of the 
			   <a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_4.html">official plan</a>, 
			   to be delivered according to the <a href="http://www.eclipse.org/eclipse/platform-releng/buildSchedule.html">build
               schedule</a>.<br>
            </p>

		<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
			<b>Rollup 3.4.1 - no date yet</b>
		<ul>
			<li> preview available in <a href="#UPDATES">update</a> area. </li>
			<li> bug fixing :
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4.1">all planned fixes</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4.1">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4.1">resolved</a>)
			</li>
		</ul>
			
     <p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">
		&nbsp;<b>Release 3.4.0 - completed on 2008/06/17</b></p>
		<ul>
			<li> available on the <a href="http://download.eclipse.org/downloads">download</a> area. </li>
			<li> final <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.6530&amp;content-type=text/html">build notes</a> </li>
	<li><b>Java Compiler</b>
	  <ul>
	    <li>Support for "-target cldc1.1"
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=120223">120223</a>)</li>
	    <li>Improve "Unnecessary declaration of thrown checked exceptions"
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=73244">73244</a>)</li>
	    <li>Concurrent Java compiler (so as to leverage multi-core CPU)
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=142126">142126</a>)</li>
	    <li>Need annotation bindings even when code contains errors
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=196200">196200</a>)</li>
	    <li>Improve syntax recovery around annotations
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=130778">130778</a>)</li>
	    <li>Add CompilationParticipant.buildComplete() API
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=180107">180107</a>)</li>
	    <li>Improve support for generics
	        <ul>
		        <li>capture semantics
					(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=159214">159214</a>, 
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=203318">203318</a>, 
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=202404 ">202404 </a>)</li>
		        <li>method override semantics>
					(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=202830">202830</a>)</li>
		        <li>stricten cast rules
					(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=165352">165352</a>, 
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=90437">90437</a>, 
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=89940 ">89940 </a>,
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=158870 ">158870 </a>,
					 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=120088  ">120088  </a>)</li>
			</ul>
			</li>	
	    <li>Tune warning for missing serialVersionUID
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=203241">203241</a>)</li>
	    <li>Enable null-pointer access warning by default
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=192875">192875</a>)</li>
	    <li>Improve compiler fault resilience
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=196653">196653</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=204536">204536</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=204534">204534</a>)</li>
	    <li>Augment warning for assignment having no effect
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=200724">200724</a>)</li>
	    <li>Improve 1.6 code generation performance
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=185350">185350</a>)</li>
	    <li>Provide a mapping from problem id to preference key
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=218603">218603</a>)</li>
		<li>Add compiler API to call the batch compiler from a stand-alone application
		    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=217233">217233</a>)</li>
		<li>Detect unnecessary <code>Throwable</code> or <code>Exception</code> in <code>throws</code> clause
		    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=219461">219461</a>)</li>
	    <!--<li><img src="../progress.gif" height="5" width="14">
	    	<i>Improve support for jsr199</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=188796">188796</a>, 
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=226890">226890</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=226918">226918</a>) [maxime]</li>
		 -->
	  </ul>
	</li>
	<li><b>DOM AST</b>
	  <ul>
	    <!--
	    <li><i>Issue with nested wildcards</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=103643">103643</a>) [frederic]</li>
	    <li><i>Surface intersection types</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=99931">99931</a>) [frederic]</li>
		-->
	    <li>Don't surface unresolved types
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=187430">187430</a>)</li>
	  </ul>
	<li><b>Build Path</b>
	  <ul>
	    <li>Support external library folders
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=182537">182537</a>)</li>
	    <li>Support ZIP archives with extensions other than .zip and .jar
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=182360">182360</a>)</li>
		<!--
		<li><i>Binary/virtual projects</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=7497">7497</a>, <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=80162">80162</a>, <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=78067">78067</a>) [jerome]</li>
		<li><i>Exclusion/inclusion filters for libraries</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=119419">119419</a>) [jerome (model) & kent (compiler)]</li>
		-->
	  </ul>
	</li>
	<li><b>Code Assist</b>
	  <ul>
	    <li>Improve content assist after 'instanceof'
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=193909">193909</a>)</li>
	    <li>Improve content assist for static members when import missing
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=44627">44627</a>)</li>
		<!--
	    <li><i>Constructor proposals after "new" for compatible types</i> (low priority)
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6930">6930</a>) [david]</li>
		-->
	    <li>Enrich completion context
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=202470">202470</a>, 
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=202467">202467</a>)</li>
	  </ul>
	</li>
	<li><b>Code Formatter</b>
	  <ul>
	    <li>Formatting should all be done at the core level
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=102780">102780</a>, 
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=227043">227043</a>)</li>
	    <li>Allow to format set of regions
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=203304">203304</a>)</li>
	    <li>Tune up region formatting
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=208541">208541</a>)</li>
	  </ul>
	</li>
	<li><b>Javadoc</b>
	  <ul>
	    <li>@link to inner types
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=195374">195374</a>)</li>
	    <li>Error reporting tuning
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=125518">125518</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=86769">86769</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=168849">168849</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=192449">192449</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=73352">73352</a>)</li>
	  </ul>
	<li><b>Java Model</b>
	  <ul>
		<li>Support annotations as Java elements
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=79112">79112</a>)</li>
		<li>Support for retreiving the default value of an annotation method
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=209958">209958</a>)</li>
		<!--
		<li><i>Improve NamingConventions</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=38111">38111</a>, <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=85946">85946</a>) [eric]</li>
		-->
		<li>Java element delta for all classpath changes
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=154071">154071</a>)</li>
		<li>API to get from binding key to a IJavaElement
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=192670">192670</a>)</li>
	    <li>Improve Java model caching heuristic to better handle large JARs
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=190094">190094</a>)</li>
	    <li>Improve "Initializing Java Tooling" job performance
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=206027">206027</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=181488">181488</a>)</li>
	    <li>Honor build path when looking up working copies
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=169970">169970</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=194399">194399</a>)</li>
	    <li>Fix IType.getFullyQualifiedName(char) for binary types
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=156168">156168</a>)</li>
	    <li>Applying edits to a ICompilationUnit
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=117694">117694</a>)</li>
	  </ul>
	</li>
	<li><b>Search</b>
	  <ul>
	    <li>CamelCase tuning
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=109695">109695</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=201064">201064</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=200400">200400</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=124624">124624</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=201426">201426</a>)</li>
	    <li>More finegrained options for Java search
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=155013">155013</a>)</li>
	    <li>Optimization of JavaWorkspaceScope
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=182738">182738</a>)</li>
		<!--
	    <li>
	        <i>Search API to handle annotations</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=209996">209996</a>,
			 <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=209778">209778</a>) [frederic]</li>
	    <li><i>Provide a way to get the matching regions from a search pattern</i>
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=218605">218605</a>) [frederic]</li>
		-->
	  </ul>
	</li>
	</ul>
	</p>
	
 <!--
     <a name="milestone-plan"></a>
     <p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
           For <b>3.4 Release Candidate 2 (2008/05/23)</b>, we will mainly focus on:</p>
      <ul>
        <li>Bug fixing 
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+RC2&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC2">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC2">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC2">resolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=VERIFIED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC2">verified</a>)</li>
      </ul>
		</div>
-->		
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
		<li>Overall R3.4, 2008/06/17 : 
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4&amp;target_milestone=3.4+M1&amp;target_milestone=3.4+M2&amp;target_milestone=3.4+M3&amp;target_milestone=3.4+M4&amp;target_milestone=3.4+M5&amp;target_milestone=3.4+M6&amp;target_milestone=3.4+M7&amp;target_milestone=3.4+RC1&amp;target_milestone=3.4+RC2&amp;target_milestone=3.4+RC3&amp;target_milestone=3.4+RC4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4&amp;target_milestone=3.4+M1&amp;target_milestone=3.4+M2&amp;target_milestone=3.4+M3&amp;target_milestone=3.4+M4&amp;target_milestone=3.4+M5&amp;target_milestone=3.4+M6&amp;target_milestone=3.4+M7&amp;target_milestone=3.4+RC1&amp;target_milestone=3.4+RC2&amp;target_milestone=3.4+RC3&amp;target_milestone=3.4+RC4">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4&amp;target_milestone=3.4+M1&amp;target_milestone=3.4+M2&amp;target_milestone=3.4+M3&amp;target_milestone=3.4+M4&amp;target_milestone=3.4+M5&amp;target_milestone=3.4+M6&amp;target_milestone=3.4+M7&amp;target_milestone=3.4+RC1&amp;target_milestone=3.4+RC2&amp;target_milestone=3.4+RC3&amp;target_milestone=3.4+RC4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4&amp;target_milestone=3.4+M1&amp;target_milestone=3.4+M2&amp;target_milestone=3.4+M3&amp;target_milestone=3.4+M4&amp;target_milestone=3.4+M5&amp;target_milestone=3.4+M6&amp;target_milestone=3.4+M7&amp;target_milestone=3.4+RC1&amp;target_milestone=3.4+RC2&amp;target_milestone=3.4+RC3&amp;target_milestone=3.4+RC4">resolved</a>)
        </li>
		<li>Release Candidate 4, 2008/06/06 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+RC4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC4&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC4">resolved</a>)
        </li>
		<li>Release Candidate 3, 2008/05/30 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+RC3&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC3&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC3">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC3">resolved</a>)
        </li>
		<li>Release Candidate 2, 2008/05/23 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+RC2&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC2&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC2">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC2">resolved</a>)
        </li>
		<li>Release Candidate 1, 2008/05/16 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+RC1&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC1&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC1">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+RC1">resolved</a>)
        </li>
		<li>Milestone 7, 2008/05/02 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M7&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M7&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M7">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M7">resolved</a>)
        </li>
		<li>Milestone 6, 2008/03/28 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M6&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M6&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M6">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M6">resolved</a>)
        </li>
		<li>Milestone 5, 2008/02/08 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M5&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M5&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M5">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M5">resolved</a>)
        </li>
		<li>Milestone 4, 2007/12/14 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M4&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M4&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M4">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M4">resolved</a>)
        </li>
		<li>Milestone 3, 2007/11/02 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M3&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M3&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M3">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M3">resolved</a>)
        </li>
		<li>Milestone 2, 2007/09/21 :
			(<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.4+M2&amp;resolution=FIXED">fixed</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.4+M2&amp;namedcmd=Assigned">all</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M2">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.4+M2">resolved</a>)
        </li>
		<li>Milestone 1, 2007/08/10 :
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

			<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>3.4.x update</b>
      <table>
          <tr>
			<td valign="top"><a href="../patches/org.eclipse.jdt.core_3.4.5.v_895_R34x.jar">
						     <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Binary)</a></td>
			<td valign="top">posted on 2009/05/08, 4.3 MB (click on picture)</td>
          </tr>
          <tr>
			<td valign="top"><i>description</i></td>
			<td valign="top">Addresses the following issues since 3.4.2 release: <br>
				<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=265962">265962</a>
				[compiler] Internal compiler error on while with return clause
				<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=265103">265103</a>
				Manifest Class-Path is not read correctly with ECJ
				<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=266582">266582</a>
				[1.5][compiler] AbortCompilation while decoding the type variable of an anonymous type
				<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=264843">264843</a>
				[1.5][compiler] Eclipse compiler fails to reject invalid code with primitives autoboxed to generics
				<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=257716">257716</a>
				[compiler] Erroneous blank field field may not have been initialized
				<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=263877">263877</a>
				[1.5][compiler] forward reference error flagged within enum
				<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=249930">249930</a>
				Deadlock with JavaModelManager$PerProjectInfo
				<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=261510">261510</a>
				[compiler] Deadlock in static initializer of JDT classes
			</td>
		  </tr>
	  </table>
<!--			<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>3.3 integration preview </b>
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
					</td>
				</tr>
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
