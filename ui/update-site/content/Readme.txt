How to release a new version
============================

- open site.xml
- add a new feature version or select the current feature version to rebuild

- click "Build"
=> result:
  - generates features/<feature_version>.jar
  - generates plugins/<plugin_version>.jar
  - updates site.xml

- copy these 3 files to /home/data/httpd/archive.eclipse.org/jdt/ui/update-site on build.eclipse.org (via SSH)

- commit the modified site.xml
- delete all generated files (artifacts.jar, content.jar, features/, plugins/)
