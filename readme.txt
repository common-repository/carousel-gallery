=== Carousel Gallery ===
Contributors: obaq
Tags: gallery, photo, carousel, merry-go-round, thumbnail, transparent, opaque, frame, reflect
Requires at least: 2.7
Tested up to: 2.9.2
Stable tag: 1.1

== Description ==
This plugin can create a photo gallery with thumbnails moving around like a merry-go-round utilising jquery and Interface lib at http://interface.eyecon.ro/.
The photos placed in a folder within the 'images' folder of the plugin or under the 'wp-content' folder will be used for the gallery.

Please visit the below site for the details:
"Carousel Gallery plugin for WordPress"
http://obaqblog.blogspot.com/2010/06/carousel-gallery-plugin-for-wordpress.html

*Now images can be better cached in the browsers for a faster load.

*Chrome Browser may not display the reflection effect of thumbnails properly.

*this plugin may not be used in the themes "Picture Perfect" and "Sliding Door" of which menu stop functioning.

Please leave a commment at the below site if you have any problem, questions and suggestions.
http://obaqblog.blogspot.com/2010/06/carousel-gallery-plugin-for-wordpress.html#comment-form

== Installation ==
Make sure PHP supports php-gd.
Extract all folder and files.

Upload the 'carousel-gallery' folder and its contents to '/wp-content/plugins/'.
(Place photos in a folder under the 'images' folder)

Go to the 'Plugins' menu of your admin area and activate the plugin.

== Frequently Asked Questions ==
= How to insert a gallery into the post? =
You may try inserting the below sample codes onto the posts and learn how the things work.
Basically, it is a simple tagging scheme.
[CG]...[/CG]: start and end of the insertion code.
[WIDTH]...[/WIDTH]: the width of the gallery.
[HEIGHT]..[/HEIGHT]: the height of the gallery.
[BGCOLOR]...[/BGCOLOR]: the background color of the gallery.
[BORDERCOLOR]...[/BORDERCOLOR]: the color for the gallery's outer border.
[BGIMAGE]...[/BGIMAGE]: the url for the background image of the gallery.
[THUMBWIDTH]...[/THUMBIMGWIDTH]: the width of a thumbnail.
[THUMBHEIGHT]...[/THUMBHEIGHT]: the height of a thumbnail.
[FOLDER]...[/FOLDER]: the path to the folder which contains photos. You can set 'images/yourphotofolder' if you placed the target folder in the 'images' folder under 'carousel-gallery'. You can set 'wp-content/(your path to the photo folder)' if you placed the photos under 'wp-content' of your site.
*the thumbnails will be linked to their own original photos and their filename will be used for the title text in a popup image box.

Examples:
WIDTH: 400
HEIGHT: 200
BGCOLOR: navy
BORDERCOLOR: blue
THUMBWIDTH: 100
THUMBHEIGHT: 76
FOLDER: images/photos
[CG]
[WIDTH]400[/WIDTH]
[HEIGHT]200[/HEIGHT]
[BGCOLOR]navy[/BGCOLOR]
[BORDERCOLOR]blue[/BORDERCOLOR]
[THUMBWIDTH]100[/THUMBWIDTH]
[THUMBHEIGHT]76[/THUMBHEIGHT]
[FOLDER]images/photos[/FOLDER]
[/CG]
:
WIDTH: 400
HEIGHT: 200
BORDERCOLOR: black
BGIMAGE: images/tiles/base.jpg
THUMBWIDTH: 100
THUMBHEIGHT: 76
FOLDER: images/test
[CG]
[WIDTH]400[/WIDTH]
[HEIGHT]200[/HEIGHT]
[BORDERCOLOR]black[/BORDERCOLOR]
[BGIMAGE]images/tiles/base.jpg[/BGIMAGE]
[THUMBWIDTH]100[/THUMBWIDTH]
[THUMBHEIGHT]76[/THUMBHEIGHT]
[FOLDER]images/test[/FOLDER]
[/CG]
:
WIDTH: 300
HEIGHT: 400
BORDERCOLOR: pink
BGIMAGE: images/tiles/RedBlack-Plaid_s.jpg
THUMBWIDTH: 120
THUMBHEIGHT: 92
FOLDER: wp-content/uploads/2010/05/photos

[CG]
[WIDTH]300[/WIDTH]
[HEIGHT]400[/HEIGHT]
[BORDERCOLOR]pink[/BORDERCOLOR]
[BGIMAGE]images/tiles/RedBlack-Plaid_s.jpg[/BGIMAGE]
[THUMBWIDTH]120[/THUMBWIDTH]
[THUMBHEIGHT]92[/THUMBHEIGHT]
[FOLDER]wp-content/uploads/2010/05/photos[/FOLDER]
[/CG]


== Screenshots ==
1. screenshot-1.png: a carousel gallery.
2. screenshot-2.png: a carousel gallery with a backgound image.
3. screenshot-3.png: a carousel gallery with a backgound image.
4. screenshot-4.png: an example of the carousel gallery.
5. screenshot-5.png: another example of the carousel gallery.

== Changelog ==
= 1.1 =
*compressed javascripts and CSS, a feature to add Expires header to internal images for browser cache.

= 1.0 =
* 1.0 is the beginning of the version.

== Upgrade Notice ==
= 1.1 =
* deactivate, back up the contents of the 'images' folder if necessary and remove other files and folders before uploading new version.

= 1.0 =
* 1.0 is the beginning of the version.
