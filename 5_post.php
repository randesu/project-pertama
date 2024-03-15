<?php

$kata = $_POST['kalimat'];


if(strrev($kata)==$kata){
    echo "Palindrom";
}
else{
    echo "Bukan palindrom";
}
?>