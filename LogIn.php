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
            <a href="https://www.hellfest.fr/" ><img id="LogoGauche1" src="./LogoHF.jpg"></a>
            <a href="https://www.sylakopenair.com/"><img id="LogoGauche2" src="./LogoSLK.gif" ></a>
            <a href="https://www.ragnaroek-festival.com/"><img id="LogoDroit1" src="./LogoRNG.gif" ></a>
            <a href="https://www.emp-online.fr/"><img id="LogoDroit2" src="./LogoEMP.png"></a>

            <?php if($_SESSION['LoggedIn']==1){
                        include('./Loged.php');
                    }
                    else
                    {
                    ?>
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
                                        $_SESSION['LoggedIn']=1;
                                        header("Location: index.php");
                                    }
                                
                                } else {
                                    echo "Wrong username or Password";
                                }
                                } else {
                                echo "Nom d'utilisateur et/ou mot de passe manquant";
                                die();
                            }
                        }
            ?>
        </body>
</html>

