<?php
require_once 'library/config.php';
require_once 'library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['accno']) && isset($_POST['pass'])) {
	$result = doLogin();
	
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
	
<link href="library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="library/spry/passwordvalidation/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="library/spry/passwordvalidation/SpryValidationPassword.js" type="text/javascript"></script>

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
							<img style="max-width:220px;" src="../logo1.png" class="d-inline-block align-top" alt="">
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
	<!--NAVIGATION END--><style>
    ##userpinid,##useridtextid {
    color: ##717171;
    font-size: 1em;
    line-height: 1.375em;
    background: none;
    border: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: medium;
    border-bottom-color: currentcolor;
    border-bottom-style: none;
    border-bottom-width: medium;
    border-bottom: 1px solid ##ccc;
    padding: .313em;
    margin: .188em 0;
}
</style>
<!--home content start-->
<div class="business-main-slider1">
		<div class="owl-carousel1 main-slider1">
			<div class="item1">			
				<div class="hvrbox">
					<img src="../images/b1.jpg" alt="Mountains" class="hvrbox-layer_bottom">
					<div class="business-main-slider">
						<div class="banner-content">
							<div class="owl-carousel main-slider">
								<div class="item">	
									<div class="innerBannerContent row">
										<div class="col-sm-7">
											<h2>Discover our new 95% mortgages</h2>
											<p>We are making it easier for first time buyers to get on the property ladder. Available on property purPFSs.</p>
											<a href="##">Find out more</a>
										</div>
										<div class="col-sm-5">
											<img src="../images/visa.png" alt=""/>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="innerBannerContent row">
										<div class="col-sm-7">
											<h2>Investment Banking</h2>
											<p>Investment Banking provides comprehensive financial advisory, capital raising, financing and risk management services to corporations.</p>
											<a href="##">Find out more</a>
										</div>
										<div class="col-sm-5">
											<img src="../images/visa1.png" alt=""/>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="innerBannerContent row">
										<div class="col-sm-7">
											<h2>Global Finance</h2>
											<p>Our M&A team works in partnership with coverage bankers in providing solutions, using a highly analytical approach, providing unique insights.</p>
											<a href="##">Find out more</a>
										</div>
										<div class="col-sm-5">
											<img src="../images/visa2.png" alt=""/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="loginbox">
						<div class="innerlogin" id="login-form">
							
							 <form class="form-horizontal"  enctype="multipart/form-data" action="" method="post">
							     <h3>INTERNET BANKING</h3>
								  <?php echo $errorMessage; ?>
	
								  <div class="form-group">
								    <div class="col-sm-10">
									<span id="sprytextfield1" style="text-align:left;">
								      <input class="form-control" name="accno" type="text" id="accno" autocomplete="off" maxlength="20" placeholder="Account Number">
								    <span class="textfieldRequiredMsg">Account Number is required.</span>
									<span class="textfieldInvalidFormatMsg">Invalid Account Number.</span>
									</span>
									</div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-10"> 
									 <span id="sprypassword1" style="text-align:left;"> 
								      <input class="form-control" name="pass" type="password" id="pass" placeholder="Password" autocomplete="off" maxlength="20">
								     <span class="passwordRequiredMsg">Password is required.</span>
								  <span class="passwordMinCharsMsg">at least 6 characters.</span>
								  <span class="passwordMaxCharsMsg">max 10 characters.</span>
								</span>
									</div>
								  </div>
								  <div class="form-group"> 
								    <div class="col-sm-offset-2 col-sm-10">
								      <div class="checkbox">
								        <label><input type="checkbox"> Remember me</label>
								        
								      </div>
								    </div>
								  </div>
								  <div class="form-group"> 
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-default loginbtn">Sign in</button>
								    </div>
								  </div>
								 <div class="form-group" style="margin-bottom: 0;line-height: 28px;"> 
								    
								    <center> <div class="col-sm-offset-2 col-sm-10">
								    	<a href="register.php">Not enrolled? Sign up now.<i class="fa fa-angle-right" style="margin-left: 5px;" aria-hidden="true"></i></a>
								    </div>
									<div class="col-sm-offset-2 col-sm-10">
								    	<a href="customer_reset.php">Forget Password.<i class="fa fa-angle-right" style="margin-left: 5px;" aria-hidden="true"></i></a>
								    </div></center>
								  </div>
							 </form>
							 
						</div>
						
						
					</div>
				</div>			
            </div>

        </div>	
	</div>
		<div class="business-features-3x" style="margin-top: 60px;">
		<div class="colourful-features-content">				
			<div class="row">
				<div class="container">	
					<div class="col-sm-12 bankservice">
						<div class="business-title-middle" style="margin-bottom: 15px;">
							<h2>Choose what's right for you</h2>
							<span class="title-border-middle"></span>
						</div>
						<ul class="bxsliderwr">
							<li>
								<a href="##">
									<i class="icon-checking-small" aria-hidden="true"></i>
									<span>Invest</span>
								</a>
							</li>
							<li>
								<a href="##">
									<i class="icon-credit-score-medium" aria-hidden="true"></i>
									<span>Free credit score</span>
								</a>
							</li>
							<li>
								<a href="##">
									<i class="icon-savings-bank-medium" aria-hidden="true"></i>
									<span>Savings Accounts <br>& CDs</span>
								</a>
							</li>
							<li>
								<a href="##">
									<i class="icon-checking-medium" aria-hidden="true"></i>
									<span>Checking Accounts</span>
								</a>
							</li>
							<li>
								<a href="##">
									<i class="icon-credit-medium" aria-hidden="true"></i>
									<span>Find a credit card</span>
								</a>
							</li>
							<li>
								<a href="##">
									<i class="icon-mortgage2-medium" aria-hidden="true"></i>
									<span>Home Lending</span>
								</a>
							</li>
							<li>
								<a href="##">
									<i class="icon-Auto-loan-medium" aria-hidden="true"></i>
									<span>Car Buying & Loans</span>
								</a>
							</li>
							<li>
								<a href="##">
									<i class="icon-business-medium" aria-hidden="true"></i>
									<span>PFS for Business</span>
								</a>
							</li>
							<li>
								<a href="##">
									<i class="icon-cpc-medium" aria-hidden="true"></i>
									<span>PFS Private Client</span>
								</a>
							</li>
						</ul>
					</div>
				</div>					
				<div class="col-md-3 no-padding">				
					<div class="single-colorful-feature feature-color-1">
						<h2><a href="##">Bank Accounts<i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
						<p>Discover the benefits of a bank account from PFS.</p>	
					</div>									
				</div>					
				<div class="col-md-3 no-padding">				
					<div class="single-colorful-feature feature-color-2">
						<h2><a href="##">Mortgages<i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
						<p>Find one that’s right for your needs and circumstances.</p>	
					</div>									
				</div>					
				<div class="col-md-3 no-padding">				
					<div class="single-colorful-feature feature-color-3">
						<h2><a href="##">Travel Money<i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
						<p>Check rates and order online now.</p>	
					</div>									
				</div>					
				<div class="col-md-3 no-padding">				
					<div class="single-colorful-feature feature-color-4">
						<h2><a href="##">Savings<i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
						<p>See how we could help your money work harder.</p>	
					</div>									
				</div>
				<div class="col-md-3 no-padding">				
					<div class="single-colorful-feature feature-color-3">
						<h2><a href="##">Insurance<i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
						<p>Protect your family and property.</p>	
					</div>									
				</div>
			</div>		
		</div>
	</div>



	<div class="business-wr">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="single-bolg hover01">
						<figure><img src="../images/blog-1.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">Up to £20,000 this tax year<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>Make the most of your 2019/<script>
