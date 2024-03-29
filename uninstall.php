<?php
/**
 *  Uninstall stuff.
 *  do some cleanup after user uninstalls the plugin
 *  ----------------------------------------------------------------------------
 *  -remove stuff
 * -----------------------------------------------------------------------------
 *
 * @category  Plugin
 * @copyright Copyright © 2020 Uriel Wilson.
 * @package   MembersOnlyPostType
 * @author    Uriel Wilson
 * @link      https://wpbrisko.com
 * ----------------------------------------------------------------------------
 */

	// deny direct access.
	if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
		die;
	}

	// delete settings in the options table.
  	delete_option( 'wp_protected_post_types' );

  	// finally clear the cache.
  	wp_cache_flush();
