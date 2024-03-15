<?php


function urutkan($arr){
    sort($arr);
    return $arr;
}


$angka5 =  $_POST['kalimat'];
$angkabaru = explode(',',$angka5);

$total = urutkan($angkabaru);

echo "adalah: ".implode(',',$total);

?>