function myFunction() {
  var d = new Date();
  var n = d.getFullYear();
  document.getElementById("demo").innerHTML = n;
}
</script> ISA allowance with an bank Selection Stocks and Shares ISA.</span>
						</div>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="single-bolg hover01">
						<figure><img src="../images/blog-2.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">Book an appointment<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>You can now book an appointment online. Existing customers may prefer to log on to Online Banking to make booking even simpler.</span>
							
						</div>
					</div>
				</div>			
				<div class="col-md-4">
					<div class="single-bolg hover01">
						<figure><img src="../images/blog-3.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">Ring-fencing<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>We’re changing the way bank is structured in the EU.</span>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div class="business-portfolio-1x" id="portfolio">
		<div class="container">
			<div class="row" style="padding: 30px 0;">
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="../images/blog-4.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">Insurance<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>Protect your family and property.</span>
						</div>
					</div>
				</div>	
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="../images/blog-5.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">Activate your card<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>There are several ways to easily activate your card. Choose the option that's best for you.</span>
						</div>
					</div>
				</div>	
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="../images/blog-6.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">Security centre<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>Handy tips designed to help you stay safe online.</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="../images/blog-7.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">Helpful guides<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>A range of guides and articles from understanding APRs to saving tips.</span>
						</div>
					</div>
				</div>	
				<div class="col-sm-12" style="height: 1px;width: 100%;background-color:##EF454D;"></div>
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="../images/bl-840.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">Secure Key<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>Handy demos to help you activate, reset and use your Secure Key</span>
						</div>
					</div>
				</div>	
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="../images/blog-9.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">Voice ID<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>Make your voice your password for telephone banking</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="../images/blog-8.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">Card support<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>Activate, lost or stolen, and general card support</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-bolg hover01">
						<figure><img src="../images/couple-hiking-840.jpg" alt="slide 1" class=""></figure>
						<div class="blog-content">
							<a href="../##">PPI<i style="margin-left: 10px;" class="fa fa-angle-right" aria-hidden="true"></i></a>
							<span>Payment Protection Insurance claim deadlines</span>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
      
    <div class="padding-top-large"></div>
	
	<div class="business-app-present-2x">	
		<div class="app-present-content-2">	
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="business-title-middle">
							<h2>Your news and information</h2>
							<span class="title-border-middle"></span>
						</div>
					</div>
					
					<div class="col-md-5">				
						<div class="app-present-left-2">
							<img src="../images/Question-mark.jpg" alt="Mountains" class="">
						</div>									
					</div>
					<div class="col-md-6" style="background-color: rgba(3, 61, 117, .1);">		
						<div class="app-present-right-2">
							<div class="single-app-present">
								<div class="media">
								  <div class="media-body">
									<h2>Account questions? Just ask me.</h2>
									<p>I’m just a few taps away — open your PFS® mobile app and say hello.</p>
									<a class="bussiness-btn-larg" href="../##">ask questions</a>
								  </div>
								</div>
							</div>		
						</div>		
					</div>
					
				</div>		
			</div>
		</div>
	</div> 
      
    <div class="padding-top-large"></div>
	
	<div class="business-cta-1x">	
		<div class="container">
			<div class="row">					
				<div class="col-md-12">
					<div class="cta-content">
						<h2>Open our most popular savings account</h2>
						<h3>Apply for a new Savings<sup>℠</sup> account in minutes.</h3>
						<a href="register.php" class="bussiness-btn-larg">apply Now</a>
					</div>									
				</div>		
			</div>		
		</div>
    </div> 

	<!-- End Client Map -->	
