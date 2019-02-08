<html>
    <?php session_start();?>
        <head>
            <title>Profil Metal Fest</title>
            <link rel="stylesheet" href="Profil.css">
        </head>
        <body>
            <?php include('./header.php');  ?>
            <table id="tab">
                <tr>
                    <td><a class="barre" href="./SignUp.php">Inscription</a></td>
                    <td><a class="barre" href="./LogIn.php">Connexion</a></td>
                    <td><a class="barre" href="./Event.php">Evenements</td>
                    <td><a class="barre" href="./CreateEvent.php">Creer un évènement</td>
                    <td><a class="barre"href="./Profil.php">Mon profil</td>
                    <td><a class="barre"href="./Deconnexion.php">Deconnexion</td>
                    
                </tr>
            </table>
            <img id="image1" src="./bande_noir.jpeg">
            <img id="image2" src="./bande_noir.jpeg">
            <a href="https://www.hellfest.fr/" ><img id="LogoGauche1" src="./LogoHF.jpg"></a>
            <a href="https://www.sylakopenair.com/"><img id="LogoGauche2" src="./LogoSLK.gif" ></a>
            <a href="https://www.ragnaroek-festival.com/"><img id="LogoDroit1" src="./LogoRNG.gif" ></a>
            <a href="https://www.emp-online.fr/"><img id="LogoDroit2" src="./LogoEMP.png"></a>

            <?php
            $ID=$_SESSION['userID'];
            try {
                $bdd= new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8','root','');
            }
            catch(Exception $e) {
                die('Erreur:'.$e->getMessage());
            }
            $SQL ="SELECT * FROM user where userID = $ID";
            $reponse=$bdd->query("$SQL");

            ?>
             <div id="profil">
             <?php
                    foreach($reponse as $row)
                    {
                        ?>
                        <p>
                            <h2> Nom </h2> <h2><?php  echo $row['name'] ?></h2></br>
                            <h2> Age </h2> <h2><?php echo $row['age']?></h2></br>
                            <h2> Email </h2> <h2><?php echo $row['mail'] ?></h2></br>
                        </p>
                        <?php
                    }
                    $reponse->closeCursor();
                ?>
            </div>

        </body>
</html>