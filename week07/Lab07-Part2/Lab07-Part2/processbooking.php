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

    // Name
    if (isset($_POST["firstname"]) && isset($_POST["lastname"])) {
        $firstname = htmlspecialchars($_POST["firstname"]);
        $lastname  = htmlspecialchars($_POST["lastname"]);
        echo "<p>Welcome $firstname $lastname !<br>";
    }

    // Tours (checkboxes only appear in $_POST when ticked)
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

    // Accommodation
    if (isset($_POST["accom"])) {
        echo "Accommodation: Booked<br>";
    }

    // Species
    if (isset($_POST["species"])) {
        $code = $_POST["species"];
        $species = isset($speciesNames[$code]) ? $speciesNames[$code] : htmlspecialchars($code);
        echo "Species: $species<br>";
    }

    // Age
    if (isset($_POST["age"])) {
        echo "Age: " . htmlspecialchars($_POST["age"]) . "<br>";
    }

    // Meal preference
    if (isset($_POST["food"])) {
        echo "Meal Preference: " . htmlspecialchars($_POST["food"]) . "<br>";
    }

    // Number of travellers
    if (isset($_POST["partysize"])) {
        echo "Number of travellers: " . htmlspecialchars($_POST["partysize"]) . "</p>";
    }
    ?>
</body>
</html>