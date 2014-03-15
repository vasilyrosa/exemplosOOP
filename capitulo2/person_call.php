<?php

/* o __call é o mais util de todos os métodos mágicos, quando um método
não delcarado é invocado no código do cliente, o __call() é cahmado com 
o nome do método e um array que possui todos os parâmetros passado pelo cliente. */

class PersonWriter
{
	function writeName( Person $p)
	{
		echo $p->getName().'<br />';
	}

	function writeAge( Person $p)
	{
		echo $p->getAge().'<br />';
	}
}

##########################################
class Person
{
	private $writer;

	function __construct( PersonWriter $writer )
	{
		$this->writer = $writer;
	}

	function __call( $methodname, $args)
	{
		if( method_exists($this->writer, $methodname))
		{
			 return $this->writer->$methodname($this);
		}
	}

	function getName() { return "Bob";}
	function getAge() { return 44;}
}
###########################################################

//instancia o objeto
$person = new Person( new PersonWriter );
$person->writeName();

?>