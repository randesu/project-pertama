<?php


function rata_rata($arr){
    $total2 = 0;
    $count = count($arr);

    foreach ($arr as $nilai4){
        $total2 += $nilai4;
    }
    return $total2/$count;
}


$angka5 =  $_POST['kalimat'];
$angkabaru = explode(',',$angka5);

$total = rata_rata($angkabaru);

echo "adalah: ".$total;

?>