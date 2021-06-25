<?php
// WHile****************Loop
$Num = $_GET['num'];
$Ct = 0;
while ($Ct <= 5) {
    $Ct++;
    if ($Num % 2 == 0) {
        echo $Num . " is an even number";
    } else {
        echo "The number is an odd number";
    }
}

// Do while loop***********************
do {
    echo "Loop number " . $Ct++;
} while ($Ct <= 5);

// The for loop*************************
for ($Ct = 0; $Ct <= 5; $Ct++) {
    echo "This is the for loop";
}

// The for each loop************************8
$array = ["Atom", "Hunter"];
foreach ($array as $value) {
    echo $value;
}

// Combining php pages 
include 'test.php';
include_once 'test.php';
require 'test.php';
require_once 'test.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter a number</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="num" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>