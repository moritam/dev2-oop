<?php

require_once "Animal.php";

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $species = $_POST["species"];
    $bleed = $_POST["breed"];

    switch ($species) {
        case 'Dog':
            $animal = new Dog($name, $species, $bleed);
            break;
        case 'Cat':
            $animal = new Cat($name, $species, $bleed);
            break;
        case 'Bird':
            $animal = new Bird($name, $species, $bleed);
            break;

        default:
            # code...
            break;
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    form>* {
        margin-bottom: 1rem;
    }
</style>

<body>
    <div class="container justify-content-center w-50">
        <div class="card border-primary m-2 p-2">
            <h1 class="text-center m-2">Animal Kingdom</h1>
            <form action="" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Name" class="form-control" required>
                <label for="name">Species:</label>
                <select name="species" id="" class="form-control">
                    <option value="" hidden>Select Species:</option>
                    <option value="Dog">Dog</option>
                    <option value="Cat">Cat</option>
                    <option value="Bird">Bird</option>
                </select>
                <label for="name">Breed:</label>
                <input type="text" name="breed" class="form-control" required>

                <input name="submit" type="submit" value="Submit" class="btn btn-primary w-100">
            </form>
        </div>

        <div class="card p-2 border-danger m-2">
            <p class="fs-1 text-danger fw-bolder"><span class="text-italic mx-2"><?= $animal->getName() ?></span></p>
            <p>Hello there! My name is <?= $animal->getName() ?>. I am a <span
                    class="text-italic fw-bolder"><?= $animal->getSpecies() ?></span>, and my bleed is <span
                    class="text-italic fw-bolder"><?= $animal->getBleed() ?>.</span></p>
            <p class="fs-1 text-danger font-italic"><span class="fw-bolder"><?= $animal->getName() ?></span> says:
                <?= $animal->speak() ?>
            </p>
        </div>
        <div class="card-footer">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>