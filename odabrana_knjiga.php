<?php
include("template_zaglavlje_administracijsko.html");
include("session.php");
include("pdo.php");
$id=isset($_GET["id"]) ? $_GET["id"] : 0;

    $upit = $db->query("SELECT * FROM knjige WHERE id= $id");
    $rez=$upit->fetchAll();

    echo "<h2>" . $rez[0]["naslov"] . "</h2>";
?>
<div class="row">
<div class="medium-12 large-12 columns">


<div class="row medium-10 large-8 columns">
    <b>Autor:</b>
    <?php
$id=isset($_GET["id"]) ? $_GET["id"] : 0;

$upit = $db->query("SELECT * FROM knjige WHERE id= $id");
$rez=$upit->fetchAll();

echo $rez[0]["autor"];
?></br>

    <b>Naslov: </b>
    <?php
$id=isset($_GET["id"]) ? $_GET["id"] : 0;

$upit = $db->query("SELECT * FROM knjige WHERE id= $id");
$rez=$upit->fetchAll();

echo $rez[0]["naslov"];
?></br>

<b>Protagonist: </b>
    <?php
$id=isset($_GET["id"]) ? $_GET["id"] : 0;

$upit = $db->query("SELECT * FROM knjige WHERE id= $id");
$rez=$upit->fetchAll();

echo $rez[0]["protagonist"];
?></br>

<b>Broj stranica: </b>
    <?php
$id=isset($_GET["id"]) ? $_GET["id"] : 0;

$upit = $db->query("SELECT * FROM knjige WHERE id= $id");
$rez=$upit->fetchAll();

echo $rez[0]["broj_stranica"];
?></br>

<b>Sažetak: </b>

</div>
<div class="row medium-10 large-8 columns">
<?php
$id=isset($_GET["id"]) ? $_GET["id"] : 0;

$upit = $db->query("SELECT * FROM knjige WHERE id= $id");
$rez=$upit->fetchAll();

echo $rez[0]["sazetak"];
?></br><br>

</div>
<div class="row medium-10 large-8 columns" style="text-align:center">
<a href="lista_zelja.php">&lt;&lt; povratak </a></div><br><br>

<?php
include("template_podnozje.html");
?>
