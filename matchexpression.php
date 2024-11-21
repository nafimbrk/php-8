<?php

// adl struktur kontrol yg mirip dgn switch case, namun lebih baik
// match adl expression, artinya dia bisa mengembalikan value(mirip kayak ternary operator)


// switch statement
// $value = "A";
// $result = "";

// switch ($value) {
//     case "A":
//     case "B":
//     case "C":
//         $result = "anda lulus";
//         break;
//     case "D":
//         $result = "anda tidak lulus";
//         break;
//     case "E":
//         $result = "sepertinya anda salah jurusan";
//         break;
//     default:
//         $result = "nilai apa itu?";
// }

// echo $result;



// match expression
// kalo kodenya panjang sekali gk bisa ya
// pokoknya mirip kaya ternary operator dari if expression jadi kalo switch case nya sederhana bgt bisa peke match expression
$value = "A";

$result = match ($value) {
    "A", "B", "C" => "anda lulus",
    "D" => "anda tidak lulus",
    "E" => "sepertinya anda salah jurusan",
    default => "nilai apa itu?"
};

echo $result;


// non equals check di match expression
// berbeda dgn switch case, di match expression, kita bisa melakukan pengecekan kondisi lainnya
// misal pengecekan menggunaka kondisi perbandingan, bahkan pengecekan kondisi berdasarkan boolean expression yg dihasilkan dari sebuah function
$value = 80;

$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result;




// match expression dengan kondisi
// juga bisa masukkan kondisinya berupa memanggil sebuah function, yg penting ia adl nilai nya boolean
$name = "mr. eko";

$result = match (true) {
    str_contains($name, "mr.") => "hello sir",
    str_contains($name, "mrs.") => "hello mam",
    default => "hello"
};

echo $result;

