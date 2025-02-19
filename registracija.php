<?php
include("pdo.php");
include("template_zaglavlje_korisnicko.html");

if(isset($_POST["submit"])) {
    $ime = trim($_POST["ime"]);
    $prezime = trim($_POST["prezime"]);
    $korisnicko_ime = trim($_POST["korisnicko_ime"]);
    $lozinka = $_POST["lozinka"];

    // Check if username already exists
    $checkUser = $db->prepare("SELECT id FROM admin WHERE korisnicko_ime = ?");
    $checkUser->execute([$korisnicko_ime]);

    if ($checkUser->rowCount() > 0) {
        echo "<p style='color:red;'>Korisničko ime već postoji! Odaberite drugo.</p>";
    } else {
        // Hash the password
        $hashed_password = password_hash($lozinka, PASSWORD_DEFAULT);

        // Insert new user
        $insertUser = $db->prepare("INSERT INTO admin (ime, prezime, korisnicko_ime, lozinka) VALUES (?, ?, ?, ?)");
        if ($insertUser->execute([$ime, $prezime, $korisnicko_ime, $hashed_password])) {
            echo "<p style='color:green;'>Registracija uspješna! Možete se prijaviti.</p>";
        } else {
            echo "<p style='color:red;'>Greška prilikom registracije. Pokušajte ponovo.</p>";
        }
    }
}
?>

<div class="row">
<div class="medium-12 large-12 columns">
<h4>Registracija</h4>
<form method="post" action="">
    Ime: <input type="text" name="ime" required><br>
    Prezime: <input type="text" name="prezime" required><br>
    Korisničko ime: <input type="text" name="korisnicko_ime" required><br>
    Lozinka: <input type="password" name="lozinka" required><br>
    <input type="submit" name="submit" value="Registracija" class="button">
</form>

<div>Već imate račun? </div><a href="login.php">Prijavite se</a>
</div>
</div>

<?php include("template_podnozje.html"); ?>