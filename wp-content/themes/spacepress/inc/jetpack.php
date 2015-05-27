<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package spacePress
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function spacepress_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'spacepress_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function spacepress_jetpack_setup
add_action( 'after_setup_theme', 'spacepress_jetpack_setup' );

function spacepress_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function spacepress_infinite_scroll_render