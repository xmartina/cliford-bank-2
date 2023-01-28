<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$self = WEB_ROOT . 'backend/index.php';
?>

<?php

 
function welcome(){
 
   if(date("H") < 12){
 
     return "Good Morning";
 
   }elseif(date("H") > 11 && date("H") < 18){
 
     return "Good Afternoon";
 
   }elseif(date("H") > 17){
 
     return "Good Evening";
 
   }
 
}  
?>
<!doctype html>
<html lang="en">

<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin Panel Dashboard <?php echo $site_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is the first mobile banking application from Fobitechng Team.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * Bankia Application Dashboard - v1.0.0
    =========================================================
    * Product from: Fobitechng Team via info@fobitechng.com
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="<?php echo WEB_ROOT; ?>assets_main.css" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>




<style>
.arrow {
  border: solid green;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
</style>


<style>
.alert {
  padding: 20px;
  background-color: orange;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>


 


</head>
<body>
    
<?php
$n = count($script);
for ($i = 0; $i < $n; $i++) {
	if ($script[$i] != '') {
		echo '<script language="JavaScript" type="text/javascript" src="' . WEB_ROOT. 'backend/library/' . $script[$i]. '"></script>';
	}
}
?>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow" style="background-color: #09dcdf;">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="<?php echo WEB_ROOT; ?>backend/account/" class="nav-link">
                                 
                                <i class='fas fa-chart-line' style='font-size:20px;color:orange'></i>&nbsp;Send Money
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="<?php echo WEB_ROOT; ?>backend/loan/" class="nav-link">
                                <i class='fas fa-piggy-bank' style='font-size:20px;color:orange'></i>&nbsp;
                                Loans
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="<?php echo WEB_ROOT; ?>backend/card/" class="nav-link">
                                 <i class='fas fa-donate' style='font-size:20px;color:orange'></i>&nbsp;
                                Bank Cards
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
										
                                            <img width="42" class="rounded-circle" src="<?php echo WEB_ROOT; ?>images/admin.jpg" alt="">
                                             
                                        </a>
                                      
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Administrator
                                    </div>
                                    
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <a href="<?php echo $self; ?>?logout">  <i class='fas fa-power-off' style='font-size:20px;color:orange'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
           
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    
                </div>
            </div>
        </div>        <div class="app-main">
               

											<div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="<?php echo WEB_ROOT; ?>backend/" class="mm-active">
                                       <i class='fas fa-landmark' style='font-size:20px;color:orange'></i>&nbsp;
                                        Admin Main Menu
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Account Menu</li>
                                	
                                	
                                <li >
                                     <a href="<?php echo WEB_ROOT; ?>backend/adduser/">
                                         <i class='fas fa-piggy-bank' style='font-size:20px;color:orange'></i>&nbsp;
                                        Add New User
                                       
                                    </a>
                                    
                                </li>
                                
                                
                                <li >
                                   <a href="<?php echo WEB_ROOT; ?>backend/user/">
                                        <i class='fas fa-hand-holding-usd' style='font-size:20px;color:orange'></i>&nbsp;
                                        Customers Profile
                                        
                                    </a>
                                   
                                </li>
                                <li >
                                   <a href="<?php echo WEB_ROOT; ?>backend/account/">
                                       <i class='fas fa-money-bill-wave' style='font-size:20px;color:orange'></i>&nbsp;
                                        Customers Accounts 
                                       
                                    </a>
                                  
                                </li>
                                
                                 <li >
                                    <a href="<?php echo WEB_ROOT; ?>backend/trans-status/">
                                       <i class='fas fa-money-bill-wave' style='font-size:20px;color:orange'></i>&nbsp;
                                        Transaction Status
                                     
                                    </a>
                                   
                                </li>
					 
								
								<li >
                                     <a href="<?php echo WEB_ROOT; ?>backend/loan/">
                                         <i class='fas fa-piggy-bank' style='font-size:20px;color:orange'></i>&nbsp;
                                        Loan & Mortage
                                      
                                    </a>
                                   
                                </li>
                                 <li >
                                    <a href="<?php echo WEB_ROOT; ?>backend/notice/">
                                       <i class='fas fa-money-bill-wave' style='font-size:20px;color:orange'></i>&nbsp;
                                        Notify Customer
                                       
                                    </a>
                                </li>
                                
                                
									<li class="app-sidebar__heading">ATM Cards</li>
								<li >
                                   <a href="<?php echo WEB_ROOT; ?>backend/card/">
                                       <i class='fas fa-money-check-alt' style='font-size:20px;color:orange'></i>&nbsp;
                                         Bank Cards
                                        
                                    </a>
                                   
                                </li>
									<li class="app-sidebar__heading">Billing Codes</li>
								<li >
                                    <a href="#">
                                        <i class='fas fa-user-graduate' style='font-size:20px;color:orange'></i>&nbsp;
                                       All Bank Billing Codes
                                        &nbsp;<i class="arrow down"></i>
                                    </a>
                                    <ul >
                                       <li>
                                            <a href="<?php echo WEB_ROOT; ?>backend/cotcode/">
                                                <i class="metismenu-icon"></i>
                                                COT Code
                                            </a>
                                        </li>
                                         <li>
                                            <a href="<?php echo WEB_ROOT; ?>backend/taxcode/">
                                                <i class="metismenu-icon"></i>
                                                TAX Code
                                            </a>
                                        </li>
                                    <li>
                                            <a href="<?php echo WEB_ROOT; ?>backend/imfcode/">
                                                <i class="metismenu-icon"></i>
                                               IMF Code
                                            </a>
                                        </li>
                                         <li>
                                            <a href="<?php echo WEB_ROOT; ?>backend/atccode/">
                                                <i class="metismenu-icon"></i>
                                                ATC Codes
                                            </a>
                                        </li>
                                       
                                   
                                       
                                    </ul>
                                </li>
								
						  	    <li >
                                    <a href="<?php echo WEB_ROOT; ?>backend/telexcode/">
                                         <i class='fas fa-piggy-bank' style='font-size:20px;color:orange'></i>&nbsp;
                                        Telex Code
                                        
                                    </a>
                                  
                                </li>
								
									<li class="app-sidebar__heading">Logout</li>
							
								 
                                <li>
                                    <a href="<?php echo $self; ?>?logout">
                                      <i class='fas fa-power-off' style='font-size:20px;color:orange'></i>&nbsp;
                                        Logout
                                    </a>
                                </li>
                                
                                 
                            </ul>
                        </div>
                    </div>
                </div> 

			   
				
				<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class='fas fa-comments-dollar' style='font-size:28px;color:orange'></i>&nbsp;
                                    </div>
                                    <div><?php echo welcome();  ?> ! Administrator
                                       
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div class="alert">
                                      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                      <strong>Hello!</strong> This is a Restricted Area only for Admin
                                    </div>



                                </div>
                            </div>
                        </div>            
						
						
						
						<?php
														require_once $content;	 
														?>
						
						
                    
                    
                  </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>assets/scripts/main.js"></script></body>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6264e750b0d10b6f3e6f1240/1g1d2f588';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>