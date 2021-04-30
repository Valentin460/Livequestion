<?php
	include("../includes/head.php");
	include("../includes/connexion-head.php");
    require("../traitement/traitement_vuemembre.php");

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
<div class="container">
  <div class="card profile">
    <div class="content">
      <div class="row">
        <div class="col-sm-6 col-md-8">
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
          <h2><?php echo ' '.$item['pseudo_utilisateur']; ?></h2>
          <p><?php echo ' '.$item['genre_utilisateur']; ?></p>
        </div>
    </div>
  <?php
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
        echo '<div class="col-md-2 col-xs-3">'.$item['nom_categorie'].'</div>';
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
	<?php
        include("../includes/connexion-footer.php");
    ?>