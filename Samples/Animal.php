<?php

class Animal
{

    public function __construct()
    {
    }

    public function makeSound()
    {
        echo "Animal makes a sound<br>";
    }
}

class Dog extends Animal
{

    public function makeSound()
    {
        echo "Dog barks\n";
    }
}

$dog = new Dog();
$dog->makeSound();


class Cat extends Animal
{
    public function makeSound()
    {
        echo "Cat meows\n";
    }
}

class Cow extends Animal
{
    public function makeSound()
    {
        echo "Cow moos\n";
    }
}

function playSound($animal)
{
    $animal->makeSound();
}

$cat = new Cat();
//$cat->makeSound();

$cow = new Cow();
//$cow->makeSound();

playSound($cat);
playSound($cow);
?>