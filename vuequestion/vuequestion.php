<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Livequestion</title>
        <link rel="stylesheet" type="text/css" href="vuequestion.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/d8cf10d130.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="../script.js"></script>
    </head>
    <body>
    <?php
        require_once("../db/fonctions.php");
        $co = connexionBdd();
    ?>
        <h1>Bienvenue Utilisateur</h1>
        <div class="general">
            <div class="left">
                <h2>Titre de la question :
                <?php
                    $reponse = $co->query("SELECT titre FROM questions");
                ?>
                </h2>
                <h2>Date de création :
                <?php
                    $reponse = $co->query("SELECT date_crea FROM questions");
                ?>
                </h2>
                <h2>Nombre de réponses obtenues :<h2>
            </div>
            <div class="right">
                <h2>Nom d'utilisateur :
                <?php
                    $reponse = $co->query("SELECT pseudo FROM utilisateurs");
                ?>
                </h2>
                <h2>Contenu de la réponse :
                <?php
                    $reponse = $co->query("SELECT rep_quest FROM reponses");
                ?>
                </h2>
            </div>
        </div>
    </body>
</html>