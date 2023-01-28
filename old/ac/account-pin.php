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
<?php
/* IMPORTANT FILES */
include "database.php";

//admin sign up
    $err="";
    if(isset($_POST['proceed'])){
        $username=$_POST['username'];
        $pin=$_POST['pin'];
        if(!$username || !$pin){
            $err='<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="background:#222;" class="modal-header">
                <h4 style="color:#fff;" align="center" class="modal-title">Attention</h4>
            </div>
            <div align="center" class="modal-body">
              <font color="red"><b>User ID Invalid</b></font><br>
              <div align="center" data-dismiss="modal" aria-hidden="true" style="font-weight:bold;background:#fff;border:1px solid #ccc;-moz-box-shadow: 5px 5px 5px rgba(68,68,68,0.6);
	-webkit-box-shadow: 5px 5px 5px rgba(68,68,68,0.6);
	box-shadow: 5px 5px 5px rgba(68,68,68,0.6);color:#000;padding:7px;border-radius:5px;margin-top:10px;margin-right:5px;margin-left:5px;">OK</div>
            </div>
        </div>
    </div>
</div>';
        }
        else {
            $pin=$pin;




            $q=$conn->query("SELECT * FROM users WHERE username='$username' AND pin='$pin'") or die(mysqli_error($conn));
            if(mysqli_num_rows($q)>0){
                $_SESSION['pin']=$username;
                header("location: confirm-payment?account=".$_POST['account']."&amount=".$_POST['amount']."&name=".$_POST['name']."&bank=".$_POST['bank']."&routing=".$_POST['routing']."");
                exit;
            }
            else {
                $err='<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="background:#222;" class="modal-header">
                <h4 style="color:#fff;" align="center" class="modal-title">Attention</h4>
            </div>
            <div align="center" class="modal-body">
              <font color="red"><b>PIN Authorization Failed</b></font><br>
              <div align="center" data-dismiss="modal" aria-hidden="true" style="font-weight:bold;background:#fff;border:1px solid #ccc;-moz-box-shadow: 5px 5px 5px rgba(68,68,68,0.6);
	-webkit-box-shadow: 5px 5px 5px rgba(68,68,68,0.6);
	box-shadow: 5px 5px 5px rgba(68,68,68,0.6);color:#000;padding:7px;border-radius:5px;margin-top:10px;margin-right:5px;margin-left:5px;">OK</div>
            </div>
        </div>
    </div>
</div>';
            }
        }
    }

?>
<!DOCTYPE html>
<div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Title -->
    <title>Verify PIN: Transfer Almost Completed | Huntington Bank</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
	<style type="text/css">
		input {
				width: 35%;
				padding: 16px 20px;
				margin: 8px 0;
				border-radius: 15px;
				border: 2px solid #3e015e;				
		}
		
		input:hover {
				background-color: #yello;
				color: red;
			}
		.formData {
			text-align: left;
			font-weight: bold;
		}
		.formArea {
			text-align: left;
			margin-top: 10%;
			margin-bottom: 10%;
			padding: 40px;			
		}
		.failure {
			font-size: 15px;
		}
		#transfer-btn {
			background-color: #3091B2;
			border-radius: 10px;
			color: white;
			width: 20%;
			padding: 9px;
		}
		
		@media only screen and (max-width: 600px) {
				.formArea {
					width: 100%;
				}
				input {
    				width: 80%;
    				padding: 12px 20px;
				}
				#transfer-btn {
        			width: 80%;
        			font-size: 15px;
	            }
		}
		@media (min-width: 600px) and (max-width: 1024px) {
  
                #transfer-btn {			
        		    width: 70%;
        		}
          
        }
	
	</style>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

   <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index"><img width="50" src="img/unnamed.png" alt=""></a>
                        </div>
						<div class="top-contact-info d-flex align-items-center">
						
						</div>
                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">                           
							
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="EA1W18 P.O. Box 182387. Columbus, OH 43218"><img src="img/core-img/placeholder.png" alt=""> <span>EA1W18 P.O. Box 182387. Columbus, OH 43218</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="ibank.huntington@gmail.com<"><img src="img/core-img/message.png" alt=""> <span>ibank.huntington@gmail.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="home">Home</a></li>
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="account-overview">My Account</a></li>
                                    <li><a href="services">Services</a></li>                                   
                                    <li><a href="contact">Contact</a></li>
                                    <li><a href="logout">Logout</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="img/core-img/call2.png" alt=""> ibank.huntington@gmail.com</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
	
	<!-- ##### FORM FOR TRANSFER ##### -->
	<div cass="row justify-content-center">
	
	<div style="border-radius:5px; border:1px solid #ccc; marin:20px; padding:10px;" class="formArea">
	    <div><?=$err?></div>
	    <center><form align="center" action="" method="post">
		<h3>Transfer Almost Complete...</h3>

        <input hidden value="<?php echo $_POST["routing"]; ?>" name="routing">
        <input hidden value="<?php echo $_POST["amount"]; ?>" name="amount">
        <input hidden value="<?php echo $_POST["name"]; ?>" name="name">
        <input hidden value="<?php echo $_POST["bank"]; ?>" name="bank">
        <input hidden value="<?php echo $_POST["username"]; ?>" placeholder="Enter User ID #" name="username">
        <input hidden value="<?php echo $_GET["account"]; ?>" placeholder="Enter Account Number #" name="account">
		<input type="number" name="pin" placeholder="Account Pin"><br>
	<!-- <input type="submit" name="submit"> --><p class="failure">Enter your <i><strong>Personal Identity Number</strong></i> to continue transfer.<div align="center">
         <button type="submit" name="proceed" class="btn btn-primary">CONTINUE TRANSFER</button>
      </div>
      </form></center>
	</div>
	</div>
	

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                 <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">About Us</h5>
                        <!-- Nav -->
                        <nav>
                            <p>We are the fourth largest, fully-integrated financial services group in Malaysia. We are ready to partner you in your quest to grow your wealth and financial independence. <a href="about.html" style="color: white;">Read More</a></p>
                        </nav>
                    </div>
                </div>

				
				<!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Useful Links</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="home">Home</a></li>
                                <li><a href="about">About Us</a></li>
                                <li><a href="services">Services</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Financial Solutions</h5>
                        <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="corporate-finance">Corporate Finance</a></li>
                                <li><a href="equity-capital-markets">Equity Capital Markets</a></li>
                                <li><a href="futures-trading">Futures Trading</a></li>
                                <li><a href="financial-advisory">Financial Advisory</a></li>                               
                            </ul>
                        </nav>
                    </div>
                </div>

               
                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-100">                        
						<img src="img/bg-img/deposit-travel.jpg"> 
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
The Huntington National Bank is an Equal Housing Lender and Member FDIC. The Huntington logo®, Huntington®,The Huntington logoHuntington.Welcome.® and Huntington Heads Up® are federally registered service marks of Huntington Bancshares Incorporated. &copy;<script>document.write(new Date().getFullYear());</script> Huntington Bancshares Incorporated.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
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