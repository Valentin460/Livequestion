<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="connexion.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/d8cf10d130.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>

	<?php
		require('db/fonctions.php');

		session_start();

		$co = connexionBdd();

		if(isset($_POST['submit'])){

				$pseudo = $_POST['pseudo'];
				$mot_de_passe = hash('sha256', $_POST['password']);

				$query = $co->prepare('SELECT * FROM utilisateurs WHERE pseudo=:login and password=:pass');

				$query->bindParam(':pseudo', $pseudo);
				$query->bindParam(':mot_de_passe', $mot_de_passe);

				$query->execute();

				$result = $query->fetchall();

				$rows = $query->rowCount();

				if ($rows==1){
					$_SESSION['username'] = $username;

					header("Location: vuemembre.php");
				}else{
					$message = "Le nom d'utilisateur ou le mot de passe est incorrect";
				}
		}
		?>
		<div id="color">
			<div class="container">
				<div id="inscription">
					<h2><span class="span">Connexion<span></h2>
					<form id="formulaire" method="post">
						<div class="form-group">
							<input type="text" name="pseudo" class="form-control" placeholder="Pseudo" id="name">
						</div>
						<div class="form-group">
							<input type="password" name="password" id="mdp" class="form-control" placeholder="Mot de passe">
						</div>
						<div>
							<button type="submit" class="btn btn-primary" id="but">Se connecter</button>
						</div>
						<?php
							if (!empty($message)){ ?>
							<p><?php echo $message; ?></p>
							<?php } ?>
					</form>
					<div>
						<h5>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous</a></h5>
					</div>
				</div>
			</div>
		</div>
</body>
</html>