<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Visa Australia',
		'menu_title'	=> 'Visa Australia',
		'menu_slug' 	=> 'Visa-options',
		'capability'	=> 'edit_posts',
    'redirect'		=> false,
    'icon_url'    => 'dashicons-flag'
	));
}