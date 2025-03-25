<?php
    function faktorial($n){
        if($n == 0 || $n == 1){
            return 1;
        }
        return $n * faktorial($n - 1);
    }

    $totalHuruf = 11;
    $duplikasi = [2, 2];

    $anagram = faktorial($totalHuruf);
    foreach($duplikasi as $jumlah){
        $anagram /= faktorial($jumlah);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Faktorial</title>
    <style>
        #bc {
            margin-top: 5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="a">
            <?php
                echo "Jumlah kata yang terbentuk dari \"UNIVERSITAS\" adalah : $anagram";
            ?>
        </div>

        <div id="bc">
        <form method="POST" action="">
        <label for="angka1">Masukkan Angka Pertama:</label>
        <input type="number" name="angka1" id="angka1" min="0" required>

        <label for="operasi">Pilih Operasi:</label>
        <select name="operasi" id="operasi">
            <option value="faktorial">Faktorial (!)</option>
            <option value="kali">Kali (×)</option>
            <option value="bagi">Bagi (÷)</option>
        </select>

        <label for="angka2">Masukkan Angka Kedua (Opsional):</label>
        <input type="number" name="angka2" id="angka2" min="0">

        <button type="submit">Hitung</button>
    </form>

    <?php
    function hitungFaktorial($n) {
        $hasil = 1;
        for ($i = $n; $i >= 1; $i--) {
            $hasil *= $i;
        }
        return $hasil;
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = intval($_POST['angka1']);
        $operasi = $_POST['operasi'];
        $angka2 = isset($_POST['angka2']) ? intval($_POST['angka2']) : null;

        echo "<h3>Hasil:</h3>";

        if ($operasi == "faktorial") {
            $hasil = hitungFaktorial($angka1);
            echo "<p>$angka1! = $hasil</p>";
        }

        elseif ($operasi == "kali" && $angka2 !== null) {
            $hasil1 = hitungFaktorial($angka1);
            $hasil2 = hitungFaktorial($angka2);
            $hasil = $hasil1 * $hasil2;
            echo "<p>$angka1! × $angka2! = $hasil</p>";
        }

        elseif ($operasi == "bagi" && $angka2 !== null) {
            if ($angka2 == 0) {
                echo "<p>Pembagian dengan nol gak valid, bestie! 🚫</p>";
            } else {
                $hasil1 = hitungFaktorial($angka1);
                $hasil2 = hitungFaktorial($angka2);
                $hasil = $hasil1 / $hasil2;
                echo "<p>$angka1! ÷ $angka2! = $hasil</p>";
            }
        } else {
            echo "<p>Input gak valid, pastiin semua diisi dengan bener ya! 🤔</p>";
        }
    }
    ?>
        </div>
    </div>
</body>
</html>