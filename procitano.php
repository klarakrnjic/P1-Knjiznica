<?php
include ("pdo.php");
include ("template_zaglavlje_administracijsko.html");
include ("session.php");

$upit=$db-> query("SELECT id, autor, naslov, status FROM knjige WHERE status = 1");
$rezultat = $upit->fetchAll();

echo "<h2>Moj popis pročitanih knjiga:</h2>";

if(count($rezultat)>0){ //provjeravamo je li korisnik sto procitao
    echo "<ul>";
    foreach($rezultat as $procitano){
        echo "<li><a href='procitana_knjiga.php?id=" . $procitano["id"] . "'>"
         .$procitano["naslov"] . "</a>
        </li>
        <br>";

    }
    echo "</ul>";
    echo "<a href='knjige_admin.php'>&lt;&lt;Povratak na sve knjige</a>";

} else {
    echo "<p>Vaše pročitane knjige pojavit će se ovdje.</p>";
    echo "<a href='knjige_admin.php'>&lt;&lt;Povratak na sve knjige</a>";
}
?>