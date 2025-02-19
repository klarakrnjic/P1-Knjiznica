<?php
include("template_zaglavlje_korisnicko.html");
?>
 
<div class="row medium-10 large-8 columns">
<h2>Knjige</h2>

</div>
<table width="100%">

<?php
include("pdo.php");

$upit=$db->query("SELECT * FROM knjige order by autor");
$rez=$upit->fetchAll();

foreach($rez as $knjiga){
    echo "<div class=\"row medium-10 large-8 columns\">
<a href=\"knjiga.php?id=" . $knjiga["id"] . "\">" . $knjiga["autor"] . ", " . $knjiga["naslov"] . "</a></div>";
}
?>


<?php
include("template_podnozje.html");
?>
