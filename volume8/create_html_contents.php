<?php 
	$xmlcapitulos = new SimpleXMLElement(file_get_contents('relacao_capitulos.xml')); //XML com todos os dados dos capitulos e subcapitulos desse volume
	foreach ($xmlcapitulos->cap as $cap) {
		mkdir("capitulos/".$cap->uri."/content", 0777, true);
		mkdir("capitulos/".$cap->uri."/media", 0777, true);
		foreach ($cap->subcapitulos->subcap as $subcap) {
			$handle = fopen( ('capitulos/'.$cap->uri.'/content/'.$subcap->uri.'.html'), 'w+');
		}
	}


?>