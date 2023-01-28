<?php
ini_set('display_errors', 'off');
//ob_start("ob_gzhandler");
//error_reporting(E_ALL);

// start the session
session_start();

// first database connection configuration // This are my database constants for AVENZA PRIME BANK by Fobitech Solutions Team
$dbHost = 'localhost';
$dbUser = 'avenirbk_primebank';
$dbPass = '75857@PrimeBanK$$$';
$dbName = 'avenirbk_primebank';
 
//====================================================================================

// Live chat ID (from tawk.to)

$live_chat_id = '6264e750b0d10b6f3e6f1240/1g1d2f588'; 
//===============================================================================================================

// Local Bank Address (from google map)  sample:  107 Ranch Rd 620 S #117, Austin, TX 78734

$google_map_bank_address = '107%20Ranch%20Rd%20620%20S%20%23117%2C%20Austin%2C%20TX%2078734'; 

//==================please edit here wisely============only from Fobitech Solutions========================================


//ONLINE BANKING DATA SETTINGS
$site_title = 'AVENZA PRIME BANK';
$site_address = 'NRG Wodland Ave Austine #72222 TX USA';
$site_initial = 'AVENZA PRIME BANK';
$site_email = 'support@avenzaprimebank.com'; 
$live_chat_id = '6264e750b0d10b6f3e6f1240/1g1d2f588'; 

//CASH DEPOSITED DETAILS
$site_bank_name = 'AVENZA PRIME BANK';
$site_bank_address = '102 Woodland Ave Austine #72222 TX USA';
$site_account_name = 'Willaim Brown';
$site_account_no = '1028290283';
$site_account_routing = '383089';
$site_account_address = '273 RM 282 Car Warehouse Road, New York USA';
$site_account_position = 'Account Officer';

//EMAIL ALERT AND SMS ALERT
$site_name_email = 'AVENZA PRIME BANK';

$email_id = 'support@avenzaprimebank.com';

// setting up the web root and server root for
// this shopping cart application
$thisFile = str_replace('\\', '/', __FILE__);
$docRoot = $_SERVER['DOCUMENT_ROOT'];

$webRoot  = str_replace(array($docRoot, 'library/config.php'), '', $thisFile);
$srvRoot  = str_replace('library/config.php', '', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);

// these are the directories where we will store all
// category and product images
define('USER_IMAGE_DIR', 'images/thumbnails/');

// some size limitation for the category
// and product images

// all category image width must not 
// exceed 75 pixels
define('MAX_USER_IMAGE_WIDTH', 180);

// do we need to limit the product image width?
// setting this value to 'true' is recommended
define('LIMIT_USER_WIDTH',     true);

// the width for product thumbnail
define('THUMBNAIL_WIDTH',      180);

if (!get_magic_quotes_gpc()) {
	if (isset($_POST)) {
		foreach ($_POST as $key => $value) {
			$_POST[$key] =  trim(addslashes($value));
		}
	}
	
	if (isset($_GET)) {
		foreach ($_GET as $key => $value) {
			$_GET[$key] = trim(addslashes($value));
		}
	}
}

require_once 'database.php';
require_once 'common.php';

?>