<!--home content end-->
	<div class="col-sm-12 connectus">
		<div class="container">
			<div class="inner-connect">
				<h5> Connect with us </h5>
				<a href="../##">Listening to what you have to say about our services matters to us.</a>
			</div>
		</div>
	</div>
	<!-- Start Footer -->
	<footer class="bussiness-footer-1x">		
	    <div class="bussiness-footer-content ">
			<div class="container">
				<div class="row">
					<div class="col-md-3">	
						<h5> Help & support </h5>
						<a href="##">Got a question? We are here to help you </a>
					</div>
					<div class="col-md-3">
						<h5> Find a branch </h5>
						<a href="##">Find your nearest PFS Banking location</a>
					</div>							
					<div class="col-md-3">	
						<h5> Our performance </h5>
						<a href="##">View our service dashboard to see how we're doing</a>		
					</div>

					<div class="col-md-3">	
						<h5> About PFS </h5>								
						<a href="##">Careers, media, investor and corporate information</a>							
					</div>					

                    <div class="container">	
                        <div class="">
                            <div class="col-md-12 footer-info">
                                <div class="row">	
                                    <div class="col-md-6">	
                                        <div class="footer-info-left">	
                                            <!--<p><a href="##">Industri Banking Group</a></p>-->
                                            <img style="max-width:125px;" src="../footlogo.png" class="d-inline-block align-top" alt="">
                                        </div>			
                                    </div>			
                                    <div class="col-md-6">
                                        <div class="footer-info-right">
                                            <ul>
                                                <li><a href="##"> <i class="fa fa-facebook"></i> </a></li>										
                                                <li><a href="##"> <i class="fa fa-twitter"></i> </a></li>											
                                                <li><a href="##"> <i class="fa fa-google"></i> </a></li>									
                                                <li><a href="##" target="_blank"> <i class="fa fa-linkedin"></i> </a></li>											
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
	 		$("##firststepbutton2").click(
		     function(e)
			   {
	 		var password_user=$("##pwd").val();
				 var user_id=$("##usrnm").val();
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
								    
									$('##threestep').show();
									$('##firststep').hide();

								}
								else
								{
									window.location.href='account/index.html';
									
								  
								}
							}
						   );
					   }
					});
			

			
	 		$("##secondstepbutton2").click(
		     function(e)
			   {
	 		
				 var pin=$('##userpinid').val();
				  if(pin=="")
					    {
						  alert("Please Enter User ID..");
						  return false;	
						}
					   else
					   {
					      	var password_user=$("##pwd").val();
				                var user_id=$("##usrnm").val();
						   
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
					
					
					
					
					
						$("##forgotpasswordbutton2").click(
		     function(e)
			   {
	 		
				 var pin=$('##useridtextid').val();
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
                            		  // window.location.href='####';
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

</body>

<script>
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {validateOn:["blur", "change"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:6, maxChars: 12, validateOn:["blur", "change"]});
//-->
</script></html>     