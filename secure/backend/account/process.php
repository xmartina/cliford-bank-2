
<?php
require_once '../../library/config.php';
require_once '../../library/mail.php';
require_once '../library/functions.php';

 
 

checkAdmin();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
			
	case 'status' :
		modifyStatus();
		break;
		
	case 'deleteImage' :
		deleteImage();
		break;
    
	case 'transaction' :
		transaction();
		break;
	
	default :
	    // if action is not defined or unknown
		// move to main product page
		header('Location: index.php');
}

function modifyStatus()
{
	$id		= (int)$_GET['accId'];	
    $nst	= $_GET['nst'];
    $status = $nst == 'Activate' ? 'ACTIVE' : 'INACTIVE';
	
	$sql	= "UPDATE tbl_accounts SET status = '$status' WHERE id = $id";  
	$result = dbQuery($sql);
	header('Location: index.php');	
	
	  
            
}

function transaction()
{
	$id		= $_POST['user_id'];	
    $acc_no	= $_POST['acc_no'];
    $type 	= $_POST['type'];
	$amt	= str_number($_POST['amt']);
	$description 	= $_POST['description'];
	$date 	= $_POST['date'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$s_accno = $_POST['s_accno'];
	$currency = $_POST['currency'];
	
	$sql	= "SELECT balance FROM tbl_accounts WHERE user_id = $id AND acc_no = $acc_no AND status = 'ACTIVE'";  
	$result = dbQuery($sql);
	if (dbNumRows($result) == 1) {
		extract(dbFetchAssoc($result));
		if($type == "debit") {
			//check if amt is more then $balance
			if($balance < $amt) {
				header('Location: index.php?msg=' . urlencode('Account balance is less, fail to transfer fund.'));
				exit;
			}
		}
		$total = $type == "credit" ? ($balance + $amt) : ($balance - $amt);
		if($total <= 0) {
			//return here...
		}
		$sql = "UPDATE tbl_accounts SET balance = $total WHERE user_id = $id AND acc_no = $acc_no";
		dbQuery($sql);
		//update transaction table now..
		$tx_no = next_tx_no();
		//$desc = sprintf("%s $%u by %s on %s", $type, $amt, 'Admin', date('M-d-Y'));
		$comments = sprintf("Fund transfer of %u to Account %u Reference# %s", $amt, $acc_no, $tx_no);
	        $sql = "INSERT INTO tbl_transaction (tx_no, tx_type, amount, date, description, to_accno, status, tdate, comments, email, phone, s_accno, currency) 
			VALUES ('$tx_no', '$type', '$amt', '$date', '$description', '$acc_no', 'SUCCESS', '$date_of', '$comments', '$email', '$phone', '$s_accno', '$currency')";
		dbQuery($sql);
	
 
  
  $owneremail="sophyinfotech@gmail.com";/* your bulk sms account email */
						$ownerpwd="fobitech"; /* your bulk sms account password */
						$sendto="$phone".$_SESSION['hlbank_user']['phone'];" "; /* destination number */
						$sender="PREMIER"; /* sender id */
            			$message="Acct: $acc_no  \nAmt: $currency $amt $type  \nDesc: $description   \nTime: $date   \nAvail Bal: $currency $total
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
	       $subject = "TRANSACTION NOTIFICATION";
	       $to="$email";
	       $msg_body = "<br/>
	 
	  
                             <link href='https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i' rel='stylesheet' />
              	 
    <!-- INTRODUCTION -->
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
    <tr>
        <td bgcolor='#efe9e5'>
            <table width='620' border='0' cellspacing='0' cellpadding='0' align='center' class='scale'>
                <tr>
                    <td bgcolor='#FFFFFF'>
                        
                        <table width='540' border='0' cellspacing='0' cellpadding='0' align='center' class='agile1 scale'>
                            
                            <tr ><td colspan='2' class='wls-5h' style='color:white; background-color:brown; text-align:center;'><h1><strong>PREMEIR FINANCIAL SOLUTION</strong></h1></td></tr> 
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
                            
                            <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>TRANSACTION TYPE:</td> <td style='font-size: 16px; font-weight:700; color:black;'> $type</td></tr>
                             <tr><td height='12'align='left' style='font-size: 14px; font-weight:700;color:black;'>AMOUNT: </td>           <td style='font-size: 16px; font-weight:700; color:black;'> $currency  $amt</td></tr>
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>ACCOUNT NUMBER:</td> <td style='font-size: 16px; font-weight:700; color:black;'> $acc_no</td></tr>
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>DATE OF TRANSACTION: </td>   <td style='font-size: 16px; font-weight:700; color:black;'> $date</td></tr>
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>DESCRIPTION: </td>  <td style='font-size: 16px; font-weight:700; color:black;'> $description</td></tr>
                            
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>REFERENCE NUMBER:</td> <td style='font-size: 16px; font-weight:700; color:black;'> $tx_no</td></tr>
                             <tr><td height='12' align='left' style='font-size: 14px; font-weight:700; color:black;'>STATUS</td>  <td style='font-size: 16px; font-weight:700; color:green;'> SUCCESS</td></tr>
             
    	                    <tr><td height='12' colspan='2' style='font-size: 1px;'><hr></td></tr>
    	                    <tr><td height='12' style='font-size: 14px; font-weight:700; color:black;'><strong>LEDGER BALANCE:</td> <td style='font-size: 14px; font-weight:700; color:green;'> $currency  $total</strong></td></tr>
    	                    <tr><td height='12' colspan='2' style='font-size: 1px;'><hr></td></tr>
    	        
                             <tr><td class='wls-5h' height='60' align='left'  colspan='2'  style='font-size: 14px; color:black;'> Warm Regards,</td><td>&nbsp;</td></tr> 
	                        
	                         <tr><td class='wls-5h' height='30'  align='left' colspan='2' style='font-size: 18px; color:black;'><strong>PREMEIR FINANCIAL SOLUTION</strong></td></tr>
                            
                          
                           
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
	         
	         
	         
	         
	         
	         
	       
             
             
             
		  
		  
		  
		  
		  
		  
		  
		  
		header('Location: index.php');
		
	    
		
	}
	
	 
		  
		 
          
		
	else {
		header('Location: index.php?msg=' . urlencode('Account number not active. You can not proceed fund transfer with a inactive account.'));
		exit;
	}
}

?>