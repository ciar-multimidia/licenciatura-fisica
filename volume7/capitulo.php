<?php 
	require_once 'includes/config.php';
	// template query string:
	// cap=1-nome-do-cap&sub=nome-do-sub
	$query_capitulo = $_GET['cap'];
	$query_subcap = $_GET['sub'];
	$n_cap = 0; 
	$n_sub = 0;
	$eh_um_capitulo_real = false;
	$eh_um_sub_real = false;
	for ($i=0; $i < count($nomes_capitulos); $i++) {
		if ($eh_um_capitulo_real === false) {
			if ($query_capitulo == $nomes_capitulos[$i]['uri']) {
				$eh_um_capitulo_real = true;
				$n_cap = $i;

				$xmlsubs = new SimpleXMLElement(file_get_contents('capitulos/' . $query_capitulo . '/subcapitulos.xml'));
				foreach ($xmlsubs->subcap as $subcap) {
					if ($eh_um_sub_real === false)  {			
						if ($query_subcap == $subcap->uri) {
							$eh_um_sub_real = true;
						}
						else {
							$n_sub++;
						}
					}
				}
			}
		}
	}

	$redirect_erro = '';
	
	if ($eh_um_capitulo_real == true) {
		if ($eh_um_sub_real === false) {
			$redirect_erro = 'Location:capitulo.php?cap='.$query_capitulo.'&sub='.$xmlsubs->subcap[0]->uri;
		}
	} else{
		$redirect_erro = 'Location:index.php';		
	}

	if ($redirect_erro !== '') {
		header($redirect_erro);
	}
	$path_capitulo = 'capitulos/' . $query_capitulo;
	$nome_capitulo = $nomes_capitulos[$n_cap]['nome'];
	$uri_capitulo = $nomes_capitulos[$n_cap]['uri'];
	$nome_subcap = $xmlsubs->subcap[$n_sub]->title;
	$uri_subcap = $xmlsubs->subcap[$n_sub]->uri;
 ?>

<?php 
	require_once 'includes/head.php';
 ?>

 <body>

 <?php require_once 'includes/cont_nav.php'; ?>



 <main>
 	<article class="capitulo">
 		<?php 
			  $content = file_get_contents($path_capitulo . '/content/' . $uri_subcap .'.html');
	 		 $content = str_replace('[[caminho]]', $path_capitulo, $content);
	 		 echo $content;
 		 ?>
 		<span id="pag-fixa"></span>
 		 
 	</article>
 </main>

 <div id="loader">
	<div class="posrel">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>

	</div>
</div>


	
  <?php
 require_once 'includes/scripts/jquery.php';
 require_once 'includes/scripts/mathjax.php';
 require_once 'includes/scripts/appjs.php';
 ?>

 </body>
</html>