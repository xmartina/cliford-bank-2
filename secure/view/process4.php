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

 


function initiateTransferFunds()
{
 	$acc_no 	= (int)$_POST['accno'];
	$sacc_no 	= (int)$_POST['saccno'];
	$rbname 	= $_POST['rbname'];
	$rname	 	= $_POST['rname'];
	$swift	 	= (int)$_POST['swift'];
	$amt	 	= $_POST['amt'];
	$description	= $_POST['description'];
	$date_of 	= $_POST['dot'];
	$toption 	= $_POST['toption'];
	$currency = $_POST['currency'];
	$rcountry 	= $_POST['rcountry'];
	$rstate 	= $_POST['rstate'];
	$remail 	= $_POST['remail'];
	$currency   = $_POST['currency'];
	
	$funds_data = array(
		'acc_no' 	=> $acc_no, 
		'sacc_no' 	=> $sacc_no,
		'rbname' 	=> $rbname, 
		'rname' 	=> $rname, 
		'swift' 	=> $swift, 
		'amt' 		=> str_number($amt),
		'description' 	=> $description,
		'date_of' 	=> $date_of,
		'toption' 	=> $toption,
		
		'rcountry' 	=> $rcountry,
		'rstate' 	=> $rstate,
		'remail' 	=> $remail,
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


    	$username="vtno8023";/* your bulk sms account email */
		$password="2sBjZimA"; /* your bulk sms account password */
		$to=" ".$_SESSION['hlbank_user']['phone'];" "; /* destination number */
		$from="PREMIER"; /* sender id */
		$content="Your Premier One Time Password OTP is $token, Valid for 10 mins to complete your transactions
            						"; /* message to be sent*/
						
						/* create the required URL*/ 
						
						$url = "https://http-api.d7networks.com/send?"
						  . "&username=" . UrlEncode($username)
						  . "&password=" . UrlEncode($password)
						  . "&content=" . UrlEncode($content)
						  ."&from=".UrlEncode($from)
						  ."&to=".UrlEncode($to);
							  
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
	header('Location: index.php?v=Token4');
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
		$d_total 	= ($s_bal - $amt);
		if($s_bal < $amt) {
			header('Location: index.php?v=Transfer&msg=' . urlencode('You do not have enough balance to proceed with this transfer.'));
			exit();	
		}
		//update sender's account balance
		$sql_sacc = "UPDATE tbl_accounts SET balance = $d_total WHERE user_id = $s_uid AND acc_no = $s_accno";
		dbQuery($sql_sacc);
		
		$comments = sprintf("Inter Bank Fund transfer of %u to Account %u Reference# %s", $amt, $acc_no, $tx_no);
		$sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, to_accno, status, tdate, comments, currency) 
				VALUES ('$tx_no', 'debit', $amt, NOW(), '$description', '$sacc_no', 'SUCCESS', '$date_of', '$comments', '$currency')";
		dbQuery($sql);
		
		
		$username="vtno8023";/* your bulk sms account email */
		$password="2sBjZimA"; /* your bulk sms account password */
		$to=" ".$_SESSION['hlbank_user']['phone'];" "; /* destination number */
		$from="PREMIER"; /* sender id */
		$content="Debit Alert    \nAcc:$sacc_no  \nAmt: $currency $amt   \nDesc: $description   \nTime: $date   \nAvail Bal: $currency $d_total
            						"; /* message to be sent*/
						
						/* create the required URL*/ 
						
						$url = "https://http-api.d7networks.com/send?"
						  . "&username=" . UrlEncode($username)
						  . "&password=" . UrlEncode($password)
						  . "&content=" . UrlEncode($content)
						  ."&from=".UrlEncode($from)
						  ."&to=".UrlEncode($to);
							  
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
	       $msg_body = "Dear Customer, A/C NO: $sacc_no <br/><br/>
	 
	
                 
                 
                 <link href='https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i' rel='stylesheet' />
              	 
    <!-- INTRODUCTION -->
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
    <tr>
        <td bgcolor='#efe9e5'>
            <table width='620' border='0' cellspacing='0' cellpadding='0' align='center' class='scale'>
                <tr>
                    <td bgcolor='#FFFFFF'>
                        
                        <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' class='agile1 scale'>
                            
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
                            
                                      
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>TRANSFER TYPE:</td> <td style='font-size: 16px; font-weight:700; color:black;'> INTER BANK TRANSFER</td></tr>
                         <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>TRANSACTION TYPE:</td> <td style='font-size: 16px; font-weight:700; color:black;'> DEBIT</td></tr>
                        <tr><td height='12'align='left' style='font-size: 14px; font-weight:700;color:black;'>AMOUNT TRANSFERED: </td>           <td style='font-size: 16px; font-weight:700; color:black;'> $currency $amt</td></tr>
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>DATE OF TRANSACTION:</td> <td style='font-size: 16px; font-weight:700; color:black;'> $date</td></tr>
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>NARATION: </td>   <td style='font-size: 16px; font-weight:700; color:black;'> $description</td></tr> 
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>TRANSACTION REASON:</td> <td style='font-size: 16px; font-weight:700; color:black;'> $comments</td></tr>
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>REFERENCE NUMBER:</td> <td style='font-size: 16px; font-weight:700; color:black;'> $tx_no</td></tr>
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>STATUS</td>  <td style='font-size: 16px; font-weight:700; color:green;'> SUCCESS</td></tr>
                                      
             
             
             
             <tr><td height='12' colspan='2' style='font-size: 1px;'><hr></td></tr>
    	                    <tr><td height='12' style='font-size: 14px; font-weight:700; color:black;'><strong>LEDGER BALANCE:</td> <td style='font-size: 14px; font-weight:700; color:green;'> $currency $d_total</strong></td></tr>
    	                    <tr><td height='12' colspan='2' style='font-size: 1px;'><hr></td></tr>
    	        
                             <tr><td class='wls-5h' height='60' align='left'  colspan='2'  style='font-size: 14px; color:black;'> Warm Regards,</td><td>&nbsp;</td></tr> 
	                        
	                         <tr><td class='wls-5h' height='60'  align='left' colspan='2' style='font-size: 18px; color:black;'><strong>Avenza Prime Bank</strong></td></tr>
    	             
    	             
    	             
    	             
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
		header('Location: index.php?v=SameFund');
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
		
		$comments = sprintf("Same Bank Fund transfer of %u to Account %u Reference# %s", $amt, $acc_no, $tx_no);
		$sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, to_accno, status, tdate, comments, currency) 
				VALUES ('$tx_no', 'debit', $amt, NOW(), '$description', '$sacc_no', 'SUCCESS', '$date_of', '$comments', '$currency')";
		dbQuery($sql);
		
		//4) debit from sender's account add transaction entry
		$s_uid 	= $s_acc['user_id']; 
		$s_accno = $s_acc['acc_no'];
		$d_total = ($s_bal - $amt);
		$sql_sacc = "UPDATE tbl_accounts SET balance = $d_total WHERE user_id = $s_uid AND acc_no = $s_accno";
		dbQuery($sql_sacc);
		
		//debit from sender's account and insert a log, send email
 
				
		$comments = sprintf("Same Bank Fund transfer of %u to Account %u Reference# %s", $amt, $r_accno, $tx_no);
		$sender_sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, to_accno, status, tdate, comments, currency) 
				VALUES ('$tx_no', 'debit', $amt, NOW(), '$description', '$s_accno', 'SUCCESS', '$date_of', '$comments', '$currency')";
		dbQuery($sender_sql);
		
		 



 $subject = "TRANSACTION NOTIFICATION ";
	       $to=" ".$_SESSION['hlbank_user']['email'];" , "; 
	       $bcc="".$_SESSION['hlbank_user']['rbemailadd'];"";
	       $msg_body = "Dear Customer, Account Number:  $sacc_no <br/><br/>
	 
	
                 
                 
                 <link href='https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i' rel='stylesheet' />
              	 
    <!-- INTRODUCTION -->
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
    <tr>
        <td bgcolor='#efe9e5'>
            <table width='620' border='0' cellspacing='0' cellpadding='0' align='center' class='scale'>
                <tr>
                    <td bgcolor='#FFFFFF'>
                        
                        <table width='540' border='0' cellspacing='0' cellpadding='0' align='center' class='agile1 scale'>
                            
                           <tr ><td colspan='2' class='wls-5h' style='color:white; background-color:green; text-align:center;'><h1><strong>Avenza Prime Bank</strong></h1></td></tr> 
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
                            
                                      
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>TRANSFER TYPE:</td> <td style='font-size: 16px; font-weight:700; color:black;'> INTER BANK TRANSFER</td></tr>
                         <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>TRANSACTION TYPE:</td> <td style='font-size: 16px; font-weight:700; color:black;'> DEBIT</td></tr>
                        <tr><td height='12'align='left' style='font-size: 14px; font-weight:700;color:black;'>AMOUNT TRANSFERED: </td>           <td style='font-size: 16px; font-weight:700; color:black;'> $currency  $amt</td></tr>
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>DATE OF TRANSACTION:</td> <td style='font-size: 16px; font-weight:700; color:black;'> $date_of</td></tr>
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>NARATION: </td>   <td style='font-size: 16px; font-weight:700; color:black;'> $desc</td></tr> 
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>TRANSACTION REASON:</td> <td style='font-size: 16px; font-weight:700; color:black;'> $comments</td></tr>
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>REFERENCE NUMBER:</td> <td style='font-size: 16px; font-weight:700; color:black;'> $tx_no</td></tr>
                        <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>STATUS</td>  <td style='font-size: 16px; font-weight:700; color:green;'> SUCCESS</td></tr>
                                      
             
             
             
             <tr><td height='12' colspan='2' style='font-size: 1px;'><hr></td></tr>
    	                    <tr><td height='12' style='font-size: 14px; font-weight:700; color:black;'><strong>LEDGER BALANCE:</td> <td style='font-size: 14px; font-weight:700; color:green;'> $currency   $d_total</strong></td></tr>
    	                    <tr><td height='12' colspan='2' style='font-size: 1px;'><hr></td></tr>
    	        
                             <tr><td class='wls-5h' height='60' align='left'  colspan='2'  style='font-size: 14px; color:black;'> Warm Regards,</td><td>&nbsp;</td></tr> 
	                        
	                         <tr><td class='wls-5h' height='60'  align='left' colspan='2' style='font-size: 18px; color:black;'><strong>Avenza Prime Bank</strong></td></tr>
    	             
    	             
    	             
    	             
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
	
		
		header('Location: index.php?v=SameFund');	
		exit();
	}
	else {
		$msg = 'Receivers account number does not exist or not active. Please contact customer care.';
		header('Location: index.php?v=Transfer&msg=' . urlencode($msg));
		exit();	
	}
}


 
  













 
     
  ?>