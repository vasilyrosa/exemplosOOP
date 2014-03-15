<?php

abstract class ApptEncoder
{
	abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder
{
	function encode()
	{
		return 'Appointment data encode in BloggsCal format <br />';
	}
}



abstract class CommsManager 
{
	abstract function getHeaderText();
	abstract function getApptEncoder();
	abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager
{
	 function getHeaderText()
    {
        return "BloggsCal header <br />";
    }

	function getApptEncoder()
	{
		return new BloggsApptEncoder();
	}

	function getFooterText()
	{
		return 'BloggsCal footer';
	}
}

##########################################

$comms = new BloggsCommsManager();

echo $comms->getHeaderText();
$man =  $comms->getApptEncoder();
echo $man->encode();
echo $comms->getFooterText();




?>
