<?php

/**
*
* capitulo 4 conceito de métodos e atributos estáticos
*
**/

 class ShopProduct
 {
 	/* atributos */ 

  	private $title ;
 	private $producerMainName;
 	private $producerLastName;
 	private $price;
 	private $discount;
   private $id = 0;

 	//métodos

   /* construct */
   function __construct( $title, $producerMainName, 
                     $producerLastName, $price )
   {
         $this->title         = $title;
         $this->producerMainName = $producerMainName;
         $this->producerLastName = $producerLastName;
         $this->price         = $price;
   }

   public function setId( $id )
   {
      $this->id = $id;
   }

  /* método estático */
   public  function getInstance( $id, PDO $pdo )
   {
      $query = "select * from products where id = '$id'";
      $stmt  = $pdo->query( $query );
      $row   = $stmt->fetch();
      if( empty($row) ) { return null; }

      if($row['type'] == 'book') {
         $product = new BookProduct (
            $row['title'],
            $row['firstname'],
            $row['lastname'],
            $row['price'], 
            $row['numpages'] );
      } else if ($row['type'] == 'cd') {
         $product = new CdProduct (
            $row['title'],
            $row['firstname'],
            $row['lastname'],
            $row['price'], 
            $row['playlength'] );
            
      } else {
         $product = new ShopProduct(
            $row['title'],
            $row['firstname'],
            $row['lastname'],
            $row['price'] );
      }

      $product->setId( $row['id'] );
      $product->setDiscount( $row['discount'] );
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
   	 
   	public function setDiscount( $dicount )
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

