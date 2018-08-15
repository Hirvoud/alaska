<div class="navbar"><?= $_SESSION["user"]["pseudo"]; ?> : <a href="index.php?a=tdb">Tableau de bord</a> − <a href="index.php?a=deco">Déconnexion</a></div>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php?a=acc">Retour à la page d'accueil</a></p>
    <h2>Supprimer votre compte (cela supprimera également tous vos commentaires)</h2>
    <p>
        <form method="POST" action="index.php?a=delA&p=<?= $param1; ?>&e=submit">
            Pseudonyme :<br />
            <input type="text" name="pseudo" size="80" value="<?= $param1; ?>" disabled="disabled"><br /><br />
            Mot de passe :<br />
            <input type="password" name="password" size="80"><br /><br />
            <input type="submit" value="Envoyer">
        </form>
    </p>
</div>