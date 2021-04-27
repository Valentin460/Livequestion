<?php
    include("../includes/head.php");
    require("../traitement/traitement_desinscription.php");
?>
<div class="container admin">
    <div class="row">
        <h1><strong>Se desinscrire</strong></h1>
        <br>
        <form class="form" action="delete.php" role="form" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
                <p class="alert alert-warning">Etes-vous sur de vouloir supprimer ?</p>
                <div class="form-actions">
                    <button type="submit" class="btn btn-warning">Oui</button>
                    <a class="btn btn-default" href="../profil/profil.php">Non</a>
                </div>
        </form>
    </div>
</div>
