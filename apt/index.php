<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse JDT-APT Project";
$pageKeywords	= "JDT, Java, UI, Debug, APT, java, development, tools, java ide, Eclipse";
$pageAuthor		= "JDT/APT team";
# End: page-specific settings
# Paste your HTML content between the markers!
ob_start();
?>

<div id="midcolumn">
	<h1>
		<?= $pageTitle ?>
	</h1>
	<div class="homeitem3col">
		<h3>What is the JDT-APT project?</h3>
		<p>
			The JDT-APT project provides plugins that add Java 5 annotation
			processing support to Eclipse. A Java annotation processor is a
			compiler plug-in that can gather information about source code as it
			is being compiled, generate additional Java types or other resource
			files, and post warnings and errors. Eclipse 3.2 provided support for
			annotation processors using the <a href="http://java.sun.com/j2se/1.5.0/docs/guide/apt/mirror/overview-summary.html">Java 5 Mirror APIs</a>,
			and Eclipse 3.3 added support for processors using the <a href="http://java.sun.com/javase/6/docs/api/javax/annotation/processing/package-summary.html">
				Java 6 annotation processing APIs</a>.
		</p>
		<p>
			You can view the presentation given at JavaOne 2005 during a session
			on APT that describes some of the goals and technical details <a
				href="javaone_apt.ppt">here</a>. At EclipseCon 2006 we made a <a
				href="Eclipsecon2006.ppt">presentation</a> on APT do's and don'ts,
			and at EclipseCon 2007 this was developed into a <a
				href="eclipsecon2007.zip">tutorial</a> on writing annotation
			processors for Eclipse, including some sample code and more
			discussion of techniques to achieve good performance. At EclipseCon
			2008 we gave a <a href="eclipsecon2008.ppt">presentation</a> on
			annotations (which briefly mentions annotation processors but does
			not go into depth) that may be of interest to those looking for
			background material or for alternative strategies to annotation
			processing.
		</p>
		<p>
			Additional frequently asked questions and their answers can be found
			in our <a href="faq.php">FAQ</a>.
		</p>
	</div>
	<div class="homeitem3col">
		<h3>What is APT?</h3>
		<p>
			APT stands for Annotation Processing Tool. Sun shipped an API for APT
			in JDK 1.5, which can be viewed at <a
				href="http://java.sun.com/j2se/1.5.0/docs/guide/apt/mirror/index.html">
				http://java.sun.com/j2se/1.5.0/docs/guide/apt/mirror/index.html</a>.
			Sun also included a commandline implementation of APT in JDK 1.5. You
			can find documentation for it at <a
				href="http://java.sun.com/j2se/1.5.0/docs/guide/apt/index.html"
				target="_blank">http://java.sun.com/j2se/1.5.0/docs/guide/apt/index.html</a>.
			In JDK 6, the API was modified considerably and standardized through
			JSR-269, and the Sun implementation was built into the javac compiler
			rather than requiring a standalone tool.
		</p>
		<p>To quote from Sun's documentation:</p>
		<p>
			<code>
				apt is a command-line utility for annotation processing. It includes
				a set of reflective APIs and supporting infrastructure to process
				program annotations (JSR 175). These reflective APIs provide a
				build-time, source-based, read-only view of program structure. They
				are designed to cleanly model the Java<sup><small>TM</small>
				</sup> programming language's type system after the addition of
				generics (JSR 14).
			</code>
		</p>
		<p>
			So, APT provides a means for generating files and compiling new
			java classes based on annotations found in your source code.
		</p>
		<p>
			JDT-APT is not based on Sun's implementation, but rather is a
			separate implementation of the APT APIs that runs entirely within
			Eclipse.
		</p>
	</div>
	<div class="homeitem3col">
		<h3>How do I get started?</h3>
		<p>
			If all you need to do is use an annotation processor, you may not
			need to do anything at all! Many project creation wizards will
			automatically install and enable the necessary processors. To check
			whether this is the case, or to install and enable your own
			processors, use the Java Compiler -&gt; Annotation Processing pane of
			the project properties.</p>
		<p>
			If you need to write your own annotation processor, see <a
				href="introToAPT.php">Intro to APT</a> to get started using APT,
			and also see the EclipseCon 2007 tutorial mentioned above.
		</p>
	</div>
	<div class="homeitem3col">
		<h3>How can I contribute?</h3>
		<p>
			If you're interested in contributing, start by checking the code out of CVS. 
			See the instructions <a href="howtobuildme.txt">here</a>.
		</p>
		<p>
			You can also check out the mailing list, 
			<a href="http://dev.eclipse.org/mailman/listinfo/jdt-apt-dev">jdt-apt-dev@eclipse.org</a>,
			or post questions to the eclipse.tools.jdt 
			<a href="http://www.eclipse.org/newsgroups/">newsgroup</a>. 
			The mailing list is primarily for announcements and discussion by people working
			on the APT tooling in Eclipse; if you have technical questions, it is
			best to use the newsgroup.
		</p>
	</div>
</div>
<?php
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>