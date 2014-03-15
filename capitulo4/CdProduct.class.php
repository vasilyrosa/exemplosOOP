<?php
include_once 'ShopProduct.php';
//include_once 'BookProduct.class.php';
class CdProduct extends ShopProduct
{
	/* atributo */  
	
	private $playLength = 0;
	
	/* métodos */
	function __construct($title, $producerMainName,
						   $producerLastName, $price, $playLength)
	{
			parent:: __construct($title, $producerMainName,
						   $producerLastName, $price);
			$this->playLength = $playLength;
	}

 	function getPlayLength()
 	{
 		return $this->playLength;
 	}

 	function getSumaryLine()
 	{
 		$base = parent:: getSumaryLine();
 		$base .= ": Playng time - {$this->playLength}";
 		return $base;
 	}

}

?>