<?php
require_once '../../library/config.php';
require_once '../library/functions.php';


$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkAdmin();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'adduser' :
		$content    = 'addnew.php';
		$pageTitle  = 'add new user';
	break;
	
	case 'success.php' :
		$content    = 'success.php';
		$pageTitle  = 'regitsre Success Page';
	break;
	
 
	
	default :
		$content 	= 'addnew.php';		
		$pageTitle 	= 'register client';
}

$script    = array('user.js','jquery.min.js');
require_once '../include/template.php';
?>