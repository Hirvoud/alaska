<div class="row chap">    
    <p><a href="<?= HOST; ?>accueil">Retour à la page d'accueil</a></p>
    <h2>Modifier un commentaire</h2>
    <p>
        <form method="POST" action="<?= HOST; ?>index.php?a=modC&p=<?= htmlspecialchars($param1->getId()); ?>&e=submit">
            Commentaire :<br />
            <textarea rows="5" cols="100" type="text" name="comment"><?= htmlspecialchars($param1->getComment()); ?></textarea><br /><br />
            <input type="submit" value="Envoyer">
        </form>
    </p>
    <p><a href="<?= HOST; ?>index.php?a=delC&p=<?= $param1->getId(); ?>&e=<?= $param1->getAuthor(); ?>">Supprimer ce commentaire</a></p>
</div>