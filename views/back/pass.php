<div class="row chap">
    <p><a href="accueil">Retour à la page d'accueil</a></p>
    <div class="col-lg-5">
        <h2>Modifier votre mot de passe</h2>
        <p>
            <form method="POST" action="<?= HOST; ?>index.php?a=pass&e=submit">
                Mot de passe actuel :<br />
                <input type="password" name="oldPass" size="80"><br /><br />
                Nouveau mot de passe :<br />
                <input type="password" name="newPass" size="80"><br /><br />
                <input type="submit" value="Envoyer">
            </form>
        </p>
    </div>
</div>