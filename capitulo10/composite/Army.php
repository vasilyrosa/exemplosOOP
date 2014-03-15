<?php

class Army extends Unit{

	private $units = array();

	function addUnit( Unit $unit) {
		if( in_array($unit, $this->units, true) ){
		 return;
		}	
		$this->units[] = $unit;
	}

	function removeUnit( Unit $unit ) {
		$units = array();
		foreach ($this->units as $key => $values) {
			if( $unit !== $values ) {
				$units[] = $values;
			}
		}
		$this->units = $units;
	}

	function bombardStrength() {
		$ret = 0;
		foreach ( $this->units as $key => $unit ) {
			$ret += $unit->bombardStrength();
		}
		return $ret;
	}
}