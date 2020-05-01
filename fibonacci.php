<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 29-Apr-20
 * Time: 2:53 PM
 */

//To check if the form is submitted
if(isset($_GET['submit'])){
    //get the number entered by the user
    $n = $_GET['number'];

echo 'You have just entered '.$n. '<br><br>';

echo 'The Fibonacci sequence of '.$n. ' is: <br><br>';

//call to function
    Fibonacci($n);
}

//fibonacci function
function Fibonacci($n){
    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter +1;

    }
}
//End of function
?>

<--Form to allow user to enter any number -->
<form action="#" method="GET">
    <input type="number" name="number" placeholder="Enter any positive number...">
    <input type="submit" name="submit" value="Submit">
</form>

<-- End of form -->