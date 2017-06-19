
<?php

	$nomes_capitulos  = array(
		1 => array( 'nome' => 'Física Matemática',					'filename' => '1-fisica-matematica.php'),
		2 => array( 'nome' => 'Evolução dos Conceitos de Física',	'filename' => '2-evolucao-dos-conceitos-de-fisica.php'),
		3 => array( 'nome' => 'Estágio Supervisionado II',			'filename' => '3-estagio-supervisionado-ii.php'),
		4 => array( 'nome' => 'Termodinâmica',						'filename' => '4-termodinamica.php'),
		5 => array( 'nome' => 'Física Moderna I',					'filename' => '5-fisica-moderna-i.php')
	);

	if ($tipo_pagina === 'capitulo') {
		$capitulo_atual = $nomes_capitulos[$numero_capitulo]['nome'];
		$nav_capitulo = file_get_contents('includes/nav' . $numero_capitulo . '.php');
	}
	

	$uri_separado = explode("/", $_SERVER[REQUEST_URI]);
	array_pop($uri_separado);
	$pasta_livro = end($uri_separado);
	$uri_colecao = array_splice($uri_separado, -1);
	$caminho_colecao = implode("/", $uri_colecao);

	$http_colecao = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $caminho_final . '/';
	$http_livro = $http_colecao . $pasta_livro . '/';
	$root_colecao = dirname(__DIR__)."/";
	$root_livro = __DIR__ ."/";


?>

