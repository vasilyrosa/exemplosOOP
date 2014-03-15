<?php

/* testando as classes de herança e composição */

function __autoload($classe)
{
	if(file_exists("classes/{$classe}.class.php"))
	{
		include_once "classes/{$classe}.class.php";
	}
}

$lesson[] = new Seminar(4, new TimedCostStrategy() );
$lesson[] = new Lecture(4, new FixedCostStrategy() );

foreach ($lesson  as $value) {
	echo "Carga de licao {$value->cost()}. ";
	echo "Tipo de licao: {$value->chargeType()}. <br />";
}

?>