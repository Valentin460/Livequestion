    <?php
        include("../includes/head.php");
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