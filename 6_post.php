<?php

$kode_menu = $_POST['kalimat'];


switch($kode_menu){
    case 'A':
        echo "Harga makanan: rp20.000";
        break;

    case 'B':
        echo "Harga makanan: Rp25.000";
        break;

    case 'C':
        echo "Harga makanan: Rp30.000";
        break;

    default :
        echo "Menu tidak tersedia";
}
?>