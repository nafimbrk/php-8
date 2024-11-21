<?php

// biasanya saat memanggil function, maka harus memasukkan argument/parameter sesuai dgn posisinya
// kita bisa memasukkan argument/parameter tanpa harus mengikuti posisinya
// juga menjadikan kode program mudah dibaca ketika memanggil function yg memiliki argument yg sgt banyak

// salah satu keuntungan saat menggunakan named argument itu adl ketika bikin default value argument, nah saat kita menambahkan default value terhadap argument kalo default valuenya ada ditengah/middle itu di php 7 gk terlalu berguna karena kalo kita panggil dimiddle maka belakangnya/lastnya itu harus dimasukkan
// dgn menggunakan named argument kita cukup nanti dimasukkannya adl first dan juga lastnya, jadi midllenya tdk perlu kita masukkan lagi
// jadi sekarang bisa menambahkan default value tdk harus dibelakang, jadi bisa ditengah atau bahkan di yg pertama karena saat kita manggilnya sekarang kita bisa menggunakan name argument

function sayhello(string $first, string $middle = "", string $last): void
{
    echo "hello $first $middle $last \n";
}

sayhello("eko", "kurniawan", "khannedy");
// sayhello("eko", "khannedy"); error

sayhello(last: "khannedy", first: "eko", middle: "kurniawan");
sayhello(first: "eko", last: "khannedy");

