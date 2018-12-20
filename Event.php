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
                    <td><a href="./SignUp.php">Inscription</a></td>
                    <td><a href="./LogIn.php">Connexion</a></td>
                    <td><a href="./Event.php">Evenements</td>
                    <td><a href="./CreateEvent.php">Creer un evenement</td>
                </tr>
            </table>
            <img id="image1" src="./bande_noir.jpeg">
            <img id="image2" src="./bande_noir.jpeg">

            <?php
                session_start();
                echo $_SESSION['userID'];
            ?>

        </body>
</html>