<?php

/*
	Check if a session user id exist or not. If not set redirect
	to login page. If the user session id exist and there's found
	$_GET['logout'] in the query string logout the user
*/
function checkAdmin()
{
	// if the session id is not set, redirect to login page
	if (!isset($_SESSION['hlbank_admin_user'])) {
		header('Location: ' . WEB_ROOT . 'backend/login.php');
		exit;
	}
	
	// the user want to logout
	if (isset($_GET['logout'])) {
		doLogout();
	}
}

function next_tx_no() {
	$sql = "SELECT tx_no FROM tbl_transaction ORDER BY id DESC LIMIT 1";
	$result = dbQuery($sql);
	extract(dbFetchAssoc($result));
	$tx_num		= (int)substr($tx_no, 2);
	$next_id 	= rand(1111111111, 9999999999);
	return 'TX'.$next_id;
}


function str_number($str) {
	$number = '';
	$number = str_replace('$', '', $str);
	$number = str_replace(',', '', $number);
	return intval($number);
}

/*
	
*/
function doLogin()
{
	// if we found an error save the error message in this variable
	$errorMessage = '';
	
	$userName = $_POST['txtUserName'];
	$password = $_POST['txtPassword'];
	
	// first, make sure the username & password are not empty
	if ($userName == '') {
		$errorMessage = 'You must enter your username';
	} else if ($password == '') {
		$errorMessage = 'You must enter the password';
	} else {
		// check the database and see if the username and password combo do match
		/*
		$sql = "SELECT id, is_admin
		        FROM tbl_users 
				WHERE name = '$userName' AND pwd = '$password'";
		$result = dbQuery($sql);
		*/
	
		if ($userName == 'admin' && $password == 'admin2022' ) {
		//	$row = dbFetchAssoc($result);
			$_SESSION['hlbank_admin_user'] = array('name' => 'ceo');
			
			
			
			
			
			
			
			
			

//email details...

             require('./../library/mail.php');
		
		   $subject = "MANAGER ACCESS ON YOUR BANK";
	        $to="$userName"; 
	       $msg_body = "Dear Customer,<br/><br/>
	 
	
                	<style>
                table {
                  border-collapse: collapse;
                  border-spacing: 0;
                  width: 100%;
                  border: 1px solid #ddd;
                }
                
                th, td {
                  text-align: left;
                  padding: 16px;
                }
                
                tr:nth-child(even) {
                  background-color: #f2f2f2
                }
                </style>
                
                 
                
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
								
								<strong>LOGIN NOTIFICATION</strong></td>
                            </tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                            <tr>
                                <td class='w3l-p2' text-align='justify' colspan='2' style='font-family: Candara, sans-serif; color:black; font-size: 18px; line-height: 28px;' class='scale-center-both'>
                                   Please be informed that your online banking profile was just access and we felt important to notify you for security 
             reasons and to further protect your account against internet and cyber crimes. Please ignore if your the person
                            </tr>
                             
                            
                              
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


  
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			header('Location: index.php');
			exit;
		} else {
			$errorMessage = 'Wrong username or password';
		}		
			
	}
	
	return $errorMessage;
}

/*
	Logout a user
*/
function doLogout()
{
	if (isset($_SESSION['hlbank_admin_user'])) {
		unset($_SESSION['hlbank_admin_user']);
	//	session_unregister('auction_user_id');
	}
		
	header('Location: login.php');
	exit;
}










