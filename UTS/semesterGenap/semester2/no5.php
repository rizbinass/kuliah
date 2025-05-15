<?php
function isPrima($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

function desimalKeBiner($n) {
    if ($n == 0) return '';
    return desimalKeBiner(intval($n / 2)) . ($n % 2);
}

function konversiJikaPrima($n) {
    if (isPrima($n)) {
        $biner = desimalKeBiner($n);
        if ($biner == '') {
            return '0';
        } else {
            return $biner;
        }
    } else {
        return "Bukan bilangan prima";
    }
}

echo konversiJikaPrima(13);
?>
