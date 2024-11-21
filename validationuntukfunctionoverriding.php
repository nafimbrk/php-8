<?php

// validation di function overriding
// sebelumnya tahu bahwa melakukan override dgn mengubah signature function hanya akan menimbulkan warning
// di php 8, hal tersebut sekarang akan menimbulkan error
// sehingga gk bisa lagi mengubah signature dari function yg kita override, seperti mengubah argument atau mengubah return value
class parentclass
{
    public function method(string $name)
    {

    }
}

class childclass extends parentclass
{
    // public function method(int $name)
    // {
    // } error
}






// private function overriding
// di php 7, saat membuat function, tapi ternyata di parentnya terdapat function dgn nama yg sama, walaupun private, hal itu di anggap overriding
// padahal sudah jelas kalo private function gk bisa di akses oleh turunannya
// di php 8, sekarang private function gk ada hubungannya lagi dgn child class nya, sehingga kita bebas membuat function dgn nama yg sama walaupun di parent ada function private dgn nama yg sama

class manager
{
    private function test(): void
    {

    }
}




class vicepresident extends manager
{
    public function test(string $name): string
    {
        return "vp";
    }
}
