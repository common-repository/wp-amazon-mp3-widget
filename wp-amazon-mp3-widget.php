<?php
/*
Plugin Name: Amazon MP3 Clips widget
Plugin URI: http://wordpress.org/#
Description: This plugin lets you easily create an Amazon MP3 Clips widget. The MP3 Clips widget plays album previews and displays the album art. It's as easy as typing [mp3] anywhere in your post and you get a beautiful Flash widget with mp3 tracks.
Author: Zahid Khan
Version: 1.0
Author URI: http://grabkindle.com/
*/

// Chance the constants below to customize this plugin
define("MP3_DEFAULT_WIDTH",		"250");
define("MP3_DEFAULT_HEIGHT",	"250");
define("MP3_DEFAULT_TAG",		"wp-mp3-widget-20");
define("MP3_DEFAULT_BROWSE_NODE",	"324382011");
define("MP3_DEFAULT_SHUFFLE_TRACKS", "True");
define("MP3_DEFAULT_MARKETPLACE", "US");

// [mp3]
function mp3_func($atts) {
	extract(shortcode_atts(array(
		'tag' => MP3_DEFAULT_TAG,
		'width' => MP3_DEFAULT_WIDTH,
		'height' => MP3_DEFAULT_HEIGHT,
		'browse_node' => MP3_DEFAULT_BROWSE_NODE,
		'title' => '',
		'list' => '',
		'asins' => '',
		'shuffle_tracks' => MP3_DEFAULT_SHUFFLE_TRACKS,
		'asins' => '',
		'marketplace' => MP3_DEFAULT_MARKETPLACE,
		'keywords' => ''
	), $atts));

If ($keywords){
	$script = "<script>".
	" var amzn_wdgt={widget:'MP3Clips'};".
	" amzn_wdgt.marketPlace='{$marketplace}';".
	" amzn_wdgt.tag='{$tag}';".
	" amzn_wdgt.widgetType='SearchAndAdd';".
	" amzn_wdgt.keywords='{$keywords}';".
	" amzn_wdgt.title='{$title}';".
	" amzn_wdgt.width='{$width}';".
	" amzn_wdgt.height='{$height}';".
	($browse_node?" amzn_wdgt.browseNode='{$browse_node}';":"").
	" amzn_wdgt.shuffleTracks='{$shuffle_tracks}';".
	" </script>".
	"<script type='text/javascript' src='http://wms.assoc-amazon.com/20070822/US/js/swfobject_1_5.js'>".
	"</script>";
} elseif ($asins){
	$script = "<script>".
	" var amzn_wdgt={widget:'MP3Clips'};".
	" amzn_wdgt.marketPlace='{$marketplace}';".
	" amzn_wdgt.tag='{$tag}';".
	" amzn_wdgt.widgetType='ASINList';".
	" amzn_wdgt.ASIN='{$asins}';".
	" amzn_wdgt.title='{$title}';".
	" amzn_wdgt.width='{$width}';".
	" amzn_wdgt.height='{$height}';".
	" amzn_wdgt.shuffleTracks='{$shuffle_tracks}';".
	" </script>".
	"<script type='text/javascript' src='http://wms.assoc-amazon.com/20070822/US/js/swfobject_1_5.js'>".
	"</script>";
} else {
	$list = validateList($list);
	$script = "<script>".
	" var amzn_wdgt={widget:'MP3Clips'};".
	" amzn_wdgt.marketPlace='{$marketplace}';".
	" amzn_wdgt.tag='{$tag}';".
	" amzn_wdgt.widgetType='{$list}';".
	($browse_node?" amzn_wdgt.browseNode='{$browse_node}';":"").
	" amzn_wdgt.title='{$title}';".
	" amzn_wdgt.width='{$width}';".
	" amzn_wdgt.height='{$height}';".
	" amzn_wdgt.shuffleTracks='{$shuffle_tracks}';".
	" </script>".
	"<script type='text/javascript' src='http://wms.assoc-amazon.com/20070822/US/js/swfobject_1_5.js'>".
	"</script>";
}

	return $script;
}

add_shortcode('mp3', 'mp3_func');

?>
