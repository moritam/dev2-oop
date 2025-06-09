<?php
// OOP concepts

require_once "Market.php";

class Fruit extends Market
{
    private $color;
    private $taste;

    public function __construct($store_name, $product_name, $price, $color, $taste)
    {
        $this->store_name = $store_name;
        $this->product_name = $product_name;
        $this->price = $price;
        $this->color = $color;
        $this->taste = $taste;
    }

    public function announce()
    {
        return "Enjoy this {$this->color} and {$this->taste} {$this->product_name} for just \${$this->price}! <br><br>";
    }

    public function displayDetails()
    {
        return "<b>Price</b>: $" . $this->price . "<br>" .
            "<b>Color</b>: $" . $this->color . "<br>" .
            "<b>Taste</b>: $" . $this->taste . "<br>"
        ;
    }
}


//class Fruit
//{
//    // properties
//    public $name;
//    public $price;

//    // constructor
//    public function __construct($name = null, $price = null)
//    {
//        $this->name = $name;
//        $this->price = $price;
//    }

//    // methods
//    public function showInfo()
//    {
//        echo "The fruit is {$this->name} and the price is {$this->price}.\n";
//    }

//    public function setName($name)
//    {
//        $this->name = $name;
//    }

//    public function setPrice($price)
//    {
//        if ($price < 0) {
//            echo "Price cannot be negative";

//        } else {
//            $this->price = $price;
//        }
//    }

//    public function getName()
//    {
//        return $this->name;
//    }

//    public function getPrice()
//    {
//        return $this->price;
//    }

//    public function setValues($name, $price)
//    {
//        //$this->name = $name;
//        //$this->price = $price;

//        $this->setName($name);
//        $this->setPrice($price);
//    }
//}

//$apple = new Fruit("Apple", 3.25);
////$banana = new Fruit("Banana", 5);

////$apple->showInfo();
//$apple->setName("Apple");
//$apple->setPrice(3.25);

?>