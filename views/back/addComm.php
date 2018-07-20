<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php">Retour à la page d'accueil</a></p>
    <h2>Ajouter un commentaire</h2>
    <p>
        <form method="POST" action="index.php?a=addC&p=<?= $_GET["p"];?>">
            Auteur :<br />
            <input type="text" name="author"><br />
            Commentaire :<br />
            <textarea rows="10" cols="100" type="text" name="comment"></textarea><br /><br />
            <input type="submit" value="Envoyer">
            </form>
    </p>
</div>