<?php

abstract class CostStrategy
{
	abstract function cost( Lesson $lesson);
	abstract function chargeType();
	
}