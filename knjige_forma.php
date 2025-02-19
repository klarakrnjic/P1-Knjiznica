<?php
include("session.php");
include("pdo.php");
include("template_zaglavlje_administracijsko.html");

if (isset($_POST["submit"])) {
    $status = isset($_POST["status"]) ? $_POST["status"] : 0;

    if (isset($_POST["id"]) && $_POST["id"] > 0) {
        // update postojeceg zapisa
        $upit = $db->prepare("
        UPDATE knjige SET 
            autor = :autor, 
            naslov = :naslov, 
            protagonist = :protagonist, 
            broj_stranica = :broj_stranica, 
            sazetak = :sazetak, 
            status = :status
        WHERE id = :id");

        $upit->execute([
            ':autor' => $_POST["autor"],
            ':naslov' => $_POST["naslov"],
            ':protagonist' => $_POST["protagonist"],
            ':broj_stranica' => $_POST["broj_stranica"],
            ':sazetak' => $_POST["sazetak"],
            ':status' => $status,
            ':id' => $_POST["id"]
        ]);

        header("Location: knjige_admin.php");
        exit;
    } else {
        // unos novog zapisa
        $upit = $db->prepare("
        INSERT INTO knjige (autor, naslov, sazetak, protagonist, broj_stranica, status)
        VALUES (:autor, :naslov, :sazetak, :protagonist, :broj_stranica, :status)");

        $upit->execute([
            ':autor' => $_POST["autor"],
            ':naslov' => $_POST["naslov"],
            ':sazetak' => $_POST["sazetak"],
            ':protagonist' => $_POST["protagonist"],
            ':broj_stranica' => $_POST["broj_stranica"],
            ':status' => $status
        ]);

        header("Location: knjige_admin.php");
        exit;
    }
} else {
    // otvori formu (praznu ili popunjenu)
    if (isset($_GET["id"])) {
        // dohvati postojece podatke
        $upit = $db->prepare("SELECT * FROM knjige WHERE id = :id");
        $upit->execute([':id' => $_GET["id"]]);
        $rez = $upit->fetch(PDO::FETCH_ASSOC);

        $autor = $rez["autor"];
        $naslov = $rez["naslov"];
        $sazetak = $rez["sazetak"];
        $protagonist = $rez["protagonist"];
        $broj_stranica = $rez["broj_stranica"];
        $id = $_GET["id"];
        $status = $rez["status"]; // povuci podatke (0, 1, or 2)

    } else {
        // otvori praznu formu
        $autor = "";
        $naslov = "";
        $sazetak = "";
        $protagonist = "";
        $broj_stranica = "";
        $status = 0;
        $id = "";
    }
}
?>

<div class="row">
<div class="medium-12 large-12 columns">

<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
    Autor: <input type="text" name="autor" value="<?php echo htmlspecialchars($autor); ?>"><br>
    Naslov: <input type="text" name="naslov" value="<?php echo htmlspecialchars($naslov); ?>"><br>
    Sažetak: <br>
    <textarea name="sazetak" rows="10"><?php echo htmlspecialchars($sazetak); ?></textarea><br>
    Protagonist: <input type="text" name="protagonist" value="<?php echo htmlspecialchars($protagonist); ?>"><br>
    Broj stranica: <input type="text" name="broj_stranica" value="<?php echo htmlspecialchars($broj_stranica); ?>"> <br>

    <!-- padajuci izbornik -->
    <label>Status:</label>
    <select name="status">
        <option value="0" <?php echo ($status == 0) ? 'selected' : ''; ?>>--</option>
        <option value="1" <?php echo ($status == 1) ? 'selected' : ''; ?>>Pročitano</option>
        <option value="2" <?php echo ($status == 2) ? 'selected' : ''; ?>>Želja</option>
    </select>

    <br>
    <input type="submit" name="submit" value="Dalje" class="button">
</form>

<?php include("template_podnozje.html"); ?>
