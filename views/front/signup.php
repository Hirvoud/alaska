<?php

?>
<div class="container-fluid">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php">Retour à la page d'accueil</a></p>
    <div class="col-lg-5">
        <h2>Connectez-vous !</h2>
        <p>
            <form method="POST" action="index.php?a=check">
                Pseudonyme :<br />
                <input type="text" name="pseudo" size="80"><br /><br />
                Mot de passe :<br />
                <input type="password" name="password" size="80"><br /><br />
                <input type="submit" value="Envoyer">
            </form>
        </p>
    </div>
    
    <div class="col-lg-5">
        <h2>Pas de compte ? Inscrivez-vous !</h2>
        <p>
            <form method="POST" action="index.php?a=inscrip">
                Pseudonyme :<br />
                <input type="text" name="pseudo" size="80"><br /><br />
                Email :<br />
                <input type="email" name="email" size="80"><br /><br />
                Mot de passe :<br />
                <input type="password" name="password" size="80"><br /><br />
                <input type="submit" value="Envoyer">
            </form>
        </p>
    </div>
</div>