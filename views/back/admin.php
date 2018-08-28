  <div class="row chap">
    <div class="row">
      <h2>Tableau de bord d'administration</h2>
      
      <p class="user">Bienvenue, <?= $_SESSION["user"]["pseudo"]; ?>.</p>
      
      <p><a href="<?= HOST; ?>accueil">Retour à l'accueil</a></p>
      <h3>Modifier un chapitre <small>ou</small> <a href="<?= HOST; ?>add">Ajouter une entrée</a></h3>
    </div><br />
    <div class="row">
      <?php
      foreach ($param2 as $chap) { ?>
        <a href="<?= HOST; ?>modif/<?= htmlspecialchars($chap->getId()); ?>">
          <div class="posts col-lg-4" style="min-height:280px; text-align:justify;">
            <h4>
              <?= htmlspecialchars($chap->getTitle()); ?></a>
            </h4>
            <p>
              <?= mb_strimwidth($chap->getContent(), 0, 410); ?>…
            </p>
          </div>
        </a>
      <?php } ?>
    </div> <br />

    <h3>Commentaires signalés</h3>
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
            <td><a href="<?= HOST; ?>valider/<?= $value->getId();?>"><span class="glyphicon glyphicon-ok vert" title="valider"></span></a> – <a href="<?= HOST; ?>supprimer/<?= $value->getId(); ?>"><span class="glyphicon glyphicon-remove rouge" title="supprimer"></span></a></td>
            <td><a href="<?= HOST; ?>post/<?= $value->getPostId(); ?>" target="_blank"><span class="glyphicon glyphicon-share-alt"></span></a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table></p><br />
    <div class="profil">
      <h3>Gestion du profil</h3>
      <p><a href="<?= HOST; ?>mot-de-passe">Modification du mot de passe</a></p>
    </div>
  </div>