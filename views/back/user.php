<div class="row chap">
    <h2>Tableau de bord d'utilisateur</h2>
        
    <p class="user">Bienvenue, <?= $_SESSION["user"]["pseudo"]; ?>.</p>
    
    <h4>Vos commentaires</h4>
    
    <table class="table table-striped">
        <?php
        foreach ($param1 as $comm ) { ?>
            <tr>
                <td><?= $comm->getComment();?> − <a href="<?= HOST; ?>modifier-comm/<?= $comm->getId(); ?>">Modifier</a></td>
            </tr>
        <?php } ?>
    </table><br />

    <p><a href="<?= HOST; ?>accueil">Retour à l'accueil</a>
    
    <div class="profil">
      <h3>Gestion du profil</h3>
      <p><a href="<?= HOST; ?>mot-de-passe">Modifier votre mot de passe</a></p>
      <p><a href="<?= HOST; ?>suppression-compte/<?= $_SESSION["user"]["pseudo"]; ?>">Supprimer votre compte</a></p>
    </div>
</div>