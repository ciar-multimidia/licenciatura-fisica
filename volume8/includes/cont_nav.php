<div id="nav">
	<header id="header">

		<div class="volume">
			<a href="index.php"><?php print(file_get_contents('../assets/img/ico_arrow3.svg')) ?> Volume <?php print $volume ?></a>
			<a href="ficha-tecnica.php" class="fichatecnica">Ficha técnica</a>
		</div>

		<div class="cont-caps">
			<div class="bt-caps">
				<?php 
				$i=0;
				// foreach ($i=0; $i < count($nomes_capitulos); $i++):
				foreach ($xmlcapitulos->cap as $bd_cap):?>
					<a 
						<?php if($n_cap === $i): ?>
							class='atual'
							disabled
						<?php else: ?>
						href="capitulo.php?cap=<?php print $xmlcapitulos->cap[$i]->uri ?>"
						title="<?php print $xmlcapitulos->cap[$i]->nome ?>"

						 <?php endif; ?>
					>
					<?php print $i+1; ?></a>
					<?php $i++?>
				<?php endforeach; ?>
			</div>
			<h1 class="titulo_capitulo"><?php print $nome_capitulo ?></h1>
		</div>
		
	</header>

	<nav id="subcapitulos">
		<?php foreach ($xml_dessecap->subcapitulos->subcap as $subcap): ?>
			<a 
			<?php if($subcap->uri == $uri_subcap): ?>
					class="subatual" 
			<?php endif; ?>
			
			href="<?php echo 'capitulo.php?cap=' . $uri_capitulo . '&sub=' . $subcap->uri; ?>">
				<?php echo $subcap->title; ?>
			</a>
			

			<?php if ($subcap->uri == $uri_subcap && $subcap->subsubcaps): ?>

				<ol>
				<?php foreach ($subcap->subsubcaps->item as $sscitem): ?>
					<li><a href="#"><?php echo $sscitem; ?></a></li>
				<?php endforeach; ?>
				</ol>
			<?php endif; ?>
			
			

		<?php endforeach; ?>
	</nav>
</div>