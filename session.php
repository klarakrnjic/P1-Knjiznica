<?php
session_start();
if(isset($_SESSION["ulogiran"]) && $_SESSION["ulogiran"] == "da"){
    //sve je ok
}else{
    header("Location:login.php");
}

?>