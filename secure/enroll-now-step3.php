<?php
require_once 'library/config.php';
require_once 'library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
	$result = doRegister();
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Avenza Prime Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">      <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

	<!-- Favicon icon -->    
	<link rel="stylesheet" href="../etc/clientlib-default.min.001bf72e86ac4a5150822ce748c8d0ae.css" type="text/css">
	<link rel="stylesheet" href="../site.min.css" type="text/css">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>    
	<!-- Google fonts -->	
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,400i,500,500i,700" rel="stylesheet">			
	<!-- Bootstrap -->    
	<link href="../css/bootstrap.min.css" rel="stylesheet">	
	<!-- Fontawsome -->    
	<link href="../css/font-awesome.min.css" rel="stylesheet"> 
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../assets/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="../assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../assets/css/style.css"/>
		
	<!-- Animate CSS-->    
	<link href="../css/animate.css" rel="stylesheet">    
	<!-- menu CSS-->    
	<link href="../css/bootstrap-4-navbar.css" rel="stylesheet">		
	<!-- Portfolio Gallery -->    
	<link href="../css/filterizer.css" rel="stylesheet">	
	<!-- Lightbox Gallery -->    
	<link href="../inc/lightbox/css/jquery.fancybox.css" rel="stylesheet">	
	<!-- OWL Carousel -->	
	<link rel="stylesheet" href="../css/owl.carousel.min.css">	
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">    
	<!-- Preloader CSS-->    
	<link href="../css/fakeLoader.css" rel="stylesheet">	
	<!-- Main CSS -->    
	<link href="../style.css" rel="stylesheet">    
	<!-- Default CSS Color -->     
	<link href="../color/default.css" rel="stylesheet">     
	<!-- Color CSS -->     
	<link rel="../stylesheet" href="color/color-switcher.css">    
	<!-- Default CSS Color -->     
	<link href="../color/default.css" rel="stylesheet">     
	<!-- Color CSS -->     
	<link rel="stylesheet" href="../color/color-switcher.css">	
	<!-- Responsive CSS -->    
	<link href="../css/responsive.css" rel="stylesheet">    
	<link href="../css/customcss.css" rel="stylesheet">    
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	
<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/passwordvalidation/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/passwordvalidation/SpryValidationPassword.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/confirmvalidation/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/confirmvalidation/SpryValidationConfirm.js" type="text/javascript"></script>

	</head>
<!--header open in header-->


<script type="text/javascript" src="../cdn.weglot.com/weglot.min.js"></script>

  <body>
  <style>
      .navbar-brand h2{
          font-size:35px;
          margin-top:2px;
      }
  </style>
	
	<div class="top-menu-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="top-menu-left">
						<p>Need help? Contact Us</p>
						<b><i class="fa fa-phone"></i> +1 (724) 755-3714</b>
						<b><i class="fa fa-envelope"></i><a style="color:##fff;" href="mailto:support@avenzaprimebank.com">support@avenzaprimebank.com</a></b>
					</div>				
				</div>				
				<div class="col-md-6">
					<div class="top-menu-right">
						<div class="footer-info-right">
							<ul>
							
<!-- GTranslate: https://gtranslate.io/ -->


