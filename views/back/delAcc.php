    <p><a href="index.php">Retour à la page d'accueil</a></p>
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