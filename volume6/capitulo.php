<?php 
	require_once 'includes/config.php';
	$capitulo_selecionado = $_SERVER['QUERY_STRING'];
	$n_cap = 0; 
	$eh_um_capitulo_real = false;
	for ($i=0; $i < count($nomes_capitulos); $i++) {
		if ($eh_um_capitulo_real == false) {
			if ($capitulo_selecionado == $nomes_capitulos[$i]['uri']) {
				$eh_um_capitulo_real = true;
				$n_cap = $i;
			}
		}
	}
	if ($eh_um_capitulo_real === false) {
		header('Location:index.php');
	}
	$path_capitulo = 'capitulos/' . $capitulo_selecionado;
	$nome_capitulo = $nomes_capitulos[$n_cap]['nome'];
 ?>

<?php 
	require_once 'includes/head.php';
	require_once 'includes/cont_nav.php';
 ?>



 <main>
 	<article>
 		<?php 
	 		 $content = file_get_contents($path_capitulo . '/content.html');
	 		 $content = str_replace('[[caminho]]', $path_capitulo, $content);
	 		 echo $content;
 		 ?>
 	</article>
 </main>


	
 <?php
 require_once 'includes/scripts.php';
 ?>