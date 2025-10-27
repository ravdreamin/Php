<?php
include 'db_connect.php';

$value = $_POST['value'];
$unit_from = $_POST['unit_from'];
$unit_to = $_POST['unit_to'];

$sql = "SELECT factor FROM conversions WHERE unit_from='$unit_from' AND unit_to='$unit_to'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $factor = $row['factor'];
    $converted_value = $value * $factor;

    echo "<h2>Result:</h2>";
    echo "<p>$value $unit_from = $converted_value $unit_to</p>";
} else {
    echo "<p style='color:red;'>Conversion not found in database.</p>";
}

echo "<br><a href='index.php'>Go Back</a>";
$conn->close();
?>
