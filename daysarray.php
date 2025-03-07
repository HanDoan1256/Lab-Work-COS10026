<?php
// daysarray.php - Array Manipulation Task

// Declare and initialize an array with days in English
$days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

echo "<p>The Days of the week in English are: " . implode(", ", $days) . "</p>";

// Re-assign values to French days
$days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];

echo "<p>The Days of the week in French are: " . implode(", ", $days) . "</p>";
?>
