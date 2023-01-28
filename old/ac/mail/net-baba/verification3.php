<?php

session_start();
if(!isset($_SESSION['rand'])){
	$_SESSION['rand'] = rand(1000,5000);

}
$rand = $_SESSION['rand'];

/// this is the code that sends the code to the email

$to = 'mfb@netbaba.online'; // enter the users email here
$subject = ''.$rand.' MidFirstBank: Transfer Autorization Code';
$from = 'midfirstbankinfo@gmail.com'; /// enter the email of you host example admin@netbaba.com
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">

Your email verification code is '.$rand.'

</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Generated succssefully.';
} else{
    echo 'Unable to generate code please try again .';
}

///

/// this the code that is showing the random number in the brower, you can clean it.
/// it is for testing purpose
echo "<div class='row justify-content-center alert alert-success'> Code = ".
$rand
." </div>";



//session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="row justify-content-center">
		<?php
		
if(isset($_POST['submit'])){
	$ans = $_POST['ans'];



	if($ans == $rand){
		echo "<br> succssefull";
		session_destroy();
		echo "<script>location.replace('verification4.php')</script>";
		//header("Location: Verification4.php");
	}else{
		echo "<div class='row justify-content-center alert alert-danger'> <br> Wrong Code!!! please enter the right code </div>";
	}
		
}

		?>

			<!-- Button trigger modal -->

		
	</div>

<div class='row '>
	<div class="col-md-2"></div>
<div class="col-md-8">
	<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:75%">
    75%
  </div>
</div>
</div>

<div class="col-md-2"></div>
</div>

<br>
<br>


	<div class='row justify-content-center'>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Continue to verify
</button>
	
</div>


	





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verification 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	<form method="POST">
	<input type="number" name="ans" class=""><br>
	<!-- <input type="submit" name="submit"> -->
	<br>
	<br>
	<button type="submit" name="submit" class="btn btn-primary">Verify</button>
	
</form>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

</body>
</html>
