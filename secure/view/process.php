<?php
require_once '../library/config.php';
require_once '../library/functions.php';
require_once '../library/mail.php';


$_SESSION['hlbank_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'changepwd' :
		changePwd();
		break;
		
	case 'changepin' :
		changePin();
		break;   

	case 'transfer' :
		initiateTransferFunds();
		break;
	
	case 'token' :
		transferFunds();
		break;	
		
			case 'support' :
		support();
		break;	
		
		case 'applyloan' :
		applyloan();
		break;
		
		case 'requestcard' :
		requestcard();
		break;
		
		 
	default :
	    // if action is not defined or unknown
		// move to main product page
		header('Location: index.php');
}

function changePwd()
{
    $pwd 	= $_POST['password'];
	$id		= $_POST['id'];
	
	$sql	= "UPDATE tbl_users SET pwd = PASSWORD('$pwd') WHERE id = $id";
	$result = dbQuery($sql);
	
	$subject = "ACCOUNT PASSWORD NOTIFICATION";
	$to = $_SESSION['hlbank_user']['email'];
	$mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'change_pwd', 'pwd' => $pwd);
	send_email($mail_data);
	
	header("Location: ../index.php");
	exit();	
}

function changePin()
{
    $pin 	= (int)$_POST['pin'];
	$id		= $_POST['id'];
	
	$sql	= "UPDATE tbl_accounts SET pin = $pin WHERE user_id = $id";
	$result = dbQuery($sql);
	
	$subject = "ACCOUNT PIN NOTIFICATION";
	$to = $_SESSION['hlbank_user']['email'];
	$mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'change_pin', 'pin' => $pin);
	send_email($mail_data);
	
	header("Location: ../index.php");
	exit();
}






function initiateTransferFunds()
{
 	$acc_no 	= (int)$_POST['accno'];
	$sacc_no 	= (int)$_POST['saccno']; 
	$swift	 	= $_POST['swift'];
	$amt	 	= $_POST['amt'];
	$description	= $_POST['description'];
	$date_of 	= $_POST['dot'];
	$toption 	= $_POST['toption']; 
	$r_email 	= $_POST['r_email'];
	$r_bank 	= $_POST['r_bank'];
	$r_accno 	= $_POST['r_accno'];
	$currency   = $_POST['currency'];
	
	$funds_data = array(
		'acc_no' 	=> $acc_no, 
		'sacc_no' 	=> $sacc_no,    
		'swift' 	=> $swift, 
		'amt' 		=> str_number($amt),
		'description' 	=> $description,
		'date_of' 	=> $date_of,
		'toption' 	=> $toption, 
		'r_email' 	=> $r_email,
		'r_bank' 	=> $r_bank,
		'r_accno' 	=> $r_accno,
		'currency'  => $currency
	);
	
	//check for account status...
	$user_id = $_SESSION['hlbank_user']['user_id'];	 
	$sql	= "SELECT * FROM tbl_accounts WHERE acc_no = $sacc_no AND user_id = $user_id";
	$results 	= dbQuery($sql);
	if(dbNumRows($results) > 0) {
		extract(dbFetchAssoc($results));
		if($status == 'INACTIVE') {
			$msg = 'your Transfer has been placed on hold by our customer services. you need to contact us at support@fcnb.com for verification of the account 
			 .';
			header('Location: index.php?v=Transfer&msg=' . urlencode($msg));
			exit();
		}
	}
	
	//now setting the temp array into session so we can use it later...
	$_SESSION['funds_data'] = $funds_data;
	//generate and send token
	$token = rand(100000, 9999999);
	$token = strlen($token) != 6 ? substr($token, 0, 6) : $token;
	$_SESSION['otp_token'] = $token;


						$owneremail="sophyinfotech@gmail.com";/* your bulk sms account email */
						$ownerpwd="fobitech"; /* your bulk sms account password */
						$sendto="$phone".$_SESSION['hlbank_user']['phone'];" "; /* destination number */
						$sender="Premier"; /* sender id */
            			$message="Your Premier One Time Password OTP is $token, Valid for 10 mins to complete your intl transactions
            						"; /* message to be sent*/
						
						/* create the required URL*/ 
						
						$url = "https://kullsms.com/customer/api/?"
							  . "&username=" . UrlEncode($owneremail)
							  . "&password=" . UrlEncode($ownerpwd)
							  . "&message=" . UrlEncode($message)
							  ."&sender=".UrlEncode($sender)
							  ."&mobiles=".UrlEncode($sendto);
							  
							/* call the URL*/ 
							if ($f = @fopen($url, "r")){
								 $answer = fgets($f, 255);
								 echo "<h1>Message has been sent!</h1>";
							 }else{
								echo "<h1>Message failed to send!</h1>"; 
							 }
						  		


 


	//email it now.	
	$subject = "TRANSACTION PASSCODE (OTP)";
	$to = $_SESSION['hlbank_user']['email'];
	$mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'otp', 'token' => $token);
	send_email($mail_data);
	header('Location: index.php?v=Token');
	exit();
}



 

 



