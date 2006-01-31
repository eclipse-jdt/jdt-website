<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		JDT Core team
	# Date:			2006-01-31
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "JDT Core R3.1.x";
	$pageKeywords	= "JDT, Java, java, development, tools, java ide, Eclipse, 3.1";
	$pageAuthor		= "JDT/Core team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<p>Back to <a href="../dev.php">Development Resources</a>.</p>
		<div class="homeitem3col">
			<a name="HAPPENING"></a>
			<h3>What's Happening?</h3>
			<a name="maintenance"></a>
			 <p>This section describes the JDT/Core implementation of the <a
 				href="http://www.eclipse.org/eclipse/development/eclipse_maintenance_schedule_3_1_x.html">official
				plan</a>.</p>
			<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Rollup 3.1.2 - in progress, scheduled for end
of 2006/01</b>
      <ul>
        <li> preview available in <a href="#updates">update</a> area. </li>
        <li> bug fixing :
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1.2">all
planned fixes</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.2">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.2">resolved</a>)
        </li>
      </ul>
      <img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Rollup 3.1.1 - completed on 2005/10/03</b>
      <ul>
        <li> available on the <a
 href="http://www.eclipse.org/downloads/index.php" target="_new">download</a>
area. </li>
        <li> final <a
 href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.4432.2.111&amp;content-type=text/html">build
notes</a> </li>
        <li> bug fixing : (<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1.1">all
planned fixes</a>) (<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.1">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.1">resolved</a>)
        </li>
      </ul>
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Release 3.1.0 - completed on 2005/06/28</b>
      <ul>
        <li> available on the <a href="http://www.eclipse.org/downloads/index.php" target="new">download</a> area. </li>
        <li> final <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.4432&amp;content-type=text/html">build
