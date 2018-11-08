<?php
try
{
$bdd= new PDO('mysql:host=localhost;dbname=testweb;charset=utf8','root','');
}
catch(Exception $e)
{
    die('Erreur:'.$e->getMessage());
}
$reponse=$bdd->query(' SELECT*FROM user');
foreach($reponse as $row)
{
    if(isset($_POST["name"]) AND isset($_POST["password"])){
        if($_POST["name"]==$row["name"]){
            if($_POST["name"]==$row["name"]){
                header('Location :./Accueil.php');
            }
            else{
            echo 'Wrong password' ;
            }
        }
        else{
            echo 'Wrong username' ;
        }
    }
}
?>