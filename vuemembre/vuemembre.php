<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Vue d'un membre</title>
	<link rel="stylesheet" type="text/css" href="vuemembre.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/d8cf10d130.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<?php
	include("../includes/connexion-head.php");

	// Récupération des données de la session
	session_start();

	// Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
	if(!isset($_SESSION["pseudo"])){
		header("Location: ../connexion/connexion.php");
		exit(); 
	}
?>
	<div id="color">
		<div class="container">
			<div class="animate-area">
				<nav>
					<ul class="box-area">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</nav>
			</div>
			<section id="inscription">
				<h2><span class="span">Votre Compte</span></h2>
				<form id="formulaire">
					<div class="form-group">
						<label for="name">Nom d'utilisateur : <?php echo $_SESSION['pseudo']; ?></label>
					</div>
					<div class="form-group">
						<label for="email">Email : </label>
					</div>
					<div class="form-group">
						<label for="genre">Genre : </label>
					</div>
				</form>

				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				   		<th scope="col">Questions</th>
				        <th scope="col">Catégories</th>
				        <th scope="col">Auteur</th>
				        <th scope="col">Date</th>
				    </tr>
				  </thead>

				  <tbody>
				  <?php
					require '../db/fonctions.php';
                    $co = connexionBdd();
                    $statement = $co->query('SELECT * FROM questions');
                    while($item = $statement->fetch())
					{
						echo '<tr>';
                        echo '<td>'. $item['titre'] . '</td>';
                        echo '<td>'. $item['cat_id'] . '</td>';
                        echo '<td>'. $item['auteur_id'] . '</td>';
                        echo '<td>'. $item['date_crea'] . '</td>';
                        echo '</td>';
                        echo '</tr>';
					}
				    ?>
				  </tbody>
				</table>
			</section>


		</div>
	</div>
</body>
</html>