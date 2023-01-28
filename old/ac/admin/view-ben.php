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
$result = mysqli_query($conn,"SELECT * FROM beneficiary WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<meta name="HandheldFriendly" content="true" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
	<title>Client Details | MidFirst Bank</title>
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
<form method="post" action="#">
    <div align="center" class="input-group"> 
						<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>"></input>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">ACCOUNT NAME</div></td></tr></tbody></table>
						<input disabled name="benname" class="txtField" value="<?php echo $row['benname']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">ACCOUNT NUMBER</div></td></tr></tbody></table>
						<input disabled name="benaccnt" class="txtField" value="<?php echo $row['benaccnt']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">BANK NAME</div></td></tr></tbody></table>
						<input disabled name="benbank" class="txtField" value="<?php echo $row['benbank']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">ROUTING NUMBER</div></td></tr></tbody></table>
						<input disabled name="benno" class="txtField" value="<?php echo $row['benno']; ?>">
						<div class="clear"></div>
	</div>
</form>
</div>
</div>