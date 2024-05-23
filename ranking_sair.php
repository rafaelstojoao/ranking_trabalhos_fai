<?php
    session_start();
 
 

        unset($_SESSION['username'],$_SESSION['nome'] );
        session_destroy();
        header("Location:index.php");
 
?>
 