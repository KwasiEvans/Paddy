<!-- **********************************Data types in PHP -->

<!-- String -->
<!-- To write a string in php you have to put them in quote  -->

<!-- //   String
// $name = "Evans";

// Integer
// $number = 30;

// Boolean ***********A true or false 
// true = 1;
// false = 0;

// Array
// $N = array($name, "Atom", "Hunter");
// echo $N['0'];
//  -->

<?php
// $Type = $_GET['tt'];
// $Sp = $_GET['ts'];
// $Size = $_GET['size'];
// if ($Type = "C" or "c") {
//     $Price = (5 / 100) * $Sp;
//     echo "The cost  of CRT is " . $Price;
// } else {
//     if ($Type = "L" and $Size = 14) {
//         $LPrice = (8 / 100) * $Sp;
//         echo " The cost of LED TV 14 inch is " . $LPrice;
//     } else {
//         if ($Type = "L" and $Size = 21) {
//             $OPrice = (10 / 100) * $Sp;
//             echo " The cost of LED TV 21 inch is " . $OPrice;
//         } else {
//             echo "Size is not available";
//         }
//     }
// }

// MyHit@gmail.com
// $Text1 = $_GET['num'];
// $Text2 = $_GET['num1'];
// $Avr = ($Text1 + $Text2) / 2;
// if ($Text1 > 75 and $Text2 > 75 and $Avr >= 80) {
//     echo "Your have been called for the interview";
// } else {
//     echo "Please you are not qualified";
// }

// $num1 = $_GET['num1'];
// switch ($num1) {
//     case 1:
//         echo "Monday";
//         break;
//     case 2:
//         echo "Tuesday";
//         break;
//     case 3:
//         echo "Wednesday";
//         break;
//     default:
//         echo "Invalid number";
//         break;
// }

$Fnum = $_GET['num1'];
$Snum = $_GET['num2'];
$OP = $_GET['OP'];
switch ($OP) {
    case '+':
        $Ans = $Fnum + $Snum;
        echo "The sum of " . $Fnum . " and " . $Snum . " is " . $Ans;
        break;
    case '-':
        $Ans = $Fnum - $Snum;
        echo "The Subtrac of " . $Fnum . " and " . $Snum . " is " . $Ans;
        break;
    case '*':
        $Ans = $Fnum * $Snum;
        echo "The Product of " . $Fnum . " and " . $Snum . " is " . $Ans;
        break;
    case '/':
        $Ans = $Fnum / $Snum;
        echo "The Divition of " . $Fnum . " and " . $Snum . " is " . $Ans;
        break;
    default:
        echo "Invalid input";
        break;
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form method="GET">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter First number</label>
            <input type="number" class="form-control" name="num1" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Enter a Operation</label>
            <input type="text" class="form-control" name="OP" id="exampleInputPassword1">
            <label for="exampleInputPassword1" class="form-label">Enter Second number</label>
            <input type="number" class="form-control" name="num2" id="exampleInputPassword1">
            <button>Submit</button>
        </div>
    </form>
</body>

</html>