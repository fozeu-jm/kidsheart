﻿=== ACF Photo Gallery Field ===
Contributors: navzme
Tags: acf, advanced, custom, fields, photo, gallery, album, fancybox, litebox, lightbox
Requires at least: 3.8
Tested up to: 4.9.6
Stable tag: 1.6.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A cool plugin that extends the Advanced Custom Fields (ACF) functionality to add "Photo Gallery" to any post/pages of your choice.

== Description ==

A lightweight extension of Advanced Custom Field (ACF) that adds **Photo Gallery** field to any post/pages on your WordPress website.

* Visually create your Fields
* Add multiple photos and you can also modify title, caption and link to anything
* Assign your fields to multiple edit pages (via custom location rules)
* Easily load data through a simple and friendly API
* Uses the native WordPress custom post type for ease of use and fast processing
* Uses the native WordPress metadata for ease of use and fast processing

= Note =
This plugin is alternative of ACF Gallery Pro. You need to have knowledge of coding because you’ll be required to edit your WordPress theme source code. If you are looking for shortcodes and prebuilt gallery then this plugin is **NOT** for you. This plugin will give you PHP array of images and you’ll need to make the gallery layout as you wish.

= Usage =
*acf_photo_gallery* is a helper function that takes in **ACF_FIELD_NAME** and **POST_ID** will query the database and compile the images for you. The output of this function will be an array.

`acf_photo_gallery(ACF_FIELD_NAME, POST_ID);`

= Example =
The following example is using Twitter Bootstrap framework to layout. You can use any framework of your choice.

`<?php
	//Get the images ids from the post_metadata
	$images = acf_photo_gallery('vacation_photos', $post->ID);
	//Check if return array has anything in it
	if( count($images) ):
		//Cool, we got some data so now let's loop over it
		foreach($images as $image):
			$id = $image['id']; // The attachment id of the media
			$title = $image['title']; //The title
			$caption= $image['caption']; //The caption
			$full_image_url= $image['full_image_url']; //Full size image url
			$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
			$thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
			$url= $image['url']; //Goto any link when clicked
			$target= $image['target']; //Open normal or new tab
			$alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
			$class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
?>
<div class="col-xs-6 col-md-3">
	<div class="thumbnail">
		<?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
			<img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
		<?php if( !empty($url) ){ ?></a><?php } ?>
	</div>
</div>
<?php endforeach; endif; ?>`

= Add Extra Fields =
To add extra fields add the following to your themes functions.php file.

`//Create extra fields called Altnative Text and Custom Classess
function my_extra_gallery_fields( $args, $attachment_id, $field ){
	$args['alt'] = array('type' => 'text', 'label' => 'Altnative Text', 'name' => 'alt', 'value' => get_field($field . '_alt', $attachment_id) ); // Creates Altnative Text field
	$args['class'] = array('type' => 'text', 'label' => 'Custom Classess', 'name' => 'class', 'value' => get_field($field . '_class', $attachment_id) ); // Creates Custom Classess field
	return $args;
}
add_filter( 'acf_photo_gallery_image_fields', 'my_extra_gallery_fields', 10, 3 );`

= How to get values of extra fields =
You can use ACF helper function `get_field`

`get_field('photo_gallery_alt', $id);`
`get_field('photo_gallery_class', $id);`

= Pull caption from attachment caption field =
By default the caption is being pulled from description field. Add the following filter to your `function.php` to pull the caption from attachment caption field.

`add_filter( 'acf_photo_gallery_caption_from_attachment', '__return_true' );`

= REST API =
To use the RESTful feature, you will need to install [ACF to REST API](https://wordpress.org/plugins/acf-to-rest-api/) plugin.

**How to use?**

`//Send HTTP Request to URL
http://www.example.com/wp-json/acf/v3/pages/POST_ID/ACF_FIELD_NAME?type=photo_gallery`

Where **POST_ID** refers to your WordPress Post ID and **ACF_FIELD_NAME** refers to ACF Field Name which you are trying to get the value. Below are 2 examples:

`//Get all the images of POST_ID 2 and ACF FIELD NAME vacation_photos
http://www.example.com/wp-json/acf/v3/pages/2/vacation_photos?type=photo_gallery`

`//Get all the images of POST_ID 2 and ACF FIELD NAM vacation_photos and order the images by ascending order by post_in
http://www.example.com/wp-json/acf/v3/pages/2/vacation_photos?type=photo_gallery&order=ASC&orderby=post__in`

= Compatibility =
This ACF field type is compatible with:
* ACF 4
* ACF 5

= Issues =
Just like any other WordPress plugin, this plugin can also cause issues with other themes and plugins. If you are facing issues making this plugin work on your WordPress site, please do ask for help in the support forum. This way we can help you out and prevent this issue from happening to someone else. If you want to talk to me directly, you can contact me via my website <http://www.navz.me/>

== Installation ==

1. Copy the `navz-photo-gallery` folder into your `wp-content/plugins` folder
2. Activate the Advanced Custom Fields: Photo Gallery plugin via the plugins admin page
3. Create a new field via ACF and select the Photo Gallery type
4. Please refer to the description for more info regarding the field type settings

== Changelog ==
=1.6.3=
* [Added] Support for ACF 5
* [Added] Edit gallery with built-in or WordPress native model. Thanks to Github @makepost
* [Added] Under the hood improvements of the codebase
* [Added] Support for RESTFul API with ACF to REST API plugin

=1.6.2=
* [Bugfix] Keep data synced with the attachment data
* [Bugfix] Pull caption attachment caption using add filters
* [Bugfix] PHP 7.2 count() error 

=1.6.1=
* [Bugfix] Edit image box disappears on click of pencil edit button reported by @rickytoof9

=1.6.0=
* [Bugfix] Error on saving post with empty gallery. Patch provided by @ugy
* [Bugfix] Showing multiple photo gallery fields in the same page reported by @rickytoof9
* [Added] Support for srcset. Special thanks to @ugy for the code

= 1.5.0 =
* [Added] Support for SVG
* [Added] Support for legacy PHP version
* [Added] Add extra fields

= 1.4.0 =
* [Added] Can sortable gallery images
* [Bugfix] Fixed the order to follow the sort order for gallery images

= 1.3.0 =
* Change the meta_key from acf field_key to acf field_name
* [Added] Helper function acf_photo_gallery() to pull images
* [Added] Helper function acf_photo_gallery_resize_image to resize the image on fly and save it
* [Bugfix] Issue with target parameter in config
* [Bugfix] Issue with url not saving properly

= 1.2.0 =
* [Bugfix] Support for WordPress 4.6
* [Added] Some changes on on the display
* [Added] Fetch the data from the database

= 1.1.0 =
* [Bugfix] Undefined index: acf-photo-gallery-field on file acf-photo_gallery-v4
* [Bugfix] When delete the photos from the gallery, the last photo was not deleting
* [Bugfix] Gallery photos was not saving in the database

= 1.0.0 =
* Initial Release.