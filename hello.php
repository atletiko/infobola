<?php

echo "Hallo apa kabar" ;
$bil1 = 10 ;
$bil2 = 15 ;
$bil3 = $bil1 + $bil2 ;
echo "<br>" ;
echo "Hasil Penjumlahan " . $bil1 . " dan " . $bil2 . " adalah " . $bil3 ;

$jam = date("g");
echo "<br> Sekarang jam " . $jam ;

if ($jam < "20") {
    echo "<br> Masih belum ngantuk!";
}

?>