<?php
    require '../db/fonctions.php';

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
    $db = connexionBdd();
    $statement = $db->prepare("SELECT * FROM utilisateurs WHERE id_utilisateur = ?");
    $statement = $db->prepare('SELECT * FROM utilisateurs, questions, categories WHERE categories.id_categorie = questions.id_categorie AND questions.id_utilisateur = utilisateurs.id_utilisateur AND utilisateurs.id_utilisateur = ? ORDER BY date_creation_question ASC');
    $statement->execute(array($id));
    $item = $statement->fetch();

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>