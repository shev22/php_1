<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Ex1
    echo '<strong>Ex1</strong>';
    echo '</br>';

    function calc1($a, $b)
    {

        $c = $a + $b;
        $d = $a - $b;
        $e = $a * $b;
        $f = $a / $b;

        return ($a . " + " . $b . " = " . $c . "</br>"
            . $a . " - " . $b . " = " . $d . "</br>"
            . $a . " / " . $b . " = " . $e . "</br>"
            . $a . " * " . $b . " = " . $f . "</br></br>"
        );
    }
    echo calc1(10, 2);

    //Ex2
    echo '<strong>Ex2</strong>';
    echo '</br>';

    function calc2($x, $y, $z)
    {

        $w = ($x + 1) * 4 - 2 * ($z - (2 * $x ** 2) + ($y ** 2));
        return $w . '</br></br>';
    }
    echo calc2(2, 6, 9);

    //Ex3
    echo '<strong>Ex3</strong>';
    echo '</br>';

    function var_num($a, $b)
    {

        $c = $a - $b;
        $d = 7;
        $result = $c + $d;
        return $result . '</br></br>';
    }
    echo var_num(17, 10);

    //Ex4
    echo '<strong>Ex4</strong>';
    echo '</br>';

    $text1 = "Привет,";
    $text2 = "Мир!";

    echo $text1 . " " . $text2 . '</br></br>';

    //Ex5
    echo '<strong>Ex5</strong>';
    echo '</br>';

    $name = "Francis";
    echo "Привет, " . $name . '</br></br>';

    //Ex6
    echo '<strong>Ex6</strong>';
    echo '</br>';

    $num = [1, 2, 3, 4, 5];
    $count = count($num);
    $sum = 0;
    for ($i = 1; $i <= $count; $i++) {
        $sum += $i;
    }
    echo  $sum . '</br></br>';

    //Ex7
    echo '<strong>Ex7</strong>';
    echo '</br>';

    $minute = 60;
    $hour = $minute * 60;
    $day  = $hour * 24;
    $month = $day * 30;
    $year = $month * 12;
    ?>
    <form action="#" method="GET">
        <label for="">Please enter a number</label></br>
        <input type="text" name="number">

        <select name="period">Select an option
            <option value="hour">hour(s)</option>
            <option value="day">day(s)</option>
            <option value="month">month(s)</option>
            <option value="year">year(s)</option>
        </select></br>
        <button name="submit">calculate</button></br>
    </form>
    <?php

    if (isset($_GET['submit'])) {
        $input = $_GET['number'];
        $period = $_GET['period'];
        if (empty($input)) {
            echo "Please enter a number";
            exit();
        }
        switch ($period) {
            case "hour":
                echo $input * $hour . '</br></br>';
                break;
            case "day":
                echo $input * $day . '</br></br>';
                break;
            case "month":
                echo $input * $month . '</br></br>';
                break;
            case "year":
                echo $input * $year . '</br></br>';
                break;
        }
    }

    //Ex8
    echo '</br><strong>Ex8</strong>';
    echo '</br>';

    date_default_timezone_set("Europe/Moscow");
    $hour = date("h");
    $minute = date("i");
    $second = date("s");
    echo $hour . ':' . $minute . ':' . $second . '</br></br>';

    //Ex9
    echo '<strong>Ex9</strong>';
    echo '</br>';

    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var++;
    $var--;
    echo $var . '</br></br>';


    //Ex10
    echo '<strong>Ex10</strong>';
    echo '</br>';


    define("SURNAME", "Okoroafor");
    $surname = "SURNAME";
    $name = 'F';
    $m_name = "C";
    $age = '55';

    if (defined($surname) == true) {
        echo "You can call me " . SURNAME . " " . $name . "." . $m_name . ".";
    } else {
        echo "does not exist";
    }

    ?>


</body>

</html>