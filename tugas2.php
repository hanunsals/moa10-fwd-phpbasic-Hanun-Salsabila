<?php

// Fungsi untuk mengembalikan nilai reverse string
function reverseString($str) {
    return strrev($str);
}

// Fungsi untuk menghitung luas segitiga siku-siku
function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Fungsi untuk mencari nilai terbesar dalam sebuah array
function nilaiTerbesar($arr) {
    return max($arr);
}

// Fungsi untuk menampilkan nilai ganjil dalam sebuah array
function nilaiGanjil($arr) {
    $ganjil = array_filter($arr, function ($nilai) {
        return $nilai % 2 != 0;
    });
    return $ganjil;
}

// Fungsi untuk menampilkan bilangan Fibonacci
function fibonacci($n) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

// Fungsi untuk menggabungkan dua array
function gabungArray($arr1, $arr2) {
    return array_merge($arr1, $arr2);
}

// Contoh penggunaan fungsi-fungsi di atas
$inputString = "Indonesia Raya";
echo "1. Reverse String: " . reverseString($inputString) . "<br><br>";

$alas = 5;
$tinggi = 8;
echo "2. Luas Segitiga Siku-Siku: " . luasSegitiga($alas, $tinggi) . "<br><br>";

$arrayAngka = [1,2,3,4,5,6,7,8,9];
echo "3. Nilai Terbesar dalam Array: " . nilaiTerbesar($arrayAngka) . "<br><br>";

echo "4. Nilai Ganjil dalam Array: " . implode(', ', nilaiGanjil($arrayAngka)) . "<br><br>";

$jumlahFibonacci = 9;
echo "5. Bilangan Fibonacci: " . implode(', ', fibonacci($jumlahFibonacci)) . "<br><br>";

$array1 = [10, 20, 30];
$array2 = [1, 2, 3];
echo "6. Gabungan Dua Array: " . implode(', ', gabungArray($array1, $array2)) . "<br>";

?>