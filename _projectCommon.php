<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$_theme = "";
	$theme = "";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addCustomNav("About JDT", "http://www.eclipse.org/projects/project_summary.php?projectid=eclipse.jdt", "", 1);
	$Nav->addCustomNav("Mailing Lists",     "http://www.eclipse.org/mail/", "_self", 1);
	$Nav->addNavSeparator("Platform",       "http://www.eclipse.org/platform/");
	$Nav->addNavSeparator("JDT Components", "http://www.eclipse.org/jdt/index.php");
	$Nav->addCustomNav("APT", 	"http://www.eclipse.org/jdt/apt/index.html", "_self", 1);
	$Nav->addCustomNav("Core", 	"http://www.eclipse.org/jdt/core/index.php", "_self", 1);
	$Nav->addCustomNav("Debug", "http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/jdt-debug-home/index.html", "_self", 1);
	$Nav->addCustomNav("UI", 	"http://www.eclipse.org/jdt/ui/index.php", "_self", 1);
?>