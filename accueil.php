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

		<h2> Information d'environnement </h2>
		<p> Vous venez de la page : <?php echo $_SERVER["HTTP_REFERER"]; ?> </p>
		<p> pour y retourner cliquer sur :	</p>
				<form method= "post" action="index.php">
					<input class="btn btn-default" type="submit" value="Quitter"/>
				</form>

		<p> Pour plus d'information, voici l'adresse de l'administrateur : <?php echo $_SERVER["SERVER_ADMIN"]; ?> </p>

	</body>
</html>