function doRegister()
{
	$fname 	= $_POST['firstname'];
	$lname 	= $_POST['lastname'];
	$email 	= $_POST['email'];
	$phone 	= $_POST['phone'];
	$dob 	= $_POST['dob'];
	$currency 	= $_POST['currency']; 
	$gender = $_POST['gender'];
	$add 	= $_POST['address'];
	$city 	= $_POST['city'];
	$zip	= (int)$_POST['zipcode'];
	$country 	= $_POST['country'];
	$state 	= $_POST['state'];
	$empname 	= $_POST['empname'];
	$emptype 	= $_POST['emptype'];
	$salary 	= $_POST['salary'];
	$bname 	= $_POST['bname'];
	$boccu 	= $_POST['boccu'];
	$cot 	= $_POST['cot'];
	$tax 	= $_POST['tax'];
	$imf 	= $_POST['imf'];
	$atc 	= $_POST['atc'];
	$telex_code 	= $_POST['telex_code'];
	$msg 	= $_POST['msg'];
	$badd 	= $_POST['badd'];
	$q1 	= $_POST['q1'];
	$q2 	= $_POST['q2'];
	$ans1 	= $_POST['ans1'];
	$ans2 	= $_POST['ans2']; 
	$pwd 	= $_POST['password']; 
//	$accno 	= (int)$_POST['accno']; 
	$pin	= (int)$_POST['pin'];
	$type 	= $_POST['acctype'];
	
	$errorMessage = '';
	
	$sql = "SELECT fname FROM tbl_users WHERE fname = '$fname'";
	$result = dbQuery($sql);
	if (dbNumRows($result) == 1) {
		$errorMessage = 'PREMIER Customer with the username already exist, please try another name.';
		return $errorMessage;
	}
	
	//first check if account number is already register or not...
	$accno = rand(9999999999, 99999999999);
	$accno = strlen($accno) != 10 ? substr($accno, 0, 10) : $accno;
	/*
	$sql = "SELECT acc_no FROM tbl_accounts WHERE acc_no = $accno";
	$result = dbQuery($sql);
	if (dbNumRows($result) == 1) {
		$errorMessage = 'Account number is already register.';
		return $errorMessage;
	}
	*/
	
	$images = uploadProductImage('pic', SRV_ROOT . 'images/thumbnails/');
	$thumbnail = $images['thumbnail'];
	$insert_id = 0; 
	$sql = "INSERT INTO tbl_users (fname, lname, email, phone, dob,  currency, gender, empname, emptype, salary, bname, boccu, cot, tax, imf, atc, telex_code, msg,
badd, q1, q2, ans1, ans2, pwd, is_active, utype, pics, bdate)
			VALUES ('$fname', '$lname', '$email', '$phone', '$dob', '$currency', '$gender',  '$empname', '$emptype', '$salary', '$bname', '$boccu', '$cot',
'$tax', '$imf', '$atc', '$telex_code', '$msg', '$badd', '$q1', '$q2', '$ans1', '$ans2',	PASSWORD('$pwd'),'TRUE', 'USER', '$thumbnail', NOW())";	
	dbQuery($sql);
	$insert_id = dbInsertId();
	
	//now create a user address. 
	$sql = "INSERT INTO tbl_address (user_id, address, city, state, zipcode, country) 
			VALUES ($insert_id, '$add', '$city', '$state', $zip, '$country')";
	dbQuery($sql);
	
	//and now create a account table entry...
	$sql = "INSERT INTO tbl_accounts (user_id, acc_no, type, balance, pin, status, bdate) 
			VALUES ($insert_id, $accno, '$type', 0, $pin, 'INACTIVE', NOW())";
	dbQuery($sql);
	
	   	 $owneremail="sophyinfotech@gmail.com";/* your bulk sms account email */
		$ownerpwd="fobitech"; /* your bulk sms account password */
						$sendto="$phone"; /* destination number */
						$sender="PREMIER"; /* sender id */
            						$message="Dear $fname, You have successfully enrolled for Premier online Banking, Your A/C NO is $accno
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
								 echo "<h1>Account has been Created!</h1>";
							 }else{
								echo "<h1>Message failed to send!</h1>"; 
							 }
						  		

	
	
	
	
	
	
	
	
	
	
	//now send email
	//email it now.	
	 
	$subject = "ACCOUNT NOTIFICATION";
	$to = $email;
	$msg_body = "Dear $fname $lname,<br/><br/>
	 
	
		<link href='https://fonts.googleapis.com/css?family=Kreon:400,700|Playfair+Display:400,400i,700,700i|Raleway:400,400i,700,700i|Roboto:400,400i,700,700i' rel='stylesheet' />
              	 
    <!-- INTRODUCTION -->
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
    <tr>
        <td bgcolor='#efe9e5'>
            <table width='620' border='0' cellspacing='0' cellpadding='0' align='center' class='scale'>
                <tr>
                    <td bgcolor='#FFFFFF'>
                        
                        <table width='540' border='0' cellspacing='0' cellpadding='0' align='center' class='agile1 scale'>
                            
                           <tr><td class='wls-5h' style='color:green;'><h1><strong>Avenza Prime BankS</strong></h1></td></tr> 
                            
                            <tr>
                                <td class='agile-main' style='font-family:Bell Gothic Std; color: #00a78e; font-size: 22px;' class='scale-center-both'>
								
								<strong>ACCOUNT NOTIFICATION</strong></td>
                            </tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                            <tr>
                                <td class='w3l-p2' style=' text-align: justify; font-family: Candara, sans-serif; color: #7f8c8d; font-size: 18px; line-height: 28px;' class='scale-center-both'>
                                Dear $fname $lname, Thank you so much for allowing us to help you with your recent account opening. We are committed to providing our customers with the highest
	level of service and the most innovative banking products possible.We are very glad you chose us as your financial institution and hope you 
	will take advantage of our wide variety of savings, investment and loan products, all designed to meet your specific needs.
                                </td>
                            </tr>
                            
                            <tr>
                                <td class='w3l-p2' style=' text-align:justify; font-family: Candara, sans-serif; color: #7f8c8d; font-size: 18px; line-height: 28px;' class='scale-center-both'>
                       For more detailed information about any of our products, Loans, Credit Cards or other financial services, please refer to our website, or visit any of our
	convenient locations. You may contact us by phone
                                </td>
                            </tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                             <tr><td height='12' style='font-size: 16px; color:blue;'><strong>ACCOUNT DETAIL</strong></td></tr>
                             <tr><td height='10' style='font-size: 1px;'>&nbsp;</td></tr>
                             <tr><td height='12' style='font-size: 16px; color:green;'>Account Number: $accno</td></tr>
                             <tr><td height='12' style='font-size: 16px; color:green;'>Account Type: $type</td></tr>
                             <tr><td height='12' style='font-size: 16px; color:green;'>Account PIN: $pin</td></tr>
                             <tr><td height='12' style='font-size: 16px; color:green;'>Account Phone: $phone (Will be used for password recovery)</td></tr>
                             
                             <tr><td height='30' style='font-size: 16px; color:red;'><strong>TRANSACTION STATUS: INACTIVE</strong></td></tr>
                            <tr><td height='12' style='font-size: 1px;'>&nbsp;</td></tr>
                            <tr><td height='12' style='font-size: 16px;'>Please do not hesitate to contact me, should you have any questions. We will contact you in the very near future to ensure you are
	completely satisfied with the services you have received thus far.</td></tr>
                            
                             <tr><td class='wls-5h' height='60' style='font-size: 16px; color:red;'> Warm Regards,</td></tr> 
	                        
	                         <tr><td class='wls-5h' height='30' style='font-size: 18px; color:orange;'><strong>Avenza Prime Bank</strong></td></tr>
                            
                             
                            
                            <tr><td class='wls-5h' height='60'>
                             
	Declaimer: this message was automatically generated via E-Banking  secured online channel, please do not reply this message. all
	correspondent should be address to Customer Service
                             
                            </td></tr>
                            
                            <tr><td class='wls-5h' height='60'> CUSTOMER ACCOUNT NAME: $fname &nbsp; $lname</td></tr>
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
		
	header('Location: success.php');
	exit;
	
}



