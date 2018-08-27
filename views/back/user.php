<div class="row chap">
    <h2>Tableau de bord d'utilisateur</h2>
        
    <p class="user">Bienvenue, <?= $_SESSION["user"]["pseudo"]; ?>.</p>
    <p>Vos commentaires</p>
    <?php
    foreach ($param1 as $comm ) { ?>
        <p><?= $comm->getComment();?> − <a href="<?= HOST; ?>index.php?a=modC&p=<?= $comm->getId(); ?>">Modifier</a></p>
    <?php } ?>
    <p><a href="<?= HOST; ?>accueil">Retour à l'accueil</a>
    
    <div class="profil">
      <h3>Gestion du profil</h3>
      <p><a href="<?= HOST; ?>mot-de-passe">Modifier votre mot de passe</a></p>
      <p><a href="<?= HOST; ?>suppression-compte/<?= $_SESSION["user"]["pseudo"]; ?>">Supprimer votre compte</a></p>
    </div>
</div>