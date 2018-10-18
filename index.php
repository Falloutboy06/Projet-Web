<?php

    if ($_POST["pseudo"] =="admin" AND $_POST["MDP"] == "admin")
    {
      header('Location: ./Accueil.php');
    } else {
        echo "non";
    }
    
?>