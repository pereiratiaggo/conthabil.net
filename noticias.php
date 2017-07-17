<?php
function getHtmlTableFromWordpressRss($rss_address, $show_limit=3){
    $titulo = array();
    $link = array();
    $link_title = array();
    $descricao = array();
    $quantos = 0;
    $exibir = $show_limit;
    $limite_title = 100;
    $limite_descricao = 50;
    $xml = simplexml_load_file($rss_address)->channel->item;
    foreach($xml as $item)
    {
        $titulo[] = substr($item->title, 0, $limite_title) . "...";
	$link[]	= $item->link;
	$link_title[] = $item->title;
	$descricao[] = substr($item->description, 0, $limite_descricao)."...";
	$publicacao[] = date("d/m/Y", strtotime($item->pubDate));
	$quantos++;
    }
	
    $html = '';
    
    for($i = 0; $i < $exibir; $i++)
    {        
        if($descricao[$i]!="")
	{
            $html .= "<a href='$link[$i]' title='$link_title[$i]' target='_blank'>$publicacao[$i] - $titulo[$i]</a><br>";
            $html .= $descricao[$i]."<br><br>";
	}
    }
    
    return $html;
}

echo getHtmlTableFromWordpressRss("http://www.contabeis.com.br/rss/noticias/", 2);
echo getHtmlTableFromWordpressRss("http://conthabil.net/noticias/index.php/feed/", 1);
?>