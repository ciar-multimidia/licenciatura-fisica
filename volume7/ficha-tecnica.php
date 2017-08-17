<?php 
	require_once 'includes/config.php';
	require_once 'includes/head.php';
 ?>

 <body>

<div id="nav" class="intro fichatecnica">
	<header id="headerintro">
		<div class="outrosvolumes">
			<a href="index.php"><?php print(file_get_contents('../assets/img/ico_arrow3.svg')) ?> Volume <?php print $volume; ?></a>
		</div>
		<div class="logo-volume">
			<img src="../assets/img/logo_curso.svg" alt="Logotipo do eBook Licenciatura em Física">
			<h1>Volume <?php print $volume; ?></h1>
		</div>
	</header>

	<nav id="navcapitulos">
		<ol>
			<?php for ($i=0; $i < count($nomes_capitulos); $i++) : ?>
				<li><a href="capitulo.php?<?php print $nomes_capitulos[$i]['uri'] ?>">
					<div class="numero">
						<p><?php print $i+1; ?></p>
					</div>
					<div class="titulocap">
						<p><?php print $nomes_capitulos[$i]['nome']; ?></p>
					</div>
				</a></li>
	
			
			<?php endfor; ?>
		</ol>
	</nav>
	
</div>

<main>
	<article class="fichatecnica">
        <h2>Ficha técnica</h2>
        <p>Governo Federal<br>
        República Federativa do Brasil<br>
        Ministério da Educação<br>
        Coordenação de Aperfeiçoamento de Pessoal de Nível Superior<br>
        Universidade Federal de Goiás</p>
        <h3>Licenciatura em Física - Volume 7</h3>

        <h5>Reitoria</h5>
        <p>Orlando Afonso Valle do Amaral</p>

        

        <h5>Pró-reitoria de Graduação</h5>
        <p>Gisele Araújo Prateado Gusmão </p>

        

        <h5>Coordenação Geral do Curso de Licenciatura em Física/EaD</h5>
        <p> UFG - Osni Silva</p>

        

        <h5>Cordenação de Módulo</h5>
        <p>UFG - Carlito Lariucci</p>

        

        <h5>Comitê Editorial</h5>
        <p>PUC - Rose Mary Alves de Carvalho<br>
        UFG - Carlito Lariucci<br>
        UEG - Luciano Ribeiro</p>

        

        <h5>Autores</h5>
        <p>UFG - Juan Bernadino Marques Barrio<br>
        UFG - Geordane Lourence Rocha Silva<br>
        UFG - Célia Maria Alves Dantas<br>
        UFG - Salviano de Araújo Leão<br>
        UFG - Vanda Domingues Vieira</p>

        

        <h5>Revisão de Conteúdo</h5>
        <p>Luciano Ribeiro</p>

        

        <h5>Revisão Pedagógica</h5>
        <p>Dagmar Junqueira Guimarães Silva</p>

       

        <h5>Direção do Centro Integrado de Aprendizagem em Rede (CIAR)</h5>
        <p>Marília de Goyaz</p>

        

        <h5>Coordenação de Produção e Comunicação Impressa</h5>
        <p>Ana Bandeira</p>

        

        <h5>Revisão Linguística</h5>
        <p>Andelaide Lima<br>
         Raquel Mourão</p>

        

        <h5>Design Gráfico - Projeto Editorial</h5>
       <p> Equipe de Publicação CIAR</p>


        <h5>Desenvolvimento</h5>
        <p>Victor Hugo César Godoi</p>


        <h5>Editoração</h5>
        <p>Guilherme Mendes<br>
        Marina Giolo<br>
        Victor Hugo César Godoi</p>


        <h5>Ilustração e Imagens</h5>
        <p>Leandro Abreu<br>
        João Gabriel</p>

        <div class="fichacatalografica">
        	<div class="topo">
	        	<h5>Dados Internacionais de Catalogação na Publicação (CIP)<br> GPT/BC/UFG</h5>
        	</div>

        	<div class="dados">
        		<p class="codigo">C977</p>
        		<div class="descricao">
        			<p>Curso de licenciatura em Física / autores Juan Bernardino Marques Barrio... [et al]; coordenadores Osni Silva, Carlito Lariucci. - Goiânia : FUNAPE : UFG/IF/CIAR, 2013.<br>
        			192p.</p>
        			<p>Conteúdo: v. 7 Física Estágio Supervisionado III. Física Moderna II. Física Computacional I e II. Astrofísica e Cosmologia.</p>
        			<p>ISBN:</p>
        			<p>1. Física - Educação a distância. I. Barrio, Juan Bernadino Marques. II. Silva, Osni. III. Lariucci, Carlito.</p>
        			<p class="cdu">CDU: 573:37.018.43</p>
        		</div>
        	</div>

        </div>

        <div class="marcas">
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

        			<?php print(file_get_contents('../assets/img/' . $outraslogos[$i]['filename'])) ?>

        		</a>
        	 	<?php endfor; ?>
        </div>

        <p align='center'>Goiânia, 2017</p>

       

		
	</article>
</main>



  </body>
</html>