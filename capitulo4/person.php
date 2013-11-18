<?php
/* Teste interceptador __get */

class Person {
	function __get( $propriety ) {
		$method = "get{$propriety}";
		if( method_exists( $this, $method ) ) {
			return $this->$method();
		}
	}

	function getName() {
		return 'Bob';
	}

	function getAge() {
		return 44;
	}
}



$p = new Person();
    print $p->name;


?>