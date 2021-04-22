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
<head>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
</head>
<body>
<?php
    require '../db/fonctions.php';
    $db = connexionBdd();
    $statement = $db->query('SELECT * FROM utilisateurs WHERE pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');
    while($item = $statement->fetch()) 
    {
?>
        
<div class="container">
  <div class="card profile">
    <div class="content">
      <div class="row">
        <div class="col-sm-6 col-md-8">
        <?php
          echo '<h2>'.$item['pseudo_utilisateur'].'</h2>';
          echo '<p>'.$item['email_utilisateur'].'</p>';
          echo '<p>'.$item['genre_utilisateur'].'</p>';
          }
          ?>
        </div>
    </div>
    <?php
    $db = connexionBdd();
    $statement = $db->query('SELECT COUNT(*) FROM questions, utilisateurs WHERE questions.id_utilisateur = utilisateurs.id_utilisateur AND pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');
    while($item = $statement->fetch()) 
    {
    ?>
    <div class="card-footer">
      <div class="row">
        <div class="col-sm-4">
        <?php
            echo '<div class="indicator"><i class="material-icons">insert_drive_file</i><span>'.$item['id_utilisateur'].'</span></div>';
            }
        ?>
        </div>
        <?php
        $db = connexionBdd();
        $statement = $db->query('SELECT COUNT(*) FROM reponses, utilisateurs WHERE reponses.id_utilisateur = utilisateurs.id_utilisateur AND pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');
        while($item = $statement->fetch()) 
        {
        ?>
        <div class="col-sm-4">
        <?php
            echo '<div class="indicator"><i class="material-icons">comment</i><span>'.$item['id_utilisateur'].'</span>';
            }
        ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    $db = connexionBdd();
    $statement = $db->query('SELECT * FROM questions, utilisateurs WHERE questions.id_utilisateur = utilisateurs.id_utilisateur AND pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');
    while($item = $statement->fetch()) 
    {
    ?>
  <div class="torrents">
    <div class="legend">
      <div class="row">
        <div class="col-md-6">Questions</div>
        <div class="col-md-2">Catégories</div>
        <div class="col-md-2">Auteurs</div>
        <div class="col-md-1">Dates</div>
      </div>
    </div>
    <?php
    echo '<div class="torrent">';
      echo '<div class="row">';
        echo '<div class="col-md-6">';
          echo '<div class="title">'.$item['titre_question'].'</div>';
            $db = connexionBdd();
            $statement = $db->query('SELECT * FROM reponses, utilisateurs WHERE reponses.id_utilisateur = utilisateurs.id_utilisateur AND pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');
            while($item = $statement->fetch()) 
            {
          echo '<div class="category">'.$item['question_reponse'].'</div>';
          }
        echo '</div>';
        }
        ?>
        <div class="col-md-2">Animal</div>
        <div class="col-md-2">Perrine C</div>
        <div class="col-md-1">
          <div class="upload">19/04/2021</div>
        </div>
      </div>
    </div>
  </div>
</div>
	<?php
        include("../includes/connexion-footer.php");
    ?>