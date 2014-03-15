<?php
class ShopProductWriter
{
	private $products = array();

	/* métodos */
	public function addProduct(ShopProduct $shopProduct)
	{
		$this->products[] = $shopProduct; 
	}
	
	public function Write()
	{
		$str = '';
		foreach( $this->products as $shopProduct ){
			$str .= "{$shopProduct->getTitle()}: ";
			$str .= " {$shopProduct->getProducer()}";
			$str .= " ( R$ {$shopProduct->getPrice()} ) <br />";
		}
		echo $str;
	}
}

?>