<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formumlaire</title>
</head>
<body>

	<p>Nous sommes le <?php echo date("d-m-Y"); ?></p>
	<form action="bad.php" method="POST">
		<label for="name">Nom : </label><input id="name" name="name" type="text"><br/>
		<label for="firstName">Prénom : </label><input id="firstName" name="firstName" type="text"><br/>
		<input type="submit">
	</form>
	<?php
	if (isset($_POST['name']) && isset($_POST['firstName'])) {
	 	echo 'Bonjour '.$_POST['name'].' '.$_POST['firstName'].' !';
	 } 
	?>

</body>
</html>