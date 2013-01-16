<h5 id="regione"></h5>
<div id="container">
	<? while($wpQuery->have_posts()):$wpQuery->the_post(); ?>		
	
	<? 
	
	$store_locator_data = get_post_meta(get_the_ID(),'besl_store_locator');	
	$regione = get_post_meta(get_the_ID(),'besl_store_locator_regione');
	$regione = $regione[0];	
	if($store_locator_data)
		$store_data = $store_locator_data[0];
	

?>
	
		<div class="element <?= $regione ?><?= $classElement ?> ">
			<h6><? the_title()?></h6><br>			
			<p>Citta: <?= $store_data['citta'] ?></p><br>
			<p>Provincia: <?= $store_data['provincia'] ?></p><br>
			<p>Telefono: <?= $store_data['telefono'] ?></p><br>
		</div>
<? endwhile;?>
<?  wp_reset_query();?>
</div>