<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<br /><select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>									
							</ul>					
						</div>					
					</div>				
				</div>
			</div>
		</div>
	</div>

	<div class="bussiness-main-menu-1x">	
		<div class="container">
			<div class="row">
				<div class="col-md-12">		
					<div class="business-main-menu">		
						<nav class="navbar navbar-expand-lg navbar-light bg-light btco-hover-menu">
						<a class="navbar-brand" href="../index-2.html">
							<img style="max-width:125px;" src="../logo1.png" class="d-inline-block align-top" alt="">		
							<!--<h2><span style="color:##EC4550;">I</span><span style="color:##0E3768;">BG</span></h2>-->
						</a>
					   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					  
						<ul class="navbar-nav ml-auto business-nav">
							<li class="nav-item dropdown">
									<a class="nav-link" href="../##" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Banking Services <i class="fa fa-angle-down"></i><span style="display: block;font-size: 11px;">Accounts & services</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: ##fff;">
									
									<div class="container">
										<div class="business-services nav1">	
											<div class="row">				
												<div class="col-md-12 service-content">
													<div class="row">
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../current-accounts.html" class="menuhead">Current Accounts</a>
																		<li><a class="dropdown-item" href="../premier-accounts.html">Premier Account</a></li>
																		<li><a class="dropdown-item" href="../advance-accounts.html">Advance Account</a></li>
																		<li><a class="dropdown-item" href="../student-accounts.html">Student Account</a></li>
																		<li><a class="dropdown-item" href="../bank-accounts.html">Bank Account</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../saving-accounts.html" class="menuhead">Savings</a>
																		<li><a class="dropdown-item" href="../isas-accounts.html">ISAs</a></li>
																		<li><a class="dropdown-item" href="../online-bonus-saver.html">Online Bonus Saver</a></li>
																		<li><a class="dropdown-item" href="../flexible-saver.html">Flexible Saver</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../credit-cards.html" class="menuhead">Credit cards</a>
																		<li><a class="dropdown-item" href="../32-month-balance-transfer.html">32 Month Transfer Credit Card</a></li>
																		<li><a class="dropdown-item" href="../advance.html">Advance Credit Card</a></li>
																		<li><a class="dropdown-item" href="../dual.html">Dual Credit Card</a></li>
																		<li><a class="dropdown-item" href="../classic.html">Classic Credit Card</a></li>
																		<li><a class="dropdown-item" href="../premier.html">Premier Credit Card</a></li>
																		<li><a class="dropdown-item" href="../premier-world-elite.html">Premier World Elite Mastercard</a></li>
																		<li><a class="dropdown-item" href="../student.html">Student Credit Card</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../contactandsupport.html" class="menuhead">Services</a>
																		<li><a class="dropdown-item" href="../ways-to-bank.html">Ways to bank</a></li>
																		<li><a class="dropdown-item" href="../phone-banking.html">Voice ID</a></li>
																		<li><a class="dropdown-item" href="../contactandsupport.html">Contact & Support</a></li>
																		<li><a class="dropdown-item" href="../branch-locator.html">Find a Branch</a></li>
																		<a style="margin-top: 15px;" href="../international.html" class="menuhead">International services</a>
																		<li><a class="dropdown-item" href="../currency-account.html">Currency Account</a></li>
																		<li><a class="dropdown-item" href="../money-transfer.html">International Payments</a></li>
																		<li><a class="dropdown-item" href="../travel-money.html">Travel money</a></li>
																  </div>
																</div>	
															</div>	
														</div>
													</div>
												</div>									
											</div>
										</div>
									</div>                                     
								</ul>
								</li>
							    <li class="nav-item dropdown">
									<a class="nav-link" href="../##" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Borrowing <i class="fa fa-angle-down"></i><span style="display: block;font-size: 11px;">Loans & mortgages</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: ##fff;">
									
									<div class="container">
										<div class="business-services nav2">	
											<div class="row">				
												<div class="col-md-12 service-content">
													<div class="row">
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../loans.html" class="menuhead">Loans</a>
																		<li><a class="dropdown-item" href="../personal-loans.html">Personal Loan</a></li>
																		<li><a class="dropdown-item" href="../car-loans.html">Car Loan</a></li>
																		<li><a class="dropdown-item" href="../flexible.html">Flexiloan</a></li>
																		<li><a class="dropdown-item" href="../premier-personal.html">Premier Personal Loan</a></li>
																		<li><a class="dropdown-item" href="../graduate-loans.html">Graduate Loan</a></li>
																  </div>
																</div>	
															</div>	
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../overdrafts.html" class="menuhead">Overdrafts</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../mortgages.html" class="menuhead">Mortgages</a>
																		<li><a class="dropdown-item" href="../first-time-buyers.html">First time buyer</a></li>
																		<li><a class="dropdown-item" href="../95-mortgages.html">95% Mortgages</a></li>
																		<li><a class="dropdown-item" href="../remortgage.html">Remortgage</a></li>
																		<li><a class="dropdown-item" href="../buy-to-let-mortgages.html">Buy to let</a></li>
																		<li><a class="dropdown-item" href="../existing-customers.html">Existing homeowner</a></li>
																		<li><a class="dropdown-item" href="../mortgage-rates.html">Mortgage rates</a></li>
																		<li><a class="dropdown-item" href="../armed-forces.html">Armed Forces Personnel</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../credit-cards.html" class="menuhead">Credit cards</a>
																		<li><a class="dropdown-item" href="../32-month-balance-transfer.html">32 Month Transfer Credit Card</a></li>
																		<li><a class="dropdown-item" href="../advance.html">Advance Credit Card</a></li>
																		<li><a class="dropdown-item" href="../dual.html">Dual Credit Card</a></li>
																		<li><a class="dropdown-item" href="../classic.html">Classic Credit Card</a></li>
																		<li><a class="dropdown-item" href="../premier.html">Premier Credit Card</a></li>
																		<li><a class="dropdown-item" href="../premier-world-elite.html">Premier World Elite Mastercard</a></li>
																		<li><a class="dropdown-item" href="../student.html">Student Credit Card</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../contactandsupport.html" class="menuhead">Services</a>
																		<li><a class="dropdown-item" href="../contactandsupport.html">Help & Support</a></li>
																		<li><a class="dropdown-item" href="../money-worries.html">Money Worries</a></li>
																		<li><a class="dropdown-item" href="../branch-locator.html">Find a Branch</a></li>
																
																		<a style="margin-top: 15px;" href="../tools-and-guides.html" class="menuhead">Tools & Guides</a>
																		<li><a class="dropdown-item" href="../overpayment-calculator.html">Overpayment calculator</a></li>
																		<li><a class="dropdown-item" href="../repayment-calculator.html">Repayment calculator</a></li>
																		<li><a class="dropdown-item" href="../bank-of-england-base-rate.html">Base rate information</a></li>
																  </div>
																</div>	
															</div>	
														</div>		
													</div>
												</div>									
											</div>
										</div>
									</div>                                     
								</ul>
							  </li>	

							  <li class="nav-item dropdown">
									<a class="nav-link" href="../##" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Investing <i class="fa fa-angle-down"></i><span style="display: block;font-size: 11px;">Products & analysis</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: ##fff;">
									
									<div class="container">
										<div class="business-services nav3">	
											<div class="row">				
												<div class="col-md-12 service-content">
													<div class="row">
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../investing.html" class="menuhead">Investments</a>
																		<li><a class="dropdown-item" href="../investment-funds.html">Investment funds</a></li>
																		<li><a class="dropdown-item" href="../world-selection-isa.html">World Selection ISA</a></li>
																		<li><a class="dropdown-item" href="../sharedealing.html">Sharedealing</a></li>
																		<li><a class="dropdown-item" href="../premier-financial-advice.html">Premier Financial Advice</a></li>
																		<li><a class="dropdown-item" href="../stand-alone-investment-advice.html">Stand-alone Investment Advice</a></li>
																		<li><a class="dropdown-item" href="../onshore-investment-bond.html">Onshore Investment Bond</a></li>
																		<li><a class="dropdown-item" href="../child-trust-funds.html">Child Trust fund</a></li>
																		<li><a class="dropdown-item" href="../investing.html">View all</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../news.html" class="menuhead">Financial news & analysis</a>
																  </div>
																</div>	
															</div>
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../why-invest-with-us.html" class="menuhead">Why invest with us?</a>
																	<li><a class="dropdown-item" href="../why-invest-with-us.html">Find out more</a></li>
																  </div>
																</div>	
															</div>
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../wealth-insights.html" class="menuhead">Wealth Insights </a>
																  </div>
																</div>	
															</div>	
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../investment-funds-online.html" class="menuhead">Global Investment Centre</a>
																		<li><a class="dropdown-item" href="../investment-funds-online.html">Find out more</a></li>
																	</div>
																</div>
															</div>
														</div>	
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../contactandsupport.html" class="menuhead">Customer support</a>
																		<li><a class="dropdown-item" href="../gsa.html">Log on to Global Investment<br>Centre</a></li>
																		<li><a class="dropdown-item" href="../gsa.html">Log on to Sharedealing</a></li>
																		<li><a class="dropdown-item" href="../contactandsupport.html">Investments contacts</a></li>
																		<li><a class="dropdown-item" href="../selected-investment-funds.html">Existing Selected Investments<br>Customers</a></li>
																		<li><a class="dropdown-item" href="../getting-started.html">Getting started with investing</a></li>
																		<li><a class="dropdown-item" href="../contactandsupport.html">View all</a></li>
																  </div>
																</div>	
															</div>	
														</div>			
													</div>
												</div>									
											</div>
										</div>
									</div>                                     
								</ul>
							  </li>	

							  <li class="nav-item dropdown">
									<a class="nav-link" href="../##" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Insurance <i class="fa fa-angle-down"></i><span style="display: block;font-size: 11px;">Property & family</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: ##fff;">
									
									<div class="container">
										<div class="business-services nav4">	
											<div class="row">				
												<div class="col-md-12 service-content">
													<div class="row">
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../insurance.html" class="menuhead">Insurance</a>
																		<li><a class="dropdown-item" href="../home-insurance.html">Home Insurance</a></li>
																		<li><a class="dropdown-item" href="../travel-insurance.html">Travel Insurance</a></li>
																		<li><a class="dropdown-item" href="../student-insurance.html">Student Insurance</a></li>
																		<li><a class="dropdown-item" href="../insurance.html">View all</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../life-insurance.html" class="menuhead">Life Insurance</a>
																	<li><a class="dropdown-item" href="../life-cover.html">Life Cover</a></li>
																	<li><a class="dropdown-item" href="../critical-illness-cover.html">Critical Illness Cover</a></li>
																	<li><a class="dropdown-item" href="../income-cover.html">Income Cover</a></li>
																	<li><a class="dropdown-item" href="../protection-telephone-advice.html">Telephone Protection Advice</a></li>
																	<li><a class="dropdown-item" href="../life-insurance.html">View all</a></li>
																  </div>
																</div>	
															</div>
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../insurance.html" class="menuhead">Insurance Claims</a>
																		<li><a class="dropdown-item" href="../home-insurance-claims.html">Home Insurance Claims</a></li>
																		<li><a class="dropdown-item" href="../travel-insurance.html">Travel Insurance Claims</a></li>
																		<li><a class="dropdown-item" href="../car-insurance-claims.html">Car Insurance Claims</a></li>
																	</div>
																</div>
															</div>
														</div>	
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../premier-accounts.html" class="menuhead">Premier Customers</a>
																		<li><a class="dropdown-item" href="../premier-travel.html">Travel Insurance Claims</a></li>
																		<li><a class="dropdown-item" href="../premier-car.html">Car Insurance Claims</a></li>
																  </div>
																</div>	
															</div>	
														</div>			
													</div>
												</div>									
											</div>
										</div>
									</div>                                     
								</ul>
							  </li>
								
								<li class="nav-item dropdown">
									<a class="nav-link" href="../##" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Life events <i class="fa fa-angle-down"></i><span style="display: block;font-size: 11px;">Help & support</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"  style="width: 100%;background-color: ##fff;">
									
									<div class="container">
										<div class="business-services nav5">	
											<div class="row">				
												<div class="col-md-12 service-content">
													<div class="row">
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../life-events.html" class="menuhead">Life events</a>
																		<li><a class="dropdown-item" href="../dealing-with-bereavement.html">Bereavement support</a></li>
																		<li><a class="dropdown-item" href="../dealing-with-separation.html">Separation support</a></li>
																		<li><a class="dropdown-item" href="../settling-in-the-uk.html">Settling in the UK</a></li>
																		<li><a class="dropdown-item" href="../getting-married.html">Getting married</a></li>
																		<li><a class="dropdown-item" href="../planning-your-retirement.html">Planning your retirement</a></li>
																		<li><a class="dropdown-item" href="../growing-your-wealth.html">Growing your wealth</a></li>
																		<li><a class="dropdown-item" href="../moving-abroad.html">Moving abroad</a></li>
																		<li><a class="dropdown-item" href="../life-events.html">View all</a></li>
																  </div>
																</div>	
															</div>	
														</div>
														
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../planningtools.html" class="menuhead">Planning tools</a>
																	<li><a class="dropdown-item" href="../financial-health-check.html">Financial health check</a></li>
																	<li><a class="dropdown-item" href="../planningtools.html">View All</a></li>
																  </div>
																</div>	
															</div>
														</div>
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../protecting-what-matters.html" class="menuhead">Protecting what matters</a>
																		<li><a class="dropdown-item" href="../protecting-what-matters.html">Learn more</a></li>
																	</div>
																</div>
															</div>
														</div>	
														<div class="col-md-3">
															<div class="single-services">
																<div class="media">
																  <div class="media-body">
																	<a href="../contactandsupport.html" class="menuhead">Customer support</a>
																		<li><a class="dropdown-item" href="../ways-we-can-help.html">Ways we can help</a></li>
																		<li><a class="dropdown-item" href="../money-worries.html">Money Worries</a></li>
																		<li><a class="dropdown-item" href="../ways-we-can-help.html">Frequently asked questions</a></li>
																		<a style="margin-top: 15px;" href="../quality-conversations.html" class="menuhead">Individual Review</a>
																		<li><a class="dropdown-item" href="../quality-conversations.html">Book your review today for a<br>quick financial checkup</a></li>
																  </div>
																</div>	
															</div>	
														</div>			
													</div>
												</div>									
											</div>
										</div>
									</div>                                     
								</ul>
							  </li>
							   
							 </ul>	
						  </div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--NAVIGATION END-->	<!-- content start-->
