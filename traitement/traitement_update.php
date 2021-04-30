<?php

    require '../db/fonctions.php';

    if(isset($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
    $pseudoErreur = $emailErreur = $motDePasseErreur = $pseudo = $email = $motDePasse = "";

    if(!empty($_POST)) 
    {
        $pseudo = checkInput($_POST['pseudo']);
        $email = checkInput($_POST['email']);
        $motdepasse = checkInput(hash('sha256', $_POST['motdepasse']));
        $avatar = $_FILES["image"]["name"];
        $id = checkInput($_POST['id']);
        $isSuccess = true;
       
        if(empty($pseudo)) 
        {
            $pseudoErreur = 'Veuillez saisir votre pseudo';
            $isSuccess = false;
        }
        if(empty($email)) 
        {
            $emailErreur = 'Veuillez saisir votre adresse email';
            $isSuccess = false;
        } 
        if(empty($motdepasse)) 
        {
            $motDePasseErreur = 'Veuillez saisir votre mot de passe';
            $isSuccess = false;
        }
         
        if ($isSuccess) 
        { 
            $db = connexionBdd();
            if($isSuccess)
            {
                $statement = $db->prepare("UPDATE utilisateurs set pseudo_utilisateur = ?, email_utilisateur = ?, mot_de_passe_utilisateur = ?, avatar_utilisateur = ? WHERE id_utilisateur = ?");
                $statement->execute(array($pseudo,$email,$motdepasse,$avatar,$id));
            }
            header("Location: profil.php");
        }
    }
    else 
    {
        $db = connexionBdd();
        $statement = $db->prepare("SELECT * FROM utilisateurs where id_utilisateur = ?");
        $statement->execute(array($id));
        $item = $statement->fetch();
        $pseudo = $item['pseudo_utilisateur'];
        $email = $item['email_utilisateur'];
        $motdepasse = $item['mot_de_passe_utilisateur'];
        $avatar = $item['avatar_utilisateur'];
        $id = $item['id_utilisateur'];
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>