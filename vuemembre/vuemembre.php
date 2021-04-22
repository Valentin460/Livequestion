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
<div class="container">
  <div class="card profile">
    <div class="content">
      <div class="row">
        <div class="col-sm-6 col-md-8">
          <h2>Perrine COUPY</h2>
          <p>perrinecoupy@gmail.com</p>
          <p>Femme</p>
        </div>
    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-sm-4">
          <div class="indicator"><i class="material-icons">insert_drive_file</i><span>1 question</span></div>
        </div>
        <div class="col-sm-4">
          <div class="indicator"><i class="material-icons">comment</i><span>1 réponse</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="torrents">
    <div class="legend">
      <div class="row">
        <div class="col-md-6">Questions</div>
        <div class="col-md-2">Catégories</div>
        <div class="col-md-2">Auteurs</div>
        <div class="col-md-1">Dates</div>
      </div>
    </div>
    <div class="torrent">
      <div class="row">
        <div class="col-md-6">
          <div class="title">Comment s'appelle la femelle du chien ?</div>
          <div class="category">Une chienne</div>
        </div>
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