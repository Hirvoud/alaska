<?php
session_start();
?>
<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php">Retour à la page d'accueil</a></p>
    <h3><?= htmlspecialchars($param["title"])." par ".htmlspecialchars($param["author"])." le <em>".$param["deiz_f"]."</em>"; ?></h3>
    <div class="post">
        <p>
            <?php
            
                echo "<p>". $param["content"]. "</p>";
            
            ?>
        </p>
    </div>
    <h2>Commentaires</h2>
    <p><a href="index.php?a=login">Connectez-vous pour ajouter un commentaire</a></p>
    <?php
        foreach ($p2 as $comm) {
            echo    "<p><span class='auteur'>" . htmlspecialchars($comm["author"]) . "</span>, le <em>".$comm["deiz_cf"]."</em></p><p>". htmlspecialchars($comm["comment"])."</p>";
        }
    ?>
</div>