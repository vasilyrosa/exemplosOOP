<?php

function __autoload($classes)
{
	$path = "../capitulo4/{$classes}.class.php";
	if(file_exists($path)){
		require_once $path;
	} else {
		echo 'Diretorio de classes nao encontrado !';
	}
}

$prod_class = new ReflectionClass('CdProduct');

echo '<pre>';
//Reflection::export( $prod_class );
echo '</pre>';




?>