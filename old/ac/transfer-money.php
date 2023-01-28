<?php 
	require('function.php');
	
	include "database.php";

$y=$_SESSION['user']['username'];
$result = mysqli_query($conn,"SELECT * FROM users WHERE username IN ('$y')");
$bio= mysqli_fetch_array($result);

if (!isStatus($_GET['id'])) {
	header("location:suspended");
}

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
<div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Transfer Funds | Huntington Bank</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
	<style type="text/css">
		input {
				width: 35%;
				padding: 6px 20px;
				margin: 8px 0;
				box-sizing: border-box;
				border: 2px solid #3e015e;
				
		}
		select {
				width: 35%;
				padding: 6px 20px;
				margin: 8px 0;
				box-sizing: border-box;
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
			width: 80%;
			margin: 0 auto;	
			margin-top: 5%;
			margin-bottom: 5%;
			font-family: 'Muli', Arial, sans-serif;
			background-color: #003679;
			border-radius: 15px;
			padding: 2px;
		}
		.row {
			padding: 10px;
		}
		.form-control {
			background-color: #f9ebcf;
		}
		
		label {
			font-weight: bold;
		}
		.transfer-btn {
			background-color: #3091B2;
			border-radius: 10px;
			color: white;
			width: 25%;
		}
		span {
			color: red;
		}
		
		@media only screen and (max-width: 600px) {
				.formArea {
					width: 100%;
				}
				input {
				width: 80%;
				padding: 12px 20px;
				}
				select {
				width: 80%;
				padding: 12px 20px;
				input.transfer-btn {
				    width: 20em;  height: 2em;
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
	
	<!-- ##### FORM FOR TRANSFER ##### -->
	<div class="formArea">			
		
		<div class="col-md-12">
                        <div class="card">                           
                            <div class="content">
                                <form name="form" id="trans" method="post" action="payment-process">
                                    <input type="hidden" name="new" value="1" />
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Beneficiary Name<span>*</span></label>
                                                <input type="text" class="form-control border-input" placeholder="Beneficiary Name" id="beneficiary_number" name="benname" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Account Number<span>*</span></label>
                                                <input type="text" class="form-control border-input" placeholder="Account Number" id="beneficiary_account_number" value="<?php echo $_POST["benaccnt"]; ?>" name="benaccnt" required>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Beneficiary Bank<span>*</span></label>
                                                <input type="text" class="form-control border-input" placeholder="Beneficiary Bank" id="beneficiary_bank" name="benbank" required>
                                            </div>
                                        </div>
                                        
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Routing Number<span>*</span></label>
                                                <input type="text" class="form-control border-input" id="beneficiary_bank_adrress" placeholder="IBAN NUMBER" name="benno" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Amount<span>*</span></label>
                                                <input TextBox ID="TextBox3" runat="server"  onkeyup = "javascript:this.value=Comma(this.value);" class="form-control border-input" id="amount" name="benamt" value="<?php echo $_POST["benamt"]; ?>" required></input>
                                                <input type="hidden" class="form-control border-input" id="owner" name="owner" value="<?php echo $bio["username"]; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" name="submit" id="clear" value="CONTINUE TRANSFER" class="transfer"/> 
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

		  <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Subscribe to our newsletter</h2>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your e-mail">
                            <button type="submit">Subscribe</button>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->

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
<script language="javascript" type="text/javascript">
function Comma(Num) { //function to add commas to textboxes
        Num += '';
        Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
        Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
        x = Num.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1))
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        return x1 + x2;
    }

</script>
<!--End of Tawk.to Script-->
</html>