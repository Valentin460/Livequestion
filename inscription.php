<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="inscription.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/d8cf10d130.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	
	<?php
		 require('db/fonctions.php');
		 if(isset($_POST['submit'])){
            if(isset($_POST['name'], $_POST['email'], $_POST['genre'], $_POST['password'])) {

                $pseudo = $_POST['name'];
                $email = $_POST['email'];
				$genre = $_POST['genre'];
				$password = $_POST['password'];

                $co = connexionBdd();

                $query = $co->prepare("INSERT into utilisateurs (pseudo, email, genre, mot_de_passe, date_inscription) VALUES (:pseudo, :email, :genre, :mot_de_passe, now())");

                $query->bindParam(':pseudo', $pseudo);
                $query->bindParam(':email', $email);
				$query->bindParam(':genre', $genre);
				$query->bindParam(':mot_de_passe', $mot_de_passe);

                $query->execute();


            }
        }
		else {
		?>
		<div id="color">
		<div class="container">
			<div id="inscription">
				<h2><span class="span">Créez votre compte gratuitement<span></h2>
				<form id="formulaire" method="post">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Pseudo" id="name">
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="E-mail" id="mail">
					</div>
					<div class="form-group">
						<label for="genre">Genre</label>
						<select class="form-control" id="genre" name="genre">
							<option>H</option>
							<option>F</option>
						</select>
					</div>
					<div class="form-row">
						<div class="form-group col-lg-6">
							<input type="password" name="password" id="mdp" class="form-control" placeholder="Mot de passe">
							<div class="row align-items-center verif">
								<p>8 caractères</p>
								<p>1 chiffre</p>
								<p>1 Majuscule</p>
							</div>
						</div>
						<div class="form-group col-lg-6">
							<input type="password" name="verifyPassword" id="verifyMdp" class="form-control" placeholder="Vérification mot de passe">
						</div>
					</div>
					<button type="submit" name="submit" class="btn btn-primary" id="but">S'inscrire</button>
					<p id="condition">En vous inscrivant, vous acceptez nos <span id="utilisation">conditions d'utilisation</span></p>
				</form>
				<div>
					<h5>Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous</a></h5>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
	?>

	
</body>
</html>