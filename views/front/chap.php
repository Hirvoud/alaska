<?php
session_start();
?>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php">Retour à la page d'accueil</a></p>
    <h3><?= $param->getTitle() . " par " . $param->getAuthor() . " le <em>" . $param->getDate() . "</em>"; ?></h3>
    <div class="post">
        <p>
            <?php
            
                echo "<p>". $param->getContent(). "</p>";
            
            ?>
        </p>
    </div>
    <h2>Commentaires</h2>
    <p><a href="index.php?a=login">Connectez-vous pour ajouter un commentaire</a></p>
    <?php
        foreach ($p2 as $comm) {
            echo    "<p><span class='auteur'>" . htmlspecialchars($comm->getAuthor()) . "</span>, le <em>".$comm->getDate(). "</em></p><p>" . htmlspecialchars($comm->getComment()) . "</p>";
        }
    ?>
</div>