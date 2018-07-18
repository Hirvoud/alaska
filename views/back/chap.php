<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php">Retour à la page d'accueil</a></p>
    <h2><?= $param["title"]." par ".$param["author"]; ?></h2>
    <div class="post">
        <p>
            <?php
            
                echo "<p>". $param["content"]. "</p>";
            
            ?>
        </p>
    </div>
    <p><a href="index.php?a=mod&p=<?= $param["id"];?>">Modifier ce chapitre</a></p>
</div>