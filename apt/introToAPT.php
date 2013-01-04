<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Introduction to Annotation Processing in Eclipse";
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
		<h3>Disclaimer</h3>
		<p>
			This is a BETA release. All APIs contained herein are provisional, and subject to change with subsequent updates.
		</p>
	</div>
	<div class="homeitem3col">
		<h3>Testing your APT installation</h3>
		<p>
			The APT feature is part of Eclipse 3.2, as of M5a and later. If you wish to use Eclipse 3.1, 
			see the <a href="installOn3.1.html">3.1 installation instructions</a>.
		</p>
		<p>You can verify the installation on either version this way:</p>
		<ul>
			<li>Create a Java project which contains the file <a href="APTDemo.jar">APTDemo.jar</a> in its filesystem.</li>
			<li>Open the project properties dialog, and go to the Java&nbsp;Compiler / Annotation&nbsp;Processing panel.</li>
			<li>Check "Enable Project Specific Settings" and "Enable Annotation Processing".</li>
			<li>Now open the Java&nbsp;Compiler / Annotation&nbsp;Processing / Factory&nbsp;Path panel.</li>
			<li>Click on Add Jars... and add the APTDemo.jar.</li>
			<li>Create a new Class, and annotate the class in the source file with @DemoAnnotation(what = "spam").</li>
		</ul>
		<p>The "spam" value should be squiggled, with the message "I don't like spam".</p>
		<ul>
			<li>Annotate the same class with @TypeGeneratingAnnotation</li>
			<li>Build the project.</li>
		</ul>
		<p>
			A new source directory should appear in the project, named .apt_generated, that will contain a
			generated Java source file called GeneratedFileTest.java. <i>The generated source directory
			will not be visible by default in the Package Explorer, because it starts with a '.', but it
			will be visible in the Navigator.</i>
		</p>
	</div>
	<div class="homeitem3col">
		<h3>Installing and Configuring Annotation Processors</h3>
		<p>
			An annotation processor can run in Eclipse from a .jar file contained in a project, a .jar file 
			external to the workspace, or a plugin. Jars are added to a workspace or project though 
			the Properties Dialog, Factory Path pane:
		</p>
		<img src="PropertiesDialog.gif">
		<p>
			For an example of how to set up a plugin project to develop a processor, download 
			<a href="APTDemo.jar">APTDemo.jar</a> and explode it into a workspace and import it as an
			existing project. Eclipse locates plugins along a factory path, which can be configured at the
			workspace or project level. Workspace configuration is picked up as the default for projects
			that have annotation processing enabled (see the Properties dialog shown above). If the
			factory path is configured for an individual project, that project will no longer see changes
			to the workspace configuration; you will have to update it manually.
		</p>
		<p>
			A plugin that contains a factory must extend the annotationProcessorFactory extension
			point. Here is the example from the plugin in APTDemo.jar. Each Factory class contained in the
			plugin must be named in the class=attribute.
		</p>
			<pre>
   &lt;extension
         point="org.eclipse.jdt.apt.core.annotationProcessorFactory">
      &lt;factories enableDefault="true">
	      &lt;factory
	         class="demo.TypeGeneratingAnnotationProcessorFactory">
	      &lt;/factory>
	      &lt;factory
	         class="demo.DemoAnnotationProcessorFactory">
	      &lt;/factory>
      &lt;/factories>
   &lt;/extension>
			</pre>
		<p>
			More details about this will follow when we deliver an SDK version of the feature.
		</p>
	</div>
	<div class="homeitem3col">
		<h3>Debugging Annotation Processors in Eclipse</h3>
		<p>
			To debug an annotation processor it must be
			run from a plugin. You develop your code in the plugin, and then debug it by annotating
			source code in a spawned instance of Eclipse. The debugging instance needs the annotation
			declaration, the factory, and the processor. The spawned instance only needs access to the
			declaration.
		</p>
	</div>
	<div class="homeitem3col">
		<h3>Problems and Bugs</h3>
		<div>
			<p>Symptom: nothing happens, no errors in log file.</p>
			<ul>
				<li>Make sure that annotation processing is enabled in the Project Properties.</li>
			</ul>
			<p>Symptom: annotations not getting processed, log file contains "Bundle not resolved"
				warnings, ClassNotFound errors or "No Classloader found" errors.</p>
			<ul>
				<li>Make sure that you are using a 1.5 JVM to run Eclipse. Although most of Eclipse
					can run on a 1.4 JVM, the APT plugins require a 1.5 JVM.</li>
			</ul>
			<p>Please post questions to the JDT newsgroup (eclipse.tools.jdt). Post bugs related to
				this feature in Bugzilla, under Product JDT, Component APT.
			</p>
		</div>
	</div>
	<div class="homeitem3col">
		<h3>Feature Enable/Disable in Eclipse 3.1.2</h3>
		<p>
			If you installed APT as an update to
			Eclipse 3.1.2 and you have a problem with the compiler, you can disable the feature
			through the Product Configuration dialog (Menu item Help / Software&nbsp;Updates /
			Manage&nbsp;Configuration).
		</p>
		<img src="ProductConfigDialog.jpg">
		<p>
			Select the JdtAptFeature from your Eclipse installation and click <b>Disable</b>. Your
			Eclipse will now use the unchanged, original version of the compiler. To re-enable the
			feature you need to click on the Show Disabled Features on the toolbar of this dialog.
		</p>
	</div>
</div>
<?php
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>