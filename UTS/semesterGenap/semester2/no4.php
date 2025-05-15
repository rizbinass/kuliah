<?php
function hurufTerbanyak($kata) {
    $kata = strtolower(str_replace(" ", "", $kata));
    $frekuensi = count_chars($kata, 1);

    $max = 0;
    $hasil = [];

    foreach ($frekuensi as $ascii => $jumlah) {
        $char = chr($ascii);
        if (ctype_alpha($char)) {
            if ($jumlah > $max) {
                $max = $jumlah;
                $hasil = [$char];
            } elseif ($jumlah == $max) {
                $hasil[] = $char;
            }
        }
    }

    return "Huruf terbanyak: '" . implode("', '", $hasil) . "' muncul $max kali.";
}

echo hurufTerbanyak("universitas bani saleh");
?>
