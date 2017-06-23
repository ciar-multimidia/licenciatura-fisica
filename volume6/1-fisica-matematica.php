<?php 
	$tipo_pagina = 'capitulo';
	$numero_capitulo = 1;
	require_once 'config.php';
	require_once 'includes/head.php';
	require_once 'includes/cont_nav.php';
 ?>

	<main>
		<article>
			

			<h1>Física Matemática</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt optio delectus molestias voluptatem quisquam quam sequi cumque eos, facilis officia tenetur, libero ad praesentium iste soluta! Quidem a consequatur blanditiis enim neque magnam incidunt eligendi, repudiandae, et accusamus id totam officia nemo illo dolor accusantium veniam, quas dolorem possimus. Ab at saepe nemo, laborum iste illum officiis veniam, dolore officia.</p>
			<p>
				
				Apresentamos as quatro etapas que um g&aacute;s &eacute; submetido no ciclo de Carnot para gerar trabalho. Carnot estruturou esta m&aacute;quina, considerando que um processo c&iacute;clico ideal deveria ser totalmente revers&iacute;vel onde o calor flui da fonte ou fria para o g&aacute;s de forma isot&eacute;rmica. O calor $Q_{Q}$ e $Q_{F}$ n&atilde;o altera a energia interna do sistema, $\Delta U=0$, em nenhuma etapa, pois isso acarreta perdas uma vez que calor convertido em energia interna n&atilde;o retorna ao reservat&oacute;rio t&eacute;rmico. Assim, nas etapas $a,b$ e $c,d$ o calor &eacute; convertido completamente em trabalho. As etapas $b,c$ e $d,a$ n&atilde;o envolvem trocas de calor e, por isso, n&atilde;o temos calor convertido em outras formas de energia.
				 1&ordm; Etapa - $(p_{a}, V_{a}, T_{Q})\xrightarrow{Q_{Q}&gt;0, W_{a,d}&gt;0}(p_{b}, V_{b}, T_{Q})$:} como no ciclo Stirling, neste processo $\Delta U=0$ e o calor, em m&oacute;dulo, vale:
				\begin{equation}
				Q_{Q}=nRT_{Q}\ln\left(\frac{V_{b}}{V_{a}}\right).
				\label{calor_quente_carnot}
				\end{equation}\\
				{\it\large\bfseries 2&ordm; Etapa - $(p_{b}, V_{b}, T_{Q})\xrightarrow{Q_{b,c}=0, W_{b,c}&gt;0}(p_{c}, V_{c}, T_{F})$:} nesta etapa, retiramos mais peso do g&aacute;s de tal forma que ele possa realizar uma expans&atilde;o adiab&aacute;tica.\\ \\
				{\it\large\bfseries 3&ordm; Etapa - $(p_{c}, V_{c}, T_{F})\xrightarrow{Q_{F}&lt;0, W_{c,d}&lt;0}(p_{d}, V_{d}, T_{F})$:} agora retiramos uma quantidade de calor $Q_{F}$ isotermicamente por meio da retirada gradativa de peso que est&aacute; sobre o &ecirc;mbolo que confina o g&aacute;s. O m&oacute;dulo do calor $Q_{F}$ &eacute; escrito como:
				\begin{equation}
				Q_{F}=nRT_{F}\ln\left(\frac{V_{c}}{V_{d}}\right).
				\label{calor_frio_carnot}
				\end{equation}\\
				{\it\large\bfseries 4&ordm; Etapa - $(p_{d}, V_{d}, T_{F})\xrightarrow{Q_{d,a}=0, W_{d,a}&lt;0}(p_{a}, V_{a}, T_{Q})$:} fechando o ciclo introduzimos mais peso sobre o g&aacute;s de tal forma que sua temperatura retorna a $T_{Q}$ de forma adiab&aacute;tica.

				Com estes valores a efici&ecirc;ncia do ciclo de Carnot pode ser calculada da seguinte forma:
				\begin{equation}
				e=1-\frac{Q_{F}}{Q_{Q}}=1-\frac{nRT_{F}\ln\left(\frac{V_{c}}{V_{d}}\right)}{nRT_{Q}\ln\left(\frac{V_{b}}{V_{a}}\right)}=1-\left(\frac{T_{F}}{T_{Q}}\right)\frac{\ln\left(\frac{V_{c}}{V_{d}}\right)}{\ln\left(\frac{V_{b}}{V_{a}}\right)}.
				\label{eficiencia_carnot_nao_fechado}
				\end{equation}
				Lembrando das rela&ccedil;&otilde;es entre temperatura e volume nos processo adiab&aacute;ticos encontramos:
				\begin{align*}
				&amp;T_{Q}V_{b}^{\gamma-1}=T_{F}V_{c}^{\gamma-1};\\
				&amp;T_{Q}V_{a}^{\gamma-1}=T_{F}V_{d}^{\gamma-1}.
				\end{align*}
				Dividindo as equa&ccedil;&otilde;es anteriores, encontramos que:
				\begin{equation*}
				\frac{V_{b}^{\gamma-1}}{V_{a}^{\gamma-1}}=\frac{V_{c}^{\gamma-1}}{V_{d}^{\gamma-1}}\Rightarrow
				\frac{V_{b}}{V_{a}}=\frac{V_{c}}{V_{d}}\Rightarrow \ln\left (\frac{V_{b}}{V_{a}}\right)=\ln\left(\frac{V_{c}}{V_{d}}\right)
				\end{equation*}
				Assim, na equa&ccedil;&atilde;o \ref{eficiencia_carnot_nao_fechado}, podemos escrever finalmente a efici&ecirc;ncia de um ciclo ideal de Carnot na forma:
				\begin{equation}
				\boxed{e_{\text{Carnot}}=1-\frac{T_{F}}{T_{Q}}=\frac{T_{Q}-T_{F}}{T_{Q}}}
				\label{eficiencia_carnot_final}
				\end{equation}

			</p>
			</p>
			<h2>cabecalho nivel 2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, hic!</p>
			<h3>cabecalho nivel 3</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, non.</p>
			<h3>cabecalho nivel 3</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, sed!</p>
			<h4>Lorem ipsum dolor.</h4>
			<h4>Lorem ipsum dolor.</h4>
			<h4>Lorem ipsum dolor.</h4>
			<h3>cabecalho nivel 3</h3>
			<h4>Lorem ipsum dolor.</h4>
			<h4>Lorem ipsum dolor.</h4>
			<h4>Lorem ipsum dolor.</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, error.</p>
			<h2>cabecalho nivel 2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, est.</p>
			<h3>cabecalho nivel 3</h3>
			<h4>Lorem ipsum dolor.</h4>
			<h4>Lorem ipsum dolor.</h4>
			<h4>Lorem ipsum dolor.</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, officiis.</p>
			<h3>cabecalho nivel 3</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, quisquam!</p>
			<h2>cabecalho nivel 2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, eaque.</p>
			<h3>cabecalho nivel 3</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, voluptatem!</p>
			<h3>cabecalho nivel 3</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, tempora!</p>
			<h3>cabecalho nivel 3</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, dignissimos.</p>
			<h3>cabecalho nivel 3</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, eius.</p>
			<p>Numquam asperiores est aut explicabo voluptatum veniam vitae natus debitis ab, autem aperiam, quisquam fuga nam veritatis eum dolorem dolor alias quam. Velit odit repudiandae enim quasi repellat praesentium iste unde hic minus mollitia, quia atque aut nam! Consequatur natus saepe dolores est! Reiciendis distinctio consectetur perspiciatis. Repudiandae magni ut quos recusandae, voluptatem officiis perferendis esse ipsum, animi reprehenderit eius.</p>
			<p>Veniam sit, impedit, voluptatibus ab possimus fugit, earum facere quibusdam eius vero hic labore delectus! Sit maiores temporibus quia ex placeat quisquam, quidem quasi rem perspiciatis consequuntur harum laborum? Deleniti aut fugiat, sequi, quisquam doloremque, debitis, neque dolorum inventore provident rem minima fugit animi aspernatur. Earum illo fugit eum porro natus ab, iste ullam itaque ut eius! Mollitia, voluptas, porro?</p>

			<h3>Lorem ipsum dolor sit.</h3>
			<p>Quas inventore provident similique vel doloribus cumque minus officiis tenetur debitis voluptatem quasi velit mollitia qui sapiente, facilis. Eaque soluta aspernatur explicabo, modi molestiae! Id a perferendis voluptates, dolor praesentium vitae ut quam aut accusamus, soluta quos maiores delectus deleniti culpa tempore sed debitis suscipit veniam corrupti, perspiciatis non, tempora tenetur ipsum recusandae! Nam possimus est cum, perferendis excepturi repudiandae.</p>
			<p>Aliquid, iste alias ad aspernatur soluta reprehenderit dolore, sed quidem temporibus laudantium adipisci voluptas nihil odio, odit sapiente quasi modi magnam inventore provident recusandae ullam illo ea? Dolore minus impedit explicabo veniam delectus quae placeat quibusdam commodi, in ab sit, iure dolores molestias quo omnis. Facere provident, fugit exercitationem mollitia nostrum nam eligendi recusandae eius blanditiis atque neque, laboriosam beatae!</p>
			<p>Saepe magnam tenetur excepturi id error sapiente doloremque, aspernatur et reiciendis eaque qui explicabo deserunt rem velit voluptates nihil unde exercitationem nobis commodi ab nostrum vero. Delectus natus, eius voluptatibus incidunt laudantium, illo architecto similique perferendis quas recusandae velit! Quo harum ipsum quaerat nam at quis earum, beatae voluptate obcaecati, doloremque illum, nihil rem eius. Vero, sit, nostrum! Alias, quia.</p>
			<p>Nesciunt repudiandae rerum ratione cum earum obcaecati id minima harum, velit voluptates deleniti, vitae alias pariatur. Quaerat dolorem impedit id iusto suscipit est magni ducimus voluptate ullam a, praesentium in repudiandae ex dignissimos dolorum eveniet, eligendi numquam deserunt perspiciatis blanditiis nisi eum. Illo, sunt quod maiores repellendus, natus minus cupiditate fugit unde odio a velit est nihil rerum voluptatum earum.</p>
			<p>Aliquid recusandae temporibus, nulla explicabo nisi at voluptatem accusamus sunt consequatur reiciendis veniam aliquam numquam labore porro, deleniti consectetur eaque eligendi iure accusantium laboriosam harum possimus similique? Reiciendis eum earum dolorem vel est cum, eaque facere quisquam animi omnis repudiandae, tempora et pariatur ab ut minima iste, accusantium suscipit voluptatum natus autem enim ipsum laboriosam ullam. Nam distinctio quisquam nostrum?</p>
		</article>
	</main>
	
 <?php
 require_once 'includes/scripts.php';
 ?>