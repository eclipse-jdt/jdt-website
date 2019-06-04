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
  - artifacts.jar
  - content.jar

- delete logs.zip
- commit all the remaining files.
