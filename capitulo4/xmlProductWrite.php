 <?php

include_once 'ShopProductWriter.php';
class xmlProductWrite extends ShopProductWriter
{
	public function write()
	{
		$str = '<?xml version="1.0" enconding="UTF-8?>'."<br />";
		$str .= '<products><br />';

		foreach ($this->products as  $ShopProducts) {
			$str .= "\t<product  title=\"{$shopProduct->getTitle()}\"><br />";
			$str .= "\t<sumary><br />";
			$str .= "\t{$shopProduct->getSumaryLine()}<br />";
			$str .= "\t</sumary><br />";
			$str .= '<product><br />';
		}
		$str .= '</products><br />';
		echo $str;
	}
}


 ?>