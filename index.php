<?php
    if (isset($_POST["hitung"])) {
        $bentuk = $_POST["bentuk"];
        
        if ($bentuk == "segitiga") {
            $alas = $_POST["alas"];
            $tinggi = $_POST["tinggi"];
            if ($alas > 0 && $tinggi > 0) {
                $luas = 0.5 * $alas * $tinggi;
                echo "<p>Luas Segitiga: <strong>{$luas} cm²</strong></p>";
            } else {
                echo "<p>Masukkan angka yang valid!</p>";
            }
        } elseif ($bentuk == "lingkaran") {
            $jari2 = $_POST["jari2"];
            if ($jari2 > 0) {
                $luas = pi() * pow($jari2, 2);
                echo "<p>Luas Lingkaran: <strong>" . number_format($luas, 2) . " cm²</strong></p>";
            } else {
                echo "<p>Masukkan angka yang valid!</p>";
            }
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 1</title>
</head>
<body>
<div class="container">
    <h2>Hitung Luas</h2>
    <form method="POST">
        <label for="bentuk">Pilih Bentuk:</label>
        <select name="bentuk" id="bentuk" required>
            <option value="segitiga">Segitiga</option>
            <option value="lingkaran">Lingkaran</option>
        </select>

        <div id="segitiga-fields">
            <label for="alas">Alas (cm):</label>
            <input type="number" name="alas" id="alas" step="0.01">
            
            <label for="tinggi">Tinggi (cm):</label>
            <input type="number" name="tinggi" id="tinggi" step="0.01">
        </div>

        <div id="lingkaran-fields" style="display: none;">
            <label for="jari2">Jari-Jari (cm):</label>
            <input type="number" name="jari2" id="jari2" step="0.01">
        </div>

        <button type="submit" name="hitung">Hitung</button>
    </form>
    </div>

    <script>
    document.getElementById("bentuk").addEventListener("change", function () {
        var bentuk = this.value;
        document.getElementById("segitiga-fields").style.display = (bentuk === "segitiga") ? "block" : "none";
        document.getElementById("lingkaran-fields").style.display = (bentuk === "lingkaran") ? "block" : "none";
    });
</script>
</body>
</html>