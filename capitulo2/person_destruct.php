<?php

/* o método destruct() é chamado sempre que um objeto Person é removido da memória
isso acontecerá se você chamar a função unset() com com o objeto Person, veremos o método
__destruct() */

class Person
{
	private $name;
	private $age;
	private $id;

	function __contruct( $name, $age)
	{
		$this->name = $name;
		$this->age = $age;

	}

	function setId($id)
	{
		$this->id = $id;
	}

	function __destruct()
	{
		if(! empty($this->id))
		{
			//save data
			echo 'Saving person';
		}
	}
}
###########################################

$person = new Person('Claudio', 33);
$person->setId(346);
unset($person);

?>