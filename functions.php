<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

add_theme_support( 'post-thumbnails' );

function get_tg_id ($tg_name) {
	$tg_obj = get_term_by('name' , $tg_name , 'post_tag');
	$tg_id = $tg_obj -> term_id;

	return $tg_id;
}