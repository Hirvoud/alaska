<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php">Retour à la page d'accueil</a></p>
    <h3><?= $param["title"]." par ".$param["author"]." le <em>".$param["deiz_f"]."</em>"; ?></h3>
    <div class="post">
        <p>
            <?php
            
                echo "<p>". $param["content"]. "</p>";
            
            ?>
        </p>
    </div>
    <p><a href="index.php?a=mod&p=<?= $param["id"];?>">Modifier ce chapitre</a></p><br />
    <h2>Commentaires</h2>
    <p><a href="index.php?a=comm">Ajouter un commentaire</a></p>
</div>