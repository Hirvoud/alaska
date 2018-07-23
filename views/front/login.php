<?php
session_start();
?>
<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php">Retour à la page d'accueil</a></p>
    <h2>Connectez-vous !</h2>
    <h3>Pas de compte ? <a href="index.php?a=signin">Inscrivez-vous !</a></h3>
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