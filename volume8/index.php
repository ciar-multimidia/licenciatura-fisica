<?php 
	$tipo_pagina = 'intro';
	require_once 'includes/config.php';
	require_once 'includes/head.php';
 ?>



<ol>
	<?php 
		for ($i=0; $i < count($nomes_capitulos); $i++) { 
			echo '<li><a href="capitulo.php?'. $nomes_capitulos[$i]['uri'] . '">' . $nomes_capitulos[$i]['nome'] . '</a></li>';
		}
	 ?>
</ol>


  <?php
 require_once 'includes/scripts.php';
 ?>