<?php

//capitulo 3 conceitos básicos de objetos rsrs
 class ShopProduct
 {
 	/* atributos */ 

  private $title ;
 	private $producerMainName;
 	private $producerLastName;
 	private $price;
 	private $discount;

 	//métodos

 	function __construct( $title, $producerMainName,	$producerLastName, $price )
 	{
 			$this->title 		         = $title;
 			$this->producerMainName   = $producerMainName;
 			$this->producerLastName   = $producerLastName;
 			$this->price 			       = $price;
   	}

   	public function getProducerMainName()
   	{
   	    return $this->producerMainName;
   	}

   	public function getProducerLastName()
   	{
   	    return $this->producerLastName;
   	}

   	public function getDicount()
   	{
   	    return $this->dicount;
   	}
   	 
   	public function setDicount( $dicount )
   	{
   	     $this->dicount = $dicount;
   	}

   	public function getTitle()
   	{
   		return $this->title;
   	}

   	public function getPrice()
   	{
   		return ($this->price - $this->discount);
   	}

  	function getSumaryLine()
 	{
 		$base = "{$this->title} ({$this->producerMainName}
 		         	{$this->producerLastName})";
 	 		return $base;
 	}

 	function getProducer()
 	{
 		return " {$this->producerMainName} 
 		         	{$this->producerLastName}";
 	}
 }//endclass

?>

