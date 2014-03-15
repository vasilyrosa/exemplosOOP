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
		$this->idade  = $idade;
	}
	
	function setId( $id )
	{
		$this->id = $id;
	}

	/* método destrutor */

	function __destruct()
	{
		if(!empty ($this->id))
		{
			//save person data
			echo 'Saving person<br />';
		}
	}
	
}

$person = new Person('Jose', 35);
$person->setId(345);
unset($person);
