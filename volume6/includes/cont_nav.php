<div id="sumario">
	<header id="header">
		<div class="cont-titulo">
			<span class='numero-capitulo'><?php print $numero_capitulo ?></span>
			<h1 class="titulo_capitulo"><?php print $capitulo_atual ?></h1>
		</div>
		<div class="navegacao-cap">

			<a class="cap prev" <?php 
				if ($numero_capitulo > 1) {
					print 'href=\''.$http_livro . $nomes_capitulos[($numero_capitulo-1)]['filename'] . '\'';
				} else{
					print 'disabled';
				}
			?>
			>
				<?php 
					print(file_get_contents($root_colecao . 'assets/img/ico_arrow.svg') );
					if ($numero_capitulo > 1) {
						print $numero_capitulo - 1;
					}
				?>
			</a>

			<a href="<?php print $http_livro . 'index.php' ?>" class="home">Home</a>

			<a class="cap next" <?php 
				if ($numero_capitulo < count($nomes_capitulos)) {
					print 'href=\''.$http_livro . $nomes_capitulos[($numero_capitulo+1)]['filename'] . '\'';
				} else{
					print 'disabled';
				}
			?>
			>
				<?php 
					if ($numero_capitulo < count($nomes_capitulos)) {
						print $numero_capitulo+1;
					}
					print(file_get_contents($root_colecao . 'assets/img/ico_arrow.svg') );
				?>
			</a>
		</div>
	</header>

	<nav id="subcapitulos">
		<?php 
			print $nav_capitulo;
		 ?>
	</nav>
</div>