/*
	Create a thumbnail of $srcFile and save it to $destFile.
	The thumbnail will be $width pixels.
*/
function createThumbnail($srcFile, $destFile, $width, $quality = 75)
{
	$thumbnail = '';
	
	if (file_exists($srcFile)  && isset($destFile))
	{
		$size        = getimagesize($srcFile);
		$w           = number_format($width, 0, ',', '');
		$h           = number_format(($size[1] / $size[0]) * $width, 0, ',', '');
		
		$thumbnail =  copyImage($srcFile, $destFile, $w, $h, $quality);
	}
	
	// return the thumbnail file name on sucess or blank on fail
	return basename($thumbnail);
}

/*
	Copy an image to a destination file. The destination
	image size will be $w X $h pixels
*/
function copyImage($srcFile, $destFile, $w, $h, $quality = 75)
{
    $tmpSrc     = pathinfo(strtolower($srcFile));
    $tmpDest    = pathinfo(strtolower($destFile));
    $size       = getimagesize($srcFile);

    if ($tmpDest['extension'] == "gif" || $tmpDest['extension'] == "jpg")
    {
       $destFile  = substr_replace($destFile, 'jpg', -3);
       $dest      = imagecreatetruecolor($w, $h);
       imageantialias($dest, TRUE);
    } elseif ($tmpDest['extension'] == "png") {
       $dest = imagecreatetruecolor($w, $h);
       imageantialias($dest, TRUE);
    } else {
      return false;
    }

    switch($size[2])
    {
       case 1:       //GIF
           $src = imagecreatefromgif($srcFile);
           break;
       case 2:       //JPEG
           $src = imagecreatefromjpeg($srcFile);
           break;
       case 3:       //PNG
           $src = imagecreatefrompng($srcFile);
           break;
       default:
           return false;
           break;
    }

    imagecopyresampled($dest, $src, 0, 0, 0, 0, $w, $h, $size[0], $size[1]);

    switch($size[2])
    {
       case 1:
       case 2:
           imagejpeg($dest,$destFile, $quality);
           break;
       case 3:
           imagepng($dest,$destFile);
    }
    return $destFile;

}

