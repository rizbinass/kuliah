<?php
function hitungJumlahKata($kalimat) {
    return count(explode(" ", $kalimat));
}

$kalimat = "Halo, nama saya Rizky Bintang Assabil";
echo "Jumlah kata: " . hitungJumlahKata($kalimat);
?>