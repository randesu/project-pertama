<?php

$angka = $_POST['number'];
if ($angka % 2 == 0){
    echo "Angka genap";
}
else {
    echo "Angka ganjil";
}
echo "<br>";
echo $angka;

?>