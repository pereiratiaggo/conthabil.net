<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	$titulo 			= array();
	$link 				= array();
	$link_title 		= array();
	$descricao 			= array();
	$quantos 			= 0;
	$exibir 			= 3;
	$limite_title 		= 100;
	$limite_descricao 	= 50;
	$xml				= simplexml_load_file("http://conthabil.net/noticias/index.php/feed/")->channel->item;
	
	foreach($xml as $item)
	{
		$titulo[] 		= utf8_decode(substr($item->title, 0, $limite_title)."...");
		$link[] 		= $item->link;
		$link_title[] 	= utf8_decode($item->title);
		$descricao[] 	= utf8_decode(substr($item->description, 0, $limite_descricao)."...");
		$publicacao[] 	= date("m/d/Y", strtotime($item->pubDate));
		$quantos++;
	}
	
	//for($i = $quantos-1; $i > $quantos-($exibir+1); $i--) {
	for($i = 0; $i < $exibir; $i++)
	{
		if($descricao[$i]!="")
		{
			echo "<a href='$link[$i]' title='$link_title[$i]' target='_blank'>$publicacao[$i] - $titulo[$i]</a><br>";
			echo $descricao[$i]."<br><br>";
		}
	}
?>