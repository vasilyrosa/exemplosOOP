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


################################################

class CluedUp extends Employee
{
	public function fire()
	{
		print "{$this->name}: Eu Chamarei meu Advogado. <br />";
	}
}

###################################################
/* classe Chefe Desagrádavel */

class NastyBoss
{
	private $employees = array();

	function addEmployee( Employee $employeeName )
	{
		$this->employees[] = $employeeName;
	}

	function projectFail()
	{
		if(count( $this->employees ) > 0)
		{
		    $emp = array_pop($this->employees);
		    //var_dump($emp);
			$emp->fire();
		}
	}
}


#############################################

//instancia os objetos
$boss = new NastyBoss();
$boss->addEmployee( new Minion ('Harry') );
$boss->addEmployee( new CluedUp ('Bob') );
$boss->addEmployee( new Minion ('Mary'));

$boss->projectFail();
$boss->projectFail();
$boss->projectFail();

?>