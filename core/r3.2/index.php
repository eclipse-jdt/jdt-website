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
 				href="http://www.eclipse.org/eclipse/development/eclipse_maintenance_schedule_3_2_x.html">official
				plan</a>.</p>
			<b> Disclaimer: This section is still under construction and will be finalized for official 3.2.0 delivery...</b> 

<!-- Next rollups... To Be Updated when they will come up...

		<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Rollup 3.1.2 - completed on 2006/01/18</b>
      <ul>
        <li> preview available in <a href="#updates">update</a> area. </li>
        <li> bug fixing :
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1.2">all
planned fixes</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.2">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.2">resolved</a>)
        </li>
      </ul>
      <img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Rollup 3.1.2 - completed on 2006/01/26</b>
      <ul>
        <li> available on the <a
 href="http://www.eclipse.org/downloads/index.php" target="_new">download</a>
area. </li>
        <li> final <a
 href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.4432.2.155&amp;content-type=text/html">build
notes</a> </li>
        <li> bug fixing : (<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1.2">all
planned fixes</a>) (<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.2">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.2">resolved</a>)
        </li>
      </ul>
-->
      	<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
      		height="16" width="16">&nbsp;<b>Rollup 3.2.1 - NOT PLANNED YET!</b>
		<ul>
			<li> available on the <a href="http://www.eclipse.org/downloads/index.php" target="_new">download</a> area.</li>
			<li> final <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5259.35&amp;content-type=text/html">build notes</a> </li>
			<li> bug fixing :
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.2.1">all planned fixes</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.1">unresolved</a>)
			(<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.2.1">resolved</a>)
			</li>
		</ul>
		<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Release 3.2.0 - completed on 2006/06/??</b>
		<ul>
			<li> available soon on the <a href="http://www.eclipse.org/downloads/index.php" target="new">download</a> area. </li>
			<li> final <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.5274.2.1&amp;content-type=text/html">build
notes</a> </li>

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
			<li><img src="../progress.gif" height="5" width="14"> Provide completion in javadoc (no longer done in UI layer) 
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
			<p>Work items completed in the 3.2 stream, also see <a
 href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?content-type=text/html">build
notes</a>.</p>
		</div>
		<div class="homeitem3col">
			<a name="BUG_RESOLUTION"></a>
			<h3>Bug Resolution</h3>
      <ul>
        <li>Overall R3.2, 2006/06/?? : 
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
               <a href="http://dev.eclipse.org/bugs/">bug report</a>
			</p>
			<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>Batch compiler</b>
      <table>
          <tr>
            <td valign="top"><a href="../patches/ecj_3.2RC3.jar">
                             <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Binary)</a></td>
            <td valign="top">posted on 2006/05/09, 1,24 MB (click on picture)</td>
          </tr>
          <tr>
            <td valign="top"><a href="../patches/ecj_3.2RC3src.zip">
                             <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20">(Source)</a></td>
            <td valign="top">posted on 2006/05/09, 1,0 MB (click on picture)</td>
           </tr>         
           <tr>
            <td valign="top"><i>extracted from</i></td>
            <td valign="top">build 3.2RC3</td>
          </tr>
          </tr>
	  </table>
			<p><img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0" height="16" width="16">&nbsp;<b>3.2 integration preview </b>
      <table>
          <tr>
            <td valign="top"><a href="../patches/org.eclipse.jdt.core_3.2.0.200604051115.jar">
                             <img src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20"></a></td>
            <td valign="top">posted on 2006/04/05, 3.78 MB (click on picture)</td>
          </tr>
          <tr>
            <td valign="top"><i>applies to</i></td>
            <td valign="top">build 3.2M6</td>
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
		</div>
		<div class="homeitem3col">
			<a name="SOURCES"></a>
			<h3>Getting the sources</h3>
      <ul>
        <li>Define a CVS connection to server <code>pserver:anonymous@dev.eclipse.org:/home/eclipse,</code>
        </li>
        <li>Check out the <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.core/?only_with_tag=R3_2_maintenance"><code>R3_2_maintenance</code></a>
        	branch of the project <code>org.eclipse.jdt.core</code>. </li>
        <li>Make sure to import the prerequisite plug-ins (usually from a SDK R3.2 most recent 
            <a href="http://www.eclipse.org/downloads/index.php" target="new">integration build</a>). Prerequisite plug-ins are already 
            referenced on the project build path (<code>.classpath</code> file). </li>
        <li>The sources of this project are 1.4 compatible. The compiler compliance level should thus be set to 1.4. </li>
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