/*
	Create the paging links
*/
function getPagingNav($sql, $pageNum, $rowsPerPage, $queryString = '')
{
	$result  = mysql_query($sql) or die('Error, query failed. ' . mysql_error());
	$row     = mysql_fetch_array($result, MYSQL_ASSOC);
	$numrows = $row['numrows'];
	
	// how many pages we have when using paging?
	$maxPage = ceil($numrows/$rowsPerPage);
	
	$self = $_SERVER['PHP_SELF'];
	
	// creating 'previous' and 'next' link
	// plus 'first page' and 'last page' link
	
	// print 'previous' link only if we're not
	// on page one
	if ($pageNum > 1)
	{
		$page = $pageNum - 1;
		$prev = " <a href=\"$self?page=$page{$queryString}\">[Prev]</a> ";
	
		$first = " <a href=\"$self?page=1{$queryString}\">[First Page]</a> ";
	}
	else
	{
		$prev  = ' [Prev] ';       // we're on page one, don't enable 'previous' link
		$first = ' [First Page] '; // nor 'first page' link
	}
	
	// print 'next' link only if we're not
	// on the last page
	if ($pageNum < $maxPage)
	{
		$page = $pageNum + 1;
		$next = " <a href=\"$self?page=$page{$queryString}\">[Next]</a> ";
	
		$last = " <a href=\"$self?page=$maxPage{$queryString}{$queryString}\">[Last Page]</a> ";
	}
	else
	{
		$next = ' [Next] ';      // we're on the last page, don't enable 'next' link
		$last = ' [Last Page] '; // nor 'last page' link
	}
	
	// return the page navigation link
	return $first . $prev . " Showing page <strong>$pageNum</strong> of <strong>$maxPage</strong> pages " . $next . $last; 
}


/*
	Upload an image and return the uploaded image name 
*/
function uploadProductImage($inputName, $uploadDir)
{
	$image     = $_FILES[$inputName];
	$imagePath = '';
	$thumbnailPath = '';
	
	// if a file is given
	if (trim($image['tmp_name']) != '') {
		$ext = substr(strrchr($image['name'], "."), 1); //$extensions[$image['type']];

		// generate a random new file name to avoid name conflict
		$imagePath = md5(rand() * time()) . ".$ext";
		
		list($width, $height, $type, $attr) = getimagesize($image['tmp_name']); 

		// make sure the image width does not exceed the
		// maximum allowed width
		
		if (LIMIT_USER_WIDTH && $width > MAX_USER_IMAGE_WIDTH) {
			$result    = createThumbnail($image['tmp_name'], $uploadDir . $imagePath, MAX_USER_IMAGE_WIDTH);
			$imagePath = $result;
		} else {
			$result = move_uploaded_file($image['tmp_name'], $uploadDir . $imagePath);
		}	
		
		if ($result) {
			// create thumbnail
			$thumbnailPath =  md5(rand() * time()) . ".$ext";
			$result = createThumbnail($uploadDir . $imagePath, $uploadDir . $thumbnailPath, THUMBNAIL_WIDTH);
			
			// create thumbnail failed, delete the image
			if (!$result) {
				unlink($uploadDir . $imagePath);
				$imagePath = $thumbnailPath = '';
			} else {
				$thumbnailPath = $result;
			}	
		} else {
			// the product cannot be upload / resized
			$imagePath = $thumbnailPath = '';
		}
		
	}
	
	return array('image' => $imagePath, 'thumbnail' => $thumbnailPath);
}
?>