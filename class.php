<?php
class Television {
    public $brand;
    public $size;
    public $color;
    public $resolution;   
    public $price;

    public function __construct($brand, $size, $color, $resolution, $price) {
        $this->brand = $brand;
        $this->size = $size;
        $this->color = $color;
        $this->resolution = $resolution;
        $this->price = $price;
    }    

    public function turnOn () {
        echo "oke sudah menyala";
    }

    public function turnOff () {
        echo "oke sudah mati";
    }
    
}

$Television = new Television("Samsung", "55 inch", "Black", "4K", 1500);

echo "Brand: " . $Television->brand . "\n";
echo "Size: " . $Television->size . "\n";
echo "Color: " . $Television->color . "\n";
echo "Resolution: " . $Television->resolution . "\n";
echo "Price: $" . $Television->price . "\n";


$Television->turnOn() . "\n";
$Television->turnOff() . "\n";
