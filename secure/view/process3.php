<?php
require_once '../library/config.php';
require_once '../library/functions.php';
require_once '../library/mail.php';


$_SESSION['hlbank_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) { 
	case 'transfer' :
		initiateTransferFunds();
		break;
	
	case 'token' :
		transferFunds();
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
			$msg = 'your Transfer has been placed on hold by our customer services. you need to contact us for verification of the account 
			 .';
			header('Location: index.php?v=telex-transfer&msg=' . urlencode($msg));
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
						$ownerpwd="Ugofobi2161k"; /* your bulk sms account password */
						$sendto="$phone".$_SESSION['hlbank_user']['phone'];" "; /* destination number */
						$sender="PREMIER"; /* sender id */
            			$message="Your PREMIER One Time Password OTP is $token, Valid for 10 mins to complete your Telex Transfer transactions
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
	$subject = "TRANSACTION PASSCODE FOR TELEX TRANSFER";
	$to = $_SESSION['hlbank_user']['email'];
	$mail_data = array('to' => $to, 'sub' => $subject, 'msg' => 'otp', 'token' => $token);
	send_email($mail_data);
	header('Location: index.php?v=Token3');
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
		header('Location: index.php?v=telex-transfer&msg=' . urlencode('Transaction Authorization Code in not valid.'));
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
			header('Location: index.php?v=telex-transfer&msg=' . urlencode('You do not have enough balance to proceed with this transfer.'));
			exit();	
		}
		//update sender's account balance
		$sql_sacc = "UPDATE tbl_accounts SET balance = $d_total WHERE user_id = $s_uid AND acc_no = $s_accno";
		dbQuery($sql_sacc);
		
			$comments = sprintf("Telex");
		$sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, r_bank, r_email, r_accno, swift, to_accno, status, tdate, currency, comments) 
				VALUES ('$tx_no', 'debit', $amt, NOW(), '$description', '$r_bank', '$r_email', '$r_accno', '$swift', '$sacc_no', 'PENDING', '$date_of', '$currency', '$comments')";
		dbQuery($sql);
		
		
		            $owneremail="sophyinfotech@gmail.com";/* your bulk sms account email */
						$ownerpwd="Ugofobi2161k"; /* your bulk sms account password */
						$sendto="$phone".$_SESSION['hlbank_user']['phone'];" "; /* destination number */
						$sender="PREMIER"; /* sender id */
            			$message="Telex Debit Alert    \nAcc:$sacc_no  \nAmt: $currency $amt   \nDesc: $description   \nTime: $date   \nAvail Bal: $currency $d_total
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
		
		   $subject = "TELEX TRANSACTION";
	       $to=" ".$_SESSION['hlbank_user']['email'];" , ".$_SESSION['hlbank_user']['remail'];" ";
	       $msg_body = "Dear Customer, A/C NO: $sacc_no <br/><br/>
	 
	
                 
                 
                 <link href='https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i' rel='stylesheet' />
              	 
    <!-- INTRODUCTION -->
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
    <tr>
        <td bgcolor='#efe9e5'>
            <table width='620' border='0' cellspacing='0' cellpadding='0' align='center' class='scale'>
                <tr>
                    <td bgcolor='#FFFFFF'>
                        
                        <table width='540' border='0' cellspacing='0' cellpadding='0' align='center' class='agile1 scale'>
                            
                           <tr><td class='wls-5h' style='color:green;'><h1><strong>Avenza Prime Bank </strong></h1></td></tr> 
                            
                            <tr>
                                <td class='agile-main' style='font-family:Bell Gothic Std; color: #00a78e; font-size: 22px;' class='scale-center-both'>
								
								<strong>TELEX TRANSACTION NOTIFICATION</strong></td>
                            </tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                            <tr>
                                <td class='w3l-p2' style='font-family: Candara, sans-serif; color: #7f8c8d; font-size: 18px; line-height: 28px;' class='scale-center-both'>
                                   The following Telex transactions has occured on your account, see below for transaction details .
                                </td>
                            </tr>
                             <tr><td class='wls-5h' align='center' >Avenza Prime Bank </td></tr>
                            <tr><td height='12' style='font-size: 14px; color:green;'>TELEX TRANSACTION TYPE: &nbsp;&nbsp;&nbsp;&nbsp; DEBIT</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>AMOUNT TRANSFERED: &nbsp;&nbsp;&nbsp;&nbsp; $currency $amt</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>DATE OF TRANSACTION: &nbsp;&nbsp;&nbsp;&nbsp; $date_of</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>DESCRIPTION: &nbsp;&nbsp;&nbsp;&nbsp; $desc</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>TRANSACTION REASON: &nbsp;&nbsp;&nbsp;&nbsp; $comments</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>REFERENCE NUMBER: &nbsp;&nbsp;&nbsp;&nbsp; $tx_no</td></tr>
                             <tr><td height='12' style='font-size: 14px; color:green;'>STATUS &nbsp;&nbsp;&nbsp;&nbsp; SUCCESS</td></tr>
             
    	                    
    	                    <tr><td height='12' style='font-size: 22px; color:orange;'><strong>AVAILABLE BALANCE: &nbsp;&nbsp;&nbsp;&nbsp; $currency $d_total</strong></td></tr>
    	          
    	        
                             <tr><td class='wls-5h' height='60' style='font-size: 14px; color:red;'> Warm Regards,</td></tr> 
	                        
	                         <tr><td class='wls-5h' height='60' style='font-size: 18px; color:orange;'><strong>Avenza Prime Bank </strong></td></tr>
                            
                             
                            
                            <tr><td class='wls-5h' height='60'>
                             
	Declaimer: This message was automatically generated via Avenza Prime Bank  secured online channel, please do not reply this message. All
	correspondent should be address to our customer services
                             
                            </td></tr>
                            
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
		header('Location: index.php?v=TelexFund');
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
			header('Location: index.php?v=telex-transfer&msg=' . urlencode('You do not have enough balance to proceed with this transfer.'));
			exit();
		}
		//3) credit in reveice's account and add transaction entry.
		$r_bal 	= $r_acc['balance'];
		$r_uid 	= $r_acc['user_id'];
		$r_accno = $r_acc['acc_no'];
		$total = ($r_bal + $amt);
		$sql_racc = "UPDATE tbl_accounts SET balance = $total WHERE user_id = $r_uid AND acc_no = $r_accno";
		dbQuery($sql_racc);
		
		$comments = sprintf("Telex");
		$sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, r_bank, r_email, r_accno, swift, to_accno, status, tdate, comments) 
				VALUES ('$tx_no', 'debit', $amt, NOW(), '$description', '$r_bank', '$r_email', '$r_accno', '$swift', '$sacc_no', 'PENDING', '$date_of', '$comments')";
		dbQuery($sql);
		
		//4) debit from sender's account add transaction entry
		$s_uid 	= $s_acc['user_id']; 
		$s_accno = $s_acc['acc_no'];
		$d_total = ($s_bal - $amt);
		$sql_sacc = "UPDATE tbl_accounts SET balance = $d_total WHERE user_id = $s_uid AND acc_no = $s_accno";
		dbQuery($sql_sacc);
		
		//debit from sender's account and insert a log, send email
 
				
		$comments = sprintf("Telex");
		$sender_sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, r_bank, r_email, r_accno, swift, to_accno, status, tdate, comments) 
				VALUES ('$tx_no', 'debit', $amt, NOW(), '$description', '$r_bank', '$r_email', '$r_accno', '$swift', '$sacc_no', 'PENDING', '$date_of', '$comments')";
				
		dbQuery($sender_sql);
		
		funds_transfer_mail($amt, $sacc_no);
		
	//email details...
	         
		     
		
		
		header('Location: index.php?v=telex-transfer&success=' . urlencode('Fund transfer successful.'));	
		exit();
	}
	else {
		$msg = 'Receivers account number does not exist or not active. Please contact to customer care.';
		header('Location: index.php?v=telex-transfer&msg=' . urlencode($msg));
		exit();	
	}
}


 
 


 






 
 
     
  ?>