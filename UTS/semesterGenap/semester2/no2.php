<?php
function cariAngkaTerbesar($array) {
    return max($array);
}

$data = [2, 8, 3, 9, 5, 7];
echo "Angka terbesar adalah: " . cariAngkaTerbesar($data);
?>
