<?php
// Je me connecte à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=integration;charset=utf8', 'root', '');
}
catch (Exception $e) // Si erreur
{
        die('Erreur : ' . $e->getMessage());
}


//Je vérifie le pseudo et e mot de passe
$req = $bdd->prepare('SELECT Prenom FROM utilisateurs WHERE Mdp = :mdp1 AND Mail = :login');
// Je compte le nombre d'entrée ayant pour mot de passe et login ceux rentrés
$req->bindValue(':mdp1', $_POST['mdp1'], PDO::PARAM_STR);
$req->bindValue(':login', $_POST['login'], PDO::PARAM_STR);
$data = $req->execute();
$nbr=$req->rowCount();

// Je teste la valeur de $data['membre_valide']

if($nbr != 0) { // On as trouvé un membre avec ce couple mdp, login

	$donnees = $req->fetch();
	$name = $donnees['Prenom'];

	// Redirection
	header('Location: accueil.php?name=' . $name);
}
else { // Personne n'existe dans la table avec ce couple mdp, login

     echo 'le login et/ou le mot de passe rentrés sont invalides';
	 ?>
		<form method= "post" action="index.php">
			</br><input class="btn btn-default" type="submit" value="Quitter"/>
		</form>
	<?php
}


$req->closeCursor();
?>
