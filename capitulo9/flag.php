<?php

require_once 'factory.php';
class Settings
{
	static $COMMSTYPE = 'Mega';
}

class AppConfig
{
	private static $instance;
	private $commsManager;

	private function construct()
	{
		$this->init();
	}

	private function init() 
	{
		switch ( Settings::$COMMSTYPE )
		{
			case 'Mega':
			$this->commsManager = new MegaApptEncoder();
			default:
			$this->commsManager = new BloggsApptEncoder();
		}
	}

	public static function getInstance()
	{
		if(empty(self::$instance))
		{
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function getCommsManager()
	{
		return $this->commsManager;
	}
}

#################################################################
$commsMgr = AppConfig::getInstance()->getCommsManager();
//$commsMgr->getApptEncoder()->encode();