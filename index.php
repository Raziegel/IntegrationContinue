<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" />
        <title>evaluation MAZZA - BENETEAU</title>
    </head>
    <body>
        <h1>Intégration continu</h1>
        
		<h2>Déjà un compte</h2><hr>
		<form method= "POST" action="verification.php">
			<div>
				<label for="identifiant">Identifiant :</label>
				<input type="text" name="login" id="login" placeholder="Adresse mail" required/>  
			</div>
			<div>
				<label for="mdp">Mot de passe :</label>
				<input type="password" name="mdp1" id="mdp1" placeholder="Mot de passe" required/>  
			</div>
			
			<button type="submit">Envoyer</button>
		</form>
		
		<h2>Créer un compte</h2><hr>
		<form method= "POST" action="inscription.php">
			<div>
				<label for="nom">Nom :</label>
				<input type="text" name="nom" id="nom" placeholder="Nom" required/>  
			</div>
			<div>
				<label for="prenom">Prenom :</label>
				<input type="text" name="prenom" id="prenom" placeholder="Prenom" required/>  
			</div>
			<div>
				<label for="mail">Mail :</label>
				<input type="text" name="mail" id="mail" placeholder="Mail" required/>  
			</div>
			<div>
				<label for="mdp">Mot de passe :</label>
				<input type="text" name="mdp" id="mdp" placeholder="Mot de passe" required/>  
			</div>
			
			<button type="submit">Envoyer</button>
		</form>
    </body>
</html>