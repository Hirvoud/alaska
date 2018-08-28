   <div class="row chap">
        <p>
            <a href="<?= HOST; ?>accueil">Retour à l'accueil</a>
        </p>
        <h3>
            <?= htmlspecialchars($param1->getTitle()) . " par " . htmlspecialchars($param1->getAuthor()) . " le <em>" . htmlspecialchars($param1->getDate()) . "</em>"; ?>
        </h3>
        
        <div class="post">
            <?= $param1->getContent(); ?>
        </div>
        <h2>Commentaires</h2>
        <p><a href="<?= HOST;?>connexion">Connectez-vous pour ajouter un commentaire</a></p>
        <?php
        foreach ($param2 as $comm) { ?>
            <p>
                <span class="auteur"><?= htmlspecialchars($comm->getAuthor()); ?></span>, le <em><?= htmlspecialchars($comm->getDate());?></em>
            </p>
            <p>
                <?= htmlspecialchars($comm->getComment())?>
            </p>
        <?php } ?>
    </div>