<html>
    <?php session_start();?>
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
            <img id="image1" src="./bande_noir.jpeg">
            <img id="image2" src="./bande_noir.jpeg">
            
            <?php
                echo $_SESSION['userID'];
            ?>

            <div id="event"
                <?php
                    foreach($reponse as $row)
                    {
                ?>
                    <p>
                        <h2> Evenements </h2> <?php echo $row['Titre'] ?></br>
                        <h2> Festival </h2> <?php echo $row['Festival'] ?></br>
                        <h2> Date de Debut </h2> <?php echo $row['DateDebut'] ?></br>
                        <h2> Date de Fin </h2> <?php echo $row['DateFin'] ?></br>
                        <h2> Information </h2> <?php echo $row['Info'] ?></br>
                    </p>
                <?php
                }
                $reponse->closeCursor();
                ?>
            </div>
        </body>
</html>