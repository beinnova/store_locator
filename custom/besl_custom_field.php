<?php
  /**
   * Creazione custom field
   */

function besl_register_metabox(){
	add_meta_box('besl-storlocator-meta','Dati Store' ,'besl_create_storelocator_metabox','storelocator','side','core');
}

function besl_save_metabox_data($post_id){
	
	if(isset($_POST['besl_storelocator'])){
		if(is_array($_POST['besl_storelocator']))
			foreach ($_POST['besl_storelocator'] as $key => $store){
				if($key == 'citta')
					$stripped_data[$key] = strip_tags(ucfirst($store));
				elseif($key == 'provincia')
					$stripped_data[$key] = strip_tags(strtoupper($store));
				elseif ($key == 'regione')
					$stripped_data[$key] = strip_tags(ucfirst($store));
				else 
					$stripped_data[$key] = strip_tags($store);		
		}
		update_post_meta($post_id,'besl_store_locator',$stripped_data);
		update_post_meta($post_id,'besl_store_locator_regione',$stripped_data['regione']);
	}
			
}


function besl_create_storelocator_metabox($post){
	include __DIR__.'/views/besl_customfield_storelocator.php';
}

//Aggiunge colonne custom alla lista
function be_add_custom_colum($posts_column){
	
	return array_merge($posts_column,array(
			'regione'=>'Regione',
			'provincia'=>'Provincia',
			'citta'=>'Città'));
}

//Ne recupera i dati e li aggiunge
function be_add_metabox_metacolumn($column, $post_id){
	global $post;
	$data = get_post_meta($post->ID,'besl_store_locator');
	
	echo $data[0][$column];
}
add_filter('manage_storelocator_posts_columns','be_add_custom_colum');
add_action('manage_storelocator_posts_custom_column','be_add_metabox_metacolumn');
add_action('add_meta_boxes','besl_register_metabox' );
add_action('save_post','besl_save_metabox_data');