<div id="sumario">
	<header id="header">

		<!-- Título do capítulo -->
		<div class="cont-titulo">
			<span class='numero-capitulo'><?php print $n_cap+1 ?></span>
			<h1 class="titulo_capitulo"><?php print $nome_capitulo ?></h1>
			<p class="volume">Volume <?php print $volume ?></p>
		</div>
		<div class="navegacao-cap">

			<!-- Botão de capítulo anterior. Desativado se não houver capítulo anterior -->
			<a class="cap prev" <?php 
				if ($n_cap > 0) {
					print 'href=\'capitulo.php?'. $nomes_capitulos[$n_cap-1]['uri'] . '\'';
				} else{
					print 'disabled';
				}
			?>
			>
				<?php if ($n_cap > 0) : ?>
					<?php print(file_get_contents('../assets/img/ico_arrow2.svg') ); ?>
					<p class="num"><?php print $n_cap; ?></p>
				<?php endif; ?>
			</a>


			<!-- Botão para Introdução do capítulo -->
			<a href="index.php" class="home">Introdução</a>


			<!-- Botão para Ficha Técnica -->
			<a href="index.php" class="fichatecnica">Ficha técnica</a>

			
			<!-- Botão para o próximo capítulo. Desativado se não houver um próximo -->
			<a class="cap next" <?php 
				if ($n_cap+1 < count($nomes_capitulos)) {
					print 'href=\'capitulo.php?'. $nomes_capitulos[$n_cap+1]['uri'] . '\'';
				} else{
					print 'disabled';
				}
			?>
			>
				<?php if ($n_cap+1 < count($nomes_capitulos)) : ?>
					<p class="num"><?php print $n_cap+2; ?></p>
					<?php print(file_get_contents('../assets/img/ico_arrow2.svg') ); ?>
				<?php endif; ?>
			</a>

		</div>
	</header>

	<nav id="subcapitulos">
		<?php 
			print (file_get_contents($path_capitulo . '/nav.html'));
		 ?>
	</nav>
</div>