<?php

require_once ('db.php');

$get_id=$_REQUEST['id'];

move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location1=$_FILES["image"]["name"];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE users SET image_location ='$location1' WHERE id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Profile Image is Updated'); window.location='../home.php'</script>";
?>