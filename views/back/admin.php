  <div class="row chap">
    <h2>Tableau de bord d'administration</h2>
    
    <p class="user">Bienvenue, <?= $_SESSION["user"]["pseudo"]; ?>.</p>
    
    <p><a href="<?= HOST; ?>accueil">Retour à l'accueil</a></p>
    <p>Modifier un chapitre</p>
    <div class="row">
      <?php
      foreach ($param2 as $chap) { ?>
        <div class="col-lg-4" style="min-height:300px; text-align:justify;">
          <h3>
            <a href="<?= HOST; ?>index.php?a=mod&p=<?= htmlspecialchars($chap->getId()); ?>"><?= htmlspecialchars($chap->getTitle()); ?></a>
          </h3>
          <p>
            <?= mb_strimwidth($chap->getContent(), 0, 410); ?>…
          </p>
        </div>
      <?php } ?>
    </div>
    <p><a href="<?= HOST; ?>add">Ajouter une entrée</a></p>
    <p>Commentaires signalés</p>
    <p><table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">Commentaire</th>
          <th scope="col">Auteur</th>
          <th scope="col">Action</th>
          <th scope="col">Contexte</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($param1 as $key => $value) { ?>
          <tr>
            <td scope="row"><?= $value->getComment();?></td>
            <td><?= $value->getAuthor(); ?></td>
            <td><a href="<?= HOST; ?>index.php?a=val&p=<?= $value->getId();?>"><span class="glyphicon glyphicon-ok vert" title="valider"></span></a> – <a href="<?= HOST; ?>index.php?a=delC&p=<?= $value->getId(); ?>"><span class="glyphicon glyphicon-remove rouge" title="supprimer"></span></a></td>
            <td><a href="<?= HOST; ?>post/<?= $value->getPostId(); ?>" target="_blank"><span class="glyphicon glyphicon-share-alt"></span></a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table></p>
    <div class="profil">
      <p>Gestion du profil</p>
      <p><a href="<?= HOST; ?>index.php?a=pass">Modification du mot de passe</a></p>
      <p><a href="#">Gestion des utilisateurs</a></p>
    </div>
  </div>