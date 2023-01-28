 
<link href="<?php echo WEB_ROOT; ?>library/spry/passwordvalidation/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/passwordvalidation/SpryValidationPassword.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/confirmvalidation/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/confirmvalidation/SpryValidationConfirm.js" type="text/javascript"></script>


    
	
			<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Change Account PIN</h4>
                  <p class="card-category">Dear Customer, kindly use the below form to change your account Personal Identification Number PIN</p>
                </div>
                <div class="card-body">
                 <form action="<?php echo WEB_ROOT; ?>view/process.php?action=changepin" method="post">
                    
					<div class="row"> 
					<div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Account Number</label> 
						  <input type="text" class="form-control" size="40" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>"  disabled="disabled" />
							<input type="hidden" name="id" value="<?php echo $_SESSION['hlbank_user']['user_id'];?>" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">User 2FA Pin</label>
						  <input type="text" class="form-control" size="40" value="<?php echo $_SESSION['hlbank_user']['pin']; ?>"disabled="disabled"/>
                          
                        </div>
                      </div>
                   
                    </div>
					
					 
					<div class="row"> 
					<div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">New PIN</label> 
						  <span id="sprytf_pin">
						  <input type="text" class="form-control" size="40" name="pin"/>
						  <br/>
            <span class="textfieldRequiredMsg">Account Pin is required.</span>
			<span class="textfieldMinCharsMsg">min of 4 characters.</span>
			<span class="textfieldMaxCharsMsg">max of 6 characters.</span>
			<span class="textfieldInvalidFormatMsg">must be Integer.</span>
		</span>
							
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"> 
                          <label class="bmd-label-floating">Confirm New PIN</label>
						  <span id="sprytf_cpin">
						  <input type="text"  name="cpin" class="form-control" size="40"  />
						  <br/>
           	<span class="confirmRequiredMsg">Confirm Password is required.</span>
			<span class="textfieldRequiredMsg">Account Pin is required.</span>
			<span class="confirmInvalidMsg">Confirm Password values don't match</span>
		</span>
                          
                        </div>
                      </div>
                   
                    </div>
                
                 
                    <button name="submitButton" type="submit" class="frmButton" id="submitButton" class="btn btn-primary pull-right">Update Account PIN</button>
                    <div class="clearfix"></div>
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
			  
              

            </div>
          </div>
        </div>
	
 
  	<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Change Account Password</h4>
                  <p class="card-category">Dear Customer, kindly use the below form to change your account Personal Identification Number PIN, 
				  If you feel that you have a weaker strength password, then please change it. We recommend to change your password in
				  every 45 days to make it secure.
</p>
                </div>
                <div class="card-body">
                 <form action="<?php echo WEB_ROOT; ?>view/process.php?action=changepwd" method="post">
                    
					<div class="row"> 
					<div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">User Name</label> 
						  <input type="text" class="form-control" size="40" value="<?php echo $_SESSION['hlbank_user_name'];  ?>" disabled="disabled" />
							<input type="hidden" name="id" value="<?php echo $_SESSION['hlbank_user']['user_id'];?>" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Account Number</label>
						  <input type="text" class="form-control" size="40" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>" disabled="disabled"/>
                          
                        </div>
                      </div>
                   
                    </div>
					
					 
					<div class="row"> 
					<div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">New Password</label> 
						  <span id="sprypwd"> 
						  <input type="text" class="form-control" size="40" name="password"/>
						  <br/>
        <span class="passwordRequiredMsg">Password is required.</span>
			  <span class="passwordMinCharsMsg">You must specify at least 6 characters.</span>
			  <span class="passwordMaxCharsMsg">You must specify at max 10 characters.</span>
		</span>
							
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"> 
                          <label class="bmd-label-floating">Confirm New Password</label>
						 <span id="sprycpwd">
						  <input type="text"  name="cpassword" class="form-control" size="40"  />
						  <br/>
      <span class="confirmRequiredMsg">Confirm Password is required.</span>
			  <span class="confirmInvalidMsg">Confirm Password values don't match</span>
			</span>
                          
                        </div>
                      </div>
                   
                    </div>
              
                    <button name="submitButton" type="submit" class="frmButton" id="submitButton" class="btn btn-primary pull-right">Update Account Password</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              
			  
              <div class="card card-profile">
               
                <div class="card-body">
                <div class="card-header card-header-primary">
																								<!-- TradingView Widget BEGIN -->
				<h5><strong> FRAUD ALERT</strong>
                        </h5>
                        <p>
                         Premire Bank Will never ask you for your online bank details, Flee from such messages and requests.<br>
                        
						Stay protected always, should you notice any suspicious activities on your account? <br><a href="?v=support"><button type="button" class="btn btn-danger">ALERT US NOW!</button></a>
                        </p><div class="alert-btn">
                        </div>
			 </div>
                </div>
              </div>
           
			  

            </div>
          </div>
        </div>
		
<script type="text/javascript">
<!--
var spry_pin = new Spry.Widget.ValidationTextField("sprytf_pin", 'integer', {minChars:4, maxChars: 6, validateOn:["blur", "change"]});
//Confirm Password
var spry_cpin = new Spry.Widget.ValidationConfirm("sprytf_cpin", "sprytf_pin", {minChars:4, maxChars: 6, validateOn:["blur", "change"]});

//Password
var sprypass1 = new Spry.Widget.ValidationPassword("sprypwd", {minChars:6, maxChars: 12, validateOn:["blur", "change"]});
//Confirm Password
var spryconf1 = new Spry.Widget.ValidationConfirm("sprycpwd", "sprypwd", {minChars:6, maxChars: 12, validateOn:["blur", "change"]});
//-->
</script>