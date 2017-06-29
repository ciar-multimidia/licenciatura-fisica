jQuery(document).ready(function($) {
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

});