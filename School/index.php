<?php

include "School.php";

if (isset($_POST["submit"])) {

    $student_name = $_POST["student_name"];
    $year_level = $_POST["year_level"];
    $with_lab = $_POST["with_lab"];
    $total_units = $_POST["total_units"];

    $school = new School($student_name, $year_level, $total_units, boolval($with_lab));

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
        <h1 class="text-center m-2">REGISTRATION</h1>
        <form action="" method="post">
            <label for="student_name">Student's Name</label>
            <input type="text" name="student_name" placeholder="Name" class="form-control" required>
            <label for="name">Year level</label>
            <select name="year_level" id="" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <label for="name">Total Units</label>
            <input type="number" name="total_units" placeholder="Maximum of 23" class="form-control" min="0" max="23"
                step="1" required>

            <div class="row justify-content-center">
                <div class="form-check col-4">
                    <input class="form-check-input" type="radio" name="with_lab" id="flexRadioDefault1" value="1"
                        checked>
                    <label class="form-check-label" for="with_lab1">
                        With lab
                    </label>
                </div>
                <div class="form-check col-4">
                    <input class="form-check-input" type="radio" name="with_lab" id="flexRadioDefault2" value="0">
                    <label class="form-check-label" for="with_lab2">
                        Without lab
                    </label>
                </div>
            </div>

            <input name="submit" type="submit" value="Submit" class="btn btn-dark w-100">
        </form>

        <div class="card p-2">
            <p>Student name: <span class="text-italic mx-2"><?= $school->getStudentName() ?></span></p>
            <p>Year level: <span class="text-italic mx-2"><?= $school->getYearLevel() ?></span></p>
            <p>No. of units: <span class="text-italic mx-2"><?= $school->getTotalUnits() ?></span></p>
            <p class="fw-bolder">Total PRICE: <?= number_format($school->getTotalPrice()) ?><span
                    class="font-italic mx-2"><?= $school->getWithLab() ? '(With Lab)' : '(Without Lab)' ?>: </span></p>
        </div>
        <div class="card-footer">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>