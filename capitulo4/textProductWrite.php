<?php
class TextProductWrite extends ShopProductWriter
{
	public function write()
	{
		$str = "PRODUCTS:<br />";

		foreach ($this->products as $shopProduct) {
			$str .= $shopProduct->getSumaryLine().'<br />';
		}
		echo $str;
	}
}


?>