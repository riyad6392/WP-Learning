<?php

/**
 * Plugin Name: Social Media Sharing
 * Description: Adds social media share buttons (Facebook, Twitter, LinkedIn) to posts and pages.
 * Version: 1.0
 * Author: Riyad Ahamed
 * License: GPL v2 or later
 */


 require_once( plugin_dir_path( __FILE__ ) . 'includes/class-social-media-sharing.php' );
 require_once(plugin_dir_path(__FILE__) . 'platform/class-social-media-platform.php');
 require_once(plugin_dir_path(__FILE__) . 'buttons/class-social-media-buttons.php');

 function runSocialMediaSharing() {
    $platforms = [
        new Facebook(),
        new Twitter(),
        new LinkedIn()
    ];

    $buttons = new SocialMediaButtons($platforms);
    $social_sharing = new SocialMediaSharing($buttons);
    $social_sharing->init();
 }

 add_action( 'plugins_loaded', 'runSocialMediaSharing');