<div id="nav">
	<header id="header">

		<div class="volume">
			<p>Volume <?php print $volume ?></p>
			<div class="bts">
				<a href="index.php" class="home">Introdução</a>
				<a href="index.php" class="fichatecnica">Ficha técnica</a>
			</div>
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