

<div id="sumario">
	<header id="header">
		<div class="cont-titulo">
			<span class='numero-capitulo'><?php print $n_cap+1 ?></span>
			<h1 class="titulo_capitulo"><?php print $nome_capitulo ?></h1>
			<p class="volume">Volume <?php print $volume ?></p>
		</div>
		<div class="navegacao-cap">
			
			<a href="index.php" class="home">Introdução</a>

			<a class="cap prev" <?php 
				if ($n_cap > 0) {
					print 'href=\'capitulo.php?'. $nomes_capitulos[$n_cap-1]['uri'] . '\'';
				} else{
					print 'disabled';
				}
			?>
			>
				<?php if ($n_cap > 0) : ?>
					<div class="seta">
						<?php print(file_get_contents('../assets/img/ico_arrow.svg') ); ?>
					</div>
					<div class="txt">
						<p class="num"><?php print $n_cap; ?></p>
						<p class="tit"><?php print $nomes_capitulos[$n_cap-1]['nome'] ?></p>
					</div>
					
						
				<?php endif; ?>
			</a>


			<a class="cap next" <?php 
				if ($n_cap+1 < count($nomes_capitulos)) {
					print 'href=\'capitulo.php?'. $nomes_capitulos[$n_cap+1]['uri'] . '\'';
				} else{
					print 'disabled';
				}
			?>
			>
				<?php if ($n_cap+1 < count($nomes_capitulos)) : ?>
					<div class="txt">
						<p class="num"><?php print $n_cap+2; ?></p>
						<p class="tit"><?php print $nomes_capitulos[$n_cap+1]['nome'] ?></p>
					</div>

					<div class="seta">
						<?php print(file_get_contents('../assets/img/ico_arrow.svg') ); ?>
					</div>
					
					
						
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