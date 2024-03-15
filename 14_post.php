<?php


function nilai_terbesar($arr){
    $max = $arr[0];
    foreach ($arr as $nilai3){
        if ($nilai3>$max){
            $max  = $nilai3;
        }
    }
    return $max;
}


$angka5 =  $_POST['kalimat'];
$angkabaru = explode(',',$angka5);

$total = nilai_terbesar($angkabaru);

echo "adalah: ".$total;

?>