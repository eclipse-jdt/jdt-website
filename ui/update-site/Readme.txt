How to release a new version
============================

- check out and import org.eclipse.license from git://git.eclipse.org/gitroot/cbi/org.eclipse.license.git
- open site.xml in content folder.
- add a new feature version or select the current feature version to rebuild

- click "Build"
=> result:
  - generates features/<feature_version>.jar
  - generates plugins/<plugin_version>.jar
  - updates site.xml

- If logs.zip is created, then it means there is an error in the build. Please
check the logs for the error details.
Do not check-in the generated Jars in this case.

If logs.zip is not created
- delete artifacts.jar, content.jar
- commit all the remaining files.

Tip- The compiler source version used for building ASTView is present
in org.eclipse.jdt.astview\build.properties file. So please update it if the project
compliance of org.eclipse.jdt.astview is changed.