<?php
session_start();
if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] !== "Jean Forteroche") {
    header("Location: index.php?a=err&p=denied");
}
?>

<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php?a=admin">Retour à la page d'accueil</a></p>
    <h3><?= $param->getTitle() . " par " . $param->getAuthor() . " le <em>" . $param->getDate() . "</em>"; ?></h3>
    <div class="post">
        <p>
            <?php
            
                echo "<p>". $param->getContent(). "</p>";
            
            ?>
        </p>
    </div>
    <p><a href="index.php?a=mod&p=<?= $param->getId(); ?>">Modifier ce chapitre</a></p><br />
    <h2>Commentaires</h2>
    <p><a href="index.php?a=com&p=<?= $_GET["p"]; ?>">Ajouter un commentaire</a></p>
    <?php
        foreach ($p2 as $comm) {
            echo "<p><span class='auteur'>" . htmlspecialchars($comm->getAuthor()) . "</span>, le <em>" . $comm->getDate() . "</em> – <a href='index.php?a=report&p=".$comm->getId()."'>Signaler</a></p><p>" . htmlspecialchars($comm->getComment()) . "</p>";
        }
    ?>
</div>