<?php

// di php 7 terdapat type data mixed, ini di gunakan ketika sebuah argument/return function mengembalikan data yg bisa berbeda"
// karena gk bisa menyebutkan tipe data berbeda" di php 7, maka biasanya di tambahkanlah tipe data baru bernama mixed
// di php 8, tipe data mixed diperbarui, karena di php 8 sudah ada union type, jadi sekarang tipe data mixed adl singkatan dari tipe data array|bool|callable|int|float|null|object|resource|string
function testmixed(mixed $data): mixed
{
    if (is_array($data)) {
        return [];
    } elseif (is_string($data)) {
        return "string";
    } elseif (is_numeric($data)) {
        return 1;
    } else {
        return null;
    }
}

var_dump(testmixed([]));
var_dump(testmixed("eko"));
var_dump(testmixed(1));
var_dump(testmixed(new stdClass()));