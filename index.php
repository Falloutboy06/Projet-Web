<html>
    <?php session_start();?>
        <head>
            <title>Accueil Metal Fest</title>
            <link rel="stylesheet" href="index.css">
        </head>
        <body>
            <?php include('./header.php');  ?>
            <table id="tab">
                <tr>
                    <td><a class="barre" href="./SignUp.php">Inscription</a></td>
                    <td><a class="barre" href="./LogIn.php">Connexion</a></td>
                    <td><a class="barre" href="./Event.php">Evenements</td>
                    <td><a class="barre" href="./CreateEvent.php">Creer un évènement</td>
                    <?php if($_SESSION['LoggedIn']==1){
                        include('./ProfilButton.php');
                        include('./DecoButton.php');
                    }
                    ?>
                </tr>
            </table>
            <img id="image1" src="./bande_noir.jpeg">
            <img id="image2" src="./bande_noir.jpeg">

            <?php
            echo $_SESSION['userID'];
            ?>

                <p>Bienvenue sur Metal Fest !</p>
                <p>Un site fait par des métalleux pour des métalleux</p>
                <p>Sur Metal Fest rencontrez des métalleux du monde entier</p>
                <p>organisez vos voyages et partagez vos souvenirs</p>
            
        </body>
</html>