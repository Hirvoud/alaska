<?php

?>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php">Retour à la page d'accueil</a></p>
    <h3><?= $param1->getTitle() . " par " . $param1->getAuthor() . " le <em>" . $param1->getDate() . "</em>"; ?></h3>
    <div class="post">
        <p>
            <?php
            
                echo "<p>". htmlspecialchars($param1->getContent()). "</p>";
            
            ?>
        </p>
    </div>
    <h2>Commentaires</h2>
    <p><a href="index.php?a=login">Connectez-vous pour ajouter un commentaire</a></p>
    <?php
        foreach ($param2 as $comm) {
            echo    "<p><span class='auteur'>" . htmlspecialchars($comm->getAuthor()) . "</span>, le <em>".htmlspecialchars($comm->getDate()). "</em></p><p>" . htmlspecialchars($comm->getComment()) . "</p>";
        }
    ?>
</div>