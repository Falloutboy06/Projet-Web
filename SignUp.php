<html>
    <?php session_start() ?>
        <head>
            <title>SignUp Metal Fest</title>
            <link rel="stylesheet" href="SignUp.css">
        </head>
        <body>
        <?php include('./header.php'); ?>
            <table id="tab">
                <tr>
                    <td><a class="barre" href="./SignUp.php">Inscription</a></td>
                    <td><a class="barre" href="./LogIn.php">Connexion</a></td>
                    <td><a class="barre" href="./Event.php">Evenements</td>
                    <td><a class="barre" href="./CreateEvent.php">Creer un évènement</td>
                </tr>
            </table>
            <img id="image1" src="./bande_noir.jpeg">
            <img id="image2" src="./bande_noir.jpeg">
            *<a href="https://www.hellfest.fr/" ><img id="LogoGauche1" src="./LogoHF.jpg"></a>
            <a href="https://www.sylakopenair.com/"><img id="LogoGauche2" src="./LogoSLK.gif" ></a>
            <a href="https://www.ragnaroek-festival.com/"><img id="LogoDroit1" src="./LogoRNG.gif" ></a>
            <a href="https://www.emp-online.fr/"><img id="LogoDroit2" src="./LogoEMP.png"></a>

            <?php if($_SESSION['LoggedIn']==1){
                        include('./Loged.php');
                    }
                    else
                    {
                    ?>
                        <form method="POST" action="SignUp.php" >
                            <p>
                                <label for="pseudo">Nom d'utilisateur</label>: <input type="text" name="pseudo" id"pseudo"required=""/><br>
                                <label for="Mdp">Mot de passe</label>: <input type="password" name="MDP" id"MDP"required=""/><br>
                                <label for="AGE">Age</label>: <input type:"text" name="AGE" id"AGE"required=""/><br>
                                <label for="Mail">E-mail</label>: <input type:"text" name="Mail" id"Mail"required=""/><br>
                                <input type="submit" value="Inscription"/>
                            </p>
                        </form>
                        <?php
                                if( isset($_POST["pseudo"]) AND isset($_POST["MDP"])AND isset($_POST['AGE'])AND isset($_POST['Mail']) AND $_POST["pseudo"] != "" 
                                                            AND $_POST["MDP"] != "" AND $_POST["AGE"] != "" AND $_POST['Mail']!="") {

                                    $username=$_POST['pseudo'];
                                    $password=$_POST['MDP'];
                                    $age=$_POST['AGE'];
                                    $email=$_POST['Mail'];

                                    try {
                                        $bdd= new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8','root','');
                                    }
                                    catch(Exception $e) {
                                        die('Erreur:'.$e->getMessage());
                                    }
                                    $sql = "SELECT name FROM user WHERE name='".$username."'";
                                    $reponse=$bdd->query($sql);
                                    if($reponse->rowCount() == 0) 
                                    {
                                        $sql2 = "INSERT INTO `user` (`userID`, `name`, `password`, `age`, `mail`) VALUES (NULL, '".$username. "', '". $password. "', '".$age. "', '".$email. "')";
                                        $bdd->exec($sql2);
                                        header("Location: Welcome.php");      
                                    }
                                    else
                                    {
                                        echo("Nom d'utilisateur deja utilisé");
                                    }
                                }
                            }
                    ?>
        </body>
</html>