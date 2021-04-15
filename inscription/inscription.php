	<?php
		 include("../includes/head.php");
		 require('../db/fonctions.php');
		 if(isset($_POST['submit'])){
            if(isset($_POST['name'], $_POST['email'], $_POST['genre'], $_POST['password'])) {

                $pseudo = $_POST['name'];
                $email = $_POST['email'];
				$genre = $_POST['genre'];
				$mot_de_passe = hash('sha256', $_POST['password']);

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
				<form id="formulaire" method="post" action="">
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
					<h5>Vous avez déjà un compte ? <a href="../connexion/connexion.php">Connectez-vous</a></h5>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
	?>

	
</body>
</html>