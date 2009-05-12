<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT Core Component";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse";
	$pageAuthor		= "JDT/Core Team";
	
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
		<div class="homeitem3col">
			<a name="DEV"></a>
			<h2><b>Development Resources</b></h2>
			<p>If you are already a JDT Core developer, check out the <a href="dev.php">Development
Resources</a>. In particular, this section summarizes the various development streams.</p>
		</div>
		<div class="homeitem3col">
			<a name="JDT_CORE"></a>
			<h2><b>JDT Core</b></h2>
			<p>JDT Core is the Java infrastructure of the Java
IDE. It includes:</p>
<ul>
<li>
An incremental Java compiler. Implemented as an Eclipse
builder, it is based on technology evolved from VisualAge for Java compiler.
In particular, it allows to run and debug code which still contains unresolved
errors.</li>

<li>
A Java Model that provides API for navigating the
Java element tree. The Java element tree defines a Java centric view of
a project. It surfaces elements like package fragments, compilation units,
binary classes, types, methods, fields.&nbsp;</li>

<li>
A Java Document Model providing API for manipulating
a structured Java source document.</li>

<li>
Code assist and code select support.</li>

<li>
An indexed based search infrastructure that is used
for searching, code assist, type hierarchy computation, and refactoring.
The Java search engine can accurately find precise matches either in sources
or binaries.</li>

<li>
Evaluation support either in a scrapbook page or
a debugger context.</li>

<li>
Source code formatter</li>
</ul>
<p>The JDT Core infrastructure has no built-in JDK version
dependencies, it also does not depend on any particular Java UI and can
be run headless.</p>
		</div>
		<div class="homeitem3col">
			<a name="HAPPENING"></a>
			<h2><b>What&#8217;s Happening?</b></h2>
				<h3>R3.5 Development</h3>
<ul>
  <li>Most active development goes into this stream.
  </li>
  <li> The 3.5 plan is posted <a href="r3.5/plan.php">here</a>.
  </li>
  <li> The 3.5 next-milestone plan is posted <a href="r3.5/plan.php#current-milestone">here</a>.
  </li>
  <li> Patch available in <a href="r3.5/index.php#UPDATES">update</a> area (for testing purpose).
  </li>
</ul>
				<h3>R3.4 Maintenance</h3>
<ul>
  <li> Release 3.4 available on the <a href=" http://download.eclipse.org/eclipse/downloads">download</a> area.
  </li>
  <li> Latest information on further maintenance is available <a href="r3.4/index.php#maintenance">here</a>.
  </li>
  <li> Patch available in <a href="r3.4/index.php#UPDATES">update</a> area (for testing purpose).
  </li>
</ul>
				<h3>R3.3 Maintenance</h3>
<ul>
  <li> Rollup 3.3.2 available on the <a href=" http://download.eclipse.org/eclipse/downloads">download</a> area.
  </li>
  <li> Latest information on further maintenance is available <a href="r3.3/index.php#maintenance">here</a>.
  </li>
  <li> Patch available in <a href="r3.3/index.php#UPDATES">update</a> area (for testing purpose).
  </li>
</ul>
				<h3>R3.2 Maintenance</h3>
<ul>
  <li> Rollup 3.2.2 available on the <a href=" http://archive.eclipse.org/eclipse/downloads">download</a> area.
  </li>
  <li> Latest information on further maintenance is available <a href="r3.2/index.php#maintenance">here</a>.
  </li>
  <li> Patch available in <a href="r3.2/index.php#UPDATES">update</a> area (for testing purpose).
  </li>
</ul>
				<h3>R3.1 Maintenance</h3>
<ul>
  <li> Rollup 3.1.2 available on the <a href="http://archive.eclipse.org/eclipse/downloads/index.php">download</a> area.
  </li>
  <li> Latest information on further maintenance is available <a href="r3.1/index.php#maintenance">here</a>.
  </li>
  <li> Patch available in <a href="r3.1/index.php#UPDATES">update</a> area (for testing purpose).
  </li>
</ul>
				<h3>R3.0 Maintenance</h3>
<ul>
  <li> Rollup 3.0.2 available on the <a href="http://archive.eclipse.org/eclipse/downloads/index.php">download</a> area.
  </li>
  <li> Latest information on further maintenance is available <a href="r3.0/main.html#maintenance">here</a>.
  </li>
  <li> Patch available in <a href="r3.0/main.html#updates">update</a> area (for testing purpose).
  </li>
</ul>
				<h3>R2.1 Maintenance</h3>
<ul>
  <li> Rollup 2.1.3 available on the <a href="http://archive.eclipse.org/eclipse/downloads/index.php">download</a> area.
  </li>
  <li> Latest information on further maintenance is available <a href="r2.1/main.html#maintenance">here</a>.
  </li>
  <li> Patch available in <a href="r2.1/main.html#updates">update</a> area (for testing purpose).
  </li>
</ul>
				<h3>R2.0 Maintenance</h3>
<ul>
  <li> Rollup 2.0.2 available on the <a href="http://archive.eclipse.org/eclipse/downloads/index.php">download</a> area.
  </li>
  <li> Latest information on further maintenance is available <a href="r2.0/main.html#maintenance">here</a>.
  </li>
  <li> Patch available in <a href="r2.0/main.html#updates">update</a> area (for testing purpose).
  </li>
</ul>
				<h3>R1.0 Maintenance</h3>
<ul>
  <li> Release 1.0 available on the <a href="http://archive.eclipse.org/eclipse/downloads/index.php">download</a> area.
  </li>
  <li> Latest information on further maintenance is available <a href="r1.0/main.html#maintenance">here</a>.
  </li>
  <li> Patch available in <a href="r1.0/main.html#updates">update</a> area (for testing purpose).
  </li>
</ul>
<p>For more detailed information, check out the <a href="dev.php">Development Resources</a>.</p>
		</div>
		<div class="homeitem3col">
			<a name="INVOLVED"></a>
			<h2><b>Get Involved!</b></h2>
			<p>If you are interested in participating in the development of the JDT
Core component, check out the developer&#8217;
s mailing list:<blockquote><a href="http://dev.eclipse.org/mailman/listinfo/jdt-core-dev">jdt-core-dev@eclipse.org</a>.</blockquote>
Chat with people there about your problems and interests, and find out
what you can do to help.
<p>The JDT Core team is open to suggestions for improving both the experience
of Java developers using the Java IDE, and clients to the JDT Core APIs.
If you are interested in Java language semantics, compiler technology,
Java tooling in general (behavior of our current tools, suggestions for
new tools), then please interact with the JDT Core team so that we can
build an even better Java IDE.</p>
<p>For more detailed information, check out the <a href="dev.php">Development
Resources</a>.</p>
			</p>
		</div>		
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick links</h6>
			<ul>
				<li><a href="#DEV">Development Resources</a></li>
				<li><a href="#JDT_CORE">JDT Core</a></li>
				<li><a href="#HAPPENING">What&#8217;s Happening?</a></li>
				<li><a href="#INVOLVED">Get Involved!</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
