<!DOCTYPE html>
<html lang="pt-br">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-22690278-8"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-22690278-8');
	</script>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Licenciatura em Física</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body id='introportal'>		
	<div class="container">

		<div class="logos">
			<?php 
				print (file_get_contents('assets/img/logo_curso.svg'));
			 ?>

			 <div class="outraslogos">
			 	<?php
				 	$outraslogos = array(
				 		array(
				 			'filename' => "logo_funape.svg",
				 			'href' => 'http://www.funape.org.br/site/',
				 			'title' => 'Link para o site da Funape',
				 			'alt' => 'Logo da Funape',
				 			'classe' => 'logo_funape'
				 		),
				 		array(
				 			'filename' => "logo_ciar.svg",
				 			'href' => 'http://www.ciar.ufg.br/',
				 			'title' => 'Link para o site do CIAR - Centro Integrado de Aprendizagem em Rede',
				 			'alt' => 'Logo do CIAR - Centro Integrado de Aprendizagem em Rede',
				 			'classe' => 'logo_ciar'
				 		),
				 		array(
				 			'filename' => "logo_uab.svg",
				 			'href' => 'http://www.capes.gov.br/uab',
				 			'title' => 'Link para o site da UAB - Universidade Aberta do Brasil',
				 			'alt' => 'Logo da UAB - Universidade Aberta do Brasil',
				 			'classe' => 'logo_uab'
				 		),
				 		array(
				 			'filename' => "logo_brasil.svg",
				 			'href' => 'http://www.brasil.gov.br/',
				 			'title' => 'Link para o site do Brasil',
				 			'alt' => 'Logo do Brasil',
				 			'classe' => 'logo_brasil'
				 		)
				 		
			 		);

			 	 for($i=0; $i < count($outraslogos); $i++):

			 	?>

				<a 
				href="<?php print($outraslogos[$i]['href']) ?>" 
				target='blank' 
				title='<?php print($outraslogos[$i]['title']) ?>'
				class='<?php print($outraslogos[$i]['classe']) ?>'>

					<?php print(file_get_contents('assets/img/' . $outraslogos[$i]['filename'])) ?>

				</a>
			 	<?php endfor; ?>


			 </div>
		</div>


		<div class='btvolumes'>
			<?php 

				$numero_volumes = array(7,8);

				for ($i=0; $i < count($numero_volumes); $i++) : 
					$xmlvolume = new SimpleXMLElement(file_get_contents('volume' . $numero_volumes[$i] . '/relacao_capitulos.xml'));
				?>
				
				<a href="<?php print 'volume'. $numero_volumes[$i] .'/index.php' ?>" class="volume">
					<div class="titulo">
						<h2>Vol<span><?php print $numero_volumes[$i] ?></span></h2>
					</div>
					<div class="sumario">
						<ol>
							<?php 
								
								foreach ($xmlvolume->cap as $capitulo) :?>
								<li><?php print $capitulo->nome; ?></li>
								<?php endforeach; ?>
						</ol>
					</div>
				</a>

			<?php endfor; ?>

			
		</div>


	</div>
</body>
</html>