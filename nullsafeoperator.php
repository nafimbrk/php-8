<?php

// biasanya ketika ingin mengakses sesuatu dari sebuah object yg bisa memungkinkan nilai null, maka kita akan melakukan pengecekan apakah object tersebut null/tidak, jika tidak baru kita akses object tersebut
// dgn nullsafe operator, kita gk perlu melakukan itu, secara otomatis php akan melakukan pengecekan null tersebut
class addreas
{
    public ?string $country;
}

class user{
    public ?addreas $addreas;
}

// manual null check
// function getcountry(?user $user): ?string
// {
//     if ($user != null) {
//         if ($user->addreas != null) {
//             return $user->addreas->country;
//         }
//     }
//     return null;
// }

// nullsafe operator
function getcountry(?user $user): ?string
{
    return $user?->addreas?->country;
}

echo getcountry(null);