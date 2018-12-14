<html>
        <head>
            <title>CreateEvent Metal Fest</title>
            <link rel="stylesheet" href="CreateEvent.css">
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
            
            <form method="POST" >
                <p>
                    <label for="Titre">Nom de l'evenement</label>: <input type:"text" name="titre" id"titre"required=""/><br>
                    <label for="Festival">Festival</label>: <input type:"text" name="fest" id"fest"required=""/><br>
                    <label for="DateDebut">Date de Debut</label>: <input type:"date" name="begin" id"begin"required=""/><br>
                    <label for="DateFin">Date de Fin</label>: <input type:"date" name="end" id"end"required=""/><br>
                    <label for="info">Information</label>:<input type:"text" name="info" id"info"required=""/><br>
                    <input type="submit" value="Creer evenement"/>
                </p>
            </form>

        </body>
</html>