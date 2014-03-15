<?php

class person 
{
	private $name;
	private $age;
	private $id;

	/* método construtor inicializa  os atributos */

	function __construct( $name, $age )
	{
		$this->name   = $name;
		$this->age  = $age;
	}
	
	function setId( $id )
	{
		$this->id = $id;
	}

	function __clone()
	{
		$this->id = 0;
	}
}

$person = new Person('Bob', 44);
$person->setId(343);
//clonagem
$person2 = clone $person;
var_dump($person2);
var_dump($person);