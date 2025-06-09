<?php

class Fare
{
    // properties

    private $fare;
    private $age;
    private $distance;

    private const BASE_DISTANCE = 4;
    private const BASE_FARE = 8;
    private const DISCOUNT_AGE = 60;
    private const DISCOUNT_RATE = 20; // (%)
    private const ADDITION_FARE = 1; // 1php / km

    // constructor
    public function __construct($age = null, $distance = null)
    {
        $this->age = $age;
        $this->distance = $distance;
    }

    // methods
    public function showInfo()
    {
        //echo "The fruit is {$this->name} and the price is {$this->price}.\n";
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Compute total fare.
     * @return float|int
     */
    public function computeTotalFare()
    {
        $base_fare = $this->computeBaseFare();
        var_dump($base_fare);
        var_dump($this->age);

        var_dump($this->isDiscount());

        if ($this->isDiscount()) {
            $total_fare = $base_fare * (1 - (self::DISCOUNT_RATE) / 100);
        } else {
            $total_fare = $base_fare;
        }

        return $total_fare;

    }

    /**
     * return age is discount.
     * 
     * @return bool
     */
    public function isDiscount()
    {
        return $this->age >= self::DISCOUNT_AGE;
    }

    /**
     * compute base fare.
     * @return int
     */
    public function computeBaseFare()
    {
        if ($this->distance <= self::BASE_DISTANCE) {
            return self::BASE_FARE;
        } else {
            $additional_distance = $this->distance - self::BASE_DISTANCE;
            return self::BASE_FARE + $additional_distance * self::ADDITION_FARE;
        }
    }
}
?>