<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" />
        <title>evaluation MAZZA - BENETEAU</title>
    </head>
    <body>
		<?php $name = $_GET['name']; ?>
		<h1>Bienvenue <?= $name ?></h1>
		<form method= "post" action="index.php">
			</br><input class="btn btn-default" type="submit" value="Quitter"/>
		</form>
	</body>
</html>
