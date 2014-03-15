<?php

function autoloader( $classe ) {
	if(is_file(__DIR__.'/'.$classe.'.php')) {
		require $classe.'.php';
	} else if (is_file(__DIR__.'/'.$classe.'.class.php')) {
		require __DIR__.'/'.$classe.'.class.php';
	} else {
		echo "A {$classe} Não pode ser encontrada !";
		echo $classe.'.class.php';
	}
}

@spl_autoload_register(autoloader);

##################################################################


$main_army = new Army();

//adiciona algumas unidades
$main_army->addUnit( new Archer());
$main_army->addUnit( new Gladiator());

//cria um novo exército
$sub_army = new Army();

//adiciona algumas unidades
$sub_army->addUnit( new Archer );
$sub_army->addUnit( new Archer );
$sub_army->addUnit( new Archer );

//adiciona um segundo exercito ao primeiro
$main_army->addUnit( $sub_army );
$main_army->addUnit( $sub_army );
$main_army->removeUnit( $sub_army );


//todo os calculos sao feitos em background

print "attacking with strength: {$main_army->bombardStrength()}\n";




