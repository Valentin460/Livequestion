<?php

    require '../db/fonctions.php';

    if(!empty($_GET['id_utilisateur'])) 
    {
        $id = checkInput($_GET['id_utilisateur']);
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
            $pseudo_utilisateurErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($email_utilisateur)) 
        {
            $email_utilisateurErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
        if(empty($mot_de_passe_utilisateur)) 
        {
            $mot_de_passe_utilisateurErreur = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
         
        if ($isSuccess) 
        { 
            $db = connexionBdd();
            if($isSuccess)
            {
                $statement = $db->prepare("UPDATE utilisateurs set pseudo_utilisateur = ?, email_utilisateur = ?, mot_de_passe_utilisateur = ?, projet_periode_realisation = ?, projet_besoin_mission = ?, projet_documentation = ?, projet_bilan = ?, projet_images = ? WHERE projet_ID = ?");
                $statement->execute(array($titre,$intitule,$heure,$realisation,$besoin,$documentation,$bilan,$image,$id));
            }
            header("Location: profil.php");
        }
    }
    else 
    {
        $db = connexionBdd();
        $statement = $db->prepare("SELECT * FROM projets where projet_ID = ?");
        $statement->execute(array($id));
        $item = $statement->fetch();
        $titre = $item['projet_titre'];
        $intitule = $item['projet_intitule'];
        $heure = $item['projet_charge_heure'];
        $realisation = $item['projet_periode_realisation'];
        $besoin = $item['projet_besoin_mission'];
        $documentation = $item['projet_documentation'];
        $bilan = $item['projet_bilan'];
        $image = $item['projet_images'];
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>