notes</a> </li>
        <li><b>Incremental Java Compiler</b>
          <ul>
            <li> support for J2SE 5.0 features: (<a
 href="http://jcp.org/en/jsr/detail?id=176">jsr-176</a>)
              <ul>
                <li>generic types (<a href="http://jcp.org/en/jsr/detail?id=014">jsr-014</a>) </li>
                <li>enumerations (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) </li>
                <li> autoboxing (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) </li>
                <li> varargs (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) </li>
                <li> enhanced for loops (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) </li>
                <li> static imports (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) </li>
                <li> metadata facility (<a href="http://jcp.org/en/jsr/detail?id=175">jsr-175</a>)</li>
              </ul>
            </li>
            <li> provide support for restraining access to prerequisites (import/export rules): 
            (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=29865">29865</a>)
              <ul>
                <li> diagnose forbidden/discouraged references </li>
                <li> diagnosis for missing javadoc could selectively be
enabled only in exported region of a project (i.e. only document API) </li>
              </ul>
            </li>
            <li>provide support for shareable compiler settings (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=59258">59258</a>) </li>
          </ul>
        </li>
        <li><b>Java Model</b>
          <ul>
            <li> leverage support for J2SE 5.0 features.
              <ul>
                <li>generic types (<a href="http://jcp.org/en/jsr/detail?id=014">jsr-014</a>) <i>(2 months)</i>
                </li>
                <li>enumerations (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 month)</i>
                </li>
                <li> autoboxing (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 month)</i>
                </li>
                <li> varargs (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i>
                </li>
                <li> enhanced for loops (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i>
                </li>
                <li> static imports (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i>
                </li>
                <li> metadata facility (<a href="http://jcp.org/en/jsr/detail?id=175">jsr-175</a>) <i>(1 month)</i>
                </li>
              </ul>
            </li>
            <li> remove dependency to old JDOM in JavaModel implementation (using DOM AST rewrite instead) (<a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=77894">77894</a>) <i>(2 weeks)</i> </li>
            <li>[optional] adopt all types cache (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=36899">36899</a>) <i>(2
weeks)</i> </li>
            <li> provide classpath attributes (e.g. to store javadoc location)
             (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=22969">22969</a>)
            </li>
          </ul>
        </li>
        <li><b>Code Assist</b>
          <ul>
            <li> leverage support for J2SE 5.0 features.
              <ul>
                <li> generic types (<a href="http://jcp.org/en/jsr/detail?id=014">jsr-014</a>) <i>(2 months)</i></li>
                <li> enumerations (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 month)</i></li>
                <li> varargs (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> autoboxing (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 month)</i></li>
                <li> enhanced for loops (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> static imports (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> metadata facility (<a href="http://jcp.org/en/jsr/detail?id=175">jsr-175</a>) <i>(1 month)</i></li>
              </ul>
            </li>
            <li> leverage access restriction rules into completion relevance (forbidden references should not be very relevant) </li>
          </ul>
        </li>
        <li><b>Search</b>
          <ul>
            <li> leverage support for J2SE 5.0 features.
              <ul>
                <li> generic types (<a href="http://jcp.org/en/jsr/detail?id=014">jsr-014</a>) <i>(2 months)</i></li>
                <li> enumerations (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 month)</i></li>
                <li> autoboxing (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 month)</i></li>
                <li> varargs (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> enhanced for loops (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> static imports (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> metadata facility (<a href="http://jcp.org/en/jsr/detail?id=175">jsr-175</a>) <i>(1 month)</i></li>
              </ul>
            </li>
            <li>add visibility to ITypeNameRequestor requestor API (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=36896">36896</a>) <i>(1
week)</i></li>
          </ul>
        </li>
        <li><b>DOM AST</b>
          <ul>
            <li> leverage support for J2SE 5.0 features.
              <ul>
                <li> generic types (<a href="http://jcp.org/en/jsr/detail?id=014">jsr-014</a>) <i>(2 months)</i></li>
                <li> enumerations (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 month)</i></li>
                <li> autoboxing (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 month)</i></li>
                <li> varargs (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> enhanced for loops (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> static imports (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> metadata facility (<a href="http://jcp.org/en/jsr/detail?id=175">jsr-175</a>) <i>(1 month)</i></li>
              </ul>
            </li>
            <li> adopt helper (refactoring) methods in Binding and ASTNode (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=36900">36900</a>)
            </li>
            <li> provide support for batching DOM AST creation (requestor based API to optimize footprint) (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=73675">73675</a>) </li>
            <li> bridge the gap in between model and DOM AST (handle&lt;---&gt;ast/binding) (<a href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=73669">73669</a>) </li>
            <li> surface more compiler functionalities on DOM bindings, so as to provide override rules, type compatibility rules. (<a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=73676">73676</a>)</li>
          </ul>
        </li>
        <li><b>Code Formatter</b>
          <ul>
            <li> leverage support for J2SE 5.0 features.
              <ul>
                <li> generic types (<a href="http://jcp.org/en/jsr/detail?id=014">jsr-014</a>) <i>(2 months)</i></li>
                <li> enumerations (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 month)</i></li>
                <li> autoboxing (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 month)</i></li>
                <li> varargs (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> enhanced for loops (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> static imports (<a href="http://jcp.org/en/jsr/detail?id=201">jsr-201</a>) <i>(1 week)</i></li>
                <li> metadata facility (<a href="http://jcp.org/en/jsr/detail?id=175">jsr-175</a>) <i>(1 month)</i></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
		</div>
		<div class="homeitem3col">
			<a name="FEATURES"></a>
			<h3>Feature List</h3>
			<p>Work items completed in the 3.1 stream, also see <a
 href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.jdt.core/buildnotes_jdt-core.html?content-type=text/html">build
notes</a>.</p>
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Incremental Java Compiler</b>
      <ul>
        <li>From target 1.5 on, the JSR bytecode instruction is no
longer generated. As a consequence, the corresponding compiler option
status will be ignored as soon as -target 1.5 or -target 5 is
specified. </li>
        <li>Batch compiler defaults to 1.5 source and target, when
toggled in 1.5 compliant mode ("-1.5" or "-5"). </li>
        <li>Cast/instanceof operations are now fully supported, along
with extra diagnosis for unsafe type operations. </li>
        <li>Explicit parameterizations of message sends and constructor
calls are also supported. </li>
        <li>Wildcard type compatibilities got reworked quite
significantly. In
particular, it now diagnoses
usage of methods which parameters are of wildcard type (see 59641). </li>
        <li>Can now issue synthetic bridge methods for allowing
overriding to parameterized methods. </li>
        <li>Digest generic methods and perform type inference. </li>
        <li>It also recognizes the Object.getClass() method and perform
adequate
substitutions (see <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=57784">57784</a>). </li>
        <li>Properly decode signatures of parameterized member types
which are flourishing in 1.5 class libs </li>
        <li>Support for hexadecimal floating-point literals (in 1.5
mode only). </li>
        <li>Support for static imports was added. </li>
        <li>Support for enumeration was added. </li>
        <li>Access restrictions can be defined in the classpath, and
the compiler will diagnose access to types that are not accessible. </li>
        <li>Problem descriptions show ellipsis in varargs method
signatures </li>
        <li>Compiler is able to parse 1.5 syntax in Javadoc comments </li>
        <li>Support for annotation was added. @Target and @Override
annotations are recognized by the compiler. </li>
        <li>Support for autoboxing was added. </li>
        <li> JavaCore 1.5 specific options. Either augmented to
consider 1.5 or added.
<br/>
<p>
<code><font size="-1">* COMPILER / Reporting Usage of 'enum' Identifier<br/>*    When enabled, the compiler will issue an error or a warning whenever 'enum' is <br/>*    used as an identifier (reserved keyword in 1.5)<br/>*     - option id:         "org.eclipse.jdt.core.compiler.problem.enumIdentifier"<br/>*     - possible values:   { "error", "warning", "ignore" }<br/>*     - default:           "warning"<br/>*<br/>* COMPILER / Setting Compliance Level<br/>*    Select the compliance level for the compiler. In "1.3" mode, source and target settings<br/>*    should not go beyond "1.3" level.<br/>*     - option id:         "org.eclipse.jdt.core.compiler.compliance"<br/>*     - possible values:   { "1.3", "1.4", "1.5" }<br/>*     - default:           "1.4"<br/>* <br/>* COMPILER / Setting Source Compatibility Mode<br/>*    Specify whether which source level compatibility is used. From 1.4 on, 'assert' is a keyword<br/>*    reserved for assertion support. Also note, than when toggling to 1.4 mode, the target VM<br/>*   level should be set to "1.4" and the compliance mode should be "1.4".<br/>*   Source level 1.5 is necessary to enable generics, autoboxing, covariance, annotations, enumerations<br/>*   enhanced for loop, static imports and varargs. Once toggled, the target VM level should be set to "1.5"<br/>*   and the compliance mode should be "1.5".<br/>*     - option id:         "org.eclipse.jdt.core.compiler.source"<br/>*     - possible values:   { "1.3", "1.4", "1.5" }<br/>*     - default:           "1.3"<br/>* <br/>* COMPILER / Defining Target Java Platform<br/>*    For binary compatibility reason, .class files can be tagged to with certain VM versions and later.<br/>*    Note that "1.4" target require to toggle compliance mode to "1.4" too. Similarily, "1.5" target require<br/>*    to toggle compliance mode to "1.5".<br/>*     - option id:         "org.eclipse.jdt.core.compiler.codegen.targetPlatform"<br/>*     - possible values:   { "1.1", "1.2", "1.3", "1.4", "1.5" }<br/>*     - default:           "1.2"<br/>* <br/>* COMPILER / Reporting final Bound for Type Parameter<br/>*    When enabled, the compiler will issue an error or a warning whenever a generic type parameter is associated with a <br/>*    bound corresponding to a final type; since final types cannot be further extended, the parameter is pretty useless.<br/>*     - option id:         "org.eclipse.jdt.core.compiler.problem.finalParameterBound"<br/>*     - possible values:   { "error", "warning", "ignore" }<br/>*     - default:           "ignore"<br/>*<br/>* COMPILER / Reporting Forbidden Reference to Type with Restricted Access<br/>*    When enabled, the compiler will issue an error or a warning when referring to a type with restricted access, as defined according<br/>*    to the access restriction specifications.<br/>*     - option id:         "org.eclipse.jdt.core.compiler.problem.forbiddenReference"<br/>*     - possible values:   { "error", "warning", "ignore" }<br/>*     - default:           "warning"<br/>*<br/>* COMPILER / Reporting Invalid Javadoc Tags with Deprecated References<br/>*    Specify whether the compiler will report deprecated references used in Javadoc tags.<br/>*    Note that this diagnosis can be enabled based on the visibility of the construct associated with the Javadoc;<br/>*    also see the setting "org.eclipse.jdt.core.compiler.problem.invalidJavadocTagsVisibility".<br/>*     - option id:         "org.eclipse.jdt.core.compiler.problem.invalidJavadocTagsDeprecatedRef"<br/>*     - possible values:   { "enabled", "disabled" }<br/>*     - default:           "enabled"<br/>* <br/>* COMPILER / Reporting Invalid Javadoc Tags with Not Visible References<br/>*    Specify whether the compiler will report non-visible references used in Javadoc tags.<br/>*    Note that this diagnosis can be enabled based on the visibility of the construct associated with the Javadoc;<br/>*    also see the setting "org.eclipse.jdt.core.compiler.problem.invalidJavadocTagsVisibility".<br/>*     - option id:         "org.eclipse.jdt.core.compiler.problem.invalidJavadocTagsNotVisibleRef"<br/>*     - possible values:   { "enabled", "disabled" }<br/>*     - default:           "enabled"<br/>* <br/>* COMPILER / Reporting Varargs Argument Needing a Cast in Method/Constructor Invocation<br/>*    When enabled, the compiler will issue an error or a warning whenever a varargs arguments should be cast<br/>*    when passed to a method/constructor invocation. (e.g. Class.getMethod(String name, Class ... args )  <br/>*    invoked with arguments ("foo", null)).<br/>*     - option id:         "org.eclipse.jdt.core.compiler.problem.varargsArgumentNeedCast"<br/>*     - possible values:   { "error", "warning", "ignore" }<br/>*     - default:           "warning"<br/>*<br/>* COMPILER / Reporting Boxing/Unboxing Conversion<br/>*    When enabled, the compiler will issue an error or a warning whenever a boxing or an unboxing<br/>*    conversion is performed.<br/>*     - option id:         "org.eclipse.jdt.core.compiler.problem.autoboxing"<br/>*     - possible values:   { "error", "warning", "ignore" }<br/>*     - default:           "ignore"<br/>*<br/>* COMPILER / Reporting Unchecked Type Operation<br/>*    When enabled, the compiler will issue an error or a warning whenever an operation involves generic types, and potentially<br/>*    invalidates type safety since involving raw types (e.g. invoking #foo(X&lt;String&gt;) with arguments  (X)).<br/>*     - option id:         "org.eclipse.jdt.core.compiler.problem.uncheckedTypeOperation"<br/>*     - possible values:   { "error", "warning", "ignore" }<br/>*     - default:           "warning"<br/>
</font></code>
</p>
        </li>
      </ul>
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Java Model</b>
      <ul>
        <li>ITypes and IMethods know about their type parameters (ITypeParameter) </li>
        <li>Resource change listeners react to encoding change. </li>
        <li>Varargs are supported in the Java model. </li>
        <li>Disassembler shows constant pool contents. </li>
        <li>Hierarchies on enumerations and annotations are supported. </li>
        <li>The internal Java model cache adapts to the number of elements in the workspace. </li>
        <li>Support for handling annotation types and annotations was added in Java model. </li>
        <li>Validation of type parameter names. </li>
        <li>Creation of a type hierarchy on an IRegion independently of a project. </li>
        <li>Java model operations are now working on local, anonymous, enumerations and annotation types. </li>
        <li>Types, fields and methods can be asked for their binding keys. </li>
      </ul>
      <img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>DOM AST</b>
      <ul>
        <li>Added support for parameterized/generic to DOM AST </li>
        <li>A binding can returns the corresponding IJavaElement. </li>
        <li>Enum constants are now in a separate list from the body declarations. </li>
        <li>ASTs can be created and resolved in batch. </li>
        <li>Compatibility rules APIs </li>
        <li>Added support to create DOM bindings from Java elements </li>
      </ul>
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Code Assist</b>
      <ul>
        <li>Generic types completion is available </li>
        <li>Type parameters are proposed as possible completions </li>
        <li>Static imports are used to propose completions </li>
        <li>Types that are not accessible (through access restrictions) can be filtered out </li>
        <li>CompletionRequestor replaces ICompletionRequestor. </li>
        <li>Methods are proposed in static imports. </li>
        <li>Annotation and annotation types completion is available. </li>
        <li>Options added for code assist:
          <pre> * CODEASSIST / Activate Access Restrictions Sensitive Completion<br/> *    When active, completion doesn't show that is access restricted.<br/> *     - option id:         "org.eclipse.jdt.core.codeComplete.restrictionsCheck"<br/> *     - possible values:   { "enabled", "disabled" }<br/> *     - default:           "disabled"<br/></pre>
        </li>
        <li>A completion proposal can be asked for its binding key or for the binding key of its declaring type. </li>
        <li>Special resolved handles are returned using code select. </li>
      </ul>
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Code Select</b>
      <ul>
        <li>Selecting a type parameter opens its declaration </li>
        <li>Resolved handles are returned when selecting a type, method or field. For parameterized type, the key contains the resolved
information. </li>
        <li>Annotation and annotation types can be selected </li>
      </ul>
<img src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Search</b>
      <ul>
        <li>Declaration/references of/to generic types can be searched for </li>
        <li>Parameterized types and fields can be searched for </li>
        <li>References in static imports are found </li>
        <li>Enumerations and enum constants can be searched for </li>
        <li>Varargs methods can be searched for </li>
        <li>Annotation types can be searched for </li>
        <li>Support for erasure match and equivalent match in generics was added </li>
        <li>Declaration/references of/to generic/paramerized methods can be searched for </li>
        <li>Declaration/references of/to type parameters can be searched for </li>
      </ul>
<img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>Code Formatter</b>
      <ul>
        <li>Support for 1.5 constructs. </li>
      </ul>
		</div>
		<div class="homeitem3col">
			<a name="RELEASE"></a>
			<h3>Release Process</h3>
			<ul>
		        <li>Release Candidate 0 : <a href="test-rc0.php">test plan</a>
		        </li>
		        <li>Release Candidate 1 : <a href="test-rc1.php">test plan</a>
		        </li>
		        <li>Release Candidate 2 : <a href="test-rc2.php">test plan</a>
		        </li>
		        <li>Release Candidate 3 : <a href="test-rc3.php">test plan</a>
		        </li>
		    </ul>
		</div>
		<div class="homeitem3col">
			<a name="BUGS"></a>
			<h3>Bug Resolution</h3>
			<ul>
        <li> Rollup 3.1.2, 2006/01/?? : (<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&amp;short_desc=&amp;product=JDT&amp;component=Core&amp;target_milestone=3.1.2&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=anywords&amp;keywords=&amp;resolution=FIXED&amp;emailassigned_to1=1&amp;emailtype1=substring&amp;email1=&amp;emailreporter2=1&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;changedin=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;namedcmd=1.0.x&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?email1=&amp;emailtype1=substring&amp;emailassigned_to1=1&amp;email2=&amp;emailtype2=substring&amp;emailreporter2=1&amp;bugidtype=include&amp;bug_id=&amp;changedin=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.2&amp;short_desc=&amp;short_desc_type=allwordssubstr&amp;long_desc=&amp;long_desc_type=allwordssubstr&amp;keywords=&amp;keywords_type=anywords&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=&amp;cmdtype=doit&amp;namedcmd=Assigned&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;email1=&amp;emailtype1=substring&amp;emailassigned_to1=1&amp;email2=&amp;emailtype2=substring&amp;emailreporter2=1&amp;bugidtype=include&amp;bug_id=&amp;changedin=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.2&amp;short_desc=&amp;short_desc_type=allwordssubstr&amp;long_desc=&amp;long_desc_type=allwordssubstr&amp;keywords=&amp;keywords_type=anywords&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=&amp;cmdtype=doit&amp;namedcmd=Assigned&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;email1=&amp;emailtype1=substring&amp;emailassigned_to1=1&amp;email2=&amp;emailtype2=substring&amp;emailreporter2=1&amp;bugidtype=include&amp;bug_id=&amp;changedin=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.2&amp;short_desc=&amp;short_desc_type=allwordssubstr&amp;long_desc=&amp;long_desc_type=allwordssubstr&amp;keywords=&amp;keywords_type=anywords&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=&amp;cmdtype=doit&amp;namedcmd=Assigned&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time">resolved</a>)
        </li>
        <li> Rollup 3.1.1, 2005/10/03 : (<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&amp;short_desc=&amp;product=JDT&amp;component=Core&amp;target_milestone=3.1.1&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=anywords&amp;keywords=&amp;resolution=FIXED&amp;emailassigned_to1=1&amp;emailtype1=substring&amp;email1=&amp;emailreporter2=1&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;changedin=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;namedcmd=1.0.x&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?email1=&amp;emailtype1=substring&amp;emailassigned_to1=1&amp;email2=&amp;emailtype2=substring&amp;emailreporter2=1&amp;bugidtype=include&amp;bug_id=&amp;changedin=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.1&amp;short_desc=&amp;short_desc_type=allwordssubstr&amp;long_desc=&amp;long_desc_type=allwordssubstr&amp;keywords=&amp;keywords_type=anywords&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=&amp;cmdtype=doit&amp;namedcmd=Assigned&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;email1=&amp;emailtype1=substring&amp;emailassigned_to1=1&amp;email2=&amp;emailtype2=substring&amp;emailreporter2=1&amp;bugidtype=include&amp;bug_id=&amp;changedin=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.1&amp;short_desc=&amp;short_desc_type=allwordssubstr&amp;long_desc=&amp;long_desc_type=allwordssubstr&amp;keywords=&amp;keywords_type=anywords&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=&amp;cmdtype=doit&amp;namedcmd=Assigned&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;email1=&amp;emailtype1=substring&amp;emailassigned_to1=1&amp;email2=&amp;emailtype2=substring&amp;emailreporter2=1&amp;bugidtype=include&amp;bug_id=&amp;changedin=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.1&amp;short_desc=&amp;short_desc_type=allwordssubstr&amp;long_desc=&amp;long_desc_type=allwordssubstr&amp;keywords=&amp;keywords_type=anywords&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=&amp;cmdtype=doit&amp;namedcmd=Assigned&amp;newqueryname=&amp;order=Reuse+same+sort+as+last+time">resolved</a>)
        </li>
        <li>Overall R3.1.0, 2005/06/27 : (<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1.1&amp;target_milestone=3.1&amp;target_milestone=3.1+M1&amp;target_milestone=3.1+M2&amp;target_milestone=3.1+M3&amp;target_milestone=3.1+M4&amp;target_milestone=3.1+M5&amp;target_milestone=3.1+M6&amp;target_milestone=3.1+M7&amp;target_milestone=3.1+RC1&amp;target_milestone=3.1+RC2&amp;target_milestone=3.1+RC3&amp;target_milestone=3.1+RC4&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1.1&amp;target_milestone=3.1&amp;target_milestone=3.1+M1&amp;target_milestone=3.1+M2&amp;target_milestone=3.1+M3&amp;target_milestone=3.1+M4&amp;target_milestone=3.1+M5&amp;target_milestone=3.1+M6&amp;target_milestone=3.1+M7&amp;target_milestone=3.1+RC1&amp;target_milestone=3.1+RC2&amp;target_milestone=3.1+RC3&amp;target_milestone=3.1+RC4">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.1&amp;target_milestone=3.1&amp;target_milestone=3.1+M1&amp;target_milestone=3.1+M2&amp;target_milestone=3.1+M3&amp;target_milestone=3.1+M4&amp;target_milestone=3.1+M5&amp;target_milestone=3.1+M6&amp;target_milestone=3.1+M7&amp;target_milestone=3.1+RC1&amp;target_milestone=3.1+RC2&amp;target_milestone=3.1+RC3&amp;target_milestone=3.1+RC4">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1.1&amp;target_milestone=3.1&amp;target_milestone=3.1+M1&amp;target_milestone=3.1+M2&amp;target_milestone=3.1+M3&amp;target_milestone=3.1+M4&amp;target_milestone=3.1+M5&amp;target_milestone=3.1+M6&amp;target_milestone=3.1+M7&amp;target_milestone=3.1+RC1&amp;target_milestone=3.1+RC2&amp;target_milestone=3.1+RC3&amp;target_milestone=3.1+RC4">resolved</a>)
        </li>
        <li> Release Candidate-4, 2005/06/24 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+RC4&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC4&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC4">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC4">resolved</a>)
        </li>
        <li> Release Candidate-3, 2005/06/17 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+RC3&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC3&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC3">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC3">resolved</a>)
        </li>
        <li> Release Candidate-2, 2005/06/10 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+RC2&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC2&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC2">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC2">resolved</a>)
        </li>
        <li> Release Candidate-1, 2005/05/27 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+RC1&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC1&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC1">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+RC1">resolved</a>)
        </li>
        <li> Milestone-7, 2005/05/13 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+M7&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+M7&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M7">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M7">resolved</a>)
        </li>
        <li> Milestone-6, 2005/04/01 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+M6&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+M6&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M6">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M6">resolved</a>)
        </li>
        <li> Milestone-5, 2005/02/18 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+M5&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+M5&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M5">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M5">resolved</a>)
        </li>
        <li> Milestone-4, 2004/12/17 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+M4&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+M4&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M4">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M4">resolved</a>)
        </li>
        <li> Milestone-3, 2004/11/05 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+M3&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+M3&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M3">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M3">resolved</a>)
        </li>
        <li> Milestone-2, 2004/09/24 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+M2&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+M2&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M2">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M2">resolved</a>)
        </li>
        <li> Milestone-1, 2004/08/12 :
(<a
 href="http://bugs.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=Core&amp;target_milestone=3.1+M1&amp;resolution=FIXED">fixed</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?product=JDT&amp;component=CORE&amp;target_milestone=3.1+M1&amp;namedcmd=Assigned">all</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M1">unresolved</a>)
(<a
 href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=RESOLVED&amp;bug_status=VERIFIED&amp;bug_status=CLOSED&amp;product=JDT&amp;component=CORE&amp;target_milestone=3.1+M1">resolved</a>)
        </li>
      </ul>
		</div>
		<div class="homeitem3col">
			<a name="UPDATES"></a>
			<h3>Updates</h3>
			<p>These patches are not yet part of any official
release or rollup; but provide an early access to the next delivery for
quality assessment. If you find any regression using these patches,
please inform the JDT/Core team by entering a <a
 href="http://dev.eclipse.org/bugs/">bug report</a>.</p>
 <img
 src="http://dev.eclipse.org/images/Adarrow.gif" nosave="" border="0"
 height="16" width="16">&nbsp;<b>3.1.2 preview</b>
      <table>
          <tr>
            <td valign="top"><a
 href="../patches/org.eclipse.jdt.core_3.1.1.zip"><img
 src="../jar_l_obj.gif" nosave="" border="0" height="20" width="20"></a></td>
            <td valign="top">posted on 2005/11/03, 6,119 KB (click on
picture)</td>
          </tr>
          <tr>
            <td valign="top"><i>applies to</i></td>
            <td valign="top">build R3.1.1</td>
          </tr>
          <tr>
            <td valign="top"><i>description</i> </td>
            <td valign="top">Early preview of 3.1.2 build. <br>
            <br>
(<span style="font-style: italic;">Note that <a
 href="http://download.eclipse.org/downloads/index.php">3.1.2 builds</a>
are now available which make this preview obsolete. However it is&nbsp;
kept for developpers that are still using 3.1.1).</span><br>
            <br>
This patch can be applied by expanding the zip archive into the <code>&lt;install&gt;/eclipse/plugins/</code>
directory. Be sure to move the src zip files to the proper source
project.
            <br>
Plug-in revision ID is "3.1.1". Corresponding sources are versioned
using tag <a
 href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.core/?only_with_tag=v_579d_R31x">v_579d_R31x</a>
            <br>
Addresses the following issues: <font size="-1">
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=114855">114855</a>
[compiler] OutOfMemoryError compiling deeply nested try-catch
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=114304">114304</a>
[1.5][compiler] Return type not compatible with generic subinterface.
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=112109">112109</a>
Compilation problem: Eclipse does not recognise parametrized
notify-method in generic context
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=113273">113273</a>
[1.5][compiler] Compiler confused by multiply bounded type parameter
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=106466">106466</a>
[1.5][compiler] Type parameter followed by other types in bound -
rejected by javac, accepted by Eclipse
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=100970">100970</a>
[1.5][compiler] Interface methods may conflict with Object methods
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=100182">100182</a>
[1.5][compiler] unecessary cast in case of boxing
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=112231">112231</a>
[1.5][compiler] enum declaration
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=108856">108856</a>
[1.5][compiler] Inner inner classes have illegal names
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=105756">105756</a>
[1.5][model] Incorrect warning on using raw types
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=112666">112666</a>
[1.5][compiler] Compiler rejects valid assignment to complex capture
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=111350">111350</a>
[1.5][compiler] method override and generics
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=108782">108782</a>
[1.5][compiler] inconsistent @Override error
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=108780">108780</a>
[1.5][compiler] Subsignature checking does not respect erasure
conversion
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=105808">105808</a>
[1.5][dom] MethodBinding#overrides(..) should not consider return types
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=112500">112500</a>
[1.5][compiler] bug between inference and wilcard
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=112268">112268</a>
[1.5][compiler] Type mismatch introduced in 3.1.1
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=111898">111898</a>
[compiler] Wrong code generation
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=107045">107045</a>
[1.5][compiler] Compiler misses name clash with bounded class type
parameter
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=109118">109118</a>
[1.5][compiler] Unhandled Exception Compiler error involving generics
in java 1.5
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=111703">111703</a>
Static initialization block in anonymous inner class causes compiler to
fail
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=111208">111208</a>
[1.5][compiler] Compiler gets confused by multiple generic-extends'
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=111299">111299</a>
JavaModelCache may overflow the memory.
            <br>
            <a
 href="http://bugs.eclipse.org/bugs/show_bug.cgi?id=111014">111014</a>
Internal Compiler Error
            <br>
            </font>Also see corresponding <a
 href="http://dev.eclipse.org/viewcvs/index.cgi/*checkout*/org.eclipse.jdt.core/buildnotes_jdt-core.html?rev=1.4432.2.133&amp;only_with_tag=v_579d_R31x">build
notes</a>.
            </td>
          </tr>
      </table>
		</div>
		<div class="homeitem3col">
			<a name="SOURCE"></a>
			<h3>Getting the sources</h3>
			<ul>
        <li>Define a CVS connection to server <code>pserver:anonymous@dev.eclipse.org:/home/eclipse,</code>
        </li>
        <li>Check out the <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.jdt.core/?only_with_tag=R3_1_maintenance"><code>R3_1_maintenance</code></a>
branch of the project <code>org.eclipse.jdt.core</code>. </li>
        <li>Make sure to import the prerequisite plug-ins (usually from
a SDK R3.1 most recent <a href="http://www.eclipse.org/downloads/index.php" target="new">integration
build</a>). Prerequisite plug-ins are already referenced on the project build path (<code>.classpath</code> file). </li>
        <li>The sources of this project are 1.4 compatible. The compiler compliance level should thus be set to 1.4. </li>
      </ul>
		</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick links</h6>
			<ul>
				<li><a href="#HAPPENING">What's Happening?</a></li>
				<li><a href="#FEATURES">Features List</a></li>
				<li><a href="#RELEASE">Release Process</a></li>
				<li><a href="#BUGS">Bug Resolution</a></li>
				<li><a href="#UPDATES">Updates</a></li>
				<li><a href="#SOURCE">Getting the sources</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
