<?php

class Animal
{
    protected $name;
    protected $species;
    protected $bleed;

    protected $sound;

    public function __construct($name, $species, $bleed, $sound)
    {
        $this->name = $name;
        $this->species = $species;
        $this->bleed = $bleed;
        $this->sound = $sound;
    }

    function getName()
    {
        return $this->name;
    }

    function getSpecies()
    {
        return $this->species;
    }
    public function getBleed()
    {
        return $this->bleed;
    }

    public function speak()
    {
        return 'Something';
    }

}

class Dog extends Animal
{
    public function __construct($name, $species, $bleed)
    {
        $this->name = $name;
        $this->species = $species;
        $this->bleed = $bleed;
    }

    public function getBleed()
    {
        return $this->bleed;
    }

    public function speak()
    {
        return 'Bark';
    }

}

class Cat extends Animal
{
    public function __construct($name, $species, $bleed)
    {
        $this->name = $name;
        $this->species = $species;
        $this->bleed = $bleed;
    }

    public function speak()
    {
        return 'Meow';
    }
}

class Bird extends Animal
{
    public function __construct($name, $species, $bleed)
    {
        $this->name = $name;
        $this->species = $species;
        $this->bleed = $bleed;
    }

    public function speak()
    {
        return 'Bird';
    }
}


?>