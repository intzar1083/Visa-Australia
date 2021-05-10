<?php
 function visaaustralia_post_types() {
  register_post_type( 'visatypes', array(
      'labels'                  => array(
        'name'                  => __( 'Visa Types', 'visaaustralia' ),
        'singular_name'         => __( 'Visa Type', 'visaaustralia' ),
        'menu_name'             => __( 'Visa Types', 'visaaustralia' ),
        'name_admin_bar'        => __( 'Visa Type', 'visaaustralia' ),
        'add_new'               => __( 'Add New', 'visaaustralia' ),
        'add_new_item'          => __( 'Add New Visa Type', 'visaaustralia' ),
        'new_item'              => __( 'New Visa Type', 'visaaustralia' ),
        'edit_item'             => __( 'Edit Visa Types', 'visaaustralia' ),
        'view_item'             => __( 'View Visa Types', 'visaaustralia' ),
        'all_items'             => __( 'All Visa Types', 'visaaustralia' ),
        'search_items'          => __( 'Search Visa Types', 'visaaustralia' ),
      ),
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'australian-visas' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
      'menu_icon'          => 'dashicons-tickets-alt' 
  ));
}