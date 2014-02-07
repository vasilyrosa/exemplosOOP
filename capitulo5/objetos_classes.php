<?php

/* coneรงa mais sobre objetos e classes */
//buscar classes



function __autoload($classes)
{
	$path = "../capitulo4/{$classes}.class.php";
	if(file_exists($path)){
		require_once $path;
	} else {
		echo 'Diretorio de classes nao encontrado !';
	}
}
//array de todas a sclasses
//print_r(get_declared_classes());

$product = new CdProduct('Exile on Coldhatbour','The', 'Alabama-3',10.99,60.33);
echo 'Disco: '.$product->getProducer().'<br />';
echo $product->getSumaryLine().'<hr />';

if($product instanceof ShopProduct){
	echo "e um objeto da classe ShopProduct";
}

/* podemos pegar todos os metodos de uma classe atrave´s da função
* get_class_method()
 */

echo '<pre>';
print_r(get_class_methods('CdProduct'));
echo '</pre>';

//procura um metodo na classes pai do objeto
if(method_exists($product, 'setId'))
	echo 'existe<br />';
else
	echo 'nao existe<br />';

print_r(get_parent_class('CdProduct'));
?>