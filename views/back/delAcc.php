<div class="row chap">
    <p><a href="<?= HOST; ?>accueil">Retour à la page d'accueil</a></p>
    <h2>Supprimer votre compte (cela supprimera également tous vos commentaires)</h2>
    <p>
        <form method="POST" action="<?= HOST; ?>index.php?a=delA&p=<?= $param1; ?>&e=submit">
            Pseudonyme : <?= $param1; ?><br /><br />
            Mot de passe :<br />
            <input type="password" name="password" size="80"><br /><br />
            <input type="submit" value="Envoyer">
        </form>
    </p>
</div>