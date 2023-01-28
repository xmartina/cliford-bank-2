<?php 
	require('function.php');

if (!isLoggedIn($_GET['id'])) {
	$_SESSION['msg'] = "You must log in first";
	header("Location:login?goto=" . urlencode($_SERVER['REQUEST_URI']));
}

if (!isStatus($_GET['id'])) {
	header("location:suspended");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index");
}
?>
<!DOCTYPE HTML>
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
    <title>Transactions | Huntington Bank</title>

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
                            <a href="home"><img width="50" src="img/unnamed.png" alt=""></a>
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
	
	<!-- ##### SNIPPET FOR TRANSFER ##### -->
	<div style="padding:5px;margin:2px;border-radius:5px;border:5px solid #ccc;">
	<div class="header">
                                <h4 class="title">TRANSACTIONS</h4>
    </div>
	<div class="content">
	    <table style="-webkit-overflow-scrolling:touch;overflow-x:auto;display:block;" width="100%" class="table table-striped b-t b-light" border="1" style="color: #003b71;"><thead>
	        <tr bgcolor: #003b71>
<th width="1%">Date</th>
<th width="2%">Confirmation</th>
<th width="9%">Description</th>
<th width="2%">Debit</th>
<th width="2%">Credit</th>
<th width="2%">Balance</th>
</tr></thead>
<?php require "database.php";

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM transact WHERE userid = '" . $_GET['userid'] . "' ORDER BY id DESC LIMIT 10;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["datas"]. "</td><td>" . $row["transid"]. "</td><td>" . $row["details"]. "</td><td><font color='red'>" . $row["withdraw"]. "</font></td><td>" . $row["deposit"]. "</td><td>" . $row["rbal"]. "</td></tr>";
}
echo "</table>";
} else { echo "<div style='margin:2px 1px 2px 5px;padding:3px;border:1px solid #000;background:#ccc;font-weight:bold;text-align:center;color:#000;'>No Transactions</div>"; }
$conn->close();
?>
</table></div></div>
	

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
<!--End of Tawk.to Script-->