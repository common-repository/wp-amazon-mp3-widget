=== WP-Amazon-MP3-Widget ===
Contributors: jeffbert
Donate link: http://grabkindle.com/donate.html
Tags: amazon, affiliate, mp3, music, widget
Requires at least: 2.5
Tested up to: 2.5
Stable tag: trunk

Add slick looking Amazon MP3 widgets to your blog posts in a brain-dead simple way! 
Just say [mp3] to add an MP3 widget anywhere on your blog.

== Description ==

Add slick looking Amazon MP3 widgets to your blog posts in a brain-dead simple way! 
Just say [mp3] to add mp3 tracks anywhere on your blog.

The MP3 Clips widget plays album previews and displays the album art in the background. It's as easy as typing [mp3] anywhere in your post and you get a beautiful Flash widget with mp3 tracks.

There are many ways to create an MP3 widget. Here are some:

1. `[mp3]` <br>
This creates an MP3 widge containing the latest MP3 bestselling tracks.

1. `[mp3 list="Bestsellers" browse_node="324527011"]` <br/>
This creates a MP3 widge containing the latest 'Hard Rock and Metal' bestsellers.
You can get the browse_node values for various music genres here: http://www.browsenodes.com/node-324382011.html

Here are the most popular browse nodes:
Alternative Rock (324384011)
Blues (324396011)
Broadway & Vocalists (324409011)
Children's Music (324414011)
Christian & Gospel (324420011)
Classic Rock (324431011)
Classical (324442011)
Country (324492011)
Dance & DJ (324504011)
Folk (324519011)
Hard Rock & Metal (324527011)
International (324537011)
 	
Jazz (324552011)
Latin Music (324570011)
Miscellaneous (324577011)
New Age (324586011)
Opera & Vocal (324591011)
Pop (324608011)
R&B (324621011)
Rap & Hip-Hop (324633011)
Rock (324645011)
Soundtracks (324660011)

1. `[mp3 keywords="Sunshine" browse_node="324608011" title="Sunshine tracks in Pop"]` <br/>
This creates an MP3 widget containing all the 'Pop' tracks with the word 'Sunshine' in the album/song title.

1. `[mp3 asins="'B0011Z0YR2,B00137W4P8,B0013G0PG4,B001AU8ZLK,B001AUCJZ8,B001AUEMDK,B001AU8YB6" title="My favorite MP3 songs." shuffle_tracks="True"]` <br/>
This creates an MP3 widget with the specified tracks. The tracks are displayed in random order each time that it is displayed. 

1. `[mp3 browse_node="324608011" tag="ohmyki-20"]` <br/>
This creates an MP3 widget containing bestselling mp3 tracks in Pop. Since the 'tag' parameter is specified, you will earn an Affiliate referral fee for any sales made through this widget. 

You can customize a lot more in your MP3 widget. Check out the FAQ section for more details.

== Installation ==

1. Upload `wp-amazon-mp3-widget.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How do I change the size of my MP3 widget? =

You can set 'height' and 'width' parameters to resize your widget. For e.g., to get a 250x250 widget, I would do something like this:<br/><br/>
`[mp3 width="250" height="250"]` <br/><br/>
Valid combinations of Width x Height are: 250 x 250, 336 x 280, 120 x 300, 160 x 300, 125 x 125, 120 x 90, 234 x 60

= What is the 'shuffle_tracks' parameter? =

Sometimes you want your user to see a different set of tracks each time the widget is rendered. Setting 'shuffle_tracks="True"' ensures that the items in your mp3 widget are shuffled before they're presented to the user.

= What are 'browse nodes' and Where can I get all the Amazon MP3 browse nodes? =
Browse Node is a number value that Amazon uses to identify a music genre. For eg, the browse_node value for the Pop genre is 324608011. You can get the list of BrowseNode values from here: http://www.browsenodes.com/node-324382011.html . Click on a genre name on that page to drill down to the sub-genres. Here is a list of the popular genres and (browse_nodes): 
Alternative Rock (324384011)
Blues (324396011)
Broadway & Vocalists (324409011)
Children's Music (324414011)
Christian & Gospel (324420011)
Classic Rock (324431011)
Classical (324442011)
Country (324492011)
Dance & DJ (324504011)
Folk (324519011)
Hard Rock & Metal (324527011)
International (324537011)
 	
Jazz (324552011)
Latin Music (324570011)
Miscellaneous (324577011)
New Age (324586011)
Opera & Vocal (324591011)
Pop (324608011)
R&B (324621011)
Rap & Hip-Hop (324633011)
Rock (324645011)
Soundtracks (324660011)


= Ok, one FINAL question before I'm sold. I love the MP3 widget. Any plans on doing this for other Amazon widgets on http://widgets.amazon.com/? =

Checkout the WP Carousel widget here: http://wordpress.org/extend/plugins/wp-amazon-carousel/ . If you want the Slideshow widget, My Favorites or Search widget, drop me a line at dogbertq8@gmail.com and I'll build another plugin for those widgets.

== Screenshots ==

1. Here's a screenshot of a MP3 widget in action.