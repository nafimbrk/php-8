<?php

// di php 7, untuk mendapatkan nama class sebuah object, perlu menggunakan namaclass::class atau get_class($object)
// di php 8, sekarang bisa langsung mengambilnama class dari $object::class secara langsung

class login
{
}

$login = new login();

var_dump($login::class);
var_dump(get_class($login));
var_dump(login::class);