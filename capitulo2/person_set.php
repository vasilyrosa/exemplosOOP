<?php

/* chamado quando o codigo do lado do cliente tenta associa-lo a uma 
tributo não delcarado passam se 2 parametros o nome do atributo e o valor 
que o cliente está tentando estabelecer */

class Person
{
	private $name;
	private $age;

	function __set($property, $value)
	{
		$method = "set{$property}";

		if(method_exists($this ,$method))
		{
			 return $this->$method($value);
		}
	}

	function setName( $name )
	{
		$this->name = $name;
		if(! is_null($name))
		{
			 $this->name = strtoupper($this->name);
		}
	}

	function setAge( $age )
	{
		$this->age = strtoupper($age);
	}

	function __unset()
	{
		$method = "set{$property}";

		if(method_exists($this ,$method))
		{
			 return $this->$method( null );
		}
	}
}

###########################################################
$p =  new Person();
 echo $p->name = 'bob ';
print $p->age = 44;



?>