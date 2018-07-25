<?php
session_start();
if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] !== "Jean Forteroche") {
    header("Location: index.php?a=err&p=denied");
}
?>

<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php?a=admin">Retour à la page d'accueil</a></p>
    <h2>Modifier un chapitre</h2>
    <p>
        <form method="POST" action="index.php?a=mod&p=<?= $param->getId(); ?>&e=submit">
            Titre :<br />
            <input type="text" name="title" value="<?= $param->getTitle();?>"><br /><br />
            Contenu :<br />
            <textarea rows="10" cols="100" type="text" name="content"><?= $param->getContent();?></textarea><br /><br />
            <input type="submit" value="Envoyer">
        </form>
    </p>
</div>