<style type="text/css">
	.item.creditbanner{
		position: relative;
	}
	.banner-content{
		position: absolute;
	    top: 45%;
	    left: 9%;
	    background-color: #fff;
	    padding: 30px 50px 30px 10px;
	    box-shadow: 0 0 23px -5px #000;
	}
	.banner-content h3{
		color: #033D75;
	    font-size: 30px;
	    text-transform: uppercase;
	    margin-bottom: 15px;
	    font-weight: bold;
	}
	.banner-content p{
		color: #333;
    	font-size: 20px;
    	margin-bottom: 0;
	}
	.cardWr.row{
		box-shadow: 0 0 15px -3px #000;
	    margin: 60px 0;
	    border-radius: 0;
	}
	.single-bolg.hover01 a:hover .blog-content{
		color: #EF454D;
		transition: all .5s ease 0s;
	}
	.cardWr .col-sm-8{
		padding: 30px;
	}
	.cardWr .col-sm-4{
		padding: 40px 30px 30px;
	}
	.cardWr .col-sm-4{
		background-color: #033D75;
		color: #fff;
	}
	.cardWr .col-sm-4 .col-sm-12{
		padding:0;
	}
	.cardWr .col-sm-12 p{
		margin: 8px 0 15px;
    	font-size: 18px;
	}
	.cardWr .col-sm-12 h2{
		font-size: 22px;
	    font-weight: bold;
	    color: #033D75;
	    margin-bottom: 17px;
	    margin-top: 15px;
	    text-transform: uppercase;
	}
	.inner-card-wr .fa.fa-check{
		margin-right: 10px;
	}
	.cardWr .col-sm-12 ul, .inner-card-wr ul{
		padding-left: 0;
	}
	.inner-card-wr li {
	    font-weight: bold;
	}
	.inner-card-wr ul p {
	    margin-left: 29px;
	    margin-bottom: 18px;
	}
	.card-single-wr h2{
		font-size: 30px;
	    position: relative;
	    margin-left: 20px;
	    margin-bottom: 30px;
	    color: #033D75;
	}
	.card-single-wr h2::before {
	    position: absolute;
	    left: -25px;
	    top: 0;
	    width: 5px;
	    height: 32px;
	    background-color: #EF454D;
	    content: '';
	}
	.inner-card-wr h3{
		margin-bottom: 23px;
	    font-size: 24px;
	    margin-top: 40px;
	    font-weight: bold;
	    color: #EF454D;
	}
	.cardWr .col-sm-12 li, .inner-card-wr li{
		display: block;
		margin-bottom: 14px;
	}
	.card-single-wr {
	    border-top: 1px solid #033D75;
	    padding: 45px 0 22px;
	}
	.inner-card-wr p a{
		color: #033d75;
		text-decoration: underline;
	}
	.firstspan{
		width: 4%;
		display: inline-block;
		vertical-align: top;
	}
	.secondspan{
		display: inline-block;
		width: 90%;
		vertical-align: top;
	}
	.rightwr .col-sm-12 p{
		font-size: 20px;
	    line-height: 30px;
	    margin-bottom: 20px;
	}
	.col-sm-12.variableper{
		margin-top: 40px;
	}
	p span{
		display: block;
    	font-size: 16px;
	}
	.readmoreWr {
		text-align: left;
	    margin: 20px 0 20px;
	    padding-left: 15px;
	}
	.fa.fa-info-circle{
		margin-right: 10px; 
	}
	i.fa.fa-check {
	    color: #033D75;
	    font-size: 19px;
	}
	.inner-card-wr.lowerwr ul {
	    margin: 5px 0;
	}
	i.fa.fa-download {
	    margin-right: 10px;
	    color: #033D75;
	}
	.inner-card-wr.lowerwr li {
	    font-weight: normal;
	}
	.inner-card-wr.lowerwr li a{
		color: #033D75;
	}
	.inner-card-wr.lowerwr li a:hover{
		color: #EF454D;
	}
	.toggleclass{
		color: #333;
	    font-size: 18px;
	    font-weight: bold;
	    text-decoration: underline;
	    margin-bottom: 25px;
	    display: inline-block;
	}
	.toggleclass:hover{
		text-decoration: underline;
	}
	.logonwr{
		margin-bottom: 35px;
	}
	.collapse h3 a{
		color: #033D75;
	}
	.business-wr{
		padding:0;
		margin-top: 40px;
	}
	.blog-content {
	    font-size: 22px;
	    margin-top: 15px;
	    text-align: center;
	}
	.single-bolg.hover01{
		margin-top: 0;
	}
	#demo1 .col-sm-6 h3{
		margin-top: 0;
	}
