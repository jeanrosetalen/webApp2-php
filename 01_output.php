<?php

//************************START OF PRACTICE***************************** */

// Using Echo - Output strings, numbers, html, etc
echo '<h1>Hello World!! I am Jean inside the school, and Rose outside.</h1>';
echo '<br>';
echo "I am currently " ,19, " years old";
echo '<br>';
echo '<h3>skl po Byeee</h3>';
echo '<br>';

// print - Similar to echo, but a bit slower
print 'Hello! this sentence is printed on the web using the keyword print.';
echo '<br>';

// print_r - Gives a bit more info. Can be used to print arrays
print_r("This is being printed using the keyword print_r which can also be used to print arrays with a lesser information than var_dump keyword");
echo '<br>';
print_r("This is an example of array being printed using print_r: ");
print_r( [1, 4, 3, 10]);
echo '<br>';

// var_dump - Even more info like data type and length
echo '<br>';
var_dump("Now this is being printed using var_dump keyword, in which you can output anything alongside with their information");
echo '<br>';
var_dump("This is an example of array being printed using var_dump: <br>");
var_dump([1, 4, 3, 10]);
echo '<br>';
var_dump("Look at its index number alongside with its value in the array");
echo '<br>';    

?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
</head>

<body>
    <h1>This is inside the html document.</h1>
    <!-- You can output PHP including variables, etc -->
    <h3>Hello <?php echo 'Jean Rose!'; ?> thsi is with semicolon.</h3>
    <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
    <h3>Hello <?= 'Jean Rose' ?> this is a shorter method and you don't have to put semicolon.</h3>
</body>

</html>

<!-- **********************END OF PRACTICE******************************* -->
