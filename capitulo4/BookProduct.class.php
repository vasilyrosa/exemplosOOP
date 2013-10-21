<?php
include_once 'ShopProduct.php';
class BookProduct extends ShopProduct
{
	private $numPages;

	function __construct($title, $producerMainName,
							$producerLastName, $price, $numPages)
	{
		parent:: __construct($title, $producerMainName,
							 	$producerLastName, $price);
		$this->numPages = $numPages;
	}

 	function getNumPages()
 	{
 		return $this->numPages;
 	}

 	function getSumaryLine()
 	{
 		$base = parent:: getSumaryLine();
 		$base .= ": Page count - {$this->numPages}";
 		return $base;
 	}
}