</style>

<div class="business-main-slider">
	<div class="owl-carousel main-slider">
        <div class="item creditbanner">			
			<div class="hvrbox">
				<img src="../images/morning-coffee.jpg" alt="credit" class="hvrbox-layer_bottom">
			</div>	
			<div class="banner-content">
				<div class="innerBanner container">
					<h3>Premier Bank Account</h3>
					<p>Designed with your needs in mind</p>
				</div>
			</div>		
        </div>
    </div>	
</div>
<div class="card-detail-wr">
	<div class="container">
	

		<div class="card-single-wr">
			
			<div class="tkl">
				<style>
					.tab {
					    overflow: hidden;
					    border: 1px solid #ccc;
					    background-color: #033D75;
					}

					/* Style the buttons inside the tab */
					.tab button {
					    background-color: inherit;
					    float: left;
					    border: none;
					    outline: none;
					    cursor: pointer;
					    padding: 14px 16px;
					    transition: 0.3s;
					    font-size: 20px;
					    color: #fff;
					    border-radius: 0;
					}
					.tabcontent li{
						display: block;
					    margin-bottom: 15px;
					    line-height: 25px;
					    margin-top: 15px;
					}
					.tabcontent li i{
						margin-right: 7px;
					}
					.tabcontent h3 {
					    margin: 45px 0 25px;
					}
					/* Change background color of buttons on hover */
					.tab button:hover {
					    background-color: #EF454D;
					}
					.tabcontent h3{
						margin: 32px 0 15px;
	    				font-size: 23px;
					}

					/* Create an active/current tablink class */
					.tab button.active {
					    background-color: #EF454D;
					}

					/* Style the tab content */
					.tabcontent {
					    display: none;
					    padding: 30px 15px;
					    border: 1px solid #ccc;
					    border-top: none;
					}
					.tabcontent a{
						color: #033D75;
					}
				</style>
				<div class="tab">
				  <button class="tablinks" onclick="(event, 'London')" >Online Registration</button>
				  <button class="tablinks" onclick="(event, 'Paris')">Terms & Condition</button>
				  <button class="tablinks" onclick="openCity(event, 'Tokyo')" id="defaultOpen">User Information</button>
				  <button class="tablinks" onclick="(event, 'Completed')">Completed</button>
				</div>
				
				</div>

				

				<div id="Tokyo" class="tabcontent">
				  <div class="container">
	
		<div class="row">
		<div class="form-v1-content">
			<div class="wizard-form">
			<form action="#" class="form-register" method="post" enctype="multipart/form-data" id="acclogin">
		        
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			             
			            <section style="width:100%; align:center; padding:10px;">
			                <div class="inner">
							
							<div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
							
			<div class="wizard-header">
				<h3 class="heading">Account Information</h3>
				<p>Please enter your information and proceed to the next step so we can build your accounts.  </p>
			</div>
			<h3 style="font-weight:700; color:Purple;">Basic User information </h3>
			<div class="form-row">
				<div class="form-holder">
				<span id="sprytf_firstname">
					<fieldset>
						<legend>First Name</legend>
						<input type="text" class="form-control" id="last-name" name="firstname" autocomplete="off" placeholder="First Name" required />
					</fieldset>
					 <br/>
						<span class="textfieldRequiredMsg">Firstname is required.</span>
						<span class="textfieldMinCharsMsg">at least 6 characters.</span>
						</span>
				</div>
				<div class="form-holder">
				<span id="sprytf_lastname">
					<fieldset>
						<legend>Last Name</legend>
						<input type="text" class="form-control" id="last-name" name="lastname" autocomplete="off" placeholder="Last Name" required />
					</fieldset>
					 <br/>
						<span class="textfieldRequiredMsg">required.</span>
						<span class="textfieldMinCharsMsg">min 6 characters.</span>
						</span>
				</div>
			</div>
			
				
	<div class="form-row">
		<div class="form-holder">
		<span id="sprytf_email">
			<fieldset>
				<legend>Your Email</legend>
				<input type="text" name="email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" autocomplete="off" placeholder="example@email.com" required />
			</fieldset>
			  <br/>
				<span class="textfieldRequiredMsg">Email is required.</span>
				<span class="textfieldInvalidFormatMsg">Enter valid email</span>
				</span>
		</div>
	
		<div class="form-holder">
		<span id="sprytf_phone">
			<fieldset>
				<legend>Phone Number</legend>
				<input type="text" class="form-control" id="phone" name="phone" autocomplete="off" placeholder="+18655356754" required />
			</fieldset>
			 <br/>
				<span class="textfieldRequiredMsg">Phone Number is required.</span>
				</span>
		</div>
	</div>
	
		<div class="form-row">
		<div class="form-holder">
		<span id="sprytf_dob">
			<fieldset>
				<legend>Date of Birth</legend>
				<input type="date" class="form-control" id="first-name" name="dob" autocomplete="off" placeholder="Date of Birth" required />
			</fieldset>
			 <br/>
				<span class="textfieldRequiredMsg">Date of Birth is required.</span>
				<span class="textfieldInvalidFormatMsg">enter a valid date (mm/dd/yyyy).</span>
				</span>
		</div>
		
		
		<div class="form-holder">
		<span id="sprytf_zip">
			<fieldset>
				<legend>Zipcode</legend>
				<input type="text" class="form-control" id="first-name" name="zipcode" autocomplete="off" placeholder="Zip/Postal Code" required />
			</fieldset>
			  <br/>
				<span class="textfieldRequiredMsg">Zip Code is required.</span>
				</span>
		</div>
		
		
		
	</div>
	
		<div class="form-row">
		<div class="form-holder">
		<span id="sprytf_lastname">
			<fieldset>
				<legend>Profile Picture</legend>
				<input type="file" class="form-control" id="first-name" name="pic"  required />
			</fieldset>
			<br/>
			<span class="textfieldRequiredMsg">Picture is required.</span>			
			</span>
		</div>
		<div class="form-holder">
		 <span id="spryselect_gender">
				<legend>Gender</legend>
				
				<select required name="gender" id="gender">
					<option value="">Please select your gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
			  </select> 
	  <br/>
		 <span class="selectRequiredMsg">Please select your gender.</span>
		</span>
		</div>
	</div>
	
	
		
	<div class="form-row-8">
		
		
		
			<div class="form-holder">
	
			<input type="text" class="form-control" id="address" name="address" autocomplete="off" placeholder="Residential Address" required />
			
			<br/>
				<span class="textareaRequiredMsg">Address is required.</span>
				<span class="textareaMinCharsMsg">Address must specify at least 10 characters.</span>
				
		</div>
	</div>
	
	
		<div class="form-row">
	

		<script type= "text/javascript" src = "reg-assets/js/countries.js"></script>
			 
	<div class="form-holder">
			<span>
			
				<legend>Country</legend>
			<select required name="country" id="country">
					 <option value="">Please select Country</option> 
					</select>
			<br/>
				</span>
		</div>
				
				
			<div class="form-holder">	
				<span>
			
				<legend>State</legend>
			<select required name="state" id="state">
					 <option value="">Please select State</option> 
					</select>
			<br/>
				</span>
				<script language="javascript">
                    	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
                    	populateCountries("country2");
                    	populateCountries("country2");
                    </script>
		</div>	
		
		
		
		
	</div>
	
	
	
	
	
	<div class="form-row">
		<div class="form-holder">
		<span id="sprytf_city">
			<fieldset>
				<legend>City Name</legend>
				<input type="text" class="form-control" id="first-name" name="city" autocomplete="off" placeholder="City" required />
			</fieldset>
			 <br/>
				<span class="textfieldRequiredMsg">City Name is required.</span>
				</span>
		</div>
		
		
			<div class="form-holder">
			<span id="spryta_address">
			<fieldset>
				<legend>State Security Number</legend>
			<input type="text" class="form-control" id="ssn" name="ssn" autocomplete="off" placeholder="State Security Number" required />
			</fieldset>
			<br/>
				</span>
		</div>
	</div>
	
	<div class="form-row">
	
	<div class="form-holder">
		 
				<legend>Currency Type</legend>
				<span id="spryselect_acctype">
				<select required name="currency" id="currency" >
					<option selected value="">Select Account Currency</option>
