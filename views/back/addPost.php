<div class="navbar">Utilisateur : <a href="index.php?a=tdb"><?= $_SESSION["user"]["pseudo"]; ?></a> − <a href="index.php?a=deco">Déconnexion</a></div>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php?a=acc">Retour à la page d'accueil</a></p>
    <h2>Ajouter un chapitre</h2>
    <p>
        <form class="col-lg-12" method="POST" action="index.php?a=add&e=submit">
                <label for="author">Nom : </label>
                    <input id="author" name="author" type="text" class="form-control">
                <label for="title">Titre : </label>
                    <input id="title" name="title" type="text" class="form-control">
                <label for="tntxt">Contenu : </label>
                    <textarea rows="10" cols="10" id="tntxt" name="content" class="form-control" ></textarea><br />
                <input id="submit" type="submit" value="Envoyer">
        </form>
    </p>
</div>