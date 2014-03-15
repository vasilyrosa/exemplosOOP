<?php

/**
* estudo do padrão factory um exemplo simples de funcionamento.
* exemplode dublicação de código em cada chamada de get o switch se duplica 
* no arquivo factory2.php vamos dar um exemplo exemplar de codificação de factory
**/

abstract class AppEncoder
{
	abstract function encode();
}

class BloggsApptEncoder extends AppEncoder
{
	function encode()
	{
		return 'Appointment data encode in BloggsCal format <br />';
	}
}

class MegaApptEncoder extends AppEncoder
{
	function encode()
	{
		return "Appointment data encode in MegaCal format";
	}
}

class CommsManager 
{
	const BLOGGS = 1;
	const MEGA = 2;
	private $mode = 1;

	function __construct( $mode )
	{
		$this->mode = $mode;
	}

	function getHeaderText()
	{
		switch ( $this->mode ) {
		case ( self::MEGA ):
		return  'MegaCal header <br />';
		default:
		return 'BloggsCal header <br />';
		}
	}
	
	function getApptEncoder()
	{
		switch ( $this->mode ) {
		case ( self::MEGA ):
		return new MegaApptEncoder();
		default:
		return new BloggsApptEncoder();
		}
	}
}





##########################################
//instancia um novo objeto
$man = new CommsManager( CommsManager::MEGA );
print ( get_class( $man->getApptEncoder() ) )."\n";
$man = new CommsManager( CommsManager::BLOGGS );
print ( get_class( $man->getApptEncoder() ) )."\n";


