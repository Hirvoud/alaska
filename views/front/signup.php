    <p><a href="index.php">Retour à la page d'accueil</a></p>
    
    <div class="row">
        <div class="col-lg-6 signin">
            <h2>Connectez-vous !</h2>
            <p>
                <form method="POST" action="index.php?a=check">
                    Pseudonyme :<br />
                    <input type="text" name="pseudo" size="40"><br /><br />
                    Mot de passe :<br />
                    <input type="password" name="password" size="40"><br /><br />
                    <input type="submit" value="Envoyer">
                </form>
            </p>
        </div>
        
        <div class="col-lg-6 signup">
            <h2>Pas de compte ? Inscrivez-vous !</h2>
            <p>
                <form method="POST" action="index.php?a=inscrip">
                    Pseudonyme :<br />
                    <input type="text" name="pseudo" size="40"><br /><br />
                    Email :<br />
                    <input type="email" name="email" size="40"><br /><br />
                    Mot de passe :<br />
                    <input type="password" name="password" size="40"><br /><br />
                    <input type="submit" value="Envoyer">
                </form>
            </p>
        </div>
    </div>