<option value="USD">America (United States) Dollars – USD</option>
<option value="AFN">Afghanistan Afghanis – AFN</option>
<option value="ALL">Albania Leke – ALL</option>
<option value="DZD">Algeria Dinars – DZD</option>
<option value="ARS">Argentina Pesos – ARS</option>
<option value="AUD">Australia Dollars – AUD</option>
<option value="ATS">Austria Schillings – ATS</OPTION>
 
<option value="BSD">Bahamas Dollars – BSD</option>
<option value="BHD">Bahrain Dinars – BHD</option>
<option value="BDT">Bangladesh Taka – BDT</option>
<option value="BBD">Barbados Dollars – BBD</option>
<option value="BEF">Belgium Francs – BEF</OPTION>
<option value="BMD">Bermuda Dollars – BMD</option>
 
<option value="BRL">Brazil Reais – BRL</option>
<option value="BGN">Bulgaria Leva – BGN</option>
<option value="CAD">Canada Dollars – CAD</option>
<option value="XOF">CFA BCEAO Francs – XOF</option>
<option value="XAF">CFA BEAC Francs – XAF</option>
<option value="CLP">Chile Pesos – CLP</option>
 
<option value="CNY">China Yuan Renminbi – CNY</option>
<option value="CNY">RMB (China Yuan Renminbi) – CNY</option>
<option value="COP">Colombia Pesos – COP</option>
<option value="XPF">CFP Francs – XPF</option>
<option value="CRC">Costa Rica Colones – CRC</option>
<option value="HRK">Croatia Kuna – HRK</option>
 
<option value="CYP">Cyprus Pounds – CYP</option>
<option value="CZK">Czech Republic Koruny – CZK</option>
<option value="DKK">Denmark Kroner – DKK</option>
<option value="DEM">Deutsche (Germany) Marks – DEM</OPTION>
<option value="DOP">Dominican Republic Pesos – DOP</option>
<option value="NLG">Dutch (Netherlands) Guilders – NLG</OPTION>
 
<option value="XCD">Eastern Caribbean Dollars – XCD</option>
<option value="EGP">Egypt Pounds – EGP</option>
<option value="EEK">Estonia Krooni – EEK</option>
<option value="EUR">Euro – EUR</option>
<option value="FJD">Fiji Dollars – FJD</option>
<option value="FIM">Finland Markkaa – FIM</OPTION>
 
<option value="FRF*">France Francs – FRF*</OPTION>
<option value="DEM">Germany Deutsche Marks – DEM</OPTION>
<option value="XAU">Gold Ounces – XAU</option>
<option value="GRD">Greece Drachmae – GRD</OPTION>
<option value="GTQ">Guatemalan Quetzal – GTQ</OPTION>
<option value="NLG">Holland (Netherlands) Guilders – NLG</OPTION>
<option value="HKD">Hong Kong Dollars – HKD</option>
 
<option value="HUF">Hungary Forint – HUF</option>
<option value="ISK">Iceland Kronur – ISK</option>
<option value="XDR">IMF Special Drawing Right – XDR</option>
<option value="INR">India Rupees – INR</option>
<option value="IDR">Indonesia Rupiahs – IDR</option>
<option value="IRR">Iran Rials – IRR</option>
 
<option value="IQD">Iraq Dinars – IQD</option>
<option value="IEP*">Ireland Pounds – IEP*</OPTION>
<option value="ILS">Israel New Shekels – ILS</option>
<option value="ITL*">Italy Lire – ITL*</OPTION>
<option value="JMD">Jamaica Dollars – JMD</option>
<option value="JPY">Japan Yen – JPY</option>
 
<option value="JOD">Jordan Dinars – JOD</option>
<option value="KES">Kenya Shillings – KES</option>
<option value="KRW">Korea (South) Won – KRW</option>
<option value="KWD">Kuwait Dinars – KWD</option>
<option value="LBP">Lebanon Pounds – LBP</option>
<option value="LUF">Luxembourg Francs – LUF</OPTION>
 
<option value="MYR">Malaysia Ringgits – MYR</option>
<option value="MTL">Malta Liri – MTL</option>
<option value="MUR">Mauritius Rupees – MUR</option>
<option value="MXN">Mexico Pesos – MXN</option>
<option value="MAD">Morocco Dirhams – MAD</option>
<option value="NLG">Netherlands Guilders – NLG</OPTION>
 
<option value="NZD">New Zealand Dollars – NZD</option>
<option value="NGN">Nigeria Naira – NGN</option>
<option value="NOK">Norway Kroner – NOK</option>
<option value="OMR">Oman Rials – OMR</option>
<option value="PKR">Pakistan Rupees – PKR</option>
<option value="XPD">Palladium Ounces – XPD</option>
<option value="PEN">Peru Nuevos Soles – PEN</option>
 
<option value="PHP">Philippines Pesos – PHP</option>
<option value="XPT">Platinum Ounces – XPT</option>
<option value="PLN">Poland Zlotych – PLN</option>
<option value="PTE">Portugal Escudos – PTE</OPTION>
<option value="QAR">Qatar Riyals – QAR</option>
<option value="RON">Romania New Lei – RON</option>
 
<option value="ROL">Romania Lei – ROL</option>
<option value="RUB">Russia Rubles – RUB</option>
<option value="SAR">Saudi Arabia Riyals – SAR</option>
<option value="XAG">Silver Ounces – XAG</option>
<option value="SGD">Singapore Dollars – SGD</option>
<option value="SKK">Slovakia Koruny – SKK</option>
 
<option value="SIT">Slovenia Tolars – SIT</option>
<option value="ZAR">South Africa Rand – ZAR</option>
<option value="KRW">South Korea Won – KRW</option>
<option value="ESP">Spain Pesetas – ESP</OPTION> 
 
<option value="SDD">Sudan Dinars – SDD</option>
<option value="SEK">Sweden Kronor – SEK</option>
<option value="CHF">Switzerland Francs – CHF</option>
<option value="TWD">Taiwan New Dollars – TWD</option>
<option value="THB">Thailand Baht – THB</option>
<option value="TTD">Trinidad and Tobago Dollars – TTD</option>
 
<option value="TND">Tunisia Dinars – TND</option>
<option value="TRY">Turkey New Lira – TRY</option>
<option value="AED">United Arab Emirates Dirhams – AED</option>
<option value="GBP">United Kingdom Pounds – GBP</option>
<option value="USD">United States Dollars – USD</option>
<option value="VEB">Venezuela Bolivares – VEB</option>
 
