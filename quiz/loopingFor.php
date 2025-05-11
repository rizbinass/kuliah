<?php
echo "Ganjil</br>";
for($i = 1;$i <= 10;$i++){
    if($i % 2 != 0){
        echo $i . "</br>";
    }
}

?>

<?php
echo "Genap</br>";
for($i = 1;$i <= 10;$i++){
    if($i % 2 == 0){
        echo $i . "</br>";
    }
}

?>