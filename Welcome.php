<html>
    <?php session_start(); ?>
        <head>
            <title>Welcome Metal Fest</title>
            <link rel="stylesheet" href="Welcome.css">
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
            <h2 id="welcome">Bienvenue</h2>
            <img id="image3" src="./welcome.jpg">
            
            <?php
                echo $_SESSION['userID'];
            ?>

        </body>
</html>