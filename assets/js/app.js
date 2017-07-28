jQuery(document).ready(function($) {
	if (window.MathJax) {
		MathJax.Hub.signal.Interest(function (message) {
			if (message[0] === 'Begin PreProcess') {
				$('article').addClass('carregando');
				$('#loader').addClass('visivel');
			}
			else if (message[0] === 'End Process') {
				$('article').removeClass('carregando');
				$('#loader').removeClass('visivel');

			}
		});
	} else{
		console.log('Essa página não tem Mathjax');
	}


	var corpo = $('body');
	var artigo = $('article');
	var btRodape = $('button.botao-rodape');
	var notasRodape = $('.nota-rodape');

	var transitionendPrefixed = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend';
	notasRodape.each(function(index, el) {
		$(el).prepend('\
			<button class=\'fechar\' title=\'Fechar nota de rodapé\'>\
				<img src=\'../assets/img/icone-fechar.svg\' aria-hidden=\'true\'>\
			</button>\
		');

		$(el).find('.fechar').on('click', function(event) {
			notasRodape.removeClass('visivel');
			btRodape.removeClass('ativado');
			rodapeAtual = 0;
		});

		$(el).on(transitionendPrefixed, function(event) {
			if (!$(this).hasClass('visivel')) {
				$(this).removeClass('db');
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

	var paginas = $('span.pagina');
	var pagFixa = $('#pag-fixa');

	if (paginas.length > 0) {
		pagFixa.text(paginas.eq(0).text());

		var pagAtual = 0;
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
		});
	} else{
		pagFixa.remove();
	}


	var btSubcaps = $('#subcapitulos a');
	var headings = $('article h2, article h3');

	btSubcaps.each(function(index, el) {
		$(el).on('click', function(event) {
			event.preventDefault();
			$('html, body').scrollTop(headings.eq(index).offset().top);
		});	
	});

	


	// Códigos para "debug"

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

	if (btSubcaps.length !== headings.length) {
		console.warn('O número de links no sumário não coincide com o número de cabeçalhos.');
	}

	var nPrimeiraPagina = parseInt(paginas.eq(0).text());
	var nUltimaPagina = parseInt(paginas.eq(paginas.length-1).text());

	if (paginas.length > 0 && nPrimeiraPagina + paginas.length -1 !== nUltimaPagina) {
		console.warn('A numeração das páginas não coincide com o número de tags de paginação.');
	}


	if (!artigo.children().eq(0).is('span.pagina')) {
		console.warn('O primeiro elemento do capítulo deve ser uma tag de paginação.');
	}
	


});