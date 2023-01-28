<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkAdmin();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'detail' :
		$content    = 'card-list.php';
		$pageTitle  = 'credit cards lists';
	break;
	
 
	
	default :
		$content 	= 'card-list.php';		
		$pageTitle 	= 'cards menu';
}

$script    = array('user.js','jquery.min.js');
require_once '../include/template.php';
?>