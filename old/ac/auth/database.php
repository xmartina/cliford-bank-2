<?php
$conn = mysqli_connect("localhost", "qbteoghs_mfb", "Damilola1.#", "qbteoghs_mfb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>