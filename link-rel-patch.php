<?php
/*
Plugin Name: Link Rel Patch
Description: Filters the rel values that are automatically added on links set to open in a new tab. Removes `noreferrer` and adds `noopener`.
Version: 1.0.0
Author: UCF Web Communications
License: GPL3
GitHub Plugin URI: UCF/Link-Rel-Patch
*/

namespace LinkRelPatch;


if ( ! defined( 'WPINC' ) ) {
    die;
}


/**
 * Sets the rel value upon post publish and update for links that are
 * set to open in a new tab to only `noopener`.
 *
 * @since v1.0.0
 * @author Cadie Stockman
 */
function replace_rel_value() {
	return 'noopener';
}

add_filter( 'wp_targeted_link_rel', __NAMESPACE__ . '\replace_rel_value' );
