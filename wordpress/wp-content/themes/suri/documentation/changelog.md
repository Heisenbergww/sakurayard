== 0.1.7 - Sep 02 2016 ==
1. Minor css corrections.
2. Screenshot photo attribution.

== 0.1.6 - Sep 02 2016 ==
1. Typography modifications

== 0.1.5 - Sep 01 2016 ==
1. Bugfixed.
2. Call to action option has been removed.
3. Changes made in css files.
4. Modify google font enqueue code.

== 0.1.4 - Aug 27 2016 ==
1. Option to add Call to action on home page.
2. Option to hide sidebar on home page.
3. Don't show excerpt for video, audio and gallery post format. Instead show full content.
4. Don't show tumbnails for aside, quote, status, video, audio and gallery post formats.
5. Changes in style.css for pingbacks and recent post's post-date display.
6. Bugfixed

== 0.1.3 - Aug 25 2016 ==
1. Google font addition.
2. Minor modification in style.css and other css files.
3. Theme URI has been added.

== 0.1.2 - Aug 17 2016 ==
1. Genericons support added.
2. Minor bugfix in style.css
3. Social icons menu support added, also this menu can be added via nav menu widget.
4. Modified theme screenshot cover image.

== 0.1.1 - Aug 09 2016 ==
1. ie8.css bug fix and cleanup.
2. editor-style.css cleanup.
3. ie8 nav-menu keyboard accessibility support.

== 0.1.0 - Aug 05 2016 ==
1. normalise.css updated to version 4.1.1
2. CSS cleanup and optimization.
3. Minor bug fix.

== 0.0.9 - Jul 29 2016 ==
1. Theme documentation as per WordPress standards.
2. Resolved issues with post thumbnail size.

== 0.0.8 - Jul 27 2016 ==
1. Improved get thumbnail methods.
2. Merge navgation.js and skip-link-focus-fix.js into one scripts.js file.
3. Minor changes in theme CSS.
4. Minor changes in various theme php files for code cleanup.
5. Update ie8.css and editor-style.css.
6. Included Jetpack support file from underscores starer theme.
7. Removed color scheme handlers from customizer.js.
8. Sidebar html rendering transferred to 'template-parts' and unnecessary hooks removed.
9. Seperate comment rendering function and template parts.
10. Include backward compatibilty file. Theme only supports WordPress 4.1+

== 0.0.7 - May 31 2016 ==
1. Add : Restore custom header support.
2. Change : Modify addon files for better clarity.
3. Clean up functions.php and move few filtered functions to class-filters.php.
4. Minor functional and css improvements for accessibility.

== 0.0.6 - May 17 2016 ==
1. Add : Option for users to change thumbnail sizes using add_image_size.
2. Change : modify style.css for thumbnail size and position for varying sizes
3. Fix : Footer widgets display issue has been resolved.
4. Change : All display related codes has been moved in their seperate template part files and the only responsibility of display class is to pre check and call relevant template part to display theme content.

== 0.0.5 - May 06 2016 ==

1. Add : colors addon for changing theme component colors.
2. Add : Advanced thumbnail options addon.
3. Change : Seperate sidebar toggle js file from navigation.js
4. Fix : Search field bugfix for IE
5. Change : Theme logo now can be uploaded using WordPress inbuilt Custom Logo feature rather than using Custom Header.

== 0.0.4 - Apr 12 2016 ==

1. Define instantiation method for Theme customizer and put senitization methods separately in senitization class. All static functions has been converted to non static.
2. style.css bug resolve. Search bar in Main navigation not rendered correctly on Chrome and IE. Bugfixed.
3. Remerge contents of setup.php in function.php.
4. Made Suri_Customizer class singleton.
5. Add comments for hooked functions.

== 0.0.3 - Apr 4 2016 ==

This update mainly caters to organizational changes in theme codes, methods and files to keep theme more clean and efficient. Also resolved some code errors and comments typo errors. Some notable changes are as follows:

1. Updated : Put all display related functions together in display.php for better organization. Also, hook these functions to appropriate action hooks rather than directly calling them from template files.
2. Updated : Move 'schema.php' file from 'inc' to 'addon' folder as it is an optional addition. Also, this file is called using 'include' in place of 'require' for the same reason. Code changes made in schema.php and suri_attr() to replace PHP Switch-Case to WordPress filters.
3. Updated : Transfer functions across various files to keep related functions together. Some file names also changed for clarity.
4. Updated : Create PHP classes in functions.php, customizer.php, display.php and schema.php to keep all relevant codes tide together.
5. Changes in customizer.php sanitization functions to get valid choices directly from WP_customizer_setting instance rather than calling choices function. Obviously, choices function no longer required and removed.
6. Create documentation directory to keep all documentation files together.
7. Minor changes in various files to fix errors in codes and typo in comments. Some error fix or code update is as follows,
   - Fix : schema.php, line 44-47. add condition to exclude 'page' and '404' for schema of 'content-area'.
   - Update : Moved js detection script from functions.php to navigation.js
   - Update : Moved enqueue method for HTML5 shiv script from functions.php to header.php
   - Fix : customizer.php line 334, replace _suri with suri
   - Fix : footer.php, line - 34. 'echo' added to actually echo copyright text.
   - Fix : style.css change min-height for '.header-items' for mobile screens (<768px) .
