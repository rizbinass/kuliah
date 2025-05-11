<?php
$mahasiswa = array(
    array("Nama" => "Andi", "Umur" => 20, "Jurusan" => "Informatika"),
    array("Nama" => "Budi", "Umur" => 21, "Jurusan" => "Sistem Informasi"),
    array("Nama" => "Citra", "Umur" => 19, "Jurusan" => "Teknik Komputer")
);

foreach ($mahasiswa as $data) {
    echo "Nama: " . $data["Nama"] . "<br>";
    echo "Umur: " . $data["Umur"] . "<br>";
    echo "Jurusan: " . $data["Jurusan"] . "<br><br>";
}
?>
