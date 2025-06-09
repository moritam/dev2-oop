<?php
$age = 0;
$distance = 0;
$total_fare = 0;

include "Fare.php";

if (isset($_POST["submit"])) {

    $age = $_POST["age"];
    $distance = $_POST["distance"];

    // create an instance of fruits(object)
    $fare = new Fare($age, $distance);

    var_dump($fare);

    $total_fare = $fare->computeTotalFare();

    //var_dump($total_fare);
}

?>

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
        <input type="number" name="age" placeholder="Age" min="10" max="80" required>
        <label for="name">Distance</label>
        <input type="number" name="distance" placeholder="Distance(km)" step="1" min="0" required>
        <input name="submit" type="submit" value="Compute">

        <p>Age: <?= $age ?> years old</p>
        <p>Distance: <?= $distance ?> km</p>

        <p>Fare: <?= $total_fare ?> Php</p>
    </form>
</body>

</html>