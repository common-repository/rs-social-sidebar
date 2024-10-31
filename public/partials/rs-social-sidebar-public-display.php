<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.xtendify.com/en/user/2-rosinghal
 * @since      1.0.0
 *
 * @package    Rs_Social_Sidebar
 * @subpackage Rs_Social_Sidebar/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
$options = get_option($this->plugin_name);
$social_sidebar_facebook = $options['facebook_page_id'];
$social_sidebar_google_plus = $options['google_plus_page_id'];
$social_sidebar_twitter = $options['twitter_widget_id'];
$social_sidebar_icon_alignment = $options['icon_alignment'];
?>
<?php $i=0; ?>
<?php if($social_sidebar_facebook) { ?>
<?php $i++; $class = number($i); ?>
<div class="ss-wrapper <?php echo $class; ?>-wrapper <?php echo $class; ?>-wrapper-<?php echo $social_sidebar_icon_alignment; ?>">
	<div class="ss-icon facebook-icon <?php echo $class; ?>-icon-<?php echo $social_sidebar_icon_alignment; ?>"></div>
	<div class="facebook-body">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1743237475891456";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<div class="fb-page" data-href="https://www.facebook.com/<?php echo $social_sidebar_facebook; ?>" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Xtendify/"><a href="https://www.facebook.com/<?php echo $social_sidebar_facebook; ?>"><?php echo $social_sidebar_facebook; ?></a></blockquote></div></div>
    </div>
</div>
<?php } ?>
<?php if($social_sidebar_google_plus) { ?>
<?php $i++; $class = number($i); //https://developers.google.com/+/web/badge/ ?>
<div class="ss-wrapper <?php echo $class; ?>-wrapper <?php echo $class; ?>-wrapper-<?php echo $social_sidebar_icon_alignment; ?>" style="background:transparent">
	<div class="ss-icon google-plus-icon <?php echo $class; ?>-icon-<?php echo $social_sidebar_icon_alignment; ?>"></div>
	<div class="google-plus-body">
		<!-- Place this tag in your head or just before your close body tag. -->
		<script src="https://apis.google.com/js/platform.js" async defer></script>

		<!-- Place this tag where you want the widget to render. -->
		<div class="g-page" data-width="240" data-href="https://plus.google.com/<?php echo $social_sidebar_google_plus; ?>" data-showcoverphoto="false" data-rel="publisher"></div>
	</div>
</div>
<?php } ?>
<?php if($social_sidebar_twitter) { ?>
<?php $i++; $class = number($i); //https://twitter.com/settings/widgets ?>
<div class="ss-wrapper <?php echo $class; ?>-wrapper <?php echo $class; ?>-wrapper-<?php echo $social_sidebar_icon_alignment; ?>">
	<div class="ss-icon twitter-icon <?php echo $class; ?>-icon-<?php echo $social_sidebar_icon_alignment; ?>"></div>
	<div class="twitter-body">
		<a class="twitter-timeline" href="https://twitter.com" data-widget-id="<?php echo $social_sidebar_twitter; ?>">Tweets</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
</div>
<?php } ?>

<?php function number($number) {
	switch($number) {
		case 1 : return 'first';
		case 2 : return 'second';
		case 3 : return 'third';
	}
} ?>