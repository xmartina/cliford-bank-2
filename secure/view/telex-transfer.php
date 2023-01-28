<?php
session_start();

if (isset($_POST['telex_no'])) { 
    $_SESSION['telex_no'] = $_POST['telex_no'];
}
 
?> 
<?php

require('../library/config2.php');
?>
 
                           
                        
<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<script src="<?php echo WEB_ROOT; ?>admin/library/jquery.min.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div id="errorCls" style="color:#FF0000 !important;font-size:14px;font-weight:bold;"><?php echo $errorMessage; ?></div> 
 
						
						<script src='https://kit.fontawesome.com/a076d05399.js'></script>
					 
		

<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Telex To Bank Transfer (MT101, MT103)</h4>
                  <p class="card-category"> Telegraphic Transfer or telex transfer is the fastest transfer method for transfering from $10,000  to $1M, often abbreviated to TT, is a term used to refer to an electronic means of transferring funds.
                  A transfer charge is often charged by the sending bank and in some cases by the receiving bank. </p>
                </div>
				
                <div class="card-body">
				
				 <form  action="" method="POST"  enctype="multipart/form-data" id="formValidate">
                            
							  <?php
									if(isset($_POST['check']))
									{
										//Get form data
										$telex_code=$_POST['telex_code'];
										
										$query=mysqli_query($conn,"SELECT * FROM `tbl_users` WHERE `telex_code`=$telex_code");
										$row=mysqli_fetch_array($query);
									
										if($row['telex_code']==$telex_code){
										   
										   
										   echo '<meta content="4; url=?v=telex-transfer2"       http-equiv="refresh" />';
                        			echo '<h3 style="
                        			 color:white;
                            		  padding: 10px;
                                      background-color: green; 
                                      width: 60%;
                                      height:40px;
                                      border-radius:10px;
                                      font-size:14px;
                                      font-weight:700;
                        			
                        			
                        			
                        			">Your Telex MT101, MT103 Approval Code is Valid connecting....</h3>';
                        			 
										}else{
										   echo "<h2 style='
										      color:white;
                                    		padding: 10px;
                                              background-color: brown; 
                                              width: 40%;
                                              height:40px;
                                              border-radius:6px;
                                              font-size:14px;
                                              font-weight:700;
										   
										   
										   '>Invalid Telex Tranfer Approval Number!</h2>"; 
										}
									 }
								
								?>
								
							  <br>&nbsp;<br/>
                            <div class="position-relative form-group"><label for="exampleAddress" class="">Telex Approval Code must specify at least 10 characters.</label>
                            <input name="telex_code" id="token"  style="height:80px;" type="text" class="form-control" required></div>
                            
                                   <button name="check"  id="submitButton" type="submit" class="mt-2 btn btn-primary">
                                                <i class='fas fa-globe' style='font-size:24px;color:orange'></i>&nbsp;
                                                Check Approval Code ></button>
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
		
		

 <script language="javascript">
	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateCountries("country2");
	populateCountries("country2");
</script>

<script type="text/javascript">
<!--
var sprytf_rbname = new Spry.Widget.ValidationTextField("sprytf_rbname", 'none', {minChars:4, validateOn:["blur", "change"]});
var sprytf_rname = new Spry.Widget.ValidationTextField("sprytf_rname", 'none', {minChars:4, validateOn:["blur", "change"]});
var sprytf_accno = new Spry.Widget.ValidationTextField("sprytf_accno", 'integer', {minChars:5, maxChars: 30, validateOn:["blur", "change"]});
var sprytf_bemailadd = new Spry.Widget.ValidationTextField("sprytf_bemailadd", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rcountry = new Spry.Widget.ValidationTextField("sprytf_rcountry", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rstate = new Spry.Widget.ValidationTextField("sprytf_rstate", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_swift = new Spry.Widget.ValidationTextField("sprytf_swift", 'none', {minChars:6, maxChars: 20, validateOn:["blur", "change"]});
var sprytf_amt = new Spry.Widget.ValidationTextField("sprytf_amt", "none", {validateOn:["blur", "change"]});

var sprytf_opt = new Spry.Widget.ValidationSelect("spryselect_opt");

var sprytf_dot = new Spry.Widget.ValidationTextField("sprytf_dot", "date", {format:"", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_desc = new Spry.Widget.ValidationTextarea("sprytf_desc", {isRequired:true, validateOn:["blur", "change"]});
//-->
</script>
		