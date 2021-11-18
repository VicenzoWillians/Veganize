<?php
    session_start();

    if(isset($_SESSION["nome"])){
        echo 1;
    } else{
        echo 0;
    }
?>