<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
    $speciesNames = [
        "M" => "Human",
        "D" => "Dwarf",
        "E" => "Elf",
        "H" => "Hobbit"
    ];

    if (isset($_POST["firstname"]) && isset($_POST["lastname"])) {
        echo "<p>Welcome " . $_POST["firstname"] . " " . $_POST["lastname"] . " !<br>";
    }

    $tours = [];
    if (isset($_POST["4day"])) {
        $tours[] = "Four-day tour";
    }
    if (isset($_POST["10day"])) {
        $tours[] = "Ten-day tour";
    }
    if (count($tours) > 0) {
        echo "You are now booked on the " . implode(" and ", $tours) . "<br>";
    }

    if (isset($_POST["species"])) {
        $code = $_POST["species"];
        $species = isset($speciesNames[$code]) ? $speciesNames[$code] : $code;
        echo "Species: $species<br>";
    }
    if (isset($_POST["age"])) {
        echo "Age: " . $_POST["age"] . "<br>";
    }
    if (isset($_POST["food"])) {
        echo "Meal Preference: " . $_POST["food"] . "<br>";
    }
    if (isset($_POST["partysize"])) {
        echo "Number of travellers: " . $_POST["partysize"] . "</p>";
    }
    ?>
</body>
</html>
