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
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set id='" . $_POST['id'] . "', username='" . $_POST['username'] . "', email='" . $_POST['email'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', accnt='" . $_POST['accnt'] . "', bal='" . $_POST['bal'] . "', address='" . $_POST['address'] . "', country='" . $_POST['country'] . "', nation='" . $_POST['nation'] . "', phn='" . $_POST['phn'] . "', accnttype='" . $_POST['accnttype'] . "', pin='" . $_POST['pin'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "<div align='center' style='margin:2px;padding:3px;border:1px solid #190b20;background:green;font-weight:bold;text-align:center;color:white;'>SUCCESS</div>";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
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
	<title>Edit Account | MidFirst Bank</title>
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
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">USER ID</div></td></tr></tbody></table>
						<input name="username" class="txtField" value="<?php echo $row['username']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">EMAIL</div></td></tr></tbody></table>
						<input name="email" class="txtField" value="<?php echo $row['email']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">FIRSTNAME</div></td></tr></tbody></table>
						<input name="fname" class="txtField" value="<?php echo $row['fname']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">LASTNAME</div></td></tr></tbody></table>
						<input name="lname" class="txtField" value="<?php echo $row['lname']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">ACCOUNT NO</div></td></tr></tbody></table>
						<input name="accnt" class="txtField" value="<?php echo $row['accnt']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">BALANCE</div></td></tr></tbody></table>
						<input name="bal" class="txtField" value="<?php echo $row['bal']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">ADDRESS</div></td></tr></tbody></table>
						<input name="address" class="txtField" value="<?php echo $row['address']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">COUNTRY</div></td></tr></tbody></table>
						<input name="country" class="txtField" value="<?php echo $row['country']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">NATIONALITY</div></td></tr></tbody></table>
						<input name="nation" class="txtField" value="<?php echo $row['nation']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">PHONE NO</div></td></tr></tbody></table>
						<input name="phn" class="txtField" value="<?php echo $row['phn']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">ACCOUNT TYPE</div></td></tr></tbody></table>
						<input name="accnttype" class="txtField" value="<?php echo $row['accnttype']; ?>">
						<div class="clear"></div>
	</div>
	<div class="input-group"> 
	<table cellspacing="0" cellpadding="0"><tbody><tr><td width="90%" align="center"><div style="border-radius:2px;border:2px solid brown; background-color: #222; background-repeat: no-repeat; background-align: center; color: #FFF; padding: 4px; font-weight: bolder; text-align: center;font-size: 13px;margin-left:1px;">ACCOUNT PIN</div></td></tr></tbody></table>
						<input name="pin" class="txtField" value="<?php echo $row['pin']; ?>">
						<div class="clear"></div>
	</div>
	<div align="left" class="form-control w3ls-end">
						<input name="submit" type="submit" class="btn" value="Update">
						<div class="clear"></div>
	</div>
</form>
</div>
</div>
<?php include('../footer.php'); ?>