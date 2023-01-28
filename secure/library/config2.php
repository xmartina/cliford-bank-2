<?php
 
// second database connection	//  This are my database constants 

define("DB_SERVER","localhost");
define("DB_USER","avenirbk_primebank");
define("DB_NAME","avenirbk_primebank");
define("DB_PASS","75857@PrimeBanK$$$");
$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
if(!$conn){
  #echo "<h1>Server connection is successful!</h1><br>";
}
$db=mysqli_select_db($conn,DB_NAME);
 if(!$db){
   echo '<meta content=0.000001;customer_login.php http-equiv="refresh" />';
}


// Third Databse connection //  This are my database constants 
 $host = "localhost";
$database = "avenirbk_primebank";
$username = "avenirbk_primebank";
$password = "75857@PrimeBanK$$$";


?>