<html>
    <?php session_start(); ?>
        <head>
            <title>Event Metal Fest</title>
            <link rel="stylesheet" href="Event.css">
        </head>
        <body>
        <?php include('./header.php'); ?>
            <table id="tab">
                <tr>
                    <td><a class="barre" href="./SignUp.php">Inscription</a></td>
                    <td><a class="barre" href="./LogIn.php">Connexion</a></td>
                    <td><a class="barre" href="./Event.php">Evenements</a></td>
                    <td><a class="barre" href="./CreateEvent.php">Creer un évènement</a></td>
                    <?php if($_SESSION['LoggedIn']==1){
                        include('./ProfilButton.php');
                        include('./DecoButton.php');
                    }
                    ?>
                </tr>
            </table>
            <img class="image1" src="./bande_noir.jpeg">
            <img class="image2" src="./bande_noir.jpeg">
            <div >
                    <?php
                        try {
                            $bdd= new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8','root','');
                        }
                        catch(Exception $e) {
                            die('Erreur:'.$e->getMessage());
                        }  
                        $SQL ="SELECT event.ID_Festival as IDF,event.Titre as Titre,user.name as createur,user.mail as email,event.Festival as Fest,event.DateDebut as DD, 
                                    event.DateFin as DF,event.Info as Info FROM event INNER JOIN user ON ID_Crea = user.userID";
                        $reponse=$bdd->query("$SQL");
                        foreach($reponse as $row)
                        {
                    ?>
                        <p>
                            <h2 class='info'> ------------------------------------------------------------------------------ </h2>
                            <h2 class='TXT'> Evenements </h2> <h2 class='info'><?php  echo $row['Titre'] ?></h2>
                            <h2 class='TXT'> Createur </h2> <h2 class='info'><?php echo $row['createur'] ?></h2>>
                            <h2 class='TXT'> Festival </h2> <h2 class='info'><?php echo $row['Fest'] ?></h2>
                            <h2 class='TXT'> Date de Debut </h2> <h2 class='info'><?php  echo $row['DD'] ?></h2>
                            <h2 class='TXT'> Date de Fin </h2> <h2 class='info'><?php  echo $row['DF'] ?></h2>
                            <h2 class='TXT'> Informations </h2> <h2 class='info'><?php  echo $row['Info'] ?></h2>
                            <?php 
                                $_SESSION['email']=$row['email'];
                                if($_SESSION['LoggedIn']==1){include('./ContactButton.php');}
                            ?>
                            <h2 class='info'> ------------------------------------------------------------------------------ </h2>
                        </p>
                    <?php
                    }
                    $reponse->closeCursor();
                    

                    ?>
            </div>
        </body>
</html>       