<?php

/**
 * Custom type per lo store locator
 */
  

function besl_register_storelocator(){
	
	$labels = array(
			'name'=>'Store Locator',
			'singular_name' => '',
			'add_new'=>'Aggiungi Store',
			'all_items'=>'Tutti gli Store',
			'add_new_item'=>'Aggiungi Store',
			'edit_items'=>'Modifica Store',
			'new_item'=>'Nuovo Store',
			'search_item'=>'Cerca Store',
			'not_found'=>'Nessuno Store Trovato',
			'menu_name'=>'Store Locator');
	
	$args = array(
			'label'=>'Store Locator',
			'menu_icon' => plugin_dir_url( __FILE__ ).'images/store-locator.png',
			'labels'=>$labels,
			'descriptions'=>'Custom Type Store Locator',
			'public'=>true,
			'exclude_from_search'=>false,
			'publicly_queryable'=>true,
			'show_ui'=>true,
			'show_in_nav_menus'=>true,
			'show_in_menu'=>true,
			'show_in_admin_bar'=>false,
			'menu_position'=>5,
			'supports'=>array('title'));
	
	register_taxonomy('storelocator_tag','storlocator', array(
			'hierarchical' => true,
			'label' =>'Regioni',
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'propertytag', 'with_front' => false ),
	
	));
	register_post_type('storelocator',$args);
}



add_action('init','besl_register_storelocator');
