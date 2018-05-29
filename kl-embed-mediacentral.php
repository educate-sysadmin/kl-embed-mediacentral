<?php
/*
Plugin Name: KL Embed Mediacentral
Plugin URI: https://github.com/educate-sysadmin/kl-embed-mediacentral
Description: Wordpress plugin for shortcode to embed UCL videos
Version: 0.2
Author: b.cunningham@ucl.ac.uk
Author URI: https://educate.london
License: GPL2
*/

// thanks groups/lib/access/class-groups-access-shortcodes.php
function kl_embed_mediacentral_shortcode( $atts, $content = null ) {
	$output = '';
	
    // parse options
	$options = shortcode_atts( array( 'id' => '' ), $atts );
	
	$html = '<div style="position:relative;padding-bottom:56%;padding-top:20px;height:0;">
	<iframe src="https://mediacentral.ucl.ac.uk/player?autostart=n&fullscreen=y&width=0&height=0&videoId={id}&captions=n&chapterId=0" frameborder="0" scrolling="no" style="position:absolute;top:0;left:0;width:100%;height:100%;" allowfullscreen>
	</iframe>
	</div>';
	// e.g id 75321720, 18442132, 82495392

	$output .= str_replace('{id}',$options['id'],$html);	
	
	return $output;
}

add_shortcode( 'kl_mediacentral', 'kl_embed_mediacentral_shortcode' );
