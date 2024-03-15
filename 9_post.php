<?php

$angka3 = $_POST['kalimat'];


$faktorial = 1;

for ($i = 1; $i <= $angka3; $i++){
    $faktorial *= $i;
}

echo "Faktorial dari $angka3 adalah $faktorial";

?>