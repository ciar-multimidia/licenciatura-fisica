

<div id="sumario">
	<header id="header">
		<div class="cont-titulo">
			<span class='numero-capitulo'><?php print $n_cap ?></span>
			<h1 class="titulo_capitulo"><?php print $nome_capitulo ?></h1>
		</div>
		<div class="navegacao-cap">

			<a class="cap prev" <?php 
				if ($n_cap > 0) {
					print 'href=\'capitulo.php?'. $nomes_capitulos[$n_cap-1]['uri'] . '\'';
				} else{
					print 'disabled';
				}
			?>
			>
				<?php 
					print(file_get_contents('../assets/img/ico_arrow.svg') );
					if ($n_cap > 0) {
						print $n_cap-1;
					}
				?>
			</a>

			<a href="<?php print 'index.php' ?>" class="home">Home</a>

			<a class="cap next" <?php 
				if ($n_cap+1 < count($nomes_capitulos)) {
					print 'href=\'capitulo.php?'. $nomes_capitulos[$n_cap+1]['uri'] . '\'';
				} else{
					print 'disabled';
				}
			?>
			>
				<?php 
					if ($n_cap+1 < count($nomes_capitulos)) {
						print $n_cap+1;
					}
					print(file_get_contents('../assets/img/ico_arrow.svg') );
				?>
			</a>
		</div>
	</header>

	<nav id="subcapitulos">
		<?php 
			print (file_get_contents($path_capitulo . '/nav.html'));
		 ?>
	</nav>
</div>