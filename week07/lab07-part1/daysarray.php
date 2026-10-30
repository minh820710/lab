<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Arrays</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
    <?php
    $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    echo "<p>The days of the week in English are:<br>";
    echo implode(", ", $days) . ".</p>";
    ?>
    <?php
    $days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];

    echo "<p>The days of the week in French are:<br>";
    echo implode(", ", $days) . ".</p>";
    ?>
</body>
</html>