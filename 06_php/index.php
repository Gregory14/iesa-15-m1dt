<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	// phpinfo(); 

	echo "J'ai oublié la balise fermante PHP ! <br />";
	echo "Que se passe-t-il ?<br />";

	$a = 1; 
	function test()
	{
		global $a;
		echo $a;
	}

	test();

	$b = "Bonjour";
	$$b = "Monde"; // $Bonjour = "Monde"

	echo $b . "<br/>";

	echo $$b . "<br/>";
	echo ${$b} . "<br/>";
	echo $bonjour . "<br/>";

	// Definir une constante
	define("PI", 3.14);
	echo PI. "<br/>";
	echo pi. "<br/>";

	const NOMCONSTANTE = "Valeur de la constante";

var_dump($b);

// Les tableaux
$monTableau = array();
var_dump($monTableau);

$course = array ("fruit" => "fraise", "legume" => "tomate", "cereales" => "chocopops");
var_dump($course);

$course ["Viande"] : "poulet"; 
var_dump($course);

$course = array("kiwi", "poulet"); 

?>	
</body>
</html>
