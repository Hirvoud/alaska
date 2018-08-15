<div class="navbar"><?= $_SESSION["user"]["pseudo"]; ?> : <a href="index.php?a=tdb">Tableau de bord</a> − <a href="index.php?a=deco">Déconnexion</a></div>
<div class="container">
    <div class="titre col-lg-12">
        <h1>Billet simple pour l'Alaska</h1>
    </div>
    <p><a href="index.php?a=acc">Retour à la page d'accueil</a></p>
    <h3><?= htmlspecialchars($param1->getTitle()) . " par " . htmlspecialchars($param1->getAuthor()) . " le <em>" . htmlspecialchars($param1->getDate()) . "</em>"; ?></h3>
    <div class="post">
        
            <?= $param1->getContent(); ?>
        
    </div>
    <h2>Commentaires</h2>
    
    <h2><a class="btn btn-primary" data-toggle="collapse" href="#commentaires" role="button" aria-expanded="false" aria-controls="commentaires">Ajouter un commentaire</a></h2>
    
    <div class="collapse" id="commentaires">
        <div class="card card-body">
            <form method="POST" action="index.php?a=com&p=<?= $_GET["p"]; ?>">
                Auteur : <?= $_SESSION["user"]["pseudo"]; ?><br />
                <textarea rows="3" cols="100" type="text" name="comment"></textarea><br /><br />
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>

    <?php
        foreach ($param2 as $comm) { ?>
            <p><span class='auteur'><?= htmlspecialchars($comm->getAuthor()); ?></span>, le <em><?= $comm->getDate(); ?></em> – <a href="index.php?a=report&p=<?= $comm->getId();?>&e=<?= $_GET["p"];?>">Signaler</a></p><p><?= htmlspecialchars($comm->getComment()); ?> </p>
        <?php }
    ?>
</div>