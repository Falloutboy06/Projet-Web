<html>
    <?php session_start();
        try {
            $bdd= new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8','root','');
        }
        catch(Exception $e) {
            die('Erreur:'.$e->getMessage());
        }  
        $SQL ="SELECT event.ID_Festival as IDF,event.Titre as Titre,user.name as createur, event.Festival as Fest,event.DateDebut as DD, event.DateFin as DF,event.Info as Info FROM event INNER JOIN user ON ID_Crea = user.userID";
        $reponse=$bdd->query("$SQL");
        ?>
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
                    <td><a class="barre" href="./Event.php">Evenements</td>
                    <td><a class="barre" href="./CreateEvent.php">Creer un évènement</td>
                    <?php if($_SESSION['LoggedIn']==1){include('./DecoButton.php');}?>
                </tr>
            </table>
            <img class="image1" src="./bande_noir.jpeg">
            <img class="image2" src="./bande_noir.jpeg">
            
            <div id="event">
                    <?php
                    foreach($reponse as $row)
                    {
                        ?>
                        <p>
                            <h2> ------------------------------------------------------------------------------ </h2></br>
                            <h2> Evenements </h2> <?php  echo $row['Titre'] ?></br>
                            <h2> Createur </h2> <?php echo $row['createur'] ?></br>
                            <h2> Festival </h2> <?php echo $row['Fest'] ?></br>
                            <h2> Date de Debut </h2> <?php  echo $row['DD'] ?></br>
                            <h2> Date de Fin </h2> <?php  echo $row['DF'] ?></br>
                            <h2> Informations </h2> <?php  echo $row['Info'] ?></br>
                        </p>
                    <?php
                    }
                    $reponse->closeCursor();
                    ?>
            </div>
        </body>
</html>