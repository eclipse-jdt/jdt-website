<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT UI Component Development Resources";
	$pageKeywords	= "JDT/UI, JDT, Java development tools UI, Java, java, development, tools, java ide, Eclipse";
	$pageAuthor		= "JDT/UI Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
ob_start();
?>
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		
		<div class="homeitem3col">
			<a name="bugs"></a>
			<h3>Bugs</h3>
			<ul>
				<li>
					<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&priority=P1&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=JDT&version=&component=UI&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time" target="_top">Priority 1</a>
				</li>
				<li>
					<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=JDT&component=UI&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&newqueryname=&order=Reuse%2Bsame%2Bsort%2Bas%2Blast%2Btime" target="_top">
					New, Assigned and Reopened</a>
				</li>
				<li>
					<a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=7&votes=&chfield=resolution&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=JDT&version=&component=UI&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time" target="_top">
					Resolved in the last week</a>
				</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<a name="documents"></a>
			<h3>JDT Developer Documents</h3>
			<ul>
				<li><a href="doc/bug-annotation.php">bug annotation conventions</a></li>
				<li><a href="smoke-test/smoke.html">smoke test</a></li>
				<li><a href="ui-messages.php">common ui message issues</a></li>
				<li><a href="http://dev.eclipse.org/conventions.html">coding conventions</a>
					<p>
					    Additional rules used in the JDT UI project:
					    <ul>
					      <li>instance variables start with an <b>f</b> prefix</li>
					      <li>non final static variables start with an <b>fg</b> prefix</li>
					      <li>we use the compact assignment form (<b>a= b</b>, i.e. no space on the left of equals)</li>
					    </ul>
					</p>
				</li>
				<li><a href="M6LeakPass.html">Leak Pass Scenarios</a></li>
			</ul>
		</div>

		<div class="homeitem3col">
			<a name="articles"></a>
			<h3>Articles and Talks</h3>
			<ul>
				<li><a href="articles/JDT_fundamentals2010.zip">JDT Fundamentals</a>
					(<a href="http://www.eclipsecon.org/2010/sessions/?page=sessions&id=1339">Tutorial at EclipseCon 2010</a>)</li>
				<li><a href="articles/JDT_fundamentals.zip">JDT Fundamentals</a>
					(<a href="http://www.eclipsecon.org/2008/index.php?page=sub/&id=68">Tutorial at EclipseCon 2008</a>)</li>
				<li><a href="articles/EclipseCon-2007-Refactoring-Talk-final.zip">Unleash the Power of Refactorings in your Products</a>
					(<a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3786">Talk at EclipseCon 2007</a>)</li>
				<li><a href="http://www.eclipse.org/articles/article.php?file=Article-Unleashing-the-Power-of-Refactoring/index.html">
					Unleashing the Power of Refactoring</a> (Article at Eclipse Corner)</li>
				<li><a href="http://www.eclipse.org/articles/article.php?file=Article-JavaCodeManipulation_AST/index.html">
					Abstract Syntax Tree</a> (Article at Eclipse Corner)</li>
				<li><a href="http://www.eclipse.org/resources/?category=Java%20development%20tools%20(JDT)">more Eclipse Corner articles</a></li>
			</ul>
		</div>

<?php
// outdated:
//		<div class="homeitem3col">
//			<a name="links"></a>
//			<h3>Links</h3>
//			<ul>
//				<li><a href="http://mmoebius.gmxhome.de/eclipse/eclispe.htm">JDT Easter Eggs</a> collected by Martin Moebius</li>
//			</ul>
//		</div>
?>
		<div class="homeitem3col">
			<a name="plugins"></a>
			<h3>Plug-ins</h3>
			<p>The JDT UI component consists of the following plug-ins:</p>
			<h4>Main Plug-ins:</h4>
			<ul>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.jdt.ui/">org.eclipse.jdt.ui</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.jdt.core.manipulation/">org.eclipse.jdt.core.manipulation</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.ltk.core.refactoring/">org.eclipse.ltk.core.refactoring</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.ltk.ui.refactoring/">org.eclipse.ltk.ui.refactoring</a></li>
			</ul>
			<br>
			<h4>JUnit integration:</h4>
			<ul>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.jdt.junit.core/">org.eclipse.jdt.junit.core</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.jdt.junit/">org.eclipse.jdt.junit</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.jdt.junit.runtime/">org.eclipse.jdt.junit.runtime</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.jdt.junit4.runtime/">org.eclipse.jdt.junit4.runtime</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.junit4/">org.junit4</a></li>
			</ul>
			<br>
			<h4>Tests:</h4>
			<ul>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.ltk.core.refactoring.tests/">org.eclipse.ltk.core.refactoring.tests</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.ltk.ui.refactoring.tests/">org.eclipse.ltk.ui.refactoring.tests</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.jdt.ui.tests/">org.eclipse.jdt.ui.tests</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.jdt.ui.tests.refactoring/">org.eclipse.jdt.ui.tests.refactoring</a></li>
				<li><a href="http://git.eclipse.org/c/jdt/eclipse.jdt.ui.git/tree/org.eclipse.jdt.text.tests/">org.eclipse.jdt.text.tests</a></li>
			</ul>
			<br>
			<h4>Documentation:</h4>
			<ul>
				<li><a href="http://git.eclipse.org/c/platform/eclipse.platform.common.git/tree/bundles/org.eclipse.jdt.doc.user/">org.eclipse.jdt.doc.user</a></li>
				<li><a href="http://git.eclipse.org/c/platform/eclipse.platform.common.git/tree/bundles/org.eclipse.jdt.doc.isv/">org.eclipse.jdt.doc.isv</a></li>
			</ul>
		</div>

		<div class="homeitem3col">
			<a name="lists"></a>
			<h3>Mailing List / Newsgroup</h3>
			<ul>
				<li>
					<a href="http://dev.eclipse.org/mailman/listinfo/jdt-ui-dev">jdt-ui-dev@eclipse.org</a>
					(<a href="mailto:jdt-ui-dev@eclipse.org">post</a>,
					<a href="http://dev.eclipse.org/mhonarc/lists/jdt-ui-dev/maillist.html">archives</a>)
				</li>
				<li>
					For user questions:
					<a href="news://news.eclipse.org/eclipse.tools.jdt" title="News server"/>eclipse.tools.jdt</a> (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.jdt">web interface</a>)
				</li>
			</ul>
		</div>
		
	</div>

	<div class="homeitem3col">
		<a name="scripts"></a>
		<h3>Greasemonkey scripts (aka user scripts)</h3>
		<p>JDT UI developers are heavy users of <a href="https://bugs.eclipse.org/bugs/">bugs.eclipse.org</a>.
		   Since we could not stand the increasing number of UI bloopers in Bugzilla, we created the
		   <a href="scripts/jdtbugzilla.user.js">jdtbugzilla.user.js</a> Greasemonkey script to ease our daily pain.
		   The script always works with the latest release of Firefox, Greasemonkey, and bugs.eclipse.org.</p>
		<p>Over time, we also added quick links and tweaks to improve our work experience. The team-specific
		   tweaks can be configured at the top of the script.</p>
		<p>For comments and enhancement requests, please use <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=390332">bug 390332</a> or file a new bug.
		   We're specially interested in ideas for how to separate parameters and the general functionality
		   (for people who need different configurations but still want our fixes, new features, and updates to new Bugzilla versions).
		   If someone from the Bugzilla team wants to talk about the UI bugs, please also file a bug or directly talk to
		   <a href="mailto:markus_keller[at]ch.ibm.com">Markus</a>.</p>
		<p>Here are some of the improvements in the script (see comments in the source for full details):</p>
		<ul>
			<li>clicks all the useless (edit) links</li>
			<li>makes the Advanced Search page usable without having to scroll (removes garbage and increases option list heights)</li>
			<li>fixes alternating gray/white background for enhancements in buglist.cgi (classic skin)</li>
			<li>removes Eclipse.org headers to save space</li>
			<li>adds a fixed "Bug &lt;id&gt;: &lt;summary&gt;" header on top for easy triple-click, copy, paste<br>
				hint: the link is in the short https://bugs.eclipse.org/&lt;id&gt; form</li>
			<li>adds quick links for frequently used CCs, Assignees, Products, Components, Resolutions, Target Milestones, Git repositories, etc.</li>
			<li>adds bug category combos (to insert "[work area]" prefixes into summary)</li>
			<li>fixes various layout bugs on show_bug.cgi</li>
			<li>renders Assignee next to Reporter</li>
			<li>moves the Status fields to a useful position (between Target Milestone and Assignee in the settings block)</li>
			<li>fixes attachment links (click on attachment predictably opens the attachment -- separate [diff] link opens patch viewer)</li>
			<li>makes the security group checkboxes less likely to be clicked inadvertently (only checkbox is clickable; label is not)</li>
			<li>offers two links for email addresses: simple for pasting as CC / with full name to use as Git author</li>
			<li>adds easy-to-copy bug &lt;id&gt; comment &lt;no&gt; text</li>
			<li>adds more Save Changes buttons</li>
			<li>fixes wrapping-preview in Additional Comments field</li>
		</ul>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick links</h6>
			<ul>
				<li><a href="#bugs">Bugs</a></li>
				<li><a href="#documents">Documents</a></li>
				<li><a href="#articles">Articles and Talks</a></li>
				<li><a href="#plugins">Plug-ins</a></li>
				<li><a href="#lists">Mailing List</a></li>
				<li><a href="#scripts">Greasemonkey scripts</a></li>
			</ul>
		</div>
	</div>
	
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
