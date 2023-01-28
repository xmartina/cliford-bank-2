<?php
require_once '../library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme10.css">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>ADMINISTRATOR ACCESS</h3>
                       
                        <form method="post" name="frmLogin" id="frmLogin">
						 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
                           <br>
						   <input name="txtUserName" type="text" class="form-control"  id="txtUserName" placeholder="Admin Username" autocomplete="off" required=""/>
						<input name="txtPassword" type="password" class="form-control" id="txtPassword"  placeholder="Admin Password" autocomplete="off" required="" />
							<div class="form-button">
                                <button id="btnLogin" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                            <h6><span>Username: admin || Password: admin2020 </span></h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>