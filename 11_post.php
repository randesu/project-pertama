<?php

$angka4 = $_POST['kalimat'];

$jumlah_digit = 0;

while ($angka4 != 0 ){
    $angka4 = floor($angka4/10);
    $jumlah_digit++;
}

echo "Jumlah digit : $jumlah_digit";
?>