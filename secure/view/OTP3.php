<?php 
$errorMessage = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '&nbsp;';
$msgMessage = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '&nbsp;';
?>
 
<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<span id="errorCls" style="color:#FF0000 !important;"><?php echo $errorMessage; ?></span>
<span style="color:#99FF00 !important;font-size:14px;"><?php echo $msgMessage; ?></span>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2025 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = seconds + "seconds ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
  
  
<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Transaction Authorization Code</h4>
                  <p class="card-category">
                 The 6 digit transfer token code has been sent to your email : <span style="color:yellow;font-weight:bold;"><?php echo $_SESSION['hlbank_user']['email']; ?></span>
                             or Mobile Phone <span style="color:yellow;font-weight:bold;"><?php echo $_SESSION['hlbank_user']['phone']; ?></span>
You have  <strong id="demo"></strong>remaining to insert valid OTP. System will automatically redirect to 'Preview Transfer Information' to enable you restart Wire Transfer.


    <p style="text-align:justify; color:white;">Please <a style="color:white;" href="<?php echo WEB_ROOT; ?>view/?v=support">Click Here</a> to contact customer's service
    via our Internal secured messaging platform</p>
     
                  </p>
                </div>
                <div class="card-body">
            
                          
                               <form action="<?php echo WEB_ROOT; ?>view/process3.php?action=token" method="post" id="formValidate">
                            
                 
                       <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label></label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <span id="sprytf_token">
                            <input type="text" class="form-control" rows="5" name="token" id="token" placeholder="Enter Transaction Authorization Code" required=""/>
                               <br/>
            <span class="textfieldRequiredMsg">Transaction Authorization Code is required.</span>
			<span class="textfieldInvalidFormatMsg">Transaction Authorization Code must be Integer.</span>
			<span class="textfieldMinCharsMsg">Transaction Authorization Code must specify at least 6 characters.</span>
			<span class="textfieldMaxCharsMsg">Transaction Authorization Code must specify at max 8 characters.</span>
		</span>
                          </div>
                        </div>
                      </div>
                    </div>
                     <button  id="submitButton" type="submit" name="submitButton"   class="mt-2 btn btn-primary">
                                                <i class='fas fa-fingerprint' style='font-size:24px;color:orange'></i>&nbsp;
                                                Confirm Transfer Now ></button><div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
			
			
			
           <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
				<?php
	$my_pic = $_SESSION['hlbank_user']['pics'];
   	$upics = (isset($my_pic) && $my_pic != "") ? $my_pic : "anonymous-user.jpg"; 
   	?>
                  <a href="">
                    <img class="img" src="<?php echo WEB_ROOT; ?>images/thumbnails/<?php echo $upics; ?>" alt="Photo"  height="130px" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Account User</h6>
                  <h4 class="card-title"><?php echo $_SESSION['hlbank_user_name'];  ?></h4>
                  <p class="card-description">
                    Your are welcome to our online banking plaform, the most secured internet banking channel in America, Asia, Europe and UK
                  </p>
                 
                </div>
				
				
              </div>
			   
              <div class="card card-profile">
               
                <div class="card-body">
                 <div class="card-header card-header-success">
								<br>																<!-- TradingView Widget BEGIN -->
				<h4><strong><p style="color:yellow"> FRAUD ALERT</p></strong>
                        </h4>
                      <p style="color:yellow"><b>
                         Premire Bank Will never ask you for your online bank details, Flee from such messages and requests.<br>
                        
						Stay protected always, should you notice any suspicious activities on your account? <br><a href="?v=support"><button type="button" class="btn btn-danger">ALERT US NOW!</button></a>
                        </b></p><div class="alert-btn">
                        </div>
			 </div>
                </div>
              </div>
			  

            </div>
          </div>
        </div>


 
  
<script type="text/javascript">
<!--
var sprytf_token = new Spry.Widget.ValidationTextField("sprytf_token", 'integer', {minChars:6, maxChars: 8, validateOn:["blur", "change"]});
//-->
</script>
<script src="<?php echo WEB_ROOT; ?>library/jquery.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>library/jquery.plugin.min.js"></script>
<script src="<?php echo WEB_ROOT; ?>library/jquery.countdown.min.js"></script>
  
 
<script>
$(document).ready(function(){ 
	function timerdone(){
		var webRoot = '<?php echo WEB_ROOT; ?>'+'view/?v=telex-transfer';
		window.location.href = webRoot;
    }
    $('#defaultCountdown').countdown({
    	until: +180, 
        compact: true,
        onExpiry: timerdone,
        format: 'MS'
	});
})
</script>
 
