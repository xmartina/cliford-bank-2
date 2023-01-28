<?php
session_start();



if(isset($_SESSION[rbname]))
unset($_SESSION[rbname]);

if(isset($_SESSION[accno]))
unset($_SESSION[accno]);

if(isset($_SESSION[bname]))
unset($_SESSION[bname]);

if(isset($_SESSION[bemailadd]))
unset($_SESSION[bemailadd]);

if(isset($_SESSION[rcountry]))
unset($_SESSION[rcountry]);

if(isset($_SESSION[rstate]))
unset($_SESSION[rstate]);

if(isset($_SESSION[dot]))
unset($_SESSION[dot]);

if(isset($_SESSION[swift]))
unset($_SESSION[swift]);

if(isset($_SESSION[amt]))
unset($_SESSION[amt]);

if(isset($_SESSION[desc]))
unset($_SESSION[desc]);

if(isset($_SESSION[toption]))
unset($_SESSION[toption]);

if(isset($_SESSION[saccno]))
unset($_SESSION[saccno]);

if(isset($_SESSION[currency]))
unset($_SESSION[currency]);
 
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
 
						
						<script src='https://kit.fontawesome.com/a076d05399.js'></script>
					 
		

<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">International Money Transfer</h4>
                  <p class="card-category">The International Money Transfer (IMT) is designed to enable both account holders
                                and non-account holders send and receive funds to and from any subsidiary in America, Europe, Asia and West Africa.
                                </p>
                </div>
				
                <div class="card-body">
				<h4 class="card-title">Please ensure all fields are completed</h4>
                <br>&nbsp;<br/>
				 
				 <form action="<?php echo WEB_ROOT; ?>view/?v=cot" method="POST"  enctype="multipart/form-data">
                            
							<div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver Bank Name</label>
                                    <input name="rbname" id="exampleEmail11" value="" type="text" class="form-control" required="required"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiver Account Number</label>
                                   <input name="accno" id="examplePassword11" value=""  type="text"  class="form-control" required="required"></div>
                                 </div>
                            </div>
                            
                             <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver Full Name</label>
                                   <input name="bname" id="exampleEmail11" value=""  type="text" class="form-control" required="required"></div>
                                 </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiver Email Address</label>
                                    <input name="bemailadd" id="examplePassword11" value=""  type="email"  class="form-control" required="required"></div>
                                </div>
                            </div>
                            
                             <div class="form-row">
                                 
                                    <script type= "text/javascript" src="<?php echo WEB_ROOT; ?>assets/countries.js"></script>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver Country</label>
							     <select id="country" class="form-control" required="required" name="rcountry"></select>  </div>
                                   </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiver State</label>
                                     <select class="form-control"  name ="rstate" id ="state" required ></select> </div>
                                </div>
                            </div>
                            
                            
                             <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Swift Code/Routing/IBAN</label>
                               <input name="swift" id="exampleEmail11" value=""  type="text" class="form-control" required="required"></div>
                                   </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Amount </label>
                                   <input name="amt" id="amt" value=""type="text"  class="form-control" required="required"></div>
                                </div>
								
								<div class="col-md-4">
                                    
								<select required  class="form-control" name="currency" id="currency" >
								<option Disabled selected value="">Select Account Currency</option>
								<option value="$">Dollars - ($)</option>
								<option value="€">Euro - (€)</option>
								<option value="£">Pound - (£)</option>
								<option value="¥">Yen - (¥)</option>
								<option value="Fr">France - (Fr)</option>
									</select>

								</div>

								
								
                            </div>
                            
                            <br>
                            <div class="position-relative form-group"><label for="exampleAddress" class="">Transaction Naration</label>
                             <input name="desc"  style="height:80px;" id="exampleAddress"  type="text" class="form-control"></div>
                                          
                                <input type="hidden" value="<?php echo date("h:i A d M Y"); ?>" name="dot" > 
                                	<input name="toption" type="hidden" readonly="true" value="IT"  class="form-control"  />
								<input name="saccno" type="hidden" readonly="true" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>"  id="saccno" class="form-control"  />
                                            
                                            <button name="submitButton" id="submitButton" type="submit" class="mt-2 btn btn-primary">
                                                <i class='fa-globe' style='font-size:24px;color:orange'></i>&nbsp;
                                                Proceed Transfer ></button>
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
                         Avenza Prime Banks Will never ask you for your online bank details, Flee from such messages and requests.<br>
                        
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
var sprytf_swift = new Spry.Widget.ValidationTextField("sprytf_swift", 'none', {minChars:10, maxChars: 20, validateOn:["blur", "change"]});
var sprytf_amt = new Spry.Widget.ValidationTextField("sprytf_amt", "none", {validateOn:["blur", "change"]});

var sprytf_opt = new Spry.Widget.ValidationSelect("spryselect_opt");

var sprytf_dot = new Spry.Widget.ValidationTextField("sprytf_dot", "date", {format:"", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_desc = new Spry.Widget.ValidationTextarea("sprytf_desc", {isRequired:true, validateOn:["blur", "change"]});
//-->
</script>
		