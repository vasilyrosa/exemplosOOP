<?php

/* CLASSE empregado */

abstract class Employee
{
	protected $name;

	function __construct( $name )
	{
		$this->name = $name;
	}

	abstract function fire();
}

######################################
/* classe favorito */

class Minion extends Employee
{
	public function fire()
	{
		print "{$this->name}: Eu limparei minha mesa. <br />";
	}
}

########################################
/* classe Chefe Desagrádavel */

class NastyBoss
{
	private $employees = array();

	function addEmployee( $employeeName )
	{
		$this->employees[] = new Minion( $employeeName );
	}

	function projectFail()
	{
		if(count( $this->employees ) > 0)
		{
		    $emp = array_pop($this->employees);
		    var_dump($emp);
			$emp->fire();
		}
	}
}

################################################

class CluedUp extends Employee
{
	public function fire()
	{
		print "{$this->name}: Eu Chamarei meu Advogado. <br />";
	}
}


#############################################

//instancia os objetos
$boss = new NastyBoss();
$boss->addEmployee('Harry');
$boss->addEmployee('Bob');
$boss->addEmployee('Mary');

$boss->projectFail();
$boss->projectFail();
$boss->projectFail();

?>