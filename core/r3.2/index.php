<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		JDT Core team
	# Date:			2006-01-30
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT Core R3.2.x";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.2";
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
			 <p>This section describes the JDT/Core implementation of the <a
 				href="http://wiki.eclipse.org/index.php/Callisto_Coordinated_Maintenance">official
				plan</a>.</p>

		<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
			<b>Rollup 3.2.3 - NOT planned</b>
		<ul>
			<li> preview available in <a href="#UPDATES">update</a> area. </li>
			<li> bug fixing :
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2.3">all planned fixes</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.3">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.3">resolved</a>)
			</li>
		</ul>
		
		<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
			<b>Rollup 3.2.2 - completed on 2007/02/12</b>
		<ul>
			<li> available on the <a href="http://download.eclipse.org/downloads">download</a> area.</li>
			<li> final <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5274.2.87&amp;content-type=text/html">build notes</a></li>
			<li> bug fixing :
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2.2">all planned fixes</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.2">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.2">resolved</a>)
			</li>
		</ul>

		<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
			<b>Rollup 3.2.1 - completed on 2006/09/29</b>
		<ul>
			<li> available on the <a href="http://download.eclipse.org/downloads">download</a> area.</li>
			<li> final <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5274.2.29&amp;content-type=text/html">build notes</a></li>
			<li> bug fixing :
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2.1">all planned fixes</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.1">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.1">resolved</a>)
        	</li>
		</ul>

		<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">
		&nbsp;<b>Release 3.2.0 - completed on 2006/06/29</b>
		<ul>
			<li> available on the <a href="http://download.eclipse.org/downloads">download</a> area. </li>
			<li> final <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5274.2.1&amp;content-type=text/html">build notes</a> </li>

	<li><b>Java SE 6 </b>(<a href="http://jcp.org/en/jsr/detail?id=270">jsr-270</a>)
	<ul>
		<li><img src="../progress.gif" height="5" width="14">&nbsp;Annotation processing tools 
		    (<a href="http://jcp.org/en/jsr/detail?id=269">jsr-269</a>)<br/>
            Work got initiated in org.eclipse.jdt.apt.core (and ui) project, requiring changes in JDT/Core which got released in "APT"
            branch. The content of this branch exposes new pluggable API for participating in compilation and completion (needed for APT 
            processor) in a fashion which is not APT specific. This branch is intended to be merged into "HEAD" when it matures enough.
        </li>
		<li><img src="../ok.gif" height="10" width="10"> Javadoc (<a href="http://jcp.org/en/jsr/detail?id=260">jsr-260</a>)<br/>
            Mostly affecting Java Model rendering (see Java Model item below)
		</li>
		<li><img src="../ok.gif" height="10" width="10">&nbsp;Classfile (<a href="http://jcp.org/en/jsr/detail?id=202">jsr-202</a>)<br/>
			Except for StackMapTable attribute support (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=109980">109980</a>),
            all other items already got released into Eclipse 3.1.0.
		</li>
		<li>Compiler API (<a href="http://jcp.org/en/jsr/detail?id=199">jsr-199</a>)<br/>
			Require 1.6 JRE libraries. Implementation of compiler API 
			(<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=81471">81471</a>) will thus likely be made available as a separate 
			download.
		</li>
	</ul>
	</li>
	<li><span style="color: rgb(51, 153, 153);"> [optional]</span><b> Switching codebase to Java 5.0</b>
		<ul>
			<li>If Eclipse 3.2 development switches, then will convert JDT/Core implementation (batch compiler remains 1.3 based)</li>
			<li>Not enough reliable 1.5 runtimes available at the moment on each platform, will be reevaluated at end of 3.2 M4.</li>
		</ul>
	</li>
	<li><b>Incremental Java Compiler</b>
		<ul>
			<li>Improved static analysis
	          	<ul>
					<li><img src="../progress.gif" height="5" width="14"> Null reference analysis, coupled with use of 
					    <span style="font-style: italic;">@NonNull</span> annotation 
					    (<a	href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110030">110030</a>, 
					    <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=96063">96063</a>)
	 				</li>
		            <li><img src="../ok.gif" height="10" width="10"> Signal references to raw types 
		                (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=89529">89529</a>)</li>
	            	<li><img src="../ok.gif" height="10" width="10"> Signal assignment to method parameters 
	            	    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=53773">53773</a>)</li>
	            	<li><img src="../ok.gif" height="10" width="10"> Detect unnecessary $NON-NLS tags 
	            	    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=48976">48976</a>)</li>
	            	<li><img src="../ok.gif" height="10" width="10"> Signal unused break/continue labels 
	            	    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=63840">63840</a>)</li>
	            </ul>
          	</li>
			<li><img src="../progress.gif" height="5" width="14"> Enable pluggable participation in compilation 
			    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=36939">36939</a>) (e.g. APT)</li>
			<li><img src="../ok.gif" height="10" width="10"> Allow valid classfile generation in presence of optional compiler errors 
			    (configured by some preference) (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=107282">107282</a>)</li>
			<li><img src="../progress.gif" height="5" width="14"> Provide API to compute the list of files to be cleaned by the 
			    Java builder (for a UI to warn user) (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110048">110048</a>)
			</li>
			<li>Improve access restriction support:
				<ul>
					<li><img src="../ok.gif" height="10" width="10">restrictions should be inherited 
					    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=76266">76266</a>)</li>
            		<li>check more scenarii based on annotations/doclet 
            		    (<span style="font-style: italic;">@CannotImplement</span>, ...)</li>
            		<li>hints on libraries</li>
            		<li>export rules</li>
            	</ul>
			</li>
		</ul>
	</li>
	<li><span style="color: rgb(51, 153, 153);"> [optional]</span> Provide API to retrieve class files generated for a given compilation 
	    unit or reference information (based on last build state) 
	    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=6584">6584</a>)</li>
	<li><b>DOM AST</b>
		<ul>
			<li><img src="../progress.gif" height="5" width="14"> More robust DOM AST: statement level recovery 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=42253">42253</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Cleanup bindings: generic vs. parameterized 
			    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=80472">80472</a>)</li>
			<li>Make generic method invocation bindings unique</li>
			<li>Surface more compiler functionalities on DOM bindings: precomputed override indicator (AccOverriding/AccImplementing) 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=90660">90660</a>)</li>
			<li>Allow creating composite types on demand (array, parameterized, wildcard, capture, ...) 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=40096">40096</a>)</li>
			<li><span style="color: rgb(51, 153, 153);"> [optional]</span> Investigate having binding comparisons work across AST contexts 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=80715">80715</a>)</li>
		</ul>
	</li>
	<li><b>Search</b>
		<ul>
          <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Enable Camel pattern matching (performance item for 
              open type dialog) (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110060">110060</a>)</li>
          <li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Offer enclosing local variable when matching its 
              type (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110336">110336</a>)</li>
          <li><span style="color: rgb(51, 153, 153);"> [optional]</span> Allow regex in Java search (requires JDK 1.4)
              (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=36897">36897</a>) <i>(1 week)</i></li>
          <li><span style="color: rgb(51, 153, 153);"> [optional]</span> Provide API for spell checking any symbol (i.e. is this symbol 
              an identifier anywhere) (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=37528">37528</a>) </li>
          <li><img src="../progress.gif" height="5" width="14"> More powerful search (code pattern based, e.g. search where 
              synchronized on 'JavaModelManager') (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110157">110157</a>)</li>
		</ul>
	</li>
	<li><b>Java Model</b></li>
		<ul>
			<li>LRU cache for working copy buffers (scalability of refactoring) 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110158">110158</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Surface javadoc 
			    <span style="font-style: italic;">@category</span> 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=23669">23669</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Working copy for classfiles (enablement for split 
			    refactoring) (<a  href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110160">110160</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Provide minimal support for working copy outside 
			    the workspace (open external file) (<a  href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=61013">61013</a>)</li>
			<li>Provide support for reacting to option changes (delta? build?) 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=46780">46780</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Address long standing issue with secondary types 
			    (not found by model name environment during reconcile) 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=36032">36032</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Broadcast DOM AST requested during reconcile 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110168">110168</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Provide API to encode/decode a classpath entry 
			    into String/XML form (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110171">110171</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Provide API to access javadoc from either source 
			    (<img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
			    <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110172">110172</a>)
                or attached HTML (<img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;">
                <a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110173">110173</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Size of the internal Java model cache is now 
			    function of the VM max heap size (-Xmx) (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=106202">106202</a>)
			</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> .classpath reading is now forward compatible with 
			    upcoming versions (for unknown attributes) (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=101425">101425</a>)</li>
			<li><span style="color: rgb(51, 153, 153);"> [optional]</span> Investigate allowing classpath containers to refer to further 
			    container/variable entries (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110176">110176</a>)</li>
			<li><span style="color: rgb(51, 153, 153);"> [optional]</span> Consider removing the need for exclusion patterns when nesting 
			    source folders (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110179">110179</a>) <i>(1 week)</i></li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Relax the rule that Java source file extension is 
			    "java" (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=71460">71460</a>)</li>
			<li><span style="color: rgb(51, 153, 153);"> [optional]</span> Provide more Ant functionalities, e.g. way to retrieve project 
			    classpath, etc... (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=5950">5950</a>) 
			    <span style="font-style: italic;">(3 weeks)</span></li>
		</ul>
	</li>
	<li><b>Code Assist</b>
		<ul>
			<li><img src="../progress.gif" height="5" width="14"> Enrich completion context: e.g. DOM AST near completion location 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110181">110181</a>)</li>
			<li><img src="../progress.gif" height="5" width="14"> Enable pluggable participation in completion (e.g. APT) 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=106000">106000</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Provide completion in javadoc (no longer done in UI layer) 
			    (<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=%5Bjavadoc+assist%5D&amp;product=JDT&amp;component=Core&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">related bugs</a>)</li>
			<li><img src="../progress.gif" height="5" width="14"> Enable constructor completions in allocations: "new A&lt;ctrl-space&gt;" 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=83392">83392</a>)</li>
			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Support for Camel prefix: e.g. 
			    "NPE&lt;ctrl-space&gt;&nbsp; --&gt; NullPointerException" 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=102572">102572</a>)</li>
 			<li><img alt="OK mark" src="../ok.gif" style="width: 10px; height: 10px;"> Provide completion on break/continue label 
 			    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=22072">22072</a>)</li>
			<li>Completion in annotation member pair value
				<ul>
					<li><img alt="In progress" src="../progress.gif" style="width: 14px; height: 5px;"> provide hook for completing 
					    inside string literal (e.g. APT completion) 
					    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110188">110188</a>)</li>
					<li>handle some standard annotations: target element types, suppress warning tokens 
					    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110190">110190</a>)</li>
				</ul>
			</li>
		</ul>
	</li>
	<li><b>Code Formatter</b>
		<ul>
			<li><img src="../progress.gif" height="5" width="14"> Allow formatting directly from DOM AST by moving infrastructure from 
			    compiler AST to DOM AST (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110194">110194</a>)</li>
			<li>Improve alignment support for message cascades or nested message sends 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=59891">59891</a>) </li>
			<li>Improve tolerance for syntax errors in formatted source (require work on more robust DOM AST) 
			    (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=110196">110196</a>)</li>
		</ul>
	</li>
</ul>
		</div>

	<div class="homeitem3col">
	<a name="FEATURES"></a>
	<h3>Feature List</h3>
	<p>Work items completed in the 3.2 stream, also see <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/notes/R32_buildnotes_jdt-core.html">build notes</a>.</p>

	<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
	<b>Incremental Java Compiler</b>
		<ul>
			<li>added complete API for Compilation participant</li>
			<li>leveraged suppress warning options for silencing some diagnostics</li>
			<li>leveraged compiler inlining finally blocks</li>
			<li>added option to specify whether optional errors should be fatal or not</li>
			<li>leveraged diagnosis for assignment with no effect</li>
			<li>added API to allow to specify extra attributes in problem markers.</li>
			<li>added option to perform full build when managed class files are modified</li>
			<li>added option to signal fall-through switch cases.</li>
			<li>added option for null reference analysis of local variables.</li>
			<li>added partial support for statement recovery in Parser</li>
			<li>added batch compiler <code>discouraged</code> and <code>forbidden</code> options</li>
			<li>added support to compute the stack map frames</li>
			<li>added optional problem to signal method parameter assignments</li>
			<li>modified some javadoc options default value to reduce number of initial warnings</li>
			<li>added optional problem to signal unused label</li>
			<li>added optional problems for raw type references</li>
			<li>added API to extend problem definitions with notion of problem category and marker type</li>
			<li>leveraged optional problem for unnecessary cast</li>
		</ul>

	<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
	<b>Java Model</b>
		<ul>
			<li>leveraged @Deprecated annotation visibility in model</li>
			<li>leveraged accomodation of very big JAR files (i.e. containing lots of packages)</li>
			<li>removed unnecessary API for overriding method</li>
			<li>added support for depending projects with specific builder</li>
			<li>added API to know whether a variable is a parameter or not</li>
			<li>added API to transform a binding key into a resolved signature</li>
			<li>added marker category attribute onto Java problem markers</li>
			<li>added API for editing compilation units outside the workspace</li>
			<li>added full EFS support</li>
			<li>added support for optional classpath entries</li>
			<li>added API to enable statements recovery for reconcile operation</li>
			<li>added API to indicate that a rule should be ignored if a better rule is found</li>
			<li>added API to find secondary types while searching for type on a project</li>
			<li>added API to change the output location as well as the classpath without touching resources.</li>
			<li>added JavaCore constant to retrieve the Java source content type from the content type manager</li>
			<li>added API to set the classpath without touching the .classpath file.</li>
			<li>added API to return the relative position of the member in the source.</li>
			<li>added API to create a new working copy without an underlying resource.</li>
			<li>modified JavaCore initialization not to use a specific job</li>
			<li>added API for Java-like extensions</li>
			<li>added API to get column and line number in a compilation unit</li>
			<li>added API that returns the invented names arg0...argn for a binary method.</li>
			<li>added API that finds the line separator for the given Java element.</li>
			<li>added API to get first leading and last trailing node comment in a compilation unit</li>
			<li>added support for participating in reconcile</li>
			<li>added API to retrieve the source range of a javadoc comment attached to the corresponding member</li>
			<li>added element delta flag when one or more categories of an element are added/changed/removed</li>
			<li>added API that allows to the creation of an class file reader object using an input stream</li>
			<li>added API that allows to register an resource listener for a given event type that runs before JDT Core</li>
			<li>added APIs to get the values of the @category tag in the Javadoc of a type, field or method</li>
			<li>added API for element delta during reconcile</li>
			<li>added API to encode and decode a classpath entry</li>
			<li>added API to create working copy on a given class file</li>
		</ul>

      <img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
      <b>DOM AST</b>
		<ul>
			<li> DOM type bindings for generics got adjusted</li>
			<li>added support of DOM/AST without initializing JDT/Core</li>
			<li>leveraged way to flag nodes as RECOVERED</li>
			<li>added API to get actual value of a property as managed by the rewriter</li>
			<li>added API for DOM ASTNode recovered information</li>
			<li>added API to enable statements recovery for ASTParser</li>
			<li>added API for the Import Rewrite</li>
			<li>added new APIs for checking modifiers</li>
			<li>modified API for attached javadoc</li>
			<li>added new API in order to retrieve the binding corresponding to the component type of the array binding</li>
		</ul>

	<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
	<b>Code Assist</b>
		<ul>
			<li>added Camel Case support in completion</li>
			<li>added API for completion context</li>
			<li>added support for completing on label in break/continue statement</li>
			<li>added option to filter deprecated types and members</li>
			<li>leveraged variable name completion</li>
			<li>added API to get all the valid warning tokens used into <code>@SuppressWarnings</code> annotations</li>
		</ul>

	<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
	<b>Code Select</b>
		<ul>
			<li>added support for completion inside javadoc comments</li>
		</ul>

	<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
	<b>Search</b>
		<ul>
			<li>added support for CamelCase search patterns</li>
			<li>added API to report local element and other elements while searching for type references</li>
			<li>added API to remove index file</li>
			<li>leveraged search for implementors to consider also subclasses</li>
		</ul>

	<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;
	<b>Code Formatter</b>
		<ul>
			<li>updated Java conventions built-in code formatter profile to reflect the tab size at 8</li>
			<li>added option to indent body declarations compare to its enclosing annotation declaration header</li>
			<li>added option to insert a new line in an empty annotation declaration</li>
			<li>added support to format code in a headless environment</li>
			<li>added API to return the indentation string corresponding to the given indentation level.</li>
			<li>added support for indentations</li>
		</ul>
	</div>
	
	<div class="homeitem3col">
	<a name="RELEASE"></a>
	<h3>Release Process</h3>
	</div>

		<div class="homeitem3col">
			<a name="BUG_RESOLUTION"></a>
			<h3>Bug Resolution</h3>
      <ul>
        <li>Rollup 3.2.2, 2006/??/?? : 
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2.2&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2.2&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.2">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.2">resolved</a>)
        </li>
        <li>Rollup 3.2.1, 2006/09/29 : 
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2.1&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2.1&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.1">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.1">resolved</a>)
        </li>
        <li>Overall R3.2, 2006/06/29 : 
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2&amp;target_milestone=3.2+M1&amp;target_milestone=3.2+M2&amp;target_milestone=3.2+M3&amp;target_milestone=3.2+M4&amp;target_milestone=3.2+M5&amp;target_milestone=3.2+M6&amp;target_milestone=3.2+M7&amp;target_milestone=3.2+RC1&amp;target_milestone=3.2+RC2&amp;target_milestone=3.2+RC3&amp;target_milestone=3.2+RC4&amp;target_milestone=3.2+RC5&amp;target_milestone=3.2+RC6&amp;target_milestone=3.2+RC7&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2&amp;target_milestone=3.2+M1&amp;target_milestone=3.2+M2&amp;target_milestone=3.2+M3&amp;target_milestone=3.2+M4&amp;target_milestone=3.2+M5&amp;target_milestone=3.2+M6&amp;target_milestone=3.2+M7&amp;target_milestone=3.2+RC1&amp;target_milestone=3.2+RC2&amp;target_milestone=3.2+RC3&amp;target_milestone=3.2+RC4&amp;target_milestone=3.2+RC5&amp;target_milestone=3.2+RC6&amp;target_milestone=3.2+RC7">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2&amp;target_milestone=3.2+M1&amp;target_milestone=3.2+M2&amp;target_milestone=3.2+M3&amp;target_milestone=3.2+M4&amp;target_milestone=3.2+M5&amp;target_milestone=3.2+M6&amp;target_milestone=3.2+M7&amp;target_milestone=3.2+RC1&amp;target_milestone=3.2+RC2&amp;target_milestone=3.2+RC3&amp;target_milestone=3.2+RC4&amp;target_milestone=3.2+RC5&amp;target_milestone=3.2+RC6&amp;target_milestone=3.2+RC7">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2&amp;target_milestone=3.2+M1&amp;target_milestone=3.2+M2&amp;target_milestone=3.2+M3&amp;target_milestone=3.2+M4&amp;target_milestone=3.2+M5&amp;target_milestone=3.2+M6&amp;target_milestone=3.2+M7&amp;target_milestone=3.2+RC1&amp;target_milestone=3.2+RC2&amp;target_milestone=3.2+RC3&amp;target_milestone=3.2+RC4&amp;target_milestone=3.2+RC5&amp;target_milestone=3.2+RC6&amp;target_milestone=3.2+RC7">resolved</a>)
        </li>
        <li>Release Candidate-7, 2006/06/02 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+RC7&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC7&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC7">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC7">resolved</a>)
        </li>
        <li>Release Candidate-6, 2006/05/26 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+RC6&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC6&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC6">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC6">resolved</a>)
        </li>
        <li>Release Candidate-5, 2006/05/19 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+RC5&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC5&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC5">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC5">resolved</a>)
        </li>
        <li>Release Candidate-4, 2006/05/12:
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+RC4&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC4&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC4">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC4">resolved</a>)
        </li>
        <li>Release Candidate-3, 2006/05/05 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+RC3&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC3&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC3">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC3">resolved</a>)
        </li>
        <li>Release Candidate-2, 2006/04/28 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+RC2&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC2&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC2">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC2">resolved</a>)
        </li>
        <li>Release Candidate-1, 2006/04/13 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+RC1&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC1&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC1">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+RC1">resolved</a>)
        </li>
        <li>Milestone-6, 2006/03/31 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+M6&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+M6&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M6">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M6">resolved</a>)
        </li>
        <li>Milestone-5, 2006/02/17 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+M5&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+M5&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M5">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M5">resolved</a>)
        </li>
        <li>Milestone-4, 2005/12/16 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+M4&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+M4&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M4">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M4">resolved</a>)
        </li>
        <li>Milestone-3, 2005/11/04 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+M3&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+M3&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M3">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M3">resolved</a>)
        </li>
        <li>Milestone-2, 2005/09/23 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+M2&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+M2&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M2">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M2">resolved</a>)
        </li>
        <li>Milestone-1, 2005/08/12 :
            (<a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.2+M1&amp;target_milestone=3.1.1&amp;resolution=FIXED">fixed</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2+M1&amp;target_milestone=3.1.1&amp;namedcmd=Assigned">all</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M1&amp;target_milestone=3.1.1">unresolved</a>)
            (<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2+M1&amp;target_milestone=3.1.1">resolved</a>)
        </li>
      </ul>
		</div>
		<div class="homeitem3col">
			<a name="UPDATES"></a>
			<h3>Updates</h3>
			<p>These patches are not yet part of any official release or rollup; but provide an early access to the next delivery for
               quality assessment. If you find any regression using these patches, please inform the JDT/Core team by entering a 
               <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=JDT">bug report</a>
			</p>
			<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Batch compiler</b>
      <table>
          <tr>
            <td valign="top"><a href="../patches/ecj_3.2.2.jar">
                             <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Binary)</a></td>
            <td valign="top">posted on 2007/10/26, 1,26 MB (click on picture)</td>
          </tr>
          <tr>
            <td valign="top"><a href="../patches/ecj_3.2.2src.zip">
                             <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Source)</a></td>
            <td valign="top">posted on 2007/10/26, 1,01 MB (click on picture)</td>
           </tr>         
           <tr>
            <td valign="top"><i>extracted from</i></td>
            <td valign="top">build 3.2</td>
          </tr>
          </tr>
	  </table>
	<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">
	&nbsp;<b>3.2.3 preview </b>
      <table>
          <tr>
            <td valign="top"><a href="../patches/org.eclipse.jdt.core_3.2.6.z20080111-1240.jar">
                             <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20"></a></td>
            <td valign="top">posted on 2008/01/14, 6.98 MB (click on picture), sources included</td>
          </tr>
          <tr>
            <td valign="top"><i>applies to</i></td>
            <td valign="top">Rollup 3.2.2</td>
          </tr>
          <tr>
            <td valign="top"><i>description</i> </td>
            <td valign="top">Early preview of 3.2.3 build. <br>
            				<b>Note:</b> No official 3.2.3 is planned so far, this is only a courtesy of the JDT/Core team. <br>
            				Plug-in revision ID is "3.2.6".Corresponding sources are versionned using tag
							<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.core/?only_with_tag=v_689_R32x">v_689_R32x</a>
							<br>
                            Addresses the following issues (since 3.2.2): <br>
							<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=214981">214981</a>
							Race condition allowed with SetClasspathOperation
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=213723">213723</a>
							JDT not resolving classpath references to jars in other projects
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=208263">208263</a>
							[ast rewrite] performance problems with lots of changes
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=193210">193210</a>
							[1.5][compiler] Internal compiler error java.lang.NullPointerException
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=154984">154984</a>
							Jars in library not recognized sometimes.
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=162054">162054</a>
							[build] Got a failure on MultiProjectTests.testCycle5 on my speedy test box...
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=181270">181270</a>
							[1.5][compiler] Class literal of array of type parameter should be rejected
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=184957">184957</a>
							[1.5][compiler] Compiler crash
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=182930">182930</a>
							JavaModelCache's size grows when displaying type hierarchy
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=161175">161175</a>
							JarPackageFragmentRoot slow to initialize
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=172444">172444</a>
							build workspace operation launched after each startup
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=179699">179699</a>
							type.newTypeHierarchy doesn't cancel
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=138309">138309</a>
							[index] Optimize index files path storage in DiskIndex and IndexManager
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=171653">171653</a>
							[index] Java Tooling initialization performance issue after startup
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=183216">183216</a>
							[1.5][compiler] Cannot refer to a generic member type using a non static subclass of the enclosing type
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=151787">151787</a>
							[compiler] compiler allows assignment to final field in constructor other than through 'this'
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=176118">176118</a>
							Missing library classes kill Intellisense without Error
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=177194">177194</a>
							[1.5][compiler] preserveAllLocals option has undesirable side-effect when invoking generic method
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=177372">177372</a>
							[1.5][compiler] Missing unboxing conversion when no value required from message send
							<br><a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=177115">177115</a>
							NullPointerException in BindingKeyResolver.consumeTypeVariable(...)         
							<br>
                             Also see corresponding 
                             <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5274.2.108&amp;content-type=text/html">build notes</a>.			
			</table>
		</div>
		<div class="homeitem3col">
			<a name="SOURCES"></a>
			<h3>Getting the sources</h3>
      <ul>
		<li>Make sure to target a recent SDK R3.2.x <a href="http://download.eclipse.org/downloads">maintenance build</a>.
		</li>
        <li>Define a CVS connection to server <code>pserver:anonymous@dev.eclipse.org:/cvsroot/eclipse</code>
        </li>
        <li>Check out the <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.core/?only_with_tag=R3_2_maintenance"><code>R3_2_maintenance</code></a>
        	branch of the project <code>org.eclipse.jdt.core</code>. </li>
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
