<div class="navbar"><?= $_SESSION["user"]["pseudo"]; ?> : <a href="index.php?a=tdb">Tableau de bord</a> − <a href="index.php?a=deco">Déconnexion</a></div>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php?a=acc">Retour à la page d'accueil</a></p>
    <h2>Modifier un commentaire</h2>
    <p>
        <form method="POST" action="index.php?a=modC&p=<?= htmlspecialchars($param1->getId()); ?>&e=submit">
            Commentaire :<br />
            <textarea rows="5" cols="100" type="text" name="comment"><?= htmlspecialchars($param1->getComment()); ?></textarea><br /><br />
            <input type="submit" value="Envoyer">
        </form>
    </p>
    <p><a href="index.php?a=delC&p=<?= $param1->getId(); ?>&e=<?= $param1->getAuthor(); ?>">Supprimer ce commentaire</a></p>
</div>