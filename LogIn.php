<html>
<?php session_start() ?>
        <head>
            <title>LogIn Metal Fest</title>
            <link rel="stylesheet" href="LogIn.css">
        </head>
        <body>
            <?php include('./header.php'); ?>
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

            <form method="POST" action="LogIn.php">
                <p>
                    <label for="pseudo">Nom d'utilisateur</label>: <input type="text" name="pseudo" id="pseudo" required=""/><br>
                    <label for="MDP">Mot de passe</label>: <input type="password" name="MDP" id="MDP"required=""/><br>
                    <input type="submit" value="Connexion">
                </p>
            </form>
<?php
    if( isset($_POST["pseudo"]) AND isset($_POST["MDP"]) AND $_POST["pseudo"] != "" AND $_POST["MDP"] != "" ) {
        $username = $_POST["pseudo"];
        $password = $_POST["MDP"];
        
        try {
            $bdd= new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8','root','');
        }
        catch(Exception $e) {
            die('Erreur:'.$e->getMessage());
        }
        $sql = "SELECT name, password, userID FROM user WHERE name='".$username."' AND password='".$password."';";
        $reponse=$bdd->query($sql);
        if($reponse->rowCount() == 1) {
            foreach($reponse as $row){
                $_SESSION['userID']= $row['userID'];
                $_SESSION['LoggedIn']=true;
                header("Location: index.php");
            }
          
        } else {
            echo "Wrong username or Password";
        }
    } else {
        echo "Nom d'utilisateur et/ou mot de passe manquant";
        die();
    }
?>
        </body>
</html>

