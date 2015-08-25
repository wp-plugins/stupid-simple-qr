=== Plugin Name ===
Contributors: gabrielmcgovern
Donate link: http://www.dreamhost.com/donate.cgi?id=17157
Tags: QR, Quick Response, QR Code, Author, Admin, QR Codes Kill Kittens, Kill Kittens, Kittens
Requires at least: 3.0
Tested up to: 4.3.0
Stable tag: 1.0.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allow authors to easily print a QR code for each page/post.

== Description ==

Adds a 'QR' button next to 'Get Shortlink' on published pages and posts. 

Your authors can click it to print out a QR image and promote what they created. The QR code is created using the 'shortlink'.
The plugin uses the Google Charts API and (as the name applies) is stupid simple to set up and use!

= Options =
There is one optional feature. It allows you to add arbitrary text to the end of the shortcode. This can be useful for tracking purposes.

== Installation ==

1. Upload the `stupid-simple-qr` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

That's it. You are done!

== Frequently Asked Questions ==

= Why did you create this when there are so many other QR plugins? =

There are a bunch of other QR related plugins. However they are for including QRs in your posts. **This
creates QR images FOR YOUR POSTS!**

My authors needed a simple way to get the QR of the posts they create. This was the solution.

= How does the append option work? =
In the settings you can add some text that will be appended to the URL on the QR codes. This can be used for tracking purposed. 
For instance, You can set it as: `&medium=qr`. That way, links will look like: `yourdomain.com/?p=195&medium=qr` in your 
analytics. 

For multisite, this can be set at both the site and network level. They will both be added. 

= Does it do x, y, or z??? =
No, no and no.

= Who uses QR codes anyway? =
Good question. In my experience, they are rarely used by customers. However, this doesn't mean that your authors aren't
demanding them anyway.

If someone wants to create QR codes: 

1. Ask them to watch "QR Codes Kill Kittens": https://www.youtube.com/watch?v=ukzY4v_aOEE by Scott Stratten.
1. What, they still want them? Use this plugin and save yourself the headache.

== Screenshots ==

1. Look ma, a QR button!
1. Pushing the button creates a QR code!

== Changelog ==

= 1.0.4 =
- Tested on newer WP versions
- Fixed minor bugs

= 1.0.3 =
- Bug fix: URL encode append text

= 1.0.2 =
- Allow the options to be set at a network level.

= 1.0.1 =
-Just cleaned the code a bit

= 1.0.0 =
-Seems stable enough. Have at it! 