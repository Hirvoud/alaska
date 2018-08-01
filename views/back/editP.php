<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php?a=admin">Retour à la page d'accueil</a></p>
    <h2>Modifier un chapitre</h2>
    <p>
        <form method="POST" action="index.php?a=mod&p=<?= htmlspecialchars($param1["id"]); ?>&e=submit">
            Titre :<br />
            <input type="text" name="title" value="<?= htmlspecialchars($param1["title"]);?>"><br /><br />
            Contenu :<br />
            <textarea rows="10" cols="100" type="text" name="content" id="tntxt"><?= htmlspecialchars($param1["content"]);?></textarea><br /><br />
            <input type="submit" value="Envoyer">
        </form>
    </p>
</div>