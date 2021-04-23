<?php
  include("../includes/connexion-head-home.php");

    // Récupération des données de la session
    // session_start();

    // // Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
      if(!isset($_SESSION["pseudo"])){
        header("Location: ../connexion/connexion.php");
        exit(); 
      }
?>
?>
<!-- partial:index.partial.html -->
<aside id="sidebar" class="nano">
  <div class="nano-content">
    <div class="logo-container">
      <span class="logo glyphicon glyphicon-envelope"></span>Questions</div><a class="compose-button">Catégories</a>
    <menu class="menu-segment">
    <?php
      require '../db/fonctions.php';
      $co = connexionBdd();
      $statement = $co->query('SELECT nom_categorie FROM categories');
      while($item = $statement->fetch())
      {
        echo '<ul>';
        echo '<li><a href="#">' . $item['nom_categorie'] . '</a></li>';
        echo '</ul>';
      }
    ?>
    </menu>
  </div>
</aside>
<main id="main">
  <div class="overlay"></div>
  <header class="header">
    <div class="search-box">
      <input placeholder="Search..."><span class="icon glyphicon glyphicon-search"></span>
    </div>
    <h1 class="page-title"><a class="sidebar-toggle-btn trigger-toggle-sidebar"><span class="line"></span><span class="line"></span><span class="line"></span><span class="line line-angle1"></span><span class="line line-angle2"></span></a>Questions<a><span class="icon glyphicon glyphicon-chevron-down"></span></a></h1>
  </header>
  <div class="action-bar">
    <ul>
      <li><a class="icon circle-icon glyphicon glyphicon-chevron-down"></a></li>
      <li><a class="icon circle-icon glyphicon glyphicon-refresh"></a></li>
      <li><a class="icon circle-icon glyphicon glyphicon-share-alt"></a></li>
      <li><a class="icon circle-icon red glyphicon glyphicon-remove"></a></li>
      <li><a class="icon circle-icon red glyphicon glyphicon-flag"></a></li>
    </ul>
  </div>
  <?php
    $statement = $co->query('SELECT * FROM questions ORDER BY date_creation_question ASC');
    while($item = $statement->fetch())
    {
      echo '<div id="main-nano-wrapper" class="nano">';
      echo '<div class="nano-content">';
      echo '<ul class="message-list">';
        echo '<li class="unread">';
          echo '<div class="col col-1"><span class="dot"></span>';
            echo '<div class="checkbox-wrapper">';
              echo '<input type="checkbox" id="chk1">';
              echo '<label for="chk1" class="toggle"></label>';
            echo '</div>';
            echo '<a href="../vuemembre/vuemembre.php?id='.$item['id_utilisateur'].'"><p class="title">' . $item['id_utilisateur'] . '</p><span class="star-toggle glyphicon glyphicon-star-empty"></span></a>';
          echo '</div>';
          echo '<div class="col col-2">';
            echo '<a href="../vuequestion/vuequestion.php"><div class="subject">' . $item['titre_question']. '</span></div></a>';
            echo '<div class="date">' . $item['date_creation_question'] . '</div>';
          echo '</div>';
        echo '</li>';
    }
    ?>
</main>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
