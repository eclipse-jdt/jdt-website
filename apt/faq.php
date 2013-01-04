<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "JDT-APT FAQ";
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
		<h3>Frequently Asked Questions</h3>
		<ol>
			<li>
				<strong>What are annotations?</strong>
				<p>
					Annotations are a simple metadata facility added to the Java
					language. Annotations can be used anywhere a modifier can be used,
					like <code>public</code>, <code>static</code>, and <code>final</code>.
					These annotations can be used at build or run-time in myriad ways.
					Here's an example annotation:
				<p>
				<pre>
public class Foo {

  <font color="#FF0000">@Override</font>
  public int hashCode() {
    return super.hashCode() ^ 1;
  }
}
				</pre>
				<p>
					This indicates that the method <code>hashCode</code>
					must override a method with the same signature in its superclass. 
					If the method name were spelled wrong, a processor could notice 
					this and issue an error.
				</p>
				<p>
					Standard uses for annotation processors include EJB and Web Services generators.
				</p>
				<p>
					Additional information on annotations can be found in the Java documentation 
					<a href="http://java.sun.com/j2se/1.5.0/docs/guide/language/annotations.html">here</a>.
				</p>
			</li>
			<li>
				<strong>When were annotations added to the Java language?</strong>
				<p>Java 5 added annotation to the core language.</p>
			</li>
			<li>
				<strong>How does jdt-apt extend basic JDT support?</strong>
				<p>
					We hook into the JDT compiler. If an annotation is detected, we
					dispatch to any processors that claim that annotation. We then
					provide an implementation of the mirror APIs over the JDT
					typesystem. If a processor creates a new source file, we then call
					the necessary JDT APIs to perform compilation on that new file.
				</p>
			</li>
			<li>
				<strong>Can I use an existing processor I wrote for the commandline "apt" tool inside of eclipse?</strong>
				<p>
					Yes! This is one of the major goals of the jdt-apt project: you
					should be able to use an existing processor directly inside of
					eclipse and get an interactive experience, provided your processor
					is reasonably quick and efficient.
				</p>
			</li>
			<li>
				<strong>Are the errors from my processor different from other JDT errors?</strong>
				<p>
					No. They're treated just like any other error.
				</p>
			</li>
			<li>
				<strong>Can I get quick-fixes inside annotation values?</strong>
				<p>
					Yes. When you create your error markers via the Messager API,
					downcast to EclipseMessager, and use the printFixable...() APIs.
					These error markers can then be processed with a QuickFixProcessor
					via the JDT APIs in Eclipse.
				</p>
			</li>
		</ol>
	</div>
</div>
<?php
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>