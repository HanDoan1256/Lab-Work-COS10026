<?php
// myfirst.php - PHP Basics Task

// Declare and initialize an array with three values
$marks = [85, 85, 95];

// Modify the second element
$marks[1] = 90;

// Compute the average
$ave = array_sum($marks) / count($marks);

// Determine pass or fail
$status = ($ave >= 50) ? "PASSED" : "FAILED";

// Output the results
echo "<p>The average score is $ave</p>";
echo "<p>You $status</p>";
?>
