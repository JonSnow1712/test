<?php
$msg = "";
// Armstrong Number
if (isset($_POST["armNum"])) {
    $msg = "";
    $Num = $_POST["armNum"];
    $sum = 0;
    $ld = 0;
    $temp = $Num;
    while ($temp > 0) {
        $ld = $temp % 10;
        $sum = $sum + $ld * $ld * $ld;
        $temp = $temp / 10;
    }
    if ($sum == $Num) {
        $msg = "Number " . $Num . " is an armstrong number";
    } else {
        $msg = "Number " . $Num . " is not an armstrong number";
    }
}
//Prime Number
if (isset($_POST["primeNum1"]) && isset($_POST["primeNum2"])) {
    $msg = "Prime numbers between ";
    $Num1 = $_POST["primeNum1"];
    $Num2 = $_POST["primeNum2"];
    $msg = "Prime numbers between " . $Num1 . " and " . $Num2 . " is/are : ";
    for ($i = $Num1; $i <= $Num2; $i++) {
        $count = 0;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $count++;
            }
        }
        if ($count == 0) {
            $msg = $msg . $i . "  ";
        }
    }
}
//Calculator
if (isset($_POST["Num1"]) && isset($_POST["Num2"])) {
    $msg = "";
    $msg = "Result : ";
    $Num1 = $_POST["Num1"];
    $Num2 = $_POST["Num2"];
    $op = $_POST["calc"];
    $res = 0;

    if ($op == 'add') {
        $res = $Num1 + $Num2;
    } elseif ($op == 'sub') {
        $res = $Num1 - $Num2;
    } elseif ($op == 'mul') {
        $res = $Num1 * $Num2;
    } elseif ($op == 'div') {
        $res = $Num1 / $Num2;
    }
    $msg = $msg . " " . $res . " ";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP programs</title>
    <style type="text/css">
        input {
            margin-top: 20px;
        }

        text {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="NumOp">
        <fieldset>
            Checking number is armstrong number or not.<br>
            Enter number:<input type="number" name="armNum"><br>

            <hr>

            Number is prime or not.<br>
            Enter number range:<input type="number" name="primeNum1">
            <span> to </span>
            <input type="number" name="primeNum2"><br>
            <hr>

            Calculator<br>
            Enter 1st number:<input type="number" name="Num1"><br>
            Enter 2nd number:<input type="number" name="Num2"><br>
            Select operation:
            <input type="submit" name="calc" value="add">
            <input type="submit" name="calc" value="sub">
            <input type="submit" name="calc" value="mul">
            <input type="submit" name="calc" value="div">
            <hr>
            <span><?php echo $msg; ?></span><br>

            <input type="submit" name="submit" value="Run operation">


        </fieldset>
</body>

</html>