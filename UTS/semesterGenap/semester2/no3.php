<?php
    $data = [3, 1, 5, 2, 4];
    function urutkanArray($data){
        sort($data);
        return $data;
    }

    $hasil = urutkanArray($data);

    echo "Hasil Pengurutan : ";
    foreach ($hasil as $angka){
        echo $angka . " ";
    }
?>