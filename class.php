<?php
class Television {
    public $brand;
    public $size;
    public $color;
    public $resolution;   
    private $price;

    public function __construct( $brand,  $size,  $color,  $resolution,  $price) {
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

    public function getPrice() {
        return $this->price;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }
    
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }   
        return $this;
    }


}

$Television = new Television("Samsung", "55 inch", "Black", "4K", 1500);

echo "Brand: " . $Television->brand . "\n";
echo "Size: " . $Television->size . "\n";
echo "Color: " . $Television->color . "\n";
echo "Resolution: " . $Television->resolution . "\n";
echo "Price: $" . $Television->price . "\n";


$Television->turnOn();
echo "\n";
$Television->turnOff();
echo "\n";

// Example of using __get and __set
$Television->price = 9800;
echo "Updated Price: " . $Television->price . "\n";




