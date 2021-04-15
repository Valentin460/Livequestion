<?php
	include("../includes/head.php");
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
	<?php
        include("../includes/connexion-footer.php");
    ?>