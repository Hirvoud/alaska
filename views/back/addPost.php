    <div class="row chap">
        <p><a href="<?= HOST; ?>accueil">Retour à la page d'accueil</a></p>
        <h2>Ajouter un chapitre</h2>
        <p>
            <form class="col-lg-12" method="POST" action="<?= HOST; ?>index.php?a=add&e=submit">
                Auteur : <?= $_SESSION["user"]["pseudo"]; ?><br /><br />
                <label for="title">Titre : </label>
                <input id="title" name="title" type="text" class="form-control" />
                <label for="tntxt">Contenu : </label>
                    <textarea rows="10" cols="10" id="tntxt" name="content" class="form-control" ></textarea><br />
                <input id="submit" type="submit" value="Envoyer" />
            </form>
        </p>
    </div>
