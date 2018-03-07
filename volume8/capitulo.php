<?php 
	$xmlcapitulos = new SimpleXMLElement(file_get_contents('relacao_capitulos.xml')); //XML com todos os dados dos capitulos e subcapitulos desse volume

	$volume = $xmlcapitulos['volume']; // Número do volume desse livro

	// template query string:
	// cap=1-nome-do-cap&sub=nome-do-sub

	$query_capitulo = $_GET['cap']; // query de capitulo
	$query_subcap = $_GET['sub']; // query de subcapitulo

	$n_cap = 0; // armazena o numero do atual capitulo
	$n_sub = 0; // armazena o numero do atual subcap
	$eh_um_capitulo_real = false; // verifica se o query de cap confere um cap real
	$eh_um_sub_real = false; // verifica se o query de subcap confere um subcap real

	foreach ($xmlcapitulos->cap as $bd_cap) { // Iterar atraves de cada capitulo do XML para saber se é um deles
		if ($eh_um_capitulo_real === false) {
			if ($query_capitulo == $bd_cap->uri) {
				$eh_um_capitulo_real = true;
				foreach ($bd_cap->subcapitulos->subcap as $bd_subcap) { // Iterar atraves de cada subcap do capitulo do XML para saber se é um deles
					if ($eh_um_sub_real === false)  {
						if ($query_subcap == $bd_subcap->uri) {
							$eh_um_sub_real = true;
						} else{
							$n_sub++;
						}
					}
				}
			} else{
				$n_cap++;
			}
		}
	}

	// Logo abaixo, a verificação de validade dos queries:
		// Se o query de capitulo estiver errado, volta pro inicio do volume
		// Se o query de capitulo estiver correto, mas o sub estiver errado, redireciona para o primeiro sub
		// Se ambos estiverem corretos, tudo sussa, segue em frente normal!
 	
	$redirect_erro = ''; 
	
	if ($eh_um_capitulo_real == true) {

		$xml_dessecap = $xmlcapitulos->cap[$n_cap];

		if ($eh_um_sub_real === false) {
			$redirect_erro = 'Location:capitulo.php?cap='.$query_capitulo.'&sub='.$xml_dessecap->subcapitulos->subcap[0]->uri;
		}
	} else{
		$redirect_erro = 'Location:index.php';		
	}

	if ($redirect_erro !== '') {
		header($redirect_erro); // É aqui que talvez redirecione.
	}
	$path_capitulo = 'capitulos/' . $query_capitulo;
	$nome_capitulo = $xml_dessecap->nome;
	$uri_capitulo = $xml_dessecap->uri;
	$nome_subcap = $xml_dessecap->subcapitulos->subcap[$n_sub]->title;
	$uri_subcap = $xml_dessecap->subcapitulos->subcap[$n_sub]->uri;
 ?>

<?php 
	require_once 'includes/head.php';
 ?>

 <body>

 <?php require_once 'includes/cont_nav.php'; ?>



 <main class='numero-cap<?php echo $n_sub+1 ?>'>
 	<article class="capitulo">
		 <?php 
		 	// Pegando o conteudo: Primeiro procura o devido content. Dps, corrige o caminho dos arquivos, e depois joga no html.
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