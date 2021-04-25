	<?php
		 include("../includes/head.php");
		 require('../db/fonctions.php');
		 // Vérification des données saisies dans les champs du formulaire
			require('../traitement/traitement_inscription.php');
			if (!empty($_POST)) {
				$traitement = traitementInscription($_POST);
			}
		?>
		<div id="color">
		<div class="container">
			<div id="inscription">
				<h2><span class="span">Créez votre compte gratuitement<span></h2>
				<form id="formulaire" method="post" action="">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Pseudo" id="name">
						<p class="warning"><?php
							if (isset($traitement) && $traitement['success'] === false && isset($traitement['erreurs']['name'])){
								echo $traitement['erreurs']['name'];
							}
							?>
						</p>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="E-mail" id="mail">
						<p class="warning"><?php
							if (isset($traitement) && $traitement['success'] === false && isset($traitement['erreurs']['email'])){
								echo $traitement['erreurs']['email'];
							}
							?>
						</p>
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
							<p class="warning"><?php
									if (isset($traitement) && $traitement['success'] === false && isset($traitement['erreurs']['password'])){
										echo $traitement['erreurs']['password'];
									}
								?>
							</p>
						</div>
						<div class="form-group col-lg-6">
							<input type="password" name="verifyPassword" id="verifyMdp" class="form-control" placeholder="Vérification mot de passe">
							<p class="warning"><?php
								if (isset($traitement) && $traitement['success'] === false && isset($traitement['erreurs']['verifyPassword'])){
									echo $traitement['erreurs']['verifyPassword'];
								}
								?>
							</p>
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
        include("../includes/connexion-footer.php");
    ?>