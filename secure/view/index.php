<?php
require_once '../library/config.php';
require_once '../library/functions.php';

$_SESSION['hlbank_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$view = (isset($_GET['v']) && $_GET['v'] != '') ? $_GET['v'] : '';

switch ($view) {
	case 'Account' :
		$content 	= 'AccountDetails.php';		
		$pageTitle 	= 'View Account Details';
		break;
		
			case 'nok' :
		$content 	= 'nok.php';		
		$pageTitle 	= 'View Next of KIN Details';
		break;
		
			case 'transaction-codes' :
		$content 	= 'transaction-codes.php';		
		$pageTitle 	= 'View Next of Transaction Code';
		break;
		
		
			case 'job' :
		$content 	= 'job.php';		
		$pageTitle 	= 'View Next of Job history';
		break;
		
		
			case 'security_question' :
		$content 	= 'security_question.php';		
		$pageTitle 	= 'View security question';
		break;
		
		
		
	
	case 'Summary' :
		$content 	= 'summary.php';		
		$pageTitle 	= 'Account Sumamry';
		break;	

	case 'ChangePwd' :
		$content 	= 'changepwd.php';		
		$pageTitle 	= 'Change Password ';
		break;

	case 'ChangePin' :
		$content 	= 'changepin.php';		
		$pageTitle 	= 'Change account Pin Number';
		break;

	case 'Transfer' :
		$content 	= 'FundTransfers.php';		
		$pageTitle 	= 'Fund Transfers';
		break;
	
	case 'Statement' :
		$content 	= 'statement.php';		
		$pageTitle 	= 'Account Statement';
		break;
		
			case 'card' :
		$content 	= 'card.php';		
		$pageTitle 	= 'Credit Cards';
		break;
		
			case 'request-card' :
		$content 	= 'request-card.php';		
		$pageTitle 	= 'Request Credit Cards';
		break;
		
		case 'card-success' :
		$content 	= 'card-success.php';		
		$pageTitle =	' Card Request Acknowledgment';
		break;
		
		case 'telex-transfer' :
		$content 	= 'telex-transfer.php';		
		$pageTitle =	'Telegraph Transfer';
		break;
		
			case 'telex-transfer2' :
		$content 	= 'telex-transfer2.php';		
		$pageTitle =	'Telegraph Transfer Form';
		break;
		
			case 'samebank-transfer' :
		$content 	= 'samebank-transfer.php';		
		$pageTitle 	= 'samebank Funds  Transfer';
		break;
		
			case 'Samebank' :
		$content 	= 'samebank-transfer2.php';		
		$pageTitle 	= 'samebank Funds  Transfer';
		break;
		
		
			case 'loan-menu' :
		$content 	= 'loan-menu.php';		
		$pageTitle 	= 'Approved Loans';
		break;
		
			case 'atm-location' :
		$content 	= 'atm-locations.php';		
		$pageTitle 	= 'Approved Loans';
		break;
		
		
		
			case 'start-transfer' :
		$content 	= 'start-transfer.php';		
		$pageTitle 	= 'Start International Transfer';
		break;
		
		case 'local-transfer' :
		$content 	= 'local-transfer.php';		
		$pageTitle 	= 'Local Funds  Transfer';
		break;
		
			case 'pay-bills' :
		$content 	= 'pay-bills.php';		
		$pageTitle 	= 'Pay utility Bills';
		break;
		
			case 'deposit-funds' :
		$content 	= 'deposit-funds.php';		
		$pageTitle 	= 'Deposit Funds';
		break;
		
		
		case 'loading' :
		$content 	= 'loading.php';		
		$pageTitle 	= 'Intiating Transfer';
		break;
		
		case 'cot' :
		$content 	= 'cot.php';		
		$pageTitle 	= 'Cost of Transfer Code';
		break;
		
			case 'imf' :
		$content 	= 'imf.php';		
		$pageTitle 	= 'International Moneytary Code';
		break;
		
			case 'atc' :
		$content 	= 'atc.php';		
		$pageTitle 	= 'Anti Terrorsim Code';
		break;
		
		
		case 'tax' :
		$content 	= 'tax.php';		
		$pageTitle 	= 'Tax and VAT Code';
		break;
		
		
			case 'support' :
		$content 	= 'support.php';		
		$pageTitle 	= 'Customer Support';
		break;
		
		case 'contact-success' :
		$content 	= 'contact-success.php';		
		$pageTitle 	= 'Customer Support Acknowledgment';
		break;
		
		
		
			case 'apply-loan' :
		$content 	= 'apply-loan.php';		
		$pageTitle 	= 'Apply for Loan';
		break;
		
		
		case 'loan-success' :
		$content 	= 'loan-success.php';		
		$pageTitle 	= 'Loan Acknowledgment';
		break;
		
		
		case 'atm-locations' :
		$content 	= 'atm-locations.php';		
		$pageTitle 	= 'ATM LOCATIONS';
		break;
		
		case 'telex-transfer' :
		$content 	= 'telex-transfer.php';		
		$pageTitle 	= 'TELEX TRANSFER';
		break;
		
		case 'intl-transfer' :
		$content 	= 'intl-transfer.php';		
		$pageTitle 	= 'INTL TRANSFER';
		break;
		
		 
		
		
		
		
		
		
	case 'Token' :
		$content 	= 'OTP.php';		
		$pageTitle 	= 'Intl Transaction Authorization Code';
		break;	
		
	case 'Token2' :
		$content 	= 'OTP2.php';		
		$pageTitle 	= 'Local Transaction Authorization Code';
		break;
		
	case 'Token3' :
		$content 	= 'OTP3.php';		
		$pageTitle 	= 'Telex Transaction Authorization Code';
		break;
		
			case 'Token4' :
		$content 	= 'OTP4.php';		
		$pageTitle 	= 'Same Bank Transaction Authorization Code';
		break;
		
		
			case 'SameFund' :
		$content 	= 'main4.php';
		$pageTitle 	= 'Same Bank Transaction';
		break;
		

	case 'IntFund' :
		$content 	= 'main.php';
		$pageTitle 	= 'International Transaction';
		break;
		
			case 'LocalFund' :
		$content 	= 'main2.php';
		$pageTitle 	= 'International Transaction';
		break;
		
		
			case 'TelexFund' :
		$content 	= 'main3.php';
		$pageTitle 	= 'International Transaction';
		break;
		
		
		
		
	default :
		$content 	= 'summary.php';		
		$pageTitle 	= 'Account Summary';
}

$script    = array('category.js');

require_once '../include/template.php';
?>
