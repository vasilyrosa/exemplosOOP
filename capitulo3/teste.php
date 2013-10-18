<?php

include_once 'CdProduct.class.php';
include_once 'BookProduct.class.php';
include_once 'ShopProductWriter.php';

$product = new CdProduct('Exile on Coldhatbour','The', 'Alabama-3',10.99,60.33);
echo 'Disco: '.$product->getProducer().'<br />';
echo $product->getSumaryLine().'<hr />';

$raul_seixas = new cdProduct('Trem das 7', 'Raul','Seixas', 25.00, 58.24);
echo "Disco: {$raul_seixas->getProducer()} <br />";
echo $raul_seixas->getSumaryLine().'<hr />';

$paulo_coelho = new BookProduct('As Valquirias', 'Paulo', 'Coelho', 65.00, 345);
echo "Livro {$paulo_coelho->getProducer()} <br />";
echo $paulo_coelho->getSumaryLine().'<hr />';

$product2 = new ShopProductWriter;
$product2->addProduct($product);
$product2->Write($product);


?>