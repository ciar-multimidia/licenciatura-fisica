<?php 
	$xmlcapitulos = new SimpleXMLElement(file_get_contents('relacao_capitulos.xml'));

	$volume = $xmlcapitulos['volume'];

	require_once 'includes/head.php';
 ?>

 <body>

<div id="nav" class="intro">
	<header id="headerintro">
		<div class="outrosvolumes umlink">
			<a href="ficha-tecnica.php">Ficha técnica</a>
			<a href="../index.php"><?php  print(file_get_contents('../assets/img/ico_arrow3.svg')) ?> Outros volumes</a>
		</div>
		<div class="logo-volume">
			<img src="../assets/img/logo_curso.svg" alt="Logotipo do eBook Licenciatura em Física">
			<h1>Volume <?php print $volume; ?></h1>
		</div>
	</header>

	<nav id="navcapitulos">
		<ol>
			<?php $i = 0;
			foreach ($xmlcapitulos->cap as $bd_cap) : 
			$i++;
			?>
				<li><a href="capitulo.php?cap=<?php print $bd_cap->uri ?>">
					<div class="numero">
						<p><?php print $i; ?></p>
					</div>
					<div class="titulocap">
						<p><?php print $bd_cap->nome; ?></p>
					</div>
				</a></li>
	
			
			<?php endforeach; ?>
		</ol>
	</nav>
	
</div>

<main>
	<article>
		<span class="pagina">1</span>
        <h2>Apresentação</h2>

		<h5>Aos cursistas</h5>

		<p>Este volume corresponde aos módulos I e II do oitavo semestre do curso de Licenciatura em Física na modalidade à distância. Os módulos que compõem o material didático impresso trazem assuntos relativos à Ciência, Tecnologia e Meio Ambiente.</p>
		<p>O primeiro módulo tratará dos títulos: “Física da Matéria Condensada”, “Laboratório Especial”, e “Estágio Supervisionado IV (<b>parte 1</b>)”. A Física da Matéria Condensada estuda os materiais sólidos e líquidos de alta viscosidade como os vidros. Nesse campo da Física se pesquisa Nanomateriais, o fenômeno da Supercondutividade dentre outros, nomes cada vez mais comuns no meio científico e tecnológico e também nos veículos de comunicação em massa como os jornais. E, para tentar entender um pouco mais sobre as propriedades da matéria é que os autores propuseram um roteiro de estudo onde pontuam, sem tratá-las com profundidade, os diversos temas abordados na disciplina e o aluno poderá aprofundar seus conhecimentos recorrendo às referências bibliográficas sugeridas. Em Física Moderna, radiações, modelos atômicos, partículas subatômicas são consideradas pelos estudantes como “entidades”, as quais foram conhecidas como abstrações, e agora em Laboratório Especial terão oportunidade de entrar em contato com elas. É nesse sentido que o autor aborda alguns experimentos relativos ao conteúdo de Física Moderna, que foi gentilmente cedido pela Universidade Federal de Santa Catarina (UFSC).</p>
		<p>Após conhecer os projetos da Escola Campo, observar e fazer um diagnóstico do ensino de Física e elaborar o projeto de ação e/ou intervenção na Escola é chegado o momento de desenvolver o respectivo projeto e avaliar os pontos positivos e negativos da aplicação do mesmo e nesse sentido as autoras de Estágio Supervisionado IV (<b>partes 1 e 2</b>) sugerem ações para o melhor desenvolvimento do projeto de tal forma que, o estudante possa obter um melhor resultado bem como discutir e refletir a própria prática pedagógica.</p>
		<p>No segundo módulo tratar-se-á de três títulos: “Física Nuclear e de Partículas”, “Estratégias de Ensino de Física e Produção de Materiais Didáticos”, e “Estágio Supervisionado IV (<b>parte 2</b>)”. Perguntas como: A matéria é constituída de quê? O átomo é a menor parte que constitui a matéria? O autor de Física Nuclear e de Partículas procurando responder essas e muitas outras questões convida-nos a volta na história e acompanhar desde o século IV a.C. até os dias atuais e as perspectivas futuras para o entendimento da constituição da matéria. Uma das grandes dificuldades do ensino e aprendizagem do conteúdo de física está associada à correlação que deveria ser realizada entre os conceitos da Física e o nosso dia-a-dia. Essa correlação na sua grande maioria não é realizada por falta de laboratório nas escolas e também ao alto custo dos mesmos. E, tentando contribuir para solucionar este problema o autor de Estratégias de Ensino de Física e Produção de Materiais Didáticos sugere vários experimentos de baixo custo que podem ser realizados. E como material complementar segue um CD com o conteúdo de dois livros os quais seguem a mesma linha sugerida pelo autor.</p>
		<p>Neste volume, a oferta dos títulos tanto do primeiro quanto do segundo módulo tem como objetivo o fortalecimento da construção dos três eixos: Ciência, Tecnologia e Meio Ambiente. Espera-se que o conteúdo abordado nestes títulos tenha interação com os demais e contribua de maneira significativa para sua formação como professor(a) de Física. Com a construção deste volume, reforçamos mais uma vez o compromisso com a formação docente. Ao iniciar o sétimo semestre do curso temos certeza que os principais desafios foram vencidos e vários obstáculos superados.</p>

		<span class="pagina">2</span>

		<p>Este curso foi pensado e elaborado para você, fato que o torna único e motiva todos os profissionais envolvidos: coordenadores de curso, professores, autores e formadores, orientadores acadêmicos e tutores de polo. Vocês estejam certos que durante sua caminhada e depois, como profissionais estaremos lado a lado. Todo esse esforço, que sabemos que todos têm tido, tem como objetivo não só sua formação profissional, mas também a melhoria do ensino de física no estado de Goiás. Vocês, com a EaD tem a oportunidade de não serem meros espectadores, mas também protagonista no processo de aprendizagem. Aproveitem e desejamos a todos sucesso!</p>
	
	<p align="right"><b>Prof. Dr. Osni Silva<br> Coordenador da Licenciatura em Física/UAB/UFG</b></p>
	

	<span id="pag-fixa"></span>		
	</article>
</main>


  <?php
 require_once 'includes/scripts/jquery.php';
 require_once 'includes/scripts/appjs.php';
 ?>

  </body>
</html>