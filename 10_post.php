<?php

$panjang = $_POST['kalimat'];

$angka_sebelumnya = 0;
$angka_sekarang = 1;

echo 'Deret fibonacci';

for ($i = 0; $i < $panjang; $i++){
    echo $angka_sebelumnya." ";
    $tambah = $angka_sebelumnya + $angka_sekarang;
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $tambah;
}
?>