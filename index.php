<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Licenciatura em Física</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body id='introvolumes'>
	<div class="container">

		<div class="logos">
			<?php 
				print (file_get_contents('assets/img/logo_curso.svg'));
			 ?>

			 <div id="outraslogos">
			 	<?php
				 	$outraslogos = array(
				 		array(
				 			'filename' => "logo_funape.svg",
				 			'href' => 'http://www.funape.org.br/site/',
				 			'title' => 'Link para o site da Funape',
				 			'alt' => 'Logo da Funape'
				 		),
				 		array(
				 			'filename' => "logo_ciar2.svg",
				 			'href' => 'http://www.ciar.ufg.br/',
				 			'title' => 'Link para o site do CIAR - Centro Integrado de Aprendizagem em Rede',
				 			'alt' => 'Logo do CIAR - Centro Integrado de Aprendizagem em Rede'
				 		),
				 		array(
				 			'filename' => "logo_uab.svg",
				 			'href' => 'http://www.capes.gov.br/uab',
				 			'title' => 'Link para o site da UAB - Universidade Aberta do Brasil',
				 			'alt' => 'Logo da UAB - Universidade Aberta do Brasil'
				 		),
				 		array(
				 			'filename' => "logo_brasil.svg",
				 			'href' => 'http://www.brasil.gov.br/',
				 			'title' => 'Link para o site do Brasil',
				 			'alt' => 'Logo do Brasil'
				 		)
				 		
			 		);

			 	 for($i=0; $i < count($outraslogos); $i++):

			 	?>

				<a href="<?php print($outraslogos[$i]['href']) ?>" target='blank'>
					<?php print(file_get_contents('assets/img/' . $outraslogos[$i]['filename'])) ?>

				</a>
			 	<?php endfor; ?>


			 </div>
		</div>


		<div class='btvolumes'>
			<a href="volume6/index.php" class="volume">
				<div class="titulo">
					<h2>Vol<span>1</span></h2>
				</div>
				<div class="sumario">
					<ol>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ol>
				</div>
			</a>

			<a href="volume7/index.php" class="volume">
				<div class="titulo">
					<h2>Vol<span>1</span></h2>
				</div>
				<div class="sumario">
					<ol>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ol>
				</div>
			</a>

			<a href="volume8/index.php" class="volume">
				<div class="titulo">
					<h2>Vol<span>1</span></h2>
				</div>
				<div class="sumario">
					<ol>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ol>
				</div>
			</a>
		</div>


	</div>
</body>
</html>