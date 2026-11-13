<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Used Cars</title>
    <style>
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h1>Used Car Dealership</h1>

<?php
require_once("settings.php");

// Kết nối database
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    echo "<p>Database connection failure.</p>";
} else {
    $query  = "SELECT * FROM cars";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>Car ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year of Manufacture</th>";
        echo "</tr></thead>";
        echo "<tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "<p>There are no cars to display.</p>";
    }

    mysqli_close($conn);
}
?>
</body>
</html>