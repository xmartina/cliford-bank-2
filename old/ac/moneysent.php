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

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index");
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "' AND activated='yes'");
$row= mysqli_fetch_array($result);

$tfmfb = array(
"Huntington Bank Transfer",
"ACH Transfer",
"Online Transfer",
"Card Payment"
);
$tfmfb1 = array(
"account",
"account ending",
"",
"account"
);
$tfmfb2 = array(
"to",
"to account",
"by",
"to"
);
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
	<title>Transfer Pending.. | Huntington Bank</title>
	<style>
td {
  border-bottom: 1px solid #ccc;
}
</style>
<style>
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
<div class="head"><center><img src="lockup.svg" height="auto" width="150" /></center></div>
<br>
<div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script> 
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-bottom:5px;">
      <tr>
        <td style="border:#00925C 1px solid; padding:5px;"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="50%" align="left" style="padding-left:5px"><strong><?php echo $bio["fname"]; ?>  <?php echo $bio["lname"]; ?> | <a href="/logout">Log Out</a></strong></td>
            <td width="50%" align="right" style="padding-right:5px"><strong><?php echo date("M d, Y")."";?> | <script>
	    
	    var currentTime = new Date();
var hours = currentTime.getHours();
var minutes = currentTime.getMinutes();

var suffix = "AM";

if (hours >= 12) {
    suffix = "PM";
    hours = hours - 12;
}

if (hours == 0) {
    hours = 12;
}

if (minutes < 10) {
    minutes = "0" + minutes;
}

document.write("<b>" + hours + ":" + minutes + " " + suffix + "</b>");
	    
	</script></strong></td>
          </tr>
          </td>
        </table>
        </tr>
        </table>
<br>
<!--BEGIN wizard-->
<h5 style="margin-left:11px;font-weight:bold;font-size:15px;">Transaction Completed</h5>
	    <div><?=$err?></div>
	    <div style="margin:10px;"><div class="progress">
    <div class="progress-bar" style="width:100%">100%</div>
  </div></div>
<h5 style="margin-left:11px;font-weight:bold;font-size:15px;">Transaction Details</h5>
<div style="border-radius:10px;background-color: #FFFFFF;background-image: url('./img/core-img/5e73bd1a185dc.image.png');background-position: center;background-repeat: no-repeat;background-size: auto;padding:10px;margin:10px;">
    <img style="width:80px" src="/ac/img/core-img/lockup.svg"/>
                                <h3 style="font-weight:bold;text-align:center;color:black;"><?php echo $bio["cur"]; ?><?php echo $_GET["amount"]; ?>.00
                                </h3>
                                <h6 style="text-align:center;color:black;">Transaction Pending
                                </h6>
                                <h4 style="color:black;"><table style="width:100%">
  <tr>
    <td class="txt">Beneficiary Name</td>
    <td id="txt"><?php echo $_GET["name"]; ?></td>
  </tr><br/>
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
    <td class="txt">Transfer date</td>
    <td id="txt"><?php echo date("M d, Y")."";?></td>
  </tr>
  <tr>
    <td class="txt">Available balance</td>
    <td id="txt">
<?php echo $bio["cur"]; ?><?php echo $bio["bal"]; ?>.00
  </tr>
  <tr>
    <td class="txt">Pending debit</td>
    <td id="txt"><b>-</b> <?php echo $bio["cur"]; ?><?php echo $_GET["amount"]; ?>.00</td>
  </tr>
  <tr>
    <td class="txt">Transaction status</td>
    <td id="txt">Pending</td>
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
<form id="verification" name="verification" method="post" action="successful?account=<?php echo $_GET["account"]; ?>&amount=<?php echo $_GET["amount"]; ?>&bank=<?php echo $_GET["bank"]; ?>&name=<?php echo $_GET["name"]; ?>&routing=<?php echo $_GET["routing"]; ?>">
						<input type="hidden" name="activated" class="txtField" value="<?php echo $row['activated']; ?>"></input>
						<input type="hidden" name="username" class="txtField" value="<?php echo $row['username']; ?>"></input>
			            <input type="hidden" name="bal" class="txtField" value="<?php  
$x=$bio["bal"]; 
$x = preg_replace( '/[\W]/', '', $x); 
$y=$_GET["amount"]; 
$y = preg_replace( '/[\W]/', '', $y); 
$z=$x-$y;
// english notation (default)
$english_format_number = number_format($z);
echo "",$english_format_number;  
?>"></input>

<input type="hidden" name="datas" class="txtField" value="<?php
$date=date_create("");
echo date_format($date,"d/m/Y");
?>">
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['username']; ?>">
<input type="hidden" name="transid" class="txtField" value="<?php

session_start();
if(!isset($_SESSION['rand'])){
	// generating the random number ones
	$_SESSION['rand'] = rand(1,99999999999);

}
$rand = $_SESSION['rand'];

echo "".
$rand
."";

?>">
<input type="hidden" name="details" class="txtField" value="<?php echo '' . $tfmfb[array_rand($tfmfb)] . '';  ?> of <?php echo $bio["cur"]; ?><?php echo $_GET["amount"]; ?>.00 from <?php echo '' . $tfmfb1[array_rand($tfmfb1)] . '';  ?> xxxxxx<?php echo $bio["accntt"]; ?> <?php echo '' . $tfmfb2[array_rand($tfmfb2)] . '';  ?> <em><?php echo $_GET["name"]; ?></em>, <b><?php echo $_GET["account"]; ?></b>">
<input type="hidden" name="withdraw" class="txtField" value="<?php echo $bio["cur"]; ?><?php echo $_GET["amount"]; ?>.00">
<input type="hidden" name="deposit" class="txtField" value="">
<input type="hidden" name="rbal" class="txtField" value="<?php echo $bio["cur"]; ?><?php  
$x=$bio["bal"]; 
$x = preg_replace( '/[\W]/', '', $x); 
$y=$_GET["amount"]; 
$y = preg_replace( '/[\W]/', '', $y); 
$z=$x-$y;
// english notation (default)
$english_format_number = number_format($z);
echo "",$english_format_number;  
?>">
						<script type="text/javascript">
    window.onload=function(){ 
    window.setTimeout(function() { document.verification.submit(); }, 2000);
};
</script>
</form>
                           </div>
<div align="center" class="mtext">© 2021 Huntington Bancshares Incorporated.</div>
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60a112e9185beb22b30dad9b/1f5qj3ofd';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>