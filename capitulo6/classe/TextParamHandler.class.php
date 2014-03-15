<?php

class TextParamHandler extends ParamHandler
{
	function write()
	{
		//escreve o texto
		//usando $this->params
		$time = date("Y-m-d H:i:s");
	 	//cria a string
$handler = fopen('tmp/arquivo.txt', 'a+');
	 	foreach ($this->params as $key => $value) {
	 		echo $text = $time . ':: '.$key. ' - '.$value.'<br />';
	 		fwrite($handler, $text);
	 	}
	 	//adiciona ao final doa rquivo
	 	
	 	
	 	fclose($handler);
	}

	function read()
	{
		//lê o texto
		//e prenche o $this->params
		return readfile('tmp/arquivo.txt');
	}
}