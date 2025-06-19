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

$boolean = true;
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

?>