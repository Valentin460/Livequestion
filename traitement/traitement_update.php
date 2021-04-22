<?php

    require '../db/fonctions.php';

    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }

    $pseudo_utilisateurErreur = $email_utilisateurErreur = $mot_de_passe_utilisateurErreur = $pseudo_utilisateur = $email_utilisateur = $mot_de_passe_utilisateur = "";

    if(!empty($_POST)) 
    {
        $pseudo_utilisateur = checkInput($_POST['pseudo_utilisateur']);
        $email_utilisateur = checkInput($_POST['$email_utilisateur']);
        $heure = checkInput($_POST['$mot_de_passe_utilisateur']);
        $mot_de_passe_utilisateur = checkInput($_POST['realisation']);
        $isSuccess = true;
       
        if(empty($pseudo_utilisateur)) 
        {
            $pseudo_utilisateurErreur = 'Veuillez saisir votre pseudo';
            $isSuccess = false;
        }
        if(empty($email_utilisateur)) 
        {
            $email_utilisateurErreur = 'Veuillez saisir votre adresse email';
            $isSuccess = false;
        } 
        if(empty($mot_de_passe_utilisateur)) 
        {
            $mot_de_passe_utilisateurErreur = 'Veuillez saisir votre mot de passe';
            $isSuccess = false;
        }
         
        if ($isSuccess) 
        { 
            $db = connexionBdd();
            if($isSuccess)
            {
                $statement = $db->prepare("UPDATE utilisateurs set pseudo_utilisateur = ?, email_utilisateur = ?, mot_de_passe_utilisateur = ? WHERE id_utilisateur = ?");
                $statement->execute(array($pseudo_utilisateur,$email_utilisateur,$mot_de_passe_utilisateur,$id));
            }
            header("Location: profil.php");
        }
    }
    else 
    {
        $db = connexionBdd();
        $statement = $db->prepare("SELECT * FROM utilisateurs where id_utilisateur = ?");
        $statement->execute(array($id_utilisateur));
        $item = $statement->fetch();
        $pseudo_utilisateur = $item['pseudo_utilisateur'];
        $email_utilisateur = $item['email_utilisateur'];
        $mot_de_passe_utilisateur = $item['mot_de_passe_utilisateur'];
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>