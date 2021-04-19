	<?php
		include("../includes/head.php");
		require('../db/fonctions.php');

		session_start();

		$co = connexionBdd();

		if(isset($_POST['submit'])){

				$pseudo = $_POST['pseudo'];
				$mot_de_passe = hash('sha256', $_POST['password']);

				$query = $co->prepare('SELECT * FROM utilisateurs WHERE pseudo=:login and mot_de_passe=:pass');

				$query->bindParam(':login', $pseudo);
				$query->bindParam(':pass', $mot_de_passe);

				$query->execute();

				$result = $query->fetchall();

				$rows = $query->rowCount();

				if ($rows==1){
					$_SESSION['pseudo'] = $pseudo;

					header("Location: ../vuemembre/vuemembre.php");
				}else{
					$message = " Le nom d'utilisateur ou le mot de passe est incorrect";
				}
		}
		?>
		<div id="color">
			<div class="container">
				<div id="inscription">
					<h2><span class="span">Connexion<span></h2>
					<form id="formulaire" method="post" name="login">
						<div class="form-group">
							<input type="text" name="pseudo" class="form-control" placeholder="Pseudo" id="name">
						</div>
						<div class="form-group">
							<input type="password" name="password" id="mdp" class="form-control" placeholder="Mot de passe">
						</div>
						<div>
							<button type="submit" name="submit" class="btn btn-primary" id="but">Se connecter</button>
						</div>
						<?php
							if (!empty($message)){ ?>
							<p class="warning"><i class="fas fa-exclamation-triangle"></i><?php echo $message; ?></p>
							<?php } ?>
					</form>
					<div>
						<h5>Vous n'avez pas de compte ? <a href="../inscription/inscription.php">Inscrivez-vous</a></h5>
					</div>
				</div>
			</div>
		</div>
	<?php
        include("../includes/connexion-footer.php");
    ?>