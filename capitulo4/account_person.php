<?php

/* clonar um objeto account este objeto possui funcionalidades que queremos copiar */

class Account
{
	public $balance;

	public function __construct( $balance )
	{
		$this->balance = $balance;
	}
}

class Person
{
	private $name;
	private $age;
	private $id;
	public $account;

	/* método construtor inicializa  os atributos */

	function __construct( $name, $age, Account $account )
	{
		$this->name   = $name;
		$this->age  = $age;
		$this->account  = $account;
	}
	
	function setId( $id )
	{
		$this->id = $id;
	}

	function __clone()
	{
		$this->id = 0;
		//$this->account = clone $this->account;
	}
}

$person = new Person('Pedro', 64, new Account(200));
$person->setId(345);
//clone

$person2 = clone $person;

$person->account->balance += 10;

print $person2->account->balance;