<?php


//data produk dan harga
$produk = [
    'kaos' => 100000,
    'celana' => 200000, 
    'topi' => 50000,
];

//keranjang belanja produk dan jumlah
$keranjang = [
    'kaos' => $_POST['kaos'],
    'celana' => $_POST['celana'],
    'topi' => $_POST['topi'],
];

$total3 = 0;
foreach($keranjang as $item => $qty){
    if(isset($produk[$item])){
        $total3 += $produk[$item]*$qty;
    }
}


// $angka5 =  $_POST['kalimat'];
// $angkabaru = explode(',',$angka5);

// $total = rata_rata($angkabaru);

echo "adalah: ".$total3;

?>