<?php
// processbooking.php - Server-Side Validation Task

function sanitise_input($data) {
    return htmlspecialchars(trim($data));
}

if (!isset($_POST["firstname"])) {
    header("Location: register.html");
    exit();
}

$firstname = sanitise_input($_POST["firstname"]);
$lastname = sanitise_input($_POST["lastname"]);
$age = sanitise_input($_POST["age"]);
$food = sanitise_input($_POST["food"]);
$partysize = sanitise_input($_POST["partysize"]);
$species = isset($_POST['species']) ? sanitise_input($_POST['species']) : "Not Specified";
$tours = [];
if (isset($_POST["accom"])) $tours[] = "Accommodation";
if (isset($_POST["4day"])) $tours[] = "4 Day Tour";
if (isset($_POST["10day"])) $tours[] = "10 Day Tour";
$tourList = !empty($tours) ? implode(" and ", $tours) : "No tours selected";

if (!preg_match("/^[a-zA-Z]+$/", $firstname) || !preg_match("/^[a-zA-Z-]+$/", $lastname)) {
    echo "<p>Error: Invalid name format.</p>";
    exit();
}

if (!is_numeric($age) || $age < 10 || $age > 10000) {
    echo "<p>Error: Age must be between 10 and 10,000.</p>";
    exit();
}

echo "<h1>Rohirrim Tour Booking Confirmation</h1>";
echo "<p>Welcome $firstname $lastname!</p>";
echo "<p>You are now booked on the $tourList.</p>";
echo "<p>Species: $species</p>";
echo "<p>Age: $age</p>";
echo "<p>Meal Preference: $food</p>";
echo "<p>Number of travellers: $partysize</p>";
?>
