<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php?a=admin">Retour à la page d'accueil</a></p>
    <h3><?= htmlspecialchars($param1->getTitle()) . " par " . htmlspecialchars($param1->getAuthor()) . " le <em>" . htmlspecialchars($param1->getDate()) . "</em>"; ?></h3>
    <div class="post">
        
            <?= $param1->getContent(); ?>
        
    </div>
    <p><a href="index.php?a=mod&p=<?= htmlspecialchars($param1->getId()); ?>">Modifier ce chapitre</a></p><br />
    <h2>Commentaires</h2>
    <p><a href="index.php?a=com&p=<?= $_GET["p"]; ?>">Ajouter un commentaire</a></p>
    <?php
        foreach ($param2 as $comm) { ;
            echo "<p><span class='auteur'>" . htmlspecialchars($comm->getAuthor()) . "</span>, le <em>" . $comm->getDate() . "</em> – <a href='index.php?a=report&p=".$comm->getId()."'>Signaler</a></p><p>" . htmlspecialchars($comm->getComment()) . "</p>";
        }
    ?>
</div>