<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>GBAF</title>
	</head>

	<body>
		<div id="bloc_page">

			<div id ="banniere">
				<img src="images/logo.png">
			</div>

			<section>
				<h1>Connexion</h1>

				<form method="post" action="traitement.php">
					<p id='formulaire'>
					<label> Pseudonyme </label>
					<input type="text" name="pseudo"/>
				
					
					<label> Mot de passe </label>
					<input type="password" name="mot_de_passe"/>
					</p>
					<input type="submit" value="Envoyer"/>
				</form>

			</section>

			<div id="options">
				<p> Pas encore de compte? Inscrivez-vous</p>
				<p> Mot de passe oublié? Créer un nouveau mot de passe </p>
			</div>
			<footer>
				Mentions légales - Contact
			</footer>
		</div>
	</body>

</html>