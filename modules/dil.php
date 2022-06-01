<?php

    session_start();
    $dil=strip_tags($_GET["dil"]);
    if($dil =="tr" || $dil =="en" || $dil =="ru" ){
        $_SESSION["dil"] = $dil;
        header("Location:/");

    }
    else{
        header("Location:/");
    }
?>