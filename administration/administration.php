<?php
    include("../includes/head.php");
    include("../includes/administration-head.php");
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
                        echo '<td>'. $item['titre'] . '</td>';
                        echo '<td width=300>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="delete.php?id='.$item['id'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
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