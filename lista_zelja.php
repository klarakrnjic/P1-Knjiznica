<?php
include ("pdo.php");
include ("template_zaglavlje_administracijsko.html");
include ("session.php");

$upit=$db-> query("SELECT id, autor, naslov, status FROM knjige WHERE status = 2");
$rezultat = $upit->fetchAll();

echo "<h2>Moj popis želja:</h2>";

if(count($rezultat)>0){ //provjeravamo je li korisnik dodao knjige na popis želja
    echo "<ul>";
    foreach($rezultat as $zelja){
        echo "<li><a href='odabrana_knjiga.php?id=" . $zelja["id"] . "'>"
         .$zelja["naslov"] . "</a>
        </li><br>";}

    echo "</ul>";
    echo "<a href='knjige_admin.php'>&lt;&lt;Povratak na sve knjige</a>";

} else {
    echo "<p>Još uvijek nemate popis želja.</p>";
    echo "<a href='knjige_admin.php'>&lt;&lt;Povratak na sve knjige</a>";
}
?>