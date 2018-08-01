<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p class="user">Bienvenue, <?= $_SESSION["user"]["pseudo"]; ?>.</p>
    <h2>Tableau de bord d'administration</h2>
    <p><a href="index.php?a=admin">Liste des chapitres déjà publiés</a></p>
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
    <?php foreach ($param1 as $key => $value) { ?>
            <tr>
                <td scope="row"><?= $value->getComment();?></th>
                <td><?= $value->getAuthor(); ?></td>
                <td><a href="#"><span class="glyphicon glyphicon-ok vert" title="valider"></span></a> – <a href="index.php?a=del&p=<?= $value->getId(); ?>"><span class="glyphicon glyphicon-remove rouge" title="supprimer"></span></a></td>
                <td><a href="index.php?a=aff&p=<?= $value->getPostId(); ?>" target="_blank"><span class="glyphicon glyphicon-share-alt"></span></a>
            </tr>
        <?php }
    ?>
  </tbody>
</table></p>
    <p><a href="index.php">Retour à l'accueil</a>
    <p><a href="index.php?a=deco">Déconnexion</a></p>
</div>