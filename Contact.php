<html>
    <?php session_start();?>
        <head>
            <title>Contact Metal Fest</title>
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
                    <td><a class="barre"href="./Profil.php">Mon profil</td>
                    <td><a class="barre"href="./Deconnexion.php">Deconnexion</td>
                    
                </tr>
            </table>
            <img class="image1" src="./bande_noir.jpeg">
            <img class="image2" src="./bande_noir.jpeg">

            <h2 class='TXT'>Mail du créateur de l'annonce</h2>
            <h2 class='info' ><?php echo $_SESSION['email'];?></h2>

        </body>
</html>