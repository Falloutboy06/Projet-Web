<html>
        <head>
            <title>LogIn Metal Fest</title>
            <link rel="stylesheet" href="LogIn.css">
        </head>
        <body>
            <h1><a id="titre" href="./Accueil.php">Metal Fest</a></h1>
                <table id="tab">
                    <tr>
                        <td><a href="./SignUp.php">Inscription</a></td>
                        <td><a href="./LogIn.php">Connexion</a></td>
                        <td><a href="./Event.php">Evenements</td>
                    <td><a href="./CreateEvent.php">Creer un évènement</td>
                    </tr>
                </table>
            <img id="image1" src="./bande_noir.jpeg">
            <img id="image2" src="./bande_noir.jpeg">
            <h4 id="cpt"><a href="./SignUp.php">Vous n'avez pas de compte ?</a></h4>

            <form method="POST" action="./index.php">
                <p>
                    <label for="pseudo">Nom d'utilisateur</label>: <input type="text" name="pseudo" id"pseudo"/><br>
                    <label for="MDP">Mot de passe</label>: <input type="password" name="MDP" id"MDP"/><br>
                    <input type="submit" value="Connexion">
                </p>
            </form>
            <?php echo date('d/m/Y h:i:s'); ?>

        </body>
</html>