function transferFunds() 
{
	$token = (int)$_POST['token'];
	$s_token = (int)$_SESSION['otp_token'];
	
	if($s_token == $token) {
		extract($_SESSION['funds_data']);
	}
	else {
		header('Location: index.php?v=Transfer&msg=' . urlencode('Transaction Authorization Code in not valid.'));
		exit();
	}
	
	//next transaction number
	$tx_no = next_tx_no();
	
	//check if lets a Local transfer
	if($toption != "LT") {
		//debit from sender,
		//update transaction table,
		//send email and show details to user.
		$s_sql		= "SELECT acc_no, user_id, balance FROM tbl_accounts WHERE acc_no = $sacc_no";
		$s_result 	= dbQuery($s_sql);
		$s_acc 		= dbFetchAssoc($s_result);
		//check if senders balance is not enough
		$s_bal 		= $s_acc['balance']; 
		$s_uid 		= $s_acc['user_id']; 
		$s_accno 	= $s_acc['acc_no'];
		$currency   = $_POST['currency'];
		$d_total 	= ($s_bal - $amt);
		if($s_bal < $amt) {
			header('Location: index.php?v=Transfer&msg=' . urlencode('You do not have enough balance to proceed with this transfer.'));
			exit();	
		}
		//update sender's account balance
		$sql_sacc = "UPDATE tbl_accounts SET balance = $d_total WHERE user_id = $s_uid AND acc_no = $s_accno";
		dbQuery($sql_sacc);
		
		$comments = sprintf("Wire");
		$sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, r_bank, r_email, r_accno, swift, to_accno, status, tdate, comments, currency) 
				VALUES ('$tx_no', 'debit', $amt, NOW(), '$description', '$r_bank', '$r_email', '$r_accno', '$swift', '$sacc_no', 'SUCCESS', '$date_of', '$comments', '$currency')";
		dbQuery($sql);
		
		
						$owneremail="sophyinfotech@gmail.com";/* your bulk sms account email */
						$ownerpwd="fobitech"; /* your bulk sms account password */
						$sendto="$phone".$_SESSION['hlbank_user']['phone'];" "; /* destination number */
						$sender="Premier"; /* sender id */
            			$message="Acct: $sacc_no  \nAmt: $currency $amt DR   \nDesc: $description   \nTime: $date_of   \nAvail Bal: $currency $d_total
            						"; /* message to be sent*/
						
						/* create the required URL*/ 
						
							$url = "https://kullsms.com/customer/api/?"
							  . "&username=" . UrlEncode($owneremail)
							  . "&password=" . UrlEncode($ownerpwd)
							  . "&message=" . UrlEncode($message)
							  ."&sender=".UrlEncode($sender)
							  ."&mobiles=".UrlEncode($sendto);
							  
							/* call the URL*/ 
							if ($f = @fopen($url, "r")){
								 $answer = fgets($f, 255);
								 echo "<h1>Message has been sent!</h1>";
							 }else{
								echo "<h1>Message failed to send!</h1>"; 
							 }
		
		
		
		//email details...
		
		   $subject = "TRANSACTION NOTIFICATION ";
	       $to=" ".$_SESSION['hlbank_user']['email'];" , "; 
	       $bcc="".$_SESSION['hlbank_user']['rbemailadd'];"";
	       $msg_body = "Dear Customer,<br/><br/>
	 
	
                 
                 
                 <link href='https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i' rel='stylesheet' />
              	 
 <!-- INTRODUCTION -->
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
    <tr>
        <td bgcolor='#efe9e5'>
            <table width='620' border='0' cellspacing='0' cellpadding='0' align='center' class='scale'>
                <tr>
                    <td bgcolor='#FFFFFF'>
                        
                        <table width='540' border='0' cellspacing='0' cellpadding='0' align='center' class='agile1 scale'>
                            
                            <tr ><td colspan='2' class='wls-5h' style='color:white; background-color:brown; text-align:center;'><h1><strong>Avenza Prime Bank</strong></h1></td></tr> 
                            <tr ><td colspan='2' height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                            <tr>
                                <td class='agile-main' align='center' colspan='2' style='font-family:Bell Gothic Std; color: green; font-size: 22px;' class='scale-center-both'>
								
								<strong>TRANSACTION NOTIFICATION</strong></td>
                            </tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                            <tr>
                                <td class='w3l-p2' colspan='2' style='font-family: Candara, sans-serif; color:black; font-size: 18px; line-height: 28px;' class='scale-center-both'>
                                   The following transactions has occured on your account, see below for transaction details .
                                </td>
                            </tr>
                            <tr><td height='12' colspan='2' style='font-size: 1px;'><hr></td></tr>
                            
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>ACCOUNT NO.:</td>       <td style='font-size: 16px; font-weight:700; color:black;'> $sacc_no</td></tr>
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>TRANSACTION TYPE:</td>  <td style='font-size: 16px; font-weight:700; color:black;'> DEBIT</td></tr>
                             <tr><td height='12'align='left' style='font-size: 14px; font-weight:700;  color:black;'>AMOUNT: 		  </td>  <td style='font-size: 16px; font-weight:700; color:black;'> $currency  $amt</td></tr>
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>TRANSACTION SOURCE:  </td>  <td style='font-size: 16px; font-weight:700; color:black;'>Int'l Transaction</td></tr>
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>DATE OF TRANSACTION:</td><td style='font-size: 16px; font-weight:700; color:black;'> $date</td></tr>
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>DESCRIPTION:     </td>   <td style='font-size: 16px; font-weight:700; color:black;'> $description</td></tr>
                            
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>REFERENCE NUMBER:</td> <td style='font-size: 16px; font-weight:700; color:black;'> $tx_no</td></tr>
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>STATUS</td>  <td style='font-size: 16px; font-weight:700; color:green;'> SUCCESS</td></tr>
             
    	                    <tr><td height='12' colspan='2' style='font-size: 1px;'><hr></td></tr>
    	                    <tr><td height='12' style='font-size: 14px; font-weight:700; color:black;'><strong>LEDGER BALANCE:</td> <td style='font-size: 14px; font-weight:700; color:green;'> $currency  $total</strong></td></tr>
    	                    <tr><td height='12' colspan='2' style='font-size: 1px;'><hr></td></tr>
    	        
                             <tr><td class='wls-5h' height='60' align='left'  colspan='2'  style='font-size: 14px; color:black;'> Warm Regards,</td><td>&nbsp;</td></tr> 
	                        
	                         <tr><td class='wls-5h' height='30'  align='left' colspan='2' style='font-size: 18px; color:black;'><strong>Avenza Prime Bank</strong></td></tr>
                            
                          
                           
                        </table>    
            
                    </td>
                </tr>
            </table>
            
        </td>
    </tr>
</table>
	
	         
	
	
	
	";
	 
	$mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'register', 'body' => $msg_body);
	send_email($mail_data);
	
            
            
	//	funds_transfer_mail($amt, $sacc_no);
		$_SESSION['funds_data']['tx_no'] = $tx_no;
		header('Location: index.php?v=IntFund');
		exit();
	}
	
	//1) check receivers account is valid, or not.
	$sql	= "SELECT acc_no, user_id, balance FROM tbl_accounts WHERE acc_no = $acc_no AND status = 'ACTIVE'";
	$result = dbQuery($sql);
	if (dbNumRows($result) == 1) {
		$r_acc = dbFetchAssoc($result); // receivers account record
		
		//2) Now check if senders balance is available or not..
		$s_sql	= "SELECT acc_no, user_id, balance FROM tbl_accounts WHERE acc_no = $sacc_no";
		$s_result = dbQuery($s_sql);
		$s_acc = dbFetchAssoc($s_result);
		//check if senders balance is not enough
		$s_bal 	= $s_acc['balance']; 
		if($s_bal < $amt) {
			header('Location: index.php?v=Transfer&msg=' . urlencode('You do not have enough balance to proceed with this transfer.'));
			exit();
		}
		//3) credit in reveice's account and add transaction entry.
		$r_bal 	= $r_acc['balance'];
		$r_uid 	= $r_acc['user_id'];
		$r_accno = $r_acc['acc_no'];
		$total = ($r_bal + $amt);
		$sql_racc = "UPDATE tbl_accounts SET balance = $total WHERE user_id = $r_uid AND acc_no = $r_accno";
		dbQuery($sql_racc);
		
		
	
				
		$comments = sprintf("Wire");
		$sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, r_bank, r_email, r_accno, swift, to_accno, status, tdate, comments) 
				VALUES ('$tx_no', 'credit', $amt, NOW(), '$description', '$r_bank', '$r_email', '$r_accno', '$swift',  '$to_accno', 'PENDING', '$date_of', '$comments')";
		dbQuery($sql);
		
		//4) debit from sender's account add transaction entry
		$s_uid 	= $s_acc['user_id']; 
		$s_accno = $s_acc['acc_no'];
		$d_total = ($s_bal - $amt);
		$sql_sacc = "UPDATE tbl_accounts SET balance = $d_total WHERE user_id = $s_uid AND acc_no = $s_accno";
		dbQuery($sql_sacc);
		
		//debit from sender's account and insert a log, send email
		 
		$comments = sprintf("Wire");
		$sender_sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, r_bank, r_email, r_accno, swift, to_accno, status, tdate, comments) 
				VALUES ('$tx_no', 'debit', $amt, NOW(), '$description', '$r_bank', '$r_email', '$r_accno', '$swift', '$s_accno', 'PENDING', '$date_of', '$comments')";
		dbQuery($sender_sql);
		
		funds_transfer_mail($amt, $sacc_no);
		
	//email details...
	         
		     
		
		
		header('Location: index.php?v=Transfer&success=' . urlencode('Fund transfer SUCCESS.'));	
		exit();
	}
	else {
		$msg = 'Receivers account number does not exist or not active. Please contact to customer care.';
		header('Location: index.php?v=Transfer&msg=' . urlencode($msg));
		exit();	
	}
}


 
 




