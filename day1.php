<?php

echo "program ganji_genap";
$number=1;
if ($number % 2 == 0){
    echo "genap";
}else{
    echo "ganjil";
}

// PROGRAM HITUNGLUASSEGITIGA
// DEKLARASI
// VARIABEL a dan t tipe data >>> int
//VARIABEL hasil tipe data >>> float
// Algoritma
// nilai masuk (a, t)
// hasil = 1/2 * a * t
// nilai keluar ('luas segitiga: hasil')
echo "PROGRAM : HITUNGLUASSEGITIGA". PHP_EOL;
$a=6;
$t=20;
$hasil=1/2 * $a * $t ;
//$hasil=(int)(1/2 * $a * $t);
    // note
    // output : echo(output semua tipe data), print(output string), print_r
    // debugging : var_dump, print_r
    echo "Luas Segitiga : ", $hasil;
    //print("Luas segitiga: ". $hasil) ;
    echo "<br>";
    //var_dump($hasil);

/* Program hitung volume balok
deklarasi
var p, l , t int
var hasil string
algoritma
input(p, l , t)
hasil = p x l x t
output
Volume Balok :
82 x 46 x 18 = hasil
*/
echo "PROGRAM HITUNG VOLUME BALOK". PHP_EOL;
$p=82;
$l=46;
$t=18;

$hasil=(string)($p * $l * $t);

echo "Volume Balok : $hasil". PHP_EOL;

var_dump ($hasil);
?>