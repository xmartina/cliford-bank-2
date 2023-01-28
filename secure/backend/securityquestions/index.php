<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkAdmin();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'detail' :
		$content    = 'list.php';
		$pageTitle  = 'List of Security Question';
	break;
	
 
	
	default :
		$content 	= 'list.php';		
		$pageTitle 	= 'list of Security Questions';
}

$script    = array('user.js','jquery.min.js');
require_once '../include/template.php';
?>