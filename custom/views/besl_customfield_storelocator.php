<?php

	$store_locator_data = get_post_meta($post->ID,'besl_store_locator');	
	$regione = get_post_meta($post->ID,'besl_store_locator_regione');
	$regione = $regione[0];	
	if($store_locator_data)
		$store_data = $store_locator_data[0];
	
?>	

<table id="stor-locator-data" class="form-table">
<tr  valign="top">	
		<th scope="row"><label >Città:</label></th>
		<td><input type="text" name="besl_storelocator[citta]" size="30" <?= (isset($store_data['citta']))? 'value="'.$store_data['citta'].'"': 'placeholder="Nome città"' ?>/></td>		
	</tr>
<tr class="be_skills_table"  valign="top">	
		<th scope="row"><label>Regione: {<?= $regione ?>}</label></th>
		<td><select name="besl_storelocator[regione]">
			<option <?= ($regione && $regione == 'Abruzzo')? 'selected="selected" ':null ?> value='Abruzzo'>Abruzzo</option>
			<option <?= ($regione && $regione == 'Basilicata')? 'selected="selected" ':null ?>value='Basilicata'>Basilicata</option>
			<option <?= ($regione && $regione == 'Calabria')? 'selected="selected" ':null ?>value='Calabria'>Calabria</option>
			<option <?= ($regione && $regione == 'Campania')? 'selected="selected" ':null ?>value='Campania'>Campania</option>
			<option <?= ($regione && $regione == 'Emilia Romagna')? 'selected="selected" ':null ?>value='Emilia Romagna'>Emilia Romagna</option>
			<option <?= ($regione && $regione == 'Friuli Venezia Giulia')? 'selected="selected" ':null ?>value='Friuli Venezia Giulia'>Friuli Venezia Giulia</option>
			<option <?= ($regione && $regione == 'Lazio')? 'selected="selected" ':null ?>value='Lazio'>Lazio</option>
			<option <?= ($regione && $regione == 'Liguria')? 'selected="selected" ':null ?>value='Liguria'>Liguria</option>
			<option <?= ($regione && $regione == 'Lombardia')? 'selected="selected" ':null ?>value='Lombardia'>Lombardia</option>
			<option <?= ($regione && $regione == 'Marche')? 'selected="selected" ':null ?>value='Marche'>Marche</option>
			<option <?= ($regione && $regione == 'Molise')? 'selected="selected" ':null ?>value='Molise'>Molise</option>
			<option <?= ($regione && $regione == 'Piemonte')? 'selected="selected" ':null ?>value='Piemonte'>Piemonte</option>
			<option <?= ($regione && $regione == 'Puglia')? 'selected="selected" ':null ?>value='Puglia'>Puglia</option>
			<option <?= ($regione && $regione == 'Sardegna')? 'selected="selected" ':null ?>value='Sardegna'>Sardegna</option>
			<option <?= ($regione && $regione == 'Sicilia')? 'selected="selected" ':null ?>value='Sicilia'>Sicilia</option>
			<option <?= ($regione && $regione == 'Toscana')? 'selected="selected" ':null ?>value='Toscana'>Toscana</option>
			<option <?= ($regione && $regione == 'Trentino Alto Adige')? 'selected="selected" ':null ?>value='Trentino Alto Adige'>Trentino Alto Adige</option>
			<option <?= ($regione && $regione == 'Umbria')? 'selected="selected" ':null ?>value='Umbria'>Umbria</option>
			<option <?= ($regione && $regione == 'Valle D\'Aosta')? 'selected="selected" ':null ?>value="Valle D'Aosta">Valle D'Aosta</option>
			<option <?= ($regione && $regione == 'Veneto')? 'selected="selected" ':null ?>value='Veneto'>Veneto</option>
		</select>
				
	</tr>
<tr class="be_skills_table"  valign="top">	
		<th scope="row"><label>Iniziali Provincia:</label></th>
		<td><input type="text" name="besl_storelocator[provincia]" size="5" <?= (isset($store_data['provincia']))? 'value="'.$store_data['provincia'].'"': 'placeholder="es. TO"' ?>  /></td>		
	</tr>

	

	<tr class="be_skills_table" valign="top">
		<th scope="row"><label>Telefono:</label></th>
		<td><input type="text" name="besl_storelocator[telefono]" size="15" <?= (isset($store_data['telefono']))? 'value="'.$store_data['telefono'].'"': 'placeholder="es. 0123/456789"' ?> /></td>		
	</tr>
	
	
</table>