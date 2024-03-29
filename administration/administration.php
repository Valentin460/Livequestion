<?php
    include("../includes/head.php");
    include("../includes/administration-head.php");

    // R�cup�ration des donn�es de la session
	session_start();

	// V�rifie si l'utilisateur est connect�, sinon redirection vers la page de connexion
	if(!isset($_SESSION["pseudo"])){
        header("Location: ../connexion/connexion.php");
		exit(); 
	}
    
?>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Questions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require '../db/fonctions.php';
                    $db = connexionBdd();
                    $statement = $db->query('SELECT * FROM questions');
                    while($item = $statement->fetch()) 
                    {
                        echo '<tr>';
                        echo '<td>'. $item['titre_question'] . '</td>';
                        echo '<td width=300>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="delete.php?id='.$item['id_question'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
            ?>
        </tbody>
    </table>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Utilisateurs</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $db = connexionBdd();
                    $statement = $db->query('SELECT * FROM utilisateurs');
                    while($item = $statement->fetch()) 
                    {
                        echo '<tr>';
                        echo '<td>'. $item['pseudo_utilisateur'] . '</td>';
                        echo '<td width=300>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="delete.php?id='.$item['id_utilisateur'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
            ?>
        </tbody>
    </table>
    </body>
    <?php
        include("../includes/connexion-footer.php");
    ?>