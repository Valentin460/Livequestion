    <?php
        include("../includes/head.php");
        require_once("../db/fonctions.php");
        $co = connexionBdd();
    ?>
        <section>
            <div id="quest" class="container">
            	<li>
                    <ul>Avatar</ul>
                    <ul>Nom</ul>
                    <ul>Nb Réponses</ul>
                    <ul>Catégories (beaucoup de Select à faire ici)</ul>
                </li>
                <p>Question</p>
            </div>
            <div id="rep" class="container">
                <div id="reponse">
                    <h4><span>2</span> Réponse</h4>
                    <div>
                        <h6>Avatar + Pseudo</h6>
                        <p>Réponse à la question (Select ici aussi)</p>
                    </div>
                </div>
                <div id="repondre">
                    <h4>Répondre à la question</h4>
                    <form method="post">
                        <div class="form-group">
                            <label>Votre pseudo</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Lien web vers votre avatar</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Votre réponse</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" id="but">Valider</button>
                    </form>
                </div>
            </div>
        </section>
    <?php
        include("../includes/connexion-footer.php");
    ?>