<?php
include ("pdo.php");

if(isset($_GET["id"]) && $_GET["id"]>0){
    $upit= $db-> query("DELETE FROM knjige WHERE id=" . $_GET["id"]);
    header("Location:knjige_admin.php");
}
?>