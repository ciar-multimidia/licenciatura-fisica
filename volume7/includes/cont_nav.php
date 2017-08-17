<div id="nav">
	<header id="header">

		<div class="volume">
			<a href="index.php"><?php print(file_get_contents('../assets/img/ico_arrow3.svg')) ?> Volume <?php print $volume ?></a>
			<a href="ficha-tecnica.php" class="fichatecnica">Ficha técnica</a>
		</div>

		<div class="cont-caps">
			<div class="bt-caps">
				<?php for ($i=0; $i < count($nomes_capitulos); $i++):?>
					<a 
						<?php if($n_cap === $i): ?>
							class='atual'
							disabled
						<?php else: ?>
						href="capitulo.php?<?php print $nomes_capitulos[$i]['uri'] ?>"
						title="<?php print $nomes_capitulos[$i]['nome'] ?>"

						 <?php endif; ?>
					>
				<?php print $i+1; ?></a><?php endfor; ?>
			</div>
			<h1 class="titulo_capitulo"><?php print $nome_capitulo ?></h1>
		</div>
		
	</header>

	<nav id="subcapitulos">
		<?php 
			print (file_get_contents($path_capitulo . '/nav.html'));
		 ?>
	</nav>
</div>