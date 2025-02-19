<?php
include("template_zaglavlje_korisnicko.html");
include("pdo.php");

if(isset($_POST["submit"])) {
    $korisnicko_ime = $_POST["korisnicko_ime"];
    $lozinka = $_POST["lozinka"];

    $upit = $db->prepare("SELECT * FROM admin WHERE korisnicko_ime = ?");
    $upit->execute([$korisnicko_ime]);
    $rez = $upit->fetch(PDO::FETCH_ASSOC);

    if (!$rez) {
        echo "Pogrešno korisničko ime";
    } else {
        if (password_verify($lozinka, $rez["lozinka"])) {
            session_start();
            $_SESSION["ulogiran"] = "da";
            header("Location: knjige_admin.php");
            exit;
        } else {
            echo "Pogrešna lozinka";
        }
    }
}
?>
 
<div class="row">
<div class="medium-12 large-12 columns">
<h4>Prijava</h4>
<form method="post" action="">
    Korisničko ime: <input type="text" name="korisnicko_ime" value=""><br>
    Lozinka: <input type="password" name="lozinka" value=""><br>
    <input type="submit" name="submit" value="Ulaz" class="button">
</form>
<div>Nemate račun? </div><a href="registracija.php">Registrirajte se</a>

<?php include("template_podnozje.html"); ?>
