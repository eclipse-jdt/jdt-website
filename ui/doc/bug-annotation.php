<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT UI Bug Annotation Conventions";
	$pageKeywords	= "JDT/UI, JDT, Java Development Tooling UI, Java, java, development, tools, java ide, Eclipse";
	$pageAuthor		= "JDT/UI Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
function bugsByUser($name, $email) {
	echo '<tr>
		<td colspan="2" class="owner">
			<a href="' .
			'https://bugs.eclipse.org/bugs/buglist.cgi?' .
			'bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&' .
			'emailassigned_to1=1&emailtype1=substring&email1=' . 
			"$email" . 
			'&cmdtype=doit">' .
			"$name" .
			'</a>:
		</td>
	</tr>
	';
}

function internalBugsWithSummary($tag, $description, $filter) {
	echo '<tr>
		<td width="170">
			<a href="' .
			'https://bugs.eclipse.org/bugs/buglist.cgi?' .
			'short_desc_type=substring&short_desc=' .
			urlencode ($tag) .
			"$filter" .
			'&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&' .
			'cmdtype=doit">' .
			"$tag" .
			'</a>
		</td>
		<td width="514">
			' .
			"$description" .
			'
		</td>
	</tr>  
	';
}

function bugsWithSummaryJDT($tag, $description) {
	internalBugsWithSummary($tag, $description, '&product=JDT');
}

function bugsWithSummaryJDT_UI($tag, $description) {
	internalBugsWithSummary($tag, $description, '&product=JDT&component=UI');
}

