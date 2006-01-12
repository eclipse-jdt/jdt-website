<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addNavSeparator("Subprojects", 	"main.php");
	$Nav->addCustomNav("APT", 	"http://www.eclipse.org/jdt/apt/index.html", "_self", 1);
	$Nav->addCustomNav("Core", 	"http://www.eclipse.org/jdt/core/index.html", "_self", 1);
	$Nav->addCustomNav("Debug", "http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/jdt-debug-home/index.html", "_self", 1);
	$Nav->addCustomNav("UI", 	"http://www.eclipse.org/jdt/ui/index.html", "_self", 1);

?>
