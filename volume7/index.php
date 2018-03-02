<?php 
	require_once 'includes/config.php';
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
			<?php for ($i=0; $i < count($nomes_capitulos); $i++) : ?>
				<li><a href="capitulo.php?cap=<?php print $nomes_capitulos[$i]['uri'] ?>">
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
	<article>
		<span class="pagina">1</span>
        <h2>Apresentação</h2>

		<h5>Aos cursistas</h5>

		<p>Este volume corresponde aos módulos I e II do sétimo semestre do curso de Licenciatura em Física na modalidade à distância. Os 
		módulos que compõem o material didático impresso trazem assuntos relativos à Ciência, Tecnologia e Meio Ambiente.</p>

		<p>O primeiro módulo tratará de três títulos: “Física Computacional <b>(parte 1)</b>”, “Física Moderna II”, e “Estágio Supervisionado III 
		<b>(parte 1)</b>”. Hoje pode-se dizer que não é possível viver sem o uso da informática, pois a comodidade que ela  proporciona é cada 
		vez maior e presente em todos os seguimentos da sociedade. Na área da educação, o uso das ferramentas que a informática oferece 
		é enorme e o educador deve utilizá-las constantemente no seu trabalho. É nesse sentido que o autor de Física Computacional 
		<b>(partes 1 e 2)</b> procura dar uma ideia de alguns conceitos sobre softwares e informática que poderão auxiliar o professor/educador 
		na tarefa diária de transmitir conteúdos de Física e Ciências afins. No início do século XX, várias dúvidas pairavam no ar em 
		relação aos átomos, a radiação térmica, a quantização da radiação eletromagnética, dentre outras. A autora de Física Moderna II, 
		com o objetivo de fornecer subsídios para auxiliar no esclarecimento dessas e outras dúvidas, aborda as teorias associadas aos 
		temas mencionados e também, a quantização da radiação eletromagnética, modelos atômicos, propriedades ondulatórias de partículas, 
		princípio da incerteza etc., além do formalismo teórico e matemático necessário. Após conhecer os projetos da Escola Campo, 
		observar e fazer um diagnóstico do ensino de Física é chegado o momento de elaborar o projeto de ação e/ou intervenção na Escola. 
		E nesse sentido, a autora de Estágio Supervisionado III <b>(partes 1 e 2)</b> aborda assuntos que nortearão a escolha do tema do projeto, 
		da turma etc., de tal forma que as ações propostas sejam exequíveis e visem melhorar a problemática observada na escola.</p>

		<p>No segundo módulo tratar-se-á dos títulos: “Astrofísica e Cosmologia”, “Língua Brasileira de Sinais - LIBRAS”, Física Computacional
		<b>(parte 2)</b> e “Estágio Supervisionado III <b>(parte 2)</b>”. Uma das perguntas mais comum nos dias de hoje é: como o mundo que vivemos 
		surgiu? E os pontos brilhantes que vemos a noite no céu são estrelas e/ou planetas? Essas e muitas outras questões surgem em 
		nossas mentes e os autores de Astrofísica e Cosmologia visando esclarecer nossas dúvidas e questionamentos abordarão temas sobre 
		a estrutura e evolução do Universo e também, sobre as estrelas. E para isto eles nos convidam a realizarmos uma viagem pela 
		trajetória do conhecimento que trata do entendimento interligado do micro e do macrocosmo: do átomo às estrelas, galáxias, cúmulos
		galácticos, superaglomerados e vice-versa. A inclusão social a cada dia que passa vai tornando uma realidade em todos os 
		seguimentos da sociedade e em especial nas escolas de tal forma que estudantes portadores de necessidades especiais compartilham 
		a mesma sala de aula com os outros alunos. Portanto, o conhecimento mínimo sobre a Língua Brasileira de Sinais é indispensável
		para o educador nos dias de hoje trabalhar com os estudantes surdos e nesse sentido, a autora abordará o tema visando dar subsídios 
		para que os professores/educadores possam trabalhar com estes alunos quando surgirem.</p>

		<span class="pagina">2</span>

		<p>Neste volume, a oferta dos títulos tanto do primeiro quanto do segundo módulo tem como objetivo o fortalecimento da construção 
		dos três eixos: Ciência, Tecnologia e Meio Ambiente. Espera-se que o conteúdo abordado nestes títulos tenha interação com os demais 
		e contribua de maneira significativa para sua formação como professor (a) de Física.</p>

		<p>Com a construção deste volume, reforçamos mais uma vez o compromisso com a formação docente. Ao iniciar o sétimo semestre do 
		curso temos certeza que os principais desafios foram vencidos e vários obstáculos superados. Este curso foi pensado e elaborado
		para você, fato que o torna único e motiva todos os profissionais envolvidos: coordenadores de curso, professores, autores e 
		formadores, orientadores acadêmicos e tutores de polo.</p>

		<p>Estaremos sempre ao seu lado nesta trajetória e temos certeza que no futuro tanto o Estado de Goiás bem como os goianos lhes 
		serão gratos pela dedicação incessante em melhorar as condições de ensino e aprendizagem da área de Física. Desejamos-lhe sucesso! 
		Avante, seja persistente.</p>
	
	<p align="right"><b>Prof. Dr. Carlito Lariucci</b></p>
	

	<span id="pag-fixa"></span>		
	</article>
</main>


  <?php
 require_once 'includes/scripts/jquery.php';
 require_once 'includes/scripts/appjs.php';
 ?>

  </body>
</html>