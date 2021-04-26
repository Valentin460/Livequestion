<?php
    require '../db/fonctions.php';

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
    $db = connexionBdd();
    $statement = $db->prepare("SELECT * FROM utilisateurs WHERE id_utilisateur = ?");
    $statement = $db->prepare('SELECT * FROM utilisateurs, questions WHERE utilisateurs.id_utilisateur = questions.id_utilisateur AND questions.id_utilisateur = ? ORDER BY date_creation_question ASC');
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