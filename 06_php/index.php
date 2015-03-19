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

?>	
</body>
</html>
