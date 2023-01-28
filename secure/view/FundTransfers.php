<?php
session_start();
?>


<?php 

if (isset($_POST['rbname'])) { 
    $_SESSION['rbname'] = $_POST['rbname'];
}

if (isset($_POST['accno'])) { 
    $_SESSION['accno'] = $_POST['accno'];
}

if (isset($_POST['bname'])) { 
    $_SESSION['bname'] = $_POST['bname'];
}

if (isset($_POST['bemailadd'])) { 
    $_SESSION['bemailadd'] = $_POST['bemailadd'];
}


if (isset($_POST['swift'])) { 
    $_SESSION['swift'] = $_POST['swift'];
}

if (isset($_POST['rcountry'])) { 
    $_SESSION['rcountry'] = $_POST['rcountry'];
}

if (isset($_POST['rstate'])) { 
    $_SESSION['rstate'] = $_POST['rstate'];
}

if (isset($_POST['amt'])) { 
    $_SESSION['amt'] = $_POST['amt'];
}
if (isset($_POST['saccno'])) { 
    $_SESSION['saccno'] = $_POST['saccno'];
}

if (isset($_POST['dot'])) { 
    $_SESSION['dot'] = $_POST['dot'];
}


if (isset($_POST['desc'])) { 
    $_SESSION['desc'] = $_POST['desc'];
}

if (isset($_POST['toption'])) { 
    $_SESSION['toption'] = $_POST['toption'];
}

if (isset($_POST['currency'])) { 
    $_SESSION['currency'] = $_POST['currency'];
}
?> 
   
 
    
    
    <?php 

$errorMessage = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '&nbsp;';
$msgMessage = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '&nbsp;';
?>



<link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js" type="text/javascript"></script>

<script src="<?php echo WEB_ROOT; ?>admin/library/jquery.min.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js" type="text/javascript"></script>

<link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript"></script>

