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

	if (btRodape.length !== notasRodape.length) {
		console.warn('Existe um número diferente de notas de rodapé e de botões que ativam essas notas. Verifique.');
	}



	btRodape.on('click', function(event) {
		var thisTop = $(this).offset().top;
		var thisLeft = $(this).position().left;
		var thisHeight = $(this).outerHeight();
		var thisNumero = $(this).attr('data-numero');
		notasRodape.removeClass('visivel db');
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

		console.log(topNota,  corpo.scrollTop());

		if (topNota < corpo.scrollTop()) {
			corpo.animate({'scrollTop' : topNota}, 200);
		}

	});


});