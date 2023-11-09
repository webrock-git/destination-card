<?php

/**
 * Plugin Name:       Destination Card
 * Description:       Destination Card Block for Gutenberg Editor
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Hemanth Sharma
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       destination-card
 *
 * @package           create-block
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}


function destination_card_block_init()
{
	register_block_type(__DIR__ . '/build/block');
	wp_register_style("google-fonts", "https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;700&display=swap", array(), "1.0.0", "all");
}
add_action('init', 'destination_card_block_init');

