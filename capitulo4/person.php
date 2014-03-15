<?php
/* Teste interceptador __get */

class Person {

	private $name;
	private $age;
	
	function __set( $propriety, $value ) {
		$method = "set{$propriety}";
		if( method_exists( $this, $method ) ) {
			return $this->$method( $value );
		}
	}

	function setName( $name ) {
		$this->name = $name;
		if ( ! is_null ( $name ) ) {
			$this->name = strtoupper($this->name);
		}
		return 'Bob';
	}

	function setAge( $age ) {
		$this->age = strtoupper($this->age);
	}
}



$p = new Person();
    print $p->name = 'Elias';


?>