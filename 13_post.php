<?php


function kalikan($arr){
    $total1 = 1;
    foreach ($arr as $nilai1){
        $total1 *= $nilai1;
    }
    return $total1;
}

$angka5 =  $_POST['kalimat'];
$angkabaru = explode(',',$angka5);

$total = kalikan($angkabaru);

echo "Total: ".$total;

?>