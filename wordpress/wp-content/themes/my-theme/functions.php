<?php
/**
 *  アイキャッチ画像を使用可能にする
 */

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'automatic-feed-links' );

add_filter( 'comment_form_default_fields', 'my_comment_form_default_fields' );

function my_comment_form_default_fields( $args ) {
	$args['author'] = '';
	$args['mail']   = '';
	$args['uri']    = '';
	return $args;
}

add_filter( 'excerpt_mblength', 'my_excerpt_mblength' );
function my_excerpt_mblength() {
	return 100;
}

add_filter( 'excerpt_more', 'my_excerpt_more' );
function my_excerpt_more( $more ) {
	return '...<a href="' . get_permalink( $post->ID ) . '">続きを読む</a>';
}

add_action( 'pre_get_posts', 'my_pre_get_posts' );
function my_pre_get_posts( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( $query->is_home() ) {
		// $query->set( 'posts_per_page', 3 );
		$query->set( 'category_name', 'news' );
		return;
	}
}
