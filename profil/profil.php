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
          echo '<a class="btn btn-primary" href="update.php?id='.$item['id_utilisateur'].'"><span class="glyphicon glyphicon-pencil"></span> Modifier vos informations</a>';
          $admin = $db->query('SELECT role_utilisateur FROM utilisateurs WHERE pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');
          $admins = $admin->fetch();
          if ($admins['role_utilisateur'] == "administrateur") {
	        echo '<a class="btn btn-primary" href="../administration/administration.php?id='.$item['id_utilisateur'].'"><i class="fas fa-users-cog"></i> Administration</a>';
          }
          echo '<a class="btn btn-danger" href="desinscription.php?id='.$item['id_utilisateur'].'"><span class="glyphicon glyphicon-remove"></span> Se désinscrire</a>';
          ?>
        </div>
    </div>
    <?php
    $db = connexionBdd();
    $statement = $db->query('SELECT COUNT(*) AS resulat_questions FROM questions, utilisateurs WHERE questions.id_utilisateur = utilisateurs.id_utilisateur AND pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');
    while($item = $statement->fetch()) 
    {
    ?>
    <div class="card-footer">
      <div class="row">
        <div class="col-sm-5 col-xs-12">
        <?php
            echo '<h4>Questions</h4>';
            echo '<div class="indicator"><i class="material-icons">insert_drive_file</i><span>'.$item['resulat_questions'].'</span></div>';
            }
        ?>
        </div>
        <?php
        $db = connexionBdd();
        $statement = $db->query('SELECT COUNT(*) AS resulat_reponses FROM reponses, utilisateurs WHERE reponses.id_utilisateur = utilisateurs.id_utilisateur AND pseudo_utilisateur = "'.$_SESSION['pseudo'].'"');
        while($item = $statement->fetch()) 
        {
        ?>
        <div class="col-sm-5 col-xs-12">
        <?php
            echo '<h4>Réponses</h4>';
            echo '<div class="indicator"><i class="material-icons">comment</i><span>'.$item['resulat_reponses'].'</span>';
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
  echo '<div class="torrents">';
    echo '<div class="legend">';
      echo '<div class="row">';
        echo '<div class="col-md-6 col-xs-4">Question</div>';
        echo '<div class="col-md-2 col-xs-3">Catégorie</div>';
        echo '<div class="col-md-2 col-xs-3">Auteur</div>';
        echo '<div class="col-md-2 col-xs-2">Date</div>';
      echo '</div>';
    echo '</div>';
    echo '<div class="torrent">';
        echo '<div class="row">';
            echo '<div class="col-md-6 col-xs-4">';
        echo '<div class="title">'.$item['titre_question'].'</div>';
        echo '</div>';
        echo '<div class="col-md-2 col-xs-3">'.$item['id_categorie'].'</div>';
        echo '<div class="col-md-2 col-xs-3">'.$item['pseudo_utilisateur'].'</div>';
        echo '<div class="col-md-2 col-xs-2">';
          echo '<div class="upload">'.$item['date_creation_question'].'</div>';
        echo '</div>';
     echo '</div>';
  echo '</div>';
echo '</div>';
}
?>
</div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
	<?php
        include("../includes/connexion-footer.php");
    ?>