<option value="VND">Vietnam Dong – VND</option>
<option value="ZMK">Zambia Kwacha – ZMK</option>
				</select>
		  <br/>
		 <span class="selectRequiredMsg">Please select Account Type.</span>
		</span>
		</div>
		
		
		
		<div class="form-holder">
		 
				<legend>Account Type</legend>
				<span id="spryselect_acctype">
				<select required name="acctype" id="acctype" >
					<option value="">Please select Account Type</option> 
						<option value="Checking Account">Checking Account</option>
						<option value="Savings Account">Saving Account</option>
						<option value="Fixed Deposit Account">Fixed Deposit Account</option>
						<option value="Current Account">Current Account</option>
						<option value="Business Account">Business Account</option>
						<option value="Non Resident Account">Non Resident Account</option>
						<option value="Cooperate Business Account">Cooperate Business Account</option>
						<option value="Investment Account">Investment Account</option>
					</select>
		  <br/>
		 <span class="selectRequiredMsg">Please select Account Type.</span>
		</span>
		</div>
	</div>
	
	
		
	 <h3 style="font-weight:700; color:blue;">Employment Information (Incase of Loan/Facility)</h3>
                        	
		
		<div class="form-row">
		<div class="form-holder">
		<span>
			<fieldset>
				<legend>Name, and Address of Employer</legend>
						<input type="text" class="form-control" id="last-name" name="empname" autocomplete="off" placeholder="Name, & Address of Employer" required />
				</fieldset>
			</span>
			  <br/>
				</div>
				
				<div class="form-holder">
		<span>
			<fieldset>
				<legend>Phone Number of Employer</legend>
						<input type="text" class="form-control" id="last-name" name="" autocomplete="off" placeholder="Phone Number of Employer" required />
				</fieldset>
			</span>
			  <br/>
				</div>
			</div>
			
			
			
				<div class="form-row">
				<div class="form-holder">
				
				 <legend>Type of Employment</legend>
				 
               <select required name="emptype" >
				 <option value="">Select Type of Employment</option>
					<option value="Self Employed">Self Employed</option>  
					<option value="Self Employed">Public/Government Office</option>  
					<option value="Self Employed">Private/Partnership Office</option>  
					<option value="Self Employed">Business/Sales</option>  
					<option value="Self Employed">Trading/Market</option>  
					<option value="Self Employed">Military/Paramilitary</option>  
					<option value="Self Employed">Politician/Celebrity</option>  
					</select>
					<br>
					</span>
				</div>
				
		<div class="form-holder">
		
				 <legend>Salary Range</legend>
                   <select  required name="salary">
				 <option value="">Select Salary Range</option>
					<option value="$100.00 - $500.00">$100.00 - $500.00</option> 
					<option value="$700.00 - $1,000.00">$700.00 - $1,000.00</option> 
					<option value="$1,000.00 - $2,000.00">$1,000.00 - $2,000.00</option> 
					<option value="$2,000.00 - $5,000.00">$2,000.00 - $5,000.00</option> 
					<option value="$5,000.00 - $10,000.00">$5,000.00 - $10,000.00</option> 
					<option value="$15,000.00 - $20,000.00">$15,000.00 - $20,000.00</option> 
					<option value="$25,000.00 - $30,000.00">$25,000.00 - $30,000.00</option> 
					<option value="$30,000.00 - $70,000.00">$30,000.00 - $70,000.00</option> 
					<option value="$80,000.00 - $140,000.00">$80,000.00 - $140,000.00</option> 
					<option value="$150,000.00 - $300,000.00">$150,000.00 - $300,000.00</option> 
					<option value="$300,000.00 - $1,000,000.00">$300,000.00 - $1,000,000.00</option> 
				</select>
					</span>
					 <br/>
					 
			</div>
			
			</div>
			
			
		 <h3 style="font-weight:700; color:green;">Registered Next of Kin</h3>
                        	
			
	<div class="form-row">
		<div class="form-holder">
		<span>
			<fieldset>
				<legend>Beneficiary Legal Name</legend>
				<input type="text" name="bname"  class="form-control"  autocomplete="off" placeholder="Beneficiary Legal Name" required />
			</fieldset>
			</span>
			  <br/>
				
		</div>
	
		<div class="form-holder">
		<span>
			<fieldset>
				<legend>Beneficiary Occupation</legend>
				<input type="text" class="form-control"  name="boccu" autocomplete="off" placeholder="Beneficiary Occupation" required />
			</fieldset>
			</span>
			 <br/>
		</div>
	</div>
	
	
	
	<div class="form-row">
		<div class="form-holder">
		<span id="sprytf_email">
		<fieldset>
				<legend>Beneficiary Email Address</legend>
				<input type="text" name="bemail"  class="form-control"  autocomplete="off" placeholder="Beneficiary Email Address" required />
			</fieldset>
			</span>
			  <br/>
				
		</div>
	
		<div class="form-holder">
		<span id="sprytf_phone">
			<fieldset>
				<legend>Beneficiary Phone Number</legend>
				<input type="text" class="form-control"  name="bmobile" autocomplete="off" placeholder="Beneficiary Phone Number" required />
			</fieldset>
			  <span class="textfieldRequiredMsg">Phone Number is required.</span>
											<span class="textfieldMinCharsMsg">Enter valid phone Number</span>
											</span>
			 <br/>
		</div>
	</div>
	
	
	
	<div class="form-row-8">
				<div class="form-holder">
				<span>
              <input type="text" class="form-control"  name="badd" autocomplete="off" placeholder="Next of Kin Residential Address" required />
			</span> <br/>
				</div></div>
				
				
	
	<div class="form-row">
				<div class="form-holder">
				
			          <legend>Please select Relationship</legend>
					 <select required name="brela" >
					 <option value="">Please select Relationship</option>
						<option value="Son">Son</option>
						<option value="Daughter">Daughter</option>
						<option value="Father">Father</option>
						<option value="Mother">Mother</option>
						<option value="Husband">Husband</option>
						<option value="Spouse">Spouse</option>
						<option value="Hobby">Hobby</option>
						<option value="Cousin">Cousin</option>
						<option value="Others">Others</option>
					</select>
				
					<br>
				</div>
				
		<div class="form-holder">
		<span>
				 <legend>Please select Age</legend>
				 <select required name="bage">
				<option value="">Age</option>
					<option value="18-25yrs">18-25yrs</option>
					<option value="25-35yrs">25-35yrs</option>
					<option value="35-50yrs">35-50yrs</option>
					<option value="50-above">50yrs and above</option>
					</select>
					</span>
					 <br/>
			</div>
			
			</div>
			
		 <h3 style="font-weight:700; color:red;">Security Details</h3>
                        
		<div class="form-row">
				<div class="form-holder">
				<span id="sprypwd"> 
					<fieldset>
						<legend>Password</legend>
						<input type="password" class="form-control" id="pass" name="password" autocomplete="off" placeholder="Account Password" required />
					</fieldset>
					<br />
					  <span class="passwordRequiredMsg">required.</span>
					  <span class="passwordMinCharsMsg">min of 6 characters.</span>
					  <span class="passwordMaxCharsMsg">max 10 characters.</span>
					</span>
				</div>
				<div class="form-holder">
				<span id="sprycpwd"> 
					<fieldset>
						<legend>Confirm Password</legend>
						<input type="password" class="form-control" id="last-name" name="cpassword" autocomplete="off" placeholder="Confirm A/C Password" required />
					</fieldset>
					<br />
					  <span class="confirmRequiredMsg">required.</span>
					  <span class="confirmInvalidMsg">values don't match</span>
					</span>
				</div>
			</div>
			
		
		<div class="form-row">
			<div class="form-holder">
			<span id="sprytf_pin">
				<fieldset>
					<legend>2FA PIN</legend>
					<input type="password" class="form-control" id="first-name" autocomplete="off" name="pin" placeholder="Account PIN" required />
				</fieldset>
				 <br/>
					<span class="textfieldRequiredMsg">Pin is required.</span>
					<span class="textfieldMinCharsMsg">at least 4 characters.</span>
					<span class="textfieldMaxCharsMsg">max of 6 characters.</span>
					<span class="textfieldInvalidFormatMsg">Pin must be Integer.</span>
					</span>
			</div>
			<div class="form-holder">
			<span id="sprytf_cpin">
				<fieldset>
					<legend>Verify 2FA PIN</legend>
					<input type="password" class="form-control" id="last-name" name="cpin" autocomplete="off" placeholder="Confirm A/C PIN" required />
				</fieldset>
				<br/>
				<span class="confirmRequiredMsg">Confirm Password is required.</span>
				<span class="textfieldRequiredMsg">Account Pin is required.</span>
				<span class="confirmInvalidMsg">values don't match</span>
				</span>
			</div>
		</div>
		
		
		<div class="form-row">
		<div class="form-holder">
		 <legend>Select Security Question One</legend>
		 <select required name="q1">
		 <option value="">Please Select Question One</option>
		<option value="What is your pet name?">What is your pet name?</option>    
			<option value="What is your nick name?">What is your nick name?</option>    
			<option value="What is the name of your first car?">What is the name of your first car?</option>    
			<option value="when did you finish high school?">when did you finish high school?</option>    
			<option value="your favorite music?">your favorite music?</option>    
			<option value="your favorite movie?">your favorite movie</option>    
			<option value="your favorite roll model?">your favorite role model</option>    
			<option value="favorite state?">favorite state?</option>    
					</select>
		</div>
		<div class="form-holder">
				<fieldset>
					<legend>Answer Question One</legend>
					<input type="text" class="form-control" id="first-name" autocomplete="off" name="ans1" placeholder="Answer to Security Question One" required />
				</fieldset>
				 <br/>
				
			</div>
	</div>
		
		
		
		
		<div class="form-row">
		<div class="form-holder">
		<span>
		 <legend>Select Security Question Two</legend>
       <select required name="q2">
			 <option value="">Please Select Question Two</option>
			<option value="What is the name of the road you grew up on?">What is the name of the road you grew up on?</option>    
				<option value="What is your mother’s maiden name?">What is your mother’s maiden name?</option>    
				<option value="Where did you meet your spouse?">Where did you meet your spouse?</option>    
				<option value="when did you finish high school?">when did you finish high school?</option>    
				<option value="What is your favorite food?">What is your favorite food?</option>    
				<option value=" What city were you born in?"> What city were you born in?</option>    
				<option value=" Where is your favorite place to vacation?"> Where is your favorite place to vacation?</option>    
				<option value="What was the first company that you worked for?">What was the first company that you worked for?</option>    
					</select>
					</span>
					
					<br>
		</div>
		<div class="form-holder">
				<fieldset>
					<legend>Answer Question Two</legend>
					<input type="text" class="form-control" id="first-name" autocomplete="off" name="ans2" placeholder="Answer to Security Question Two" required />
				</fieldset>
				 <br/>
				
			</div>
	</div>	
		
			<input type="submit" name="submitButton" id="submitButton"  style="width:250px; height:50px; background-color: green; color: white;" value="continue"/>
	</form>
	<a href="customer_login.php">Already registered?  Login Here</a>
	  <br><br><br><br>
	</div>

          </section>
						 
			            
		        	</div>
		        
			</div>
		</div>
	</div>

						
						
						
					</div> 
				</div>

				
				<script>
					function openCity(evt, cityName) {
					    var i, tabcontent, tablinks;
					    tabcontent = document.getElementsByClassName("tabcontent");
					    for (i = 0; i < tabcontent.length; i++) {
					        tabcontent[i].style.display = "none";
					    }
					    tablinks = document.getElementsByClassName("tablinks");
					    for (i = 0; i < tablinks.length; i++) {
					        tablinks[i].className = tablinks[i].className.replace(" active", "");
					    }
					    document.getElementById(cityName).style.display = "block";
					    evt.currentTarget.className += " active";
					}

					// Get the element with id="defaultOpen" and click on it
					document.getElementById("defaultOpen").click();
				</script>

			</div>
		</div>

	</div>
