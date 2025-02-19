<?php
include("session.php");
include("template_zaglavlje_administracijsko.html");
?>

<div class="row medium-10 large-8 columns">
<h2>Knjige</h2>

</div>
<div class="row medium-10 large-8 columns" style="text-align:right">
<a href="knjige_forma.php">Nova knjiga</a>
</div>
<div class="row medium-10 large-8 columns">
<table width="100%">

<?php
include("pdo.php");

$upit = $db -> query("SELECT * FROM knjige ORDER BY naslov");
$rez = $upit->fetchAll();

foreach($rez as $knjiga){
    echo "<tr>";
    echo "<td>" . $knjiga["autor"] . ", " . $knjiga["naslov"] . "</td>";
    echo "<td style=\"text-align:right\">
    <a href=\"knjige_forma.php?id=" . $knjiga["id"] . "\">uredi</a> | <a href=\"brisanje.php?id=" . $knjiga["id"] . "\">pobriši</a></td>";
    echo "</tr>";
}
?>

</table>
<?php
include("template_podnozje.html");
?>
