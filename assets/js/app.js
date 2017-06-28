jQuery(document).ready(function($) {
	MathJax.Hub.signal.Interest(function (message) {
		console.log(message);
		if (message[0] === 'Begin PreProcess') {
			$('article').addClass('carregando');
		}
		else if (message[0] === 'End Process') {
			$('article').removeClass('carregando');
		}
	});

});