<?php
//cara mengeluarkan sebuah nilai
echo "hello world <br>";

//cara menggunakan variabel
$data = "ini sebuah variabel <br>";
echo $data;

echo "<hr>";


//cara mengenal type data di php

//type data string = character
$stringv1 = "ini type data string <br>";
$stringv2 = 'ini type data string menggunakan petik satu <br>';
echo $stringv1 . $stringv2;

//type data integer = number/angka

$integer = 12345678 . "<br>";
echo $integer;

//tipe data float = bilangan desimal

$float = 2.14 . "<br>";
echo $float;

//type data boolean hanya punya dua value TRUE dan FALSE

$boolean = false;
echo $boolean;

//dapat dipanggil juga menggunakan var_dump: digunakan untuk mengeluarkan valuennya dan juga type datanya

var_dump ($boolean);
echo "<br>";

echo "<hr>";


//PHP aritmetic operator
$a = 5;
$b = 9;

//adition
echo $a + $b;
echo "<br>";

//subtration
echo $a - $b;
echo "<br>";

//multiplication
echo $a * $b;
echo "<br>";

// division
echo $a / $b;
echo "<br>";

//modulus
echo $a % $b;
echo "<br>";

//exponentiation
echo $a ** $b;
echo "<br>";

$namadepan = "Fathiin";
$namabelakang = "Rendra";
echo $namadepan ." ". $namabelakang;

echo "<hr>";                                                                                                                                                

//PHP assignment operator
$A = 10;
$b = 20;


echo $a = $b;   //x = y
echo "<br>";  
echo $a += $b;   // x = x + y
echo "<br>";
echo $a -= $b;   // x = x -y
echo "<br>";
echo $a *= $b;   // x = x * y
echo "<br>";
echo $a /= $b;   // x = x / y
echo "<br>";
echo $a %= $b;   // x = x % y
echo "<br>";

echo "<hr>"; 


//PHP comparison operator
$data3 = 6;
$data4 = 6;
//equal: mengecek nilai tanpa mengecek type datanya
if ($data3 == $data4) {
    echo "ini sudah benar <br>";
}else {
    echo "ini salah";
}
//identical: mengecek nilainya dan juga type datanya
if ($data3 === $data4) {
    echo "ini sudah benar <br>";
}else {
    echo "ini salah";
}
//equal: kondisi ketika tidak sama dengan 
if ($data3 != $data4) {
    echo "ini tidak sama <br>";
} else {
    echo "ini sama dengan <br>";
}
//PHP greater than or equal
if ($data3 > $data4){
    echo "ini pakai greater then <br>";
} elseif ($data3 >= $data4) {
    echo "ini pakai greater then or equal <br>";
} else {
    echo "ini salah";
}
//PHP less than or equal echo "ini pakai greater then";
if ($data3 < $data4){
 echo "ini pakai less than";
} elseif ($data3 <= $data4) {
    echo "ini pakai les than or equal ";
} else {
    echo "ini salah";
}

echo "<hr>"; 

//PHP if else

$data1 = 5;
$data2 = 6;

if ($data1 > $data2) {
    echo "data 1 lebih besar dari data 2";
} else {
    echo "data 2 lebih besar dari data 1";
}

echo "<hr>"; 

//PHP if elseif else

$a = 10;
$b = 20;

if ($a > $b) {
    echo "data a lebih besar dari data b";
} elseif ($a = $b) {
    echo "data a sama b nilainya sama";
} else {
    echo "data b lebih besar dari data a";
}

echo "<hr>";

//PHP switch statment 
$waktu = "pagi";
switch($waktu){
  case "pagi";
  echo "ini waktu pagi <br>";
  break;
  case "siang";
  echo "ini waktu siang <br>";
  break;
  case "sore";
  echo "ini waktu sore <br>";
  break;
  case "malam";
  echo "ini waktu malam <br>";
  break;
  default:
  echo "waktu tidak ditemukan <br>";
}

echo "<hr>";

//PHP while loop

//while loop: digunakan saat kodisi dicek diawal
$a = 1;

while ($a <= 5) {
    echo "angka ke-$a <br>";
    $a++;
}
//do...while:menjalankan blok kode baru mengecek kondisinya
    $a = 1;
    do{
        echo "angka ke-$a <br>";
        $a++;
    }while ($a <= 10);

echo "<hr>";

//for loop

for ($a = 1; $a <= 20; $a++) {
    echo "angka ke-$a <br>";
}

echo"<hr>";

//foreach

$array = [
    "apel",
    "mangga",
    "jeruk",
    "semangka"
];

foreach ($array as $b) {
    echo "saya suka buah $b <br>";
}

echo "<hr>";

//function

function mymassage () {
    echo "hello world via function";
}

mymassage(); //cara mengganti function

echo "<br>";

function myName($a) {
    echo "hello $a";
}

myName ("fathiin"); //cara memanggil function dan mengisi parameternya

$angka1 = 10;
$angka2 = 20;

function jumlah($a, $b){
  return $a + $b;
}

$data = jumlah($angka1, $angka2);
echo "hasil dari $angka1 + $angka2 adalah $data ";

echo"<br>";

//global dan local scope

$global = "fathiin"; //global scope

function nama() {
    global $global; //cara memanggil $variabel global scope
    $local = "rendra"; // local scope

    return "hello" . " " . $global . " " . $local;
}

$fungsi = nama();
echo $fungsi;



echo"<hr>";


$fat = "fathiin";
$ren = "rendra";

echo $fat ." ". $ren;






?>