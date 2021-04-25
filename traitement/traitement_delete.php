<?php
    require '../db/fonctions.php';
 
    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }

    if(!empty($_POST)) 
    {
        $id = checkInput($_POST['id']);
        $db = connexionBdd();
        $statement = $db->prepare("DELETE FROM questions WHERE id_question = ?");
        $statement->execute(array($id));
        header("Location: ../administration/administration.php"); 
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>