<?php

include_once 'CdProduct.class.php';
include_once 'BookProduct.class.php';
include_once 'ShopProductWriter.php';
include_once 'xmlProductWrite.php';
include_once 'ShopProduct.php';



$product = new CdProduct('Exile on Coldhatbour','The', 'Alabama-3',10.99,60.33);
echo 'Disco: '.$product->getProducer().'<br />';
echo $product->getSumaryLine().'<hr />';

$raul_seixas = new cdProduct('Trem das 7', 'Raul','Seixas', 25.00, 58.24);
echo "Disco: {$raul_seixas->getProducer()} <br />";
echo $raul_seixas->getSumaryLine().'<hr />';

$paulo_coelho = new BookProduct('As Valquirias', 'Paulo', 'Coelho', 65.00, 345);
echo "Livro {$paulo_coelho->getProducer()} <br />";
echo $paulo_coelho->getSumaryLine().'<hr />';

/*$product2 = new ShopProductWriter;
$product2->addProduct($product);
$product2->Write($product);

$pdo = new PDO( "mysql:host=localhost; dbname=products", 'root','' );
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$obj = ShopProduct::getInstance(1, $pdo);
var_dump($obj);
echo 'ola mundo';
*/

$teste = new xmlProductWrite;
$teste->write();





?>