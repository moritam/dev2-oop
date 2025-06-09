<?php
class School
{
    // properties

    private $student_name;
    private $year_level;
    private $total_units;
    private $with_lab;


    private const PRICE_TABLE = [
        [
            "year_level" => 1,
            "price_per_unit" => 550,
            "with_lab" => 3359,
        ],
        [
            "year_level" => 2,
            "price_per_unit" => 630,
            "with_lab" => 4000,
        ],
        [
            "year_level" => 3,
            "price_per_unit" => 470,
            "with_lab" => 2890,
        ],
        [
            "year_level" => 4,
            "price_per_unit" => 501,
            "with_lab" => 3555,
        ],
    ];

    // constructor
    public function __construct(string $student_name, int $year_level, int $total_units, bool $with_lab)
    {
        $this->student_name = $student_name;
        $this->year_level = $year_level;
        $this->total_units = $total_units;
        $this->with_lab = $with_lab;
    }

    public function setStudentName($student_name)
    {
        $this->student_name = $student_name;
    }

    public function setYearLevel($year_level)
    {
        $this->year_level = $year_level;
    }

    public function setTotalUnits($total_units)
    {
        $this->total_units = $total_units;
    }
    public function setWithLab($with_lab)
    {
        $this->with_lab = $with_lab;
    }

    public function getStudentName()
    {
        return $this->student_name;
    }

    public function getYearLevel()
    {
        return $this->year_level;
    }

    public function getTotalUnits()
    {
        return $this->total_units;
    }
    public function getWithLab()
    {
        return $this->with_lab;
    }

    /**
     * Compute total price.
     * @return float|int
     * Price * TotalUnits + WithLab
     * 
     */
    public function getTotalPrice()
    {
        $target_prices = array_filter(self::PRICE_TABLE, function ($item) {
            return $item['year_level'] === $this->year_level;
        });

        $target_prices = array_merge(...array_values($target_prices));
        //var_dump($flattened);

        $unit_price = $target_prices['price_per_unit'];
        $with_lab_price = $target_prices['with_lab'];

        $base_price = $unit_price * $this->total_units;

        if ($this->with_lab) {
            $total_price = $base_price + $with_lab_price;
        } else {
            $total_price = $base_price;
        }

        return $total_price;
    }

}
?>