<div id="errorCls" style="color:#FF0000 !important;font-size:14px;font-weight:bold;"><?php echo $errorMessage; ?></div>
<div style="color:#99FF00 !important;font-size:14px;font-weight:bold;"><?php echo $msgMessage; ?></div>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
					 
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">					
						 
               
		<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">International Funds Transfer</h4>
                  <p class="card-category">Please Confirm Your Transfer Details again</p>
                  
 
                </div>
				<b>&nbsp;</b>
                <div class="card-body">
				
				<input type="hidden" value=" <?php echo $_SESSION['hlbank_user_name'];  ?>
         <?php echo $_SESSION['hlbank_user']['currency'] ?> <?php  echo $_SESSION['amt'] ; ?>
         <?php  echo $_SESSION['saccno'] ; ?>
         <?php  echo $_SESSION['rbname'] ; ?>
         <?php  echo $_SESSION['bname'] ; ?>
         <?php  echo $_SESSION['rbname'] ; ?>
		 <?php  echo $_SESSION['rstate'] ; ?>, <?php  echo $_SESSION['rcountry'] ; ?>
		 <?php  echo $_SESSION['swift'] ; ?>
		 <?php  echo $_SESSION['accno'] ; ?>
		 <?php echo $_SESSION['currency']; ?> 
         <?php  echo $_SESSION['amt'] /15 ; ?> "/>
		 
             <form action="<?php echo WEB_ROOT; ?>view/process.php?action=transfer" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver Bank Name</label>
                                    <input disabled name="r_bank"  value="<?php echo $_SESSION['rbname']  ; ?>"  type="text" class="form-control" required="required"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiver Account Number</label>
                                    <input disabled name="r_accno"  value="<?php echo $_SESSION['accno']  ; ?>"  type="text"  class="form-control" required="required"></div>
                                </div>
                            </div>
                            
                             <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver FullName</label>
                                    <input disabled name="bname"  value="<?php echo $_SESSION['bname']  ; ?>"  type="text" class="form-control" required="required"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiver Email Address</label>
                                    <input disabled name="r_email"  value="<?php echo $_SESSION['bemailadd']  ; ?>" type="email"  class="form-control" required="required"></div>
                                </div>
                            </div>
							
							
							 <div class="form-row">
                                 
                                    <script type= "text/javascript" src="<?php echo WEB_ROOT; ?>assets/countries.js"></script>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver Country</label>
                                    <input disabled name="rcountry" class="form-control" value="<?php echo $_SESSION['rcountry']  ; ?>" placeholder="Receiver Email Address" type="text"  class="form-control" required="required"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiver State</label>
                                   <input disabled name="rstate" class="form-control" value="<?php echo $_SESSION['rstate']  ; ?>" placeholder="Receiver Fullname" type="text" class="form-control" required="required"></div>
                                 </div>
                            </div>
							
							
                             <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Swift Code/Routing/IBAN</label>
                                    <input disabled name="swift"  value="<?php echo $_SESSION['swift'] ; ?>"  type="text" class="form-control" required="required"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Amount</label>
                                    <input disabled name="amt" id="amt" value="<?php echo $_SESSION['amt'] ; ?>" type="text"  class="form-control" required="required"></div>
                                </div>
								 <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Currency</label>
                                    <input disabled name="currency" id="currency" value="<?php echo $_SESSION['currency'] ; ?>" type="text"  class="form-control" required="required"></div>
                                </div>
                            </div>
                            
                            
                            <div class="position-relative form-group"><label for="exampleAddress" class="">Transaction Naration</label>
                            <input name="description"  style="height:80px;" id="exampleAddress" value="<?php echo $_SESSION['desc']  ; ?>" type="text" class="form-control"></div>
                            
                                           
                                <input type="hidden" value="<?php echo date("h:i A d M Y"); ?>" name="dot" > 
                                	<input name="toption" type="hidden" readonly="true" value="<?php echo $_SESSION['toption']  ; ?>"  class="form-control"  />
						<input name="saccno" type="hidden" readonly="true" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>"  id="saccno" class="form-control"  /> 
                                            
                                            <button name="submitButton" id="submitButton" type="submit" class="mt-2 btn btn-primary">
                                                <i class='fa fa-money' style='font-size:24px;color:orange'></i>&nbsp;
                                                Transfer Now ></button>
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
								<br>																<!-- TradingView Widget BEGIN -->
				<h4><strong>FRAUD ALERT</strong>
                        </h4>
                      <b>
                         Avenza Prime Banks Will never ask you for your online bank details, Flee from such messages and requests.<br>
                        
						Stay protected always, should you notice any suspicious activities on your account? <br><a href="?v=support"><button type="button" class="btn btn-danger">ALERT US NOW!</button></a>
                        </b><div class="alert-btn">
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
var sprytf_accno = new Spry.Widget.ValidationTextField("sprytf_accno", 'integer', {minChars:6, maxChars: 30, validateOn:["blur", "change"]});
var sprytf_bemailadd = new Spry.Widget.ValidationTextField("sprytf_bemailadd", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rcountry = new Spry.Widget.ValidationTextField("sprytf_rcountry", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rstate = new Spry.Widget.ValidationTextField("sprytf_rstate", 'none', {minChars:4, validateOn:["blur", "change"]});
var sprytf_swift = new Spry.Widget.ValidationTextField("sprytf_swift", 'none', {minChars:6, maxChars: 20, validateOn:["blur", "change"]});
var sprytf_amt = new Spry.Widget.ValidationTextField("sprytf_amt", "none", {validateOn:["blur", "change"]});

var sprytf_opt = new Spry.Widget.ValidationSelect("spryselect_opt");

var sprytf_dot = new Spry.Widget.ValidationTextField("sprytf_dot", "date", {format:"", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_desc = new Spry.Widget.ValidationTextarea("sprytf_desc", {isRequired:true, validateOn:["blur", "change"]});
//-->
</script>
		