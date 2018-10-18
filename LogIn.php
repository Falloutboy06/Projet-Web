<html>
        <head>
            <title>Accueil Metal Fest</title>
            <link rel="stylesheet" href="LogIn.css">
        </head>
        <body>
            <h1><a id="titre" href="./Accueil.php">Metal Fest</a></h1>
                <table id="tab">
                    <tr>
                        <td><a href="./SignUp.php">Inscription</a></td>
                        <td><a href="./LogIn.php">Connexion</a></td>
                        <td>Lien 3</td>
                        <td>Lien 4</td>
                    </tr>
                </table>
            <img id="image1" src="./bande_noir.jpeg">
            <img id="image2" src="./bande_noir.jpeg">
            <h4 id="cpt"><a href="./SignUp.html">Vous n'avez pas de compte ?</a></h4>

            <form method="POST" >
                <p>
                    <label for="pseudo">Nom d'utilisateur</label>: <input type="text" name="pseudo" id"pseudo"/><br>
                    <label for="Mot de passe">Mot de passe</label>: <input type="text" name="MDP" id"MDP"/><br>
                    <input type="submit" value="Connexion">
                </p>
            </form>
            
            <?php echo date('d/m/Y h:i:s'); ?>
        </body>
        <?php echo date('d/m/Y h:i:s'); ?>
</html>