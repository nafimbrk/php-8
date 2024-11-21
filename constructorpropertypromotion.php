<?php

// kadang kita sering sekali membuat property sekaligus mengisi property tersebut menggunakan constructor
// sekarang kita bisa otomatis langsung membuat property dengan via constructor
// maksudnya mempromosikan parameter/argument yg ada di constructor langsung otomatis menjadi sebuah property

// property dan constructor
// class product
// {
//     public string $id;
//     public string $name;
//     public int $price;
//     public int $quantity;

//     public function __construct(string $id, string $name, int $price, int $quantity)
//     {
//         $this->id = $id;
//         $this->name = $name;
//         $this->price = $price;
//         $this->quantity = $quantity;
//     }
// }

// constructor property promotion
class product
{
    public function __construct(public string $id,
                                public string $name,
                                public int $price = 0,
                                public int $quantity = 0,
                                private bool $exspensive = false)
    {       
    }
}

$product = new product(id: "1", name: "mie ayam", price: 15000);
var_dump($product);

echo $product->name;

