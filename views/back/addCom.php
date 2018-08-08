<div class="navbar">Utilisateur : <a href="index.php?a=tdb"><?= $_SESSION["user"]["pseudo"]; ?></a> − <a href="index.php?a=deco">Déconnexion</a></div>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php?a=acc">Retour à la page d'accueil</a></p>
    <h2>Ajouter un commentaire</h2>
    <p>
        <form method="POST" action="index.php?a=com&p=<?= $_GET["p"];?>&e=submit">
            Auteur :<br />
            <input type="text" name="author" value="<?= $_SESSION["user"]["pseudo"]; ?>" disabled="disabled"><br />
            Commentaire :<br />
            <textarea rows="10" cols="100" type="text" name="comment"></textarea><br /><br />
            <input type="submit" value="Envoyer">
            </form>
    </p>
</div>