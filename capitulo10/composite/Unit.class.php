<?php

//padrão composite

abstract class Unit {

	abstract function bombardStrength();

	function addUnit( Unit $unit) {
		throw new Exception(get_class($this).'is a leaf');
		
	}

	function removeUnit( Unit $unit ) {
		throw new Exception(get_class($this).'is a leaf');
	}

}


