<html>
    <?php session_start();?>
        <head>
            <title>CreateEvent Metal Fest</title>
            <link rel="stylesheet" href="CreateEvent.css">
        </head>
        <body>
        <?php include('./header.php');?>
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
            echo ($_SESSION['userID']);
        ?>
            <form method="POST"action="CreateEvent.php">
                <p>
                    <label for="Titre">Nom de l'evenement</label>:<input type="text" name="titre" id"titre"required=""/><br>
                    <label for="Festival">Festival</label>:<input type="text" name="fest" id"fest"required=""/><br>
                    <label for="DateDebut">Date de Debut</label>:<input type="date" name="begin" id"begin"required=""/><br>
                    <label for="DateFin">Date de Fin</label>: <input type="date" name="end" id"end"required=""/><br>
                    <label for="info">Information</label>:<input type="textbox" name="info" id"info"required=""/><br>
                    <input type="submit" value="Creer evenement"/>
                </p>
            </form>
            <?php
            if( isset($_POST["Titre"]) AND isset($_POST["Festival"])AND isset($_POST['DateDebut'])AND isset($_POST['DateFin'])AND isset($_POST['info']) AND $_POST["Titre"] != "" AND $_POST["Festival"] != "" AND $_POST["DateDebut"] != "" AND $_POST['DateFin']!=""AND $_POST['info']!="") {

                $Titre=$_POST['Titre'];
                $Fest=$_POST['Festival'];
                $Dbegin=$_POST['DateDebut'];
                $Dend=$_POST['DateFin'];
                $info=$_POST['info'];

                try {
                    $bdd= new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8','root','');
                }
                catch(Exception $e) {
                    die('Erreur:'.$e->getMessage());
                }
                $sql = "SELECT Titre FROM event WHERE Titre='".$Titre."'";
                $reponse=$bdd->query($sql);
                if($reponse->rowCount() == 0) 
                {
                    $sql2 = "INSERT INTO `user`('ID_Festival','ID_Crea',`Titre`, `Festival`, `DateDebut`, `DateFin`, `Info`) VALUES (Null,$_SESSION[userID],'".$Titre. "', '". $Fest. "', '".$Dbegin. "', '".$Dend."','".$info."')";
                    $bdd->exec($sql2);     
                }
                
            }
?>
        </body>
</html>