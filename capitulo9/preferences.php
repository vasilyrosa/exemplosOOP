<?php

/* implementação com exemplos singleton */

class Preference
{
	private $props = array();
	private static $instance;

	private function __construct(){}

	public static function getInstance()
	{
		if(empty( self::$instance )){
			self::$instance = new Preference();
		}
		return self::$instance;
	}

	public function setProperty( $key, $value )
	{
		$this->props[$key] = $value;
	}

	public function getProperty( $key )
	{
		return $this->props[$key];
	}
}

/**
* O padrão singleton possui
* o atributo $instance que é privado e é static e não pode ser acessado de fora 
* da clase. Entretanto pode se somente acessar o método getInstance()
* pois ele é public e pode ser acessado de qualquer lugar no script.
*
**/

//instancia da classe

$pref = Preference::getInstance();
$pref->setProperty('name', 'Everton Rosa');
unset( $pref );

$pref2 = Preference::getInstance();
echo $pref2->getProperty('name');



?>