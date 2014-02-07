<?php

/* CLASSE empregado */

abstract class Employee
{
	protected $name;
	private static $types = array( 'Minion', 'Cluedup', 'Wellconnected' );

	static function recruit( $name )
	{
		$num = rand(1, count(self::$types)) - 1;
		$class = self::$types[$num];
		return new $class( $name );
	}

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

###################################################
/* classe wellconnected*/

class WellConnected extends Employee
{
	public function fire()
	{
		print "{$this->name}: Eu Ligarei para meu pai. <br />";
	}
}

#############################################

//instancia os objetos
$boss = new NastyBoss();
$boss->addEmployee( Employee::recruit ( 'Harry' ));
$boss->addEmployee( Employee::recruit ( 'Bob' ));
$boss->addEmployee( Employee::recruit ( 'Mary' ));

$boss->projectFail();
$boss->projectFail();
$boss->projectFail();


?>