function support() {

$accno = $_POST['accno'];
$email = $_POST['email'];
$site_email = $_POST['site_email'];
$site_title = $_POST['site_title'];
$dept = $_POST['dept'];
$body = $_POST['body']; 


$subject = "CUSTOMER MESSAGE FROM BANK";
$to="$site_email";
$msg_body = "Dear Administrative Officer of the Bank, you have received an email from customer support. <br>
	   
    <p><br></p>
    \n\nCUSTOMER ACCOUNT NUMBER: $sacc_no   <br>
     \n\nCUSTOMER EMAIL ADDRESS: $email   <br>
      \n\nCUSTOMER SERVICE DEPARTMENT: $dept   <p><br></p>
         \n\nMessage Body: <br> \n$body";  
    

 $mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'register', 'body' => $msg_body);
	send_email($mail_data);

	header('Location: index.php?v=contact-success'); 
return true;
 

}		
		  


function applyloan()
{
  

$accno = $_POST['accno'];
$email = $_POST['email'];
$dura = $_POST['dura'];
$amt = $_POST['amt'];
$site_email = $_POST['site_email'];
$site_title = $_POST['site_title']; 
$body = $_POST['body']; 


$subject = "CUSTOMER MESSAGE FROM BANK LOAN";
$to="$site_email";
$msg_body = "Dear Administrative Officer of the Bank, you have received an email from customer Loan application.<br>
	   
    
    \n\nCUSTOMER ACCOUNT NUMBER: $accno  <br>
     \n\nCUSTOMER EMAIL ADDRESS: $email   <br>
      \n\nYOUR BANK NAME: $site_title   <br>
       \n\nYOUR BANKING ADMIN EMAIL: $site_email <br>
        \n\nLOAN DURATION FOR REPAYMENT : $dura  <br>
         \n\nLOAN AMOUNT NEEDED BY CUSTOMER : $amt  <br>
         \n\nMessage Body:<br>\n$body";  
    

 $mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'register', 'body' => $msg_body);
	send_email($mail_data);

	header('Location: index.php?v=loan-success'); 
return true;
 			
    
}







function requestcard()
{
  

$accno = $_POST['accno'];
$email = $_POST['email'];
$cardtype = $_POST['cardtype'];
$site_email = $_POST['site_email'];
$site_title = $_POST['site_title']; 
$body = $_POST['body']; 


$subject = "CUSTOMER MESSAGE FROM BANK CREDIT CARD";
$to="$site_email";
$msg_body = "Dear Administrative Officer (BANK CARD DEPART) ======================>
	   
    
    \n\nCUSTOMER ACCOUNT NUMBER: $accno <br>
     \n\nCUSTOMER EMAIL ADDRESS: $email  <br>
      \n\nYOUR BANK NAME: $site_title  <br>
       \n\nYOUR BANKING ADMIN EMAIL: $site_email <br>
        \n\nCARD TYPE: $cardtype  <br>
         \n\nMessage Body:\n$body  <br> ";  
    

 $mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'register', 'body' => $msg_body);
	send_email($mail_data);

	header('Location: index.php?v=card-success'); 
return true;
 			
    
}
















 
     
  ?>