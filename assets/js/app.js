jQuery(document).ready(function($) {
	if (window.MathJax) {
		MathJax.Hub.signal.Interest(function (message) { 
			if (message[0] === 'TeX Jax - parse error') console.log(message[0]); // Se der erro, avisa
			if (message[0] === 'Begin PreProcess') { // Quando começar a carregar, anim de load
				$('article').addClass('carregando');
				$('#loader').addClass('visivel');
			}
			else if (message[0] === 'End Process') { // Terminou de carregar, volta ao normal
				$('article').removeClass('carregando');
				$('#loader').removeClass('visivel');
			}
		});
		
	} else{
		// console.log('Essa página não tem Mathjax');
	}


	var corpo = $('body');
	var artigo = $('article.capitulo');
	var btRodape = $('button.botao-rodape');
	var notasRodape = $('.nota-rodape');

	var transitionendPrefixed = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend';


	/* NOTAS DE RODAPÉ */


	notasRodape.each(function(index, el) {
		$(el).prepend('\
			<button class=\'fechar\' title=\'Fechar nota de rodapé\'>\
				<img src=\'../assets/img/icone-fechar.svg\' aria-hidden=\'true\'>\
			</button>\
		');

		$(el).find('.fechar').on('click', function(event) {
			$(el).addClass('easing-saida');
			notasRodape.removeClass('visivel');
			btRodape.removeClass('ativado');
			rodapeAtual = 0;
		});

		$(el).on(transitionendPrefixed, function(event) {
			if (!$(this).hasClass('visivel')) {
				$(this).removeClass('db easing-saida');
			}
		});
	});

	var rodapeAtual = 0;


	btRodape.on('click', function(event) {
		var thisNumero = parseInt($(this).attr('data-numero'));
		if (thisNumero !== rodapeAtual) {
			var thisTop = $(this).offset().top;
			var thisLeft = $(this).position().left;
			var thisHeight = $(this).outerHeight();
			notasRodape.filter('[data-numero=\''+rodapeAtual+'\']').addClass('easing-saida');
			notasRodape.removeClass('visivel');
			var notaRevelar = notasRodape.filter('[data-numero=\'' + thisNumero + '\']');
			notaRevelar.addClass('db');
			notaRevelar.css({
				'top': '',
				'left': ''
			});

			var topNota = (function(){
				var topCalculado = thisTop - notaRevelar.outerHeight();
				if (topCalculado > 0) {
					notaRevelar.removeClass('origem-top');
					return thisTop - notaRevelar.outerHeight();
				} else{
					notaRevelar.addClass('origem-top');
					return thisTop + thisHeight;
				}
			})();

			var leftNota = (function(){
				var leftCalculado = thisLeft - notaRevelar.outerWidth()/2;
				if (leftCalculado < 0) {
					return 0;
				} else if(leftCalculado + notaRevelar.outerWidth() > artigo.width() ){
					return artigo.width() - notaRevelar.outerWidth();
				} else{
					return leftCalculado;
				}
			})();
			btRodape.removeClass('ativado');
			$(this).addClass('ativado');
			notaRevelar.css({
				'top': topNota,
				'left': leftNota
			}).addClass('visivel');


			if (topNota < corpo.scrollTop()) {
				corpo.animate({'scrollTop' : topNota}, 200);
			}

			rodapeAtual = thisNumero;
		}
		

	});

	/* FIGURAS AMPLIÁVEIS */

	var figuras = $('article figure');

	figuras.on('click', function(event) {
		$(this).toggleClass('maior');
	});

	var contSubcaps = $('#subcapitulos');
	var btSubcaps = contSubcaps.find('a.subatual, ol > li > a');
	console.log(btSubcaps);
	var headings = $('article h2, article h3');
	var asideNav = $('#nav');

	if (contSubcaps.length > 0) {
		btSubcaps.each(function(index, el) {
			$(el).on('click', function(event) {
				event.preventDefault();
				$('html, body').scrollTop(headings.eq(index).offset().top);
			});	
		});
	}

	// SISTEMA DE PAGINAÇÃO E NAVEGAÇÃO LATERAL
	

	var paginas = $('span.pagina');
	var pagFixa = $('#pag-fixa');

	if (paginas.length > 0) {
		
		if (!artigo.children().first().is( paginas.eq(0) ) ) {
			var novaPrimeiraPagina = $('<span class="pagina"></span>').text((parseInt(paginas.eq(0).text())-1))
			artigo.prepend(novaPrimeiraPagina);
			paginas = $('span.pagina');
		} 

		pagFixa.text(paginas.eq(0).text());

		var pagAtual = 0;
		var headingAtual = 0;

		headings.each(function(index, el) {
			if ($(window).scrollTop() >= $(el).offset().top-50) {
				headingAtual = index;
			}
		});

		btSubcaps.eq(headingAtual).addClass('atual');


		$(window).on('scroll', function(event) {
			var thisCorpo = $(this);
			paginas.each(function(index, el) {
				if (thisCorpo.scrollTop() >= $(el).offset().top) {
					$(el).addClass('esconder');
					pagAtual = index;
				}

				else{
					$(el).removeClass('esconder');
				}
			});

			pagFixa.text(paginas.eq(pagAtual).text());

			var novoHeading = 0;
			headings.each(function(index, el) {
				if (thisCorpo.scrollTop() >= $(el).offset().top-50) {
					novoHeading = index;
				}
			});

			if (novoHeading !== headingAtual) {
				btSubcaps.removeClass('atual');
				btSubcaps.eq(novoHeading).addClass('atual');
			}
			headingAtual = novoHeading;
		});
	} else{
		pagFixa.remove();
	}


	

	


	// Códigos para "debug"

	// Notas de rodapé: 
	// 		1. O número de notas é o mesmo de botões?
	// 		2. Notas e botões estão enumerados corretamente?			
	if (btRodape.length !== notasRodape.length) {
		console.warn('O número de notas de rodapé não coincide com o número de botões que ativam notas. Existem '+notasRodape.length+' notas e '+btRodape.length+ ' botões');
	} else{
		var erroNotas = false;
		var primeiraNota = parseInt(notasRodape.eq(0).attr('data-numero'));
		btRodape.each(function(index, el) {		
			if (parseInt($(el).attr('data-numero')) !== primeiraNota+index) {
				erroNotas = true;
			}
		});

		notasRodape.each(function(index, el) {		
			if (parseInt($(el).attr('data-numero')) !== primeiraNota+index) {
				erroNotas = true;
			}
		});
		if (erroNotas === true) {
			console.warn('As notas e/ou os botões de rodapé não estão enumerados corretamente.')
		}
	}

	// Sumário e cabeçalho:
	// 		1. O número de links do sumário é o mesmo que o número de cabeçalhos (h2 e h3) do texto?
	// 		2. Um log comparando o texto do menu e o texto dos cabeçalhos.

	if (contSubcaps.length > 0) {
		if (btSubcaps.length !== headings.length) {
			console.warn('O número de links no sumário não coincide com o número de cabeçalhos.');
		}

		console.groupCollapsed('Comparação dos links do sumário e dos cabeçalhos:');
		btSubcaps.each(function(index, el) {
			console.log( 'link: '+$(el).text()+'\n'
				+ 'cabeçalho: ' + headings.eq(index).text());
		});
		console.groupEnd();
	}
	

	var nPrimeiraPagina = parseInt(paginas.eq(0).text());
	var nUltimaPagina = parseInt(paginas.eq(paginas.length-1).text());

	if (paginas.length > 0 && nPrimeiraPagina + paginas.length -1 !== nUltimaPagina) {
		console.warn('A numeração das páginas não coincide com o número de tags de paginação.');
	}


	if (!artigo.children().eq(0).is('span.pagina')) {
		console.warn('O primeiro elemento do capítulo deve ser uma tag de paginação.');
	}

	var pags_jaTeveUmErro = false;
	paginas.each(function(index, el) {
		if (!$(el).parent().is('article')) {
			if (pags_jaTeveUmErro === false) {
				console.group('As seguintes páginas não são filhas diretas do article (foram colocadas dentro de uma tag errada):');
				pags_jaTeveUmErro = true;
			}
			console.warn($(el).text());
			if (pags_jaTeveUmErro === true && index === paginas.length-1) {
				console.groupEnd();

			}
		}
	});


	


});