ob_start();
?>

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>

		<p>
			To simplify bug management we started to tag JDT UI bugs with additional pseudo 
			keywords (not normal Bugzilla keywords). The tags are prepended to the bug's 
			summary field. Since we use these tags for internal bug management reporters 
			of a bug <i>should not</i> add any pseudo keywords when filing the bug. The 
			owner of the component bucket is responsible to add the keywords.
		</p>
		<p>
			Keywords are used to group bugs without assigning them to a developer. So with 
			the introduction of the keywords it is easy to search for all bugs belonging 
			to a specific sub component. For example to get an overview of all open refactoring 
			issues search for new, assigned or reopened bugs containing the word [refactoring] 
			in the summary field.
		</p>
		<p>
			The JDT Text component uses the
			<a href="http://www.eclipse.org/eclipse/platform-text/development/bug-annotation.htm">keywords defined by Platform Text</a>.
		</p>
		
		<table width="800" border="1">
			
			<?php
				bugsByUser("Inbox", "jdt-ui-inbox");
				bugsWithSummaryJDT_UI("[api]", "API bugs: wrong or missing API, API requests");
				bugsWithSummaryJDT_UI("[dcr]", "New feature requests (design change requests), if possible followed by [refactoring] [code generation]...");
				bugsWithSummaryJDT_UI("[plan item]", "Official plan items");    
				bugsWithSummaryJDT("[actions]", "Bugs related to global menu, context menu, and toolbar actions");
				bugsWithSummaryJDT("[browsing]", "Bugs related to the Java Browsing perspective");
				bugsWithSummaryJDT("[ccp]", "Copy, Cut, Paste bugs where no refactoring is involved");
				bugsWithSummaryJDT("[dnd]", "Drag and Drop bugs. This keyword is mostly used together with other keywords like [reorg], [refactoring], [type hierarchy], ...");
				bugsWithSummaryJDT("[package explorer]", "Bugs related to JDT's package explorer");
				bugsWithSummaryJDT("[open type]", "Bugs to the open type dialog");
				bugsWithSummaryJDT("[encapsulate field]", "Bugs to the encapsulate field refactoring");
				bugsWithSummaryJDT("[expand selection]", "Bugs related to 'Expand selection'");
				bugsWithSummaryJDT("[extract method]", "Bugs related to the extract method refactoring");
				bugsWithSummaryJDT("[mark occurrence]", "Bugs related to mark occurrence");  
				bugsWithSummaryJDT("[introduce factory]", "Bugs related to the introduce factory refactoring");   
				bugsWithSummaryJDT("[generalize type]", "Bugs related to the generalize type refactoring");
				bugsWithSummaryJDT("[surround with try/catch]", "Bugs related to the surround with try/catch refactoring");
				bugsWithSummaryJDT("[refactoring]", "General bugs regarding the refactoring framework");  
				  
				bugsByUser("Andre", "andre_weinand");
				bugsWithSummaryJDT("[compare]", "Bugs related to Java compare functionality. Not used to tag general compare bugs");
				  
				bugsByUser("Benno", "benno_baumgartner");
				bugsWithSummaryJDT("[build path]", "Bugs related to the Java build path page and build path actions");
				bugsWithSummaryJDT("[clean up]", "Bugs related to the clean up wizard");
				bugsWithSummaryJDT("[nls tooling]", "Bugs related to nls tooling");
				bugsWithSummaryJDT("[preferences]", "Bugs related to preference pages");    
				  
				bugsByUser("Dirk", "dirk_baeumer");
				bugsWithSummaryJDT("[expressions]", "Bugs related to org.eclipse.core.expressions");
				
				bugsByUser("Martin", "martin_aeschlimann");
				bugsWithSummaryJDT("[javadoc wizard]", "Bugs related to the Javadoc export wizard");
				bugsWithSummaryJDT("[quick fix]", "Bugs related to the Quick Fix functionality");
				bugsWithSummaryJDT("[quick assist]", "Bugs related to the Quick Assist functionality");
				bugsWithSummaryJDT("[ast rewrite]", "AST rewrite bugs");  
				bugsWithSummaryJDT("[type hierarchy]", "Bugs related to the Type Hierarchy view");
				bugsWithSummaryJDT_UI("[search]", "Java search bugs. Not used to tag general search bugs");
				bugsWithSummaryJDT("[type wizards]", "Bugs releated to the new type wizards");
				bugsWithSummaryJDT("[organize imports]", "Bugs related to organize imports");
				bugsWithSummaryJDT("[imports on paste]", "Bugs related to imports on paste functionality");
				bugsWithSummaryJDT("[code templates]", "Bugs related to code templates");
				bugsWithSummaryJDT("[code style]", "Bugs related to code style settings including new code style options");
				bugsWithSummaryJDT_UI("[render]", "Bugs related to rendering of Java elements");  
				  
				bugsByUser("Markus", "markus_keller");
				bugsWithSummaryJDT("[JUnit]", "Bugs related to the org.eclipse.jdt.junit plug-in");
				bugsWithSummaryJDT("[call hierarchy]", "Bugs related to the call hierarchy view");    
				bugsWithSummaryJDT("[inline]", "Bugs related to the inline refactoring");
				bugsWithSummaryJDT("[infer type arguments]", "Bugs related to the infer type arguments refactoring");  
				bugsWithSummaryJDT("[extract constant]", "Bugs related to the extract constant refactoring");
				bugsWithSummaryJDT("[extract local]", "Bugs related to the extract local variable refactoring");   
				bugsWithSummaryJDT("[change method signature]", "Bugs related to the change method signature refactoring");
				bugsWithSummaryJDT("[introduce indirection]", "Bugs related to the introduce indirection refactoring");
				bugsWithSummaryJDT("[introduce parameter]", "Bugs related to the introduce parameter refactoring");
				bugsWithSummaryJDT("[rename]", "Bugs related to the rename refactoring");     
				  
				bugsByUser("Tobias", "tobias_widmer");
				bugsWithSummaryJDT("[reorg]", "Bugs related to the copy, move and delete refactorings");
				bugsWithSummaryJDT("[jar exporter]", "Bugs related to the jar export wizard");  
				bugsWithSummaryJDT("[convert anonymous]", "Bugs related to the convert anonymous to nested class refactoring");  
				bugsWithSummaryJDT("[convert local]", "Bugs related to the convert local to field refactoring"); 
				bugsWithSummaryJDT("[extract interface]", "Bugs related to the extract interface refactoring");  
				bugsWithSummaryJDT("[extract superclass]", "Bugs related to the extract superclass refactoring");
				bugsWithSummaryJDT("[use supertype]", "Bugs related to the use supertype refactoring");    
				bugsWithSummaryJDT("[generate constructor]", "Bugs related to the generate constructor wizards");   
				bugsWithSummaryJDT("[generate delegate]", "Bugs related to the generate delegate wizard");   
				bugsWithSummaryJDT("[getter setter]", "Bugs related to the generate getter/setter wizard");
				bugsWithSummaryJDT("[override method]", "Bugs related to the override/implement methods wizard");  
				bugsWithSummaryJDT("[hashcode/equals]", "Bugs related to the generate hashcode/equals wizard");
				bugsWithSummaryJDT("[migrate jar]", "Bugs related to the migrate jar wizard");     
				bugsWithSummaryJDT("[move member type]", "Bugs related to the convert member to top level refactoring");
				bugsWithSummaryJDT("[move method]", "Bugs related to the move method refactoring");     
				bugsWithSummaryJDT("[move static members]", "Bugs related to the move static members refactoring");
				bugsWithSummaryJDT("[pull up]", "Bugs related to the pull up refactoring");
				bugsWithSummaryJDT("[push down]", "Bugs related to the push down refactoring");
				bugsWithSummaryJDT("[ltk]", "Bugs related to the refactoring framework, org.eclipse.ltk.refactoring");
			?>     
	  
		</table>
		<br>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->AddExtraHtmlHeader("<style type=\"text/css\">
		td.owner {
			background-color: #DDDDDD;
			font-style: italic;
		}
</style>");

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>