<!-- **********************MY fisrt lesson  -->


<?php
// This is for displaying number the screen
// $name = $_GET['person'];
// $Fnum = $_GET['fnum'];
// $Snum = $_GET['snum'];
// $Ans = $Fnum + $Snum;
// echo $name . " The sum of your numbers is " . $Ans;

// ****************Ex1
// $Ex1 = $_GET['ex1'];
// if ($Ex1 % 5 == 0) {
//     echo "The number is devisible by 5";
// } else {
//     echo "This number is not devisible by 5";
// }

// ***********************Ex2
// $Ex2 = $_GET['ex2'];
// if ($Ex2 % 2 == 0) {
//     echo "This number is an even number";
// } else {
//     echo "The number is an odd number";
// }


// // ***********************EX3
// $Fnum = $_GET['num1'];
// $Snum = $_GET['num2'];
// $Ans = $Fnum - $Snum;
// echo $Fnum . " Minus " . $Snum . " is " . $Ans

$N = $_GET['n'];
$Ans = $N * 1000;
echo $N . "  In metres is " . $Ans;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>First lesson</title>
</head>

<body>
    <!-- <form method="GET">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="person" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fisrt Number</label>
            <input type="number" class="form-control" name="fnum" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Second Number</label>
            <input type="number" class="form-control" name="snum" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
        </div>
        <button type="submit" class="btn btn-primary">Answer</button>
    </form> </br> -->

    <!-- This is ex1 -->
    <!-- <form method="GET">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter a number</label>
            <input type="number" class="form-control" name="ex1" id="exampleInputPassword1">
            <button>Submit</button>
        </div>
    </form> -->
    <!-- This exercise **************************************2 -->
    <!-- <form method="GET">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter a number</label>
            <input type="number" class="form-control" name="ex2" id="exampleInputPassword1">
            <button>Submit</button>
        </div>
    </form> -->

    <!-- This is exercise *******************************************3 -->
    <!-- <form method="GET">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter your fisrt number</label>
            <input type="number" class="form-control" name="num1" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Enter second number</label>
            <input type="number" class="form-control" name="num2" id="exampleInputPassword1">
            <button>Ans</button>

    </form> -->

    <!-- **********************************Exercise 4-->
    <form method="GET">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter number in kilometres</label>
            <input type="number" class="form-control" name="n" id="exampleInputPassword1">
            <button>Convert to meters</button>

    </form>

</body>

</html>