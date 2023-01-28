<?php require "../admin/database.php";

include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}

include_once 'database.php';
if(isset($_POST['submit']))
{
// variables for input data

$datas = $_POST['datas'];
$userid = $_POST['userid'];
$transid = $_POST['transid'];
$details = $_POST['details'];
$withdraw = $_POST['withdraw'];
$deposit = $_POST['deposit'];
// sql query for inserting data into database

mysqli_query($conn,"insert into transact(datas,userid,transid,details,withdraw,deposit) values ('$datas','$userid','$transid','$details','$withdraw','$deposit')") or die(mysqli_error());
echo "<script>
alert('Transaction Submitted');
window.location.href='transactions.php';
</script>";
}
?>
<!DOCTYPE HTML>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<meta name="HandheldFriendly" content="true" />
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<title>Add Transaction | MidFirst Bank</title>
    <style>
body,html{margin:0;padding:0;background-color:#696969;}
            body{backgrond:#fff;max-width:750px;margin:auto;}
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
 textarea{width:100%;height:80px;border-radius:5px;border:5px solid #ccc;}
</style>
</head>
<body>
<?php include('../header.php'); ?>

<div class="mybox">
    <div class="form-w3layouts">
    <?php if(isset($message)) { echo $message; } ?>
<form method="post" action="">
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">DATE</div></td></tr></tbody></table>
						<input type="text" name="datas" class="txtField" placeholder="DD/MM/YYYY">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">USER ID</div></td></tr></tbody></table>
						<input type="text" name="userid" class="txtField">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">TRANS ID</div></td></tr></tbody></table>
						<input type="number" name="transid" class="txtField" value="">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">DETAILS</div></td></tr></tbody></table>
						<textarea class="txtField" name="details" value=""></textarea>
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">WITHDRAW</div></td></tr></tbody></table>
						<input type="text" name="withdraw" class="txtField" value="">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">DEPOSIT</div></td></tr></tbody></table>
						<input type="text" name="deposit" class="txtField" value="">
						<div class="clear"></div>
	</div>
	<div align="left" class="form-control w3ls-end">
	        <input class="btn" type="reset" class="reset" value="Reset">
	        <input name="submit" type="submit" class="btn" value="Submit">
						<div class="clear"></div>
	</div>
</form>
</div>
</div>
<?php include('../footer.php'); ?>