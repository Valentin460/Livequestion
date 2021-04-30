<?php
  include("../includes/connexion-head-home.php");

    // Récupération des données de la session
    session_start();

    // Vérifie si l'utilisateur est connecté, sinon redirection vers la page de connexion
      if(!isset($_SESSION["pseudo"])){
        header("Location: ../connexion/connexion.php");
        exit(); 
      }
?>
<!-- partial:index.partial.html -->
<aside id="sidebar" class="nano">
  <div class="nano-content">
    <div class="logo-container">
      <span class="logo glyphicon glyphicon-envelope"></span><?php echo $_SESSION['pseudo']; ?></div><a href="../ajoutquestion/ajoutquestion.php" class="compose-button">+ Question</a>
    <menu class="menu-segment">
        <ul>
            <li><a href="../profil/profil.php">Mon profil</a></li>
            <li><a href="../connexion/logout.php">Deconnexion</a></li>
        </ul>
    </menu>
  </div>
</aside>
<main id="main">
  <div class="overlay"></div>
  <header class="header">
    <div class="search-box">
      <input placeholder="Recherche..."><span class="icon glyphicon glyphicon-search"></span>
    </div>
    <h1 class="page-title"><a class="sidebar-toggle-btn trigger-toggle-sidebar"><span class="line"></span><span class="line"></span><span class="line"></span><span class="line line-angle1"></span><span class="line line-angle2"></span></a>Questions<a></span></a></h1>
  </header>
  <div id="main-nano-wrapper" class="nano">
    <div class="nano-content">
        <ul class="message-list">
      <?php
        require '../db/fonctions.php';
        $co = connexionBdd();
        $statement = $co->query('SELECT * FROM questions, utilisateurs WHERE questions.id_utilisateur = utilisateurs.id_utilisateur ORDER BY date_creation_question ASC');
        while($item = $statement->fetch())
        {
            echo '<li class="unread">';
              echo '<div class="col col-1"><span class="dot"></span>';
                echo '<div class="checkbox-wrapper">';
                  echo '<input type="checkbox" id="chk1">';
                  echo '<label for="chk1" class="toggle"></label>';
                echo '</div>';
                echo '<a href="../vuemembre/vuemembre.php?id='.$item['id_utilisateur'].'"><p class="title">' . $item['pseudo_utilisateur'] . '</p><div class="middle-wrapper">
                <div class="like-wrapper">
                <a class="like-button">
                <span class="like-icon">
                <div class="heart-animation-1"></div>
                <div class="heart-animation-2"></div>
                </span>
                </a>
                </div>
                </div></a>';
              echo '</div>';
              echo '<div class="col col-2">';
                echo '<a href="../vuequestion/vuequestion.php?id='.$item['id_question'].'"><div class="subject">' . $item['titre_question']. '</span></div></a>';
                echo '<div class="date">' . $item['date_creation_question'] . '</div>';
              echo '</div>';
            echo '</li>';
        }
        ?>
        </ul>
    </div>
  </div>
</main>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
