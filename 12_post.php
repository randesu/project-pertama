<?php


function jumlahkan($arr){
    $total = 0;
    foreach ($arr as $nilai){
        $total += $nilai;
    }
    return $total;
}

$angka5 =  $_POST['kalimat'];
$angkabaru = explode(',',$angka5);

$total = jumlahkan($angkabaru);

echo "Total: ".$total;

?>