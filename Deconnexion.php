<?php 
    session_start();
    $_SESSION['LoggedIn']=0;
    $_SESSION['userID']= null;
    header("Location: index.php");
?>