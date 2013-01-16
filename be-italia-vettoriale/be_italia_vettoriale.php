<?php




	$url_plugin = plugin_dir_url( __FILE__ );
	
	wp_register_script('raphael',$url_plugin.'italia-vettoriale/js/resources/raphael.js');	
	wp_register_script('be-ita-path',$url_plugin.'italia-vettoriale/js/path.js',array('raphael'));	
	wp_register_script('be-ita-init', $url_plugin.'italia-vettoriale/js/init.js', array('jquery','raphael','be-ita-path','qtip'));
	wp_register_script('qtip',$url_plugin.'italia-vettoriale/js/resources/jquery.qtip.js',array('jquery'));
	wp_register_script('isotope',$url_plugin.'italia-vettoriale/js/resources/jquery.isotope.min.js',array('jquery'));
	wp_register_style('qtipe-style', $url_plugin.'italia-vettoriale/css/jquery.qtip.css');
	wp_register_style('isotope-style', $url_plugin.'italia-vettoriale/css/isotope.css');
	wp_register_style('italia-style', $url_plugin.'italia-vettoriale/css/italia.css');

function besl_include_scripts(){
	
	wp_enqueue_script('raphael');
	wp_enqueue_script('be-ita-path');
	wp_enqueue_script('qtip');
	wp_enqueue_script('isotope');
	wp_enqueue_script('be-ita-init');
	wp_enqueue_style('qtipe-style');
	wp_enqueue_style('isotope-style');
	wp_enqueue_style('italia-style');
}
	
function the_map(){
	echo '<div id="map" style="float:left"></div>';
}
	
function the_store($classElement = null){
	
	$otions = array('post_type'=>'storelocator','post_per_page' => -1, 'order' => 'ASC', 'meta_key'=>'besl_store_locator_regione', 'orderby'=>'meta_value' );
	$wpQuery = new WP_Query($otions);
	
	include __DIR__.'/views/besl_store_output.php';
	
	
}

add_action('wp_head', 'besl_include_scripts');