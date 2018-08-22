    <p><a href="index.php">Retour à la page d'accueil</a></p>
    <h3><?= $param1->getTitle() . " par " . $param1->getAuthor() . " le <em>" . $param1->getDate() . "</em>"; ?></h3>
    <div class="post">
        <p>
            <?= $param1->getContent() ;?>
        </p>
    </div>
    <h2>Commentaires</h2>
    <p><a href="index.php?a=signup">Connectez-vous pour ajouter un commentaire</a></p>
    <?php
        foreach ($param2 as $comm) { ?>
            <p>
                <span class="auteur"><?= htmlspecialchars($comm->getAuthor()); ?></span>, le <em><?= htmlspecialchars($comm->getDate());?></em>
            </p>
            <p>
                <?= htmlspecialchars($comm->getComment())?>
            </p>
        <?php }
    ?>