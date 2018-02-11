<?php

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$mail = htmlspecialchars($_POST['mail']);
$mdp = htmlspecialchars($_POST['mdp']);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=integration;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// On ajoute une entrée dans la table Utilisateurs
if ($bdd->exec("INSERT INTO utilisateurs(IdUtilisateur, Nom, Prenom, Mail, Mdp) VALUES(NULL, '$nom', '$prenom', '$mail', '$mdp')")){

	$channel = "#général";
	$message = "Un nouvel utilisateur a été créé";

	slack($channel, $message);

// Redirection vers la page d'accueil
	header('Location: accueil.php?name=' . $prenom);
} else{
// Redirection vers la page index
	header('Location: index.php');
}

function slack($channel, $message)
{
    $ch = curl_init("https://slack.com/api/chat.postMessage");
    $data = http_build_query([
        "token" => "xoxp-288403832471-287302080883-314421363255-a9c08ce8301c30287a6d91328e2a25ca",
    	"channel" => $channel,
    	"text" => $message,
    	"username" => "cedric.beneteau",
    ]);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    echo ($data);
    //return $result;
}

//$req->closeCursor();
?>
