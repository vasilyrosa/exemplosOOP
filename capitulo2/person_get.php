<?php

/* __get() Chamado quando um atributo não declarado é acessado. */

class Person
{
	function __get( $property )
	{
		 $method = "get{$property}";


		if( method_exists ($this, $method))
		{
			return $this->$method();
		}

	}

	function getName()
	{
		return 'Bob ';
	}
	function getAge()
	{
		return 44;
	}

/* o método __isset é chamado após o cliente chamar o isset()
num atributo não declarado */

	function __isset( $property )
	{
		$method = "get{$property}";
		return ( method_exists($this, $method));
	}

}//endclass

/*class Person2
{
	function __get( $property )
	{
	
		if($property == 'name')
		{
			return $this->getName().' = ';
		} 
		else if($property == 'age')
		{
			return $this->getAge();
		}
		
	}

	function getName()
	{
		return 'Bob';
	}
	function getAge()
	{
		return 44;
	}

}//endclass*/

######################################################

$p = new Person();
print  $p->name;

if(isset($p->age))
{
	print $p->age;
}


?>