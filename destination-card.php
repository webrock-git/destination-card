<?php

/**
 * Plugin Name:       Destination Card
 * Description:       Destination Card Block for Gutenberg Editor
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            mizan42047
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       destination-card
 *
 * @package           create-block
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


function cover_video_block_init()
{
	register_block_type(__DIR__ . '/build/block');
}
add_action('init', 'cover_video_block_init');

