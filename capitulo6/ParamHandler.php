<?php
/* testado as  classes handlers */

function __autoload($classe)
{
	if(file_exists("classe/{$classe}.class.php"))
	{
		include_once "classe/{$classe}.class.php";
	}
}

$test = ParamHandler::getInstance("tmp/arquivo.txt");
$test->addParam('key1', 'Vasco');
$test->addParam('key2', 'Santos');
$test->addParam('key3', 'Fluminense');

$test->write(); //l^o formato xml

?>