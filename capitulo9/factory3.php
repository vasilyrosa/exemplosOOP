<?php

abstract class ApptEncoder
{
	abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder
{
	function encode()
	{
		return 'Nomeação de dados codificados '.__CLASS__.'<br />';
	}
}

class BloggsContactEncoder extends ApptEncoder
{
	function encode()
	{
		return 'Nomeação de dados codificados '.__CLASS__.'<br />';
	}
}


class BloggsTtdEncoder extends ApptEncoder
{
	function encode()
	{
		return 'Nomeação de dados codificados '.__CLASS__.'<br />';
	}
}




abstract class CommsManager 
{
	const APPT    = 1;
	const TTD     = 2;
	const CONTACT = 3;

	abstract function getHeaderText();
	abstract function make( $flag_int );
	abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager
{
	function getHeaderText()
    {
        return "BloggsCal header <br />";
    }

	function make( $flag_int )
	{
		switch( $flag_int )
		{
			case self::APPT:
			return new BloggsApptEncoder;
			case self::CONTACT:
			return new BloggsContactEncoder();
			case self::TTD:
			return new BloggsTtdEncoder();
		}
	}

	 function getFooterText()
    {
        return "BloggsCal footer <br />";
    }
}

##########################################
header('Content-Type: text/html; charset=utf-8');
$comms = new BloggsCommsManager();

echo $comms->getHeaderText();
$man =  $comms->make(3);
echo $man->encode();
echo $comms->getFooterText();




?>
