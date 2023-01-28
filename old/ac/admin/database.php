<?php
$conn = mysqli_connect("localhost", "affluen9_mfb", "Damilola1.#", "affluen9_mfb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>