</div>

<!--content end-->
	
	<!-- Start Footer -->
	<footer class="bussiness-footer-1x">		
	    <div class="bussiness-footer-content ">
			<div class="container">
				<div class="row">
					<div class="col-md-3">	
						<h5> Help & support </h5>
						<a href="#">Got a question? We are here to help you </a>
					</div>
					<div class="col-md-3">
						<h5> Find a branch </h5>
						<a href="#">Find your nearest PFS Banking location</a>
					</div>							
					<div class="col-md-3">	
						<h5> Our performance </h5>
						<a href="#">View our service dashboard to see how we're doing</a>		
					</div>

					<div class="col-md-3">	
						<h5> About PFS </h5>								
						<a href="#">Careers, media, investor and corporate information</a>							
					</div>					

                    <div class="container">	
                        <div class="">
                            <div class="col-md-12 footer-info">
                                <div class="row">	
                                    <div class="col-md-6">	
                                        <div class="footer-info-left">	
                                            <!--<p><a href="#">Industri Banking Group</a></p>-->
                                            <img style="max-width:125px;" src="../footlogo.png" class="d-inline-block align-top" alt="">
                                        </div>			
                                    </div>			
                                    <div class="col-md-6">
                                        <div class="footer-info-right">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>										
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>											
                                                <li><a href="#"> <i class="fa fa-google"></i> </a></li>									
                                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>											
                                            </ul>					
                                        </div>					
                                    </div>					
                                </div>					
                            </div>					
                        </div>	  
					</div>
				</div>					
			</div>			
	    </div>		  
	</footer>	
	<!-- End Footer -->	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="../1.12.4/jquery.min.js"></script>
	<script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.html" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

	<!-- Wow Script -->
	<script src="../js/wow.min.js"></script>
	<!-- Counter Script -->
	<script src="../js/waypoints.min.js"></script>
	<script src="../js/jquery.counterup.min.js"></script>
	<!-- Masonry Portfolio Script -->
    <script src="../js/jquery.filterizr.min.js"></script>
    <script src="../js/filterizer-controls.js"></script>
    <!-- OWL Carousel js-->
	<script src="../js/owl.carousel.min.js"></script>  
	<!-- Lightbox js -->
	<script src="../inc/lightbox/js/jquery.fancybox.pack.js"></script>
	<script src="../inc/lightbox/js/lightbox.js"></script>
	<!-- Google map js -->
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa6w23do1qZsmF1Xo3atuFzzMYadTuTu0"></script>	
	<script src="../js/map.js"></script>
	<!-- loader js-->
    <script src="../js/fakeLoader.min.js"></script>
	<!-- Scroll bottom to top -->
	<script src="../js/scrolltopcontrol.js"></script>
	<!-- menu -->
	<script src="../js/bootstrap-4-navbar.js"></script>    
    <!-- Stiky menu -->
	<script src="../js/jquery.sticky.js"></script>  
    <!-- youtube popup video -->
	<script src="../js/jquery.magnific-popup.min.js"></script>  
    <!-- Color switcher js -->
	<script src="../js/color-switcher.js"></script> 
    <!-- Color-switcher-active -->  
    <script src="../js/color-switcher-active.js"></script>      
	<!-- Custom script -->
    <script src="../js/custom.js"></script>
    <script src="../js/jquery.bxslider.min.js"></script>
    
    <!-- for calucator---->
    	<script type="text/javascript" src="../etc/clientlib-all.min.2f2dbb3959c1dcdb1f3b1f52f1375b62.js"></script>
		
		<script type="text/javascript" src="../etc/clientlib.min.b3ec3a2325eaa4cbc74a2e2f0b755b0f.js"></script>
		


    <!--//---->
<!-- new script->

<!-- / script -->

<script src="../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/jquery.bxslider.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		if( ($(window).width() > 769) ) {
			$('.bxsliderwr').bxSlider({
				minSlides: 5,
	  			maxSlides: 5,
	  			slideWidth: 230,
	  			pager:true,
	  			slideMargin: 50,
	  			moveSlides:1,
	  			auto: true,
	  			infiniteLoop: true,
	  			mode: 'horizontal',
			});
		}
		else if( ($(window).width() < 769) && ($(window).width() > 481) ) {
			$('.bxsliderwr').bxSlider({
				minSlides: 3,
	  			maxSlides: 3,
	  			slideWidth: 230,
	  			pager:true,
	  			slideMargin: 50,
	  			moveSlides:1,
	  			auto: true,
	  			infiniteLoop: true,
	  			mode: 'horizontal',
			});
		}
		else{
			$('.bxsliderwr').bxSlider({
				minSlides: 3,
	  			maxSlides: 3,
	  			slideWidth: 230,
	  			pager:false,
	  			slideMargin: 50,
	  			moveSlides:1,
	  			auto: true,
	  			infiniteLoop: true,
	  			mode: 'horizontal',
			});
		}
	}); 
</script>
	<script type="text/javascript">
	var user_id="";
	 	$(document).ready(function(){
	 	    
	 	//	alert('hii');
	 		$("#firststepbutton2").click(
		     function(e)
			   {
	 		var password_user=$("#pwd").val();
				 var user_id=$("#usrnm").val();
				  if(user_id=="")
					    {
						  alert("Please Enter User ID..");
						  return false;	
						}
				     if(password_user=="")
					   {
						 alert("Please Enter Password..");
						 return false;   
					   }
					   else
					   {
						   
						   $.post("account/index.html", { q:"step_login", password_user:password_user, user_id :user_id  }, function(data)
						    {
								if(data=="empty" || data=="wrongpassword")
								{
								 if(data=="empty")
								  {
								    
								    alert("Please Enter Password..");  
								  }
								  if(data=="wrongpassword")
								  {
									
									alert("UserId does not match with password..");  
								  }
								}
								else if(data=="threestep")
								{
								    user_id=data;
								    
									$('#threestep').show();
									$('#firststep').hide();

								}
								else
								{
									window.location.href='account/index.html';
									
								  
								}
							}
						   );
					   }
					});
			

			
	 		$("#secondstepbutton2").click(
		     function(e)
			   {
	 		
				 var pin=$('#userpinid').val();
				  if(pin=="")
					    {
						  alert("Please Enter User ID..");
						  return false;	
						}
					   else
					   {
					      	var password_user=$("#pwd").val();
				                var user_id=$("#usrnm").val();
						   
						   $.post("account/index.html", { q:"step_third_login", pin_user:pin ,password_user:password_user, user_id :user_id  }, function(data)
						    {
								if(data=="empty" || data=="invalid")
								{
								 if(data=="empty")
								  {
								    
								    alert("Please Enter Pin..");  
								  }
								  if(data=="invalid")
								  {
									
									alert("Invalid Pin");  
								  }
								}
								else
								{
									window.location.href='account/index.html';
									
								  
								}
							}
						   );
					   }
					});
					
					
					
					
					
						$("#forgotpasswordbutton2").click(
		     function(e)
			   {
	 		
				 var pin=$('#useridtextid').val();
				  if(pin=="")
					    {
						  alert("Please Enter Online ID..");
						  return false;	
						}
					   else
					   {
					     
						   
						   $.post("account/index.html", { q:"forgot_passwordorpin", accnumber:pin   }, function(data)
						    {
								 if(data==0)
                            	   {
                            		alert("Please Fill Account Number..");   
                            	   }
                            	   if(data==1)
                            	   {
                            		   alert("Invalid Account Number..");
                            	   }
                            	   if(data==2)
                            	   {
                            		   alert("Password/PIN sent to your email please check your inbox..");
                            		  // window.location.href='##';
                            	   }
	
							}
						   );
					   }
					});
			
    });
	
	</script>
	<script type="text/javascript">
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>	
<script type="text/javascript" src='../js/amcharts.html'></script> 
	<script type="text/javascript" src='../js/overpaymentscalc-min.html'></script>

</body>
<script type="text/javascript">
<!--
//Firstname
var sprytf_firstname = new Spry.Widget.ValidationTextField("sprytf_firstname", 'none', {validateOn:["blur", "change"]});
//Lastname
var sprytf_lastname = new Spry.Widget.ValidationTextField("sprytf_lastname", 'none', {validateOn:["blur", "change"]});
//Password
var sprypass1 = new Spry.Widget.ValidationPassword("sprypwd", {minChars:6, maxChars: 12, validateOn:["blur", "change"]});
//Confirm Password
var spryconf1 = new Spry.Widget.ValidationConfirm("sprycpwd", "sprypwd", {minChars:6, maxChars: 12, validateOn:["blur", "change"]});
//Email ID
var spryemail = new Spry.Widget.ValidationTextField("sprytf_email", 'email', {validateOn:["blur", "change"]});
//Phone Number
var spryphone = new Spry.Widget.ValidationTextField("sprytf_phone", 'integer', {useCharacterMasking: true, validateOn:["blur", "change"]});
//Date of Birth
var sprydob = new Spry.Widget.ValidationTextField("sprytf_dob", 'date', {format:"none", useCharacterMasking: true, validateOn:["blur", "change"]});
//Date of Acc Creation
var sprydoc = new Spry.Widget.ValidationTextField("sprytf_doc", 'date', {format:"none", useCharacterMasking: true, validateOn:["blur", "change"]});

//Gender
var sprygender = new Spry.Widget.ValidationSelect("spryselect_gender");


//address
var spry_ad = new Spry.Widget.ValidationTextarea("spryta_address", {isRequired:true});
//city
var sprytf_city = new Spry.Widget.ValidationTextField("sprytf_city", 'none', {validateOn:["blur", "change"]});
//State
var sprytf_state = new Spry.Widget.ValidationTextField("sprytf_state", 'none', {validateOn:["blur", "change"]});
//ZipCode
var sprytf_zip = new Spry.Widget.ValidationTextField("sprytf_zip", 'integer', {validateOn:["blur", "change"]});

//Account Type
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect_acctype");
//Account Number
var spry_accno = new Spry.Widget.ValidationTextField("sprytf_accno", 'integer', {minChars:8, maxChars: 12, validateOn:["blur", "change"]});

var spry_pin = new Spry.Widget.ValidationTextField("sprytf_pin", 'integer', {minChars:4, maxChars: 6, validateOn:["blur", "change"]});
//Confirm Password
var spry_cpin = new Spry.Widget.ValidationConfirm("sprytf_cpin", "sprytf_pin", {minChars:4, maxChars: 6, validateOn:["blur", "change"]});

//-->
</script>
</html>     