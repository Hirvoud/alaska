<?php
session_start();
?>
<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php?a=admin">Retour à la page d'accueil</a></p>
    <h2>Modifier un chapitre</h2>
    <p>
        <form method="POST" action="index.php?a=mod&p=<?= $param['id']; ?>&e=submit">
            Titre :<br />
            <input type="text" name="title" value="<?= $param["title"];?>"><br /><br />
            Contenu :<br />
            <textarea rows="10" cols="100" type="text" name="content"><?= $param["content"];?></textarea><br /><br />
            <input type="submit" value="Envoyer">
        </form>
    </p>
</div>