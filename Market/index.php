<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit OOP</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Age</label>
        <input type="number" name="age" placeholder="Age">
        <label for="name">Distance</label>
        <input type="number" name="distance" placeholder="Distance(km)">
        <input type="submit" value="Compute">
    </form>
</body>

</html>

<?php
require_once "Fruit.php";
require_once "Meat.php";
//include "Fruit.php";


$tina_store = new Fruit("Tina's Mangos", "mango", 3.25, "yellow", "sweet");
$albert_store = new Meat("Albert's Meatshop", "Ribeye Steak", 10, "beef", "ribs");

echo $tina_store->openStore();
echo $tina_store->announce();
echo $tina_store->displayDetails();

echo $albert_store->openStore();
echo $albert_store->announce();
echo $albert_store->displayDetails();

echo '<hr>';

echo $john_store->openStore();
echo $john_store->announce();
echo $john_store->displayDetails();

?>