# WebMan WordPress Theme Framework Changelog

## 1.0.15

* **Add**: Added method to get the (parent) theme folder name
* **Fix**: Compatibility with child themes
* **Fix**: Stripping HTML tags in Post Views Count plugin output to prevent errors in theme HTML

#### Files changed:

	init.php
	includes/classes/class-admin.php
	includes/classes/class-core.php
	includes/classes/class-customize.php
	includes/classes/class-updater.php


## 1.0.14

* **Update**: Renaming the `customizer_js` to `preview_js` and improving the function

#### Files changed:

	init.php
	includes/classes/class-customize.php


## 1.0.13

* **Update**: Renaming the `include` folder to `includes`
* **Update**: Updating `{%= prefix_constant %}_INCLUDE_DIR` constant name to `{%= prefix_constant %}_INCLUDES_DIR`
* **Update**: Library files paths
* **Update**: Theme files paths

#### Files changed:

	init.php
	includes/admin.php
	includes/customize.php
	includes/update-notifier.php
	includes/visual-editor.php
	includes/classes/class-customize.php


## 1.0.12

* **Update**: Compatibility with Readability.com

#### Files changed:

	init.php
	includes/classes/class-core.php


## 1.0.11

* **Fix**: Customizer custom option preview JS

#### Files changed:

	init.php
	includes/customize.php


## 1.0.10

* **Update**: Removed custom color picker styling

#### Files changed:

	init.php
	scss/customize.scss


## 1.0.9

* **Update**: Improved flexibility of accessibility skip link

#### Files changed:

	init.php
	includes/classes/class-core.php


## 1.0.8

* **Update**: Renaming the `inc` folder to `include`
* **Update**: Updating `{%= prefix_constant %}_INCLUDE_DIR` constant
* **Update**: Library files paths
* **Update**: Theme files paths

#### Files changed:

	init.php
	includes/admin.php
	includes/customize.php
	includes/update-notifier.php
	includes/visual-editor.php
	includes/classes/class-customize.php


## 1.0.7

* **Update**: Renaming the `lib` folder to `library`

#### Files changed:

	init.php
	readme.md


## 1.0.6

* **Update**: SASS files optimized

#### Files changed:

	scss/about.scss
	scss/customize.scss


## 1.0.5

* **Fix**: Time post meta info markup

#### Files changed:

	inc/classes/class-core.php


## 1.0.4

* **Add**: Adding description text for post meta info

#### Files changed:

	inc/classes/class-core.php


## 1.0.3

* **Add**: Support for WordPress 4.4

#### Files changed:

	inc/classes/class-core.php


## 1.0.2

* **Update**: Localization

#### Files changed:

	inc/classes/class-core.php


## 1.0.1

* **Add**: Support for Jetpack logo refresh in customizer
* **Update**: Removing obsolete variables
* **Update**: Adding JS comments
* **Fix**: Returning site logo "pre" hook output instead of echoing

#### Files changed:

	inc/classes/class-core.php
	inc/classes/class-customize.php
	js/customize.js


## 1.0

* Initial release - Resetting versioning as this was complete recode from previous framework versions (last one was v4.0.4).


*WebMan WordPress Theme Framework, (C) WebMan Design, Oliver Juhas, www.webmandesign.eu*