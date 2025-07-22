<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banking_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["customer_id"] . " - Name: " . $row["first_name"] . " - Email: " . $row["email"] . "Phone: " . $row["phone"] .  "Address: " . $row["address"] .  "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>