
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
                  <h4 class="card-title">Local Money Transfer</h4>
                  <p class="card-category"> Local bank transfer is a cross-border payment method where a deposit is made into a foreign bank account. Local bank transfers involve 
                        an intermediary organization or financial institution which operates between the payer (or the originator) of the transfer and the
                        payee (or the receiver) of the payment. </p>
                </div>
				
                <div class="card-body">
				<h4 class="card-title">Please ensure all fields are completed</h4>
                <br>&nbsp;<br/>
				 <form  action="<?php echo WEB_ROOT; ?>view/process2.php?action=transfer" method="POST"  enctype="multipart/form-data">
                            
							<div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver State</label>
                                    <select name ="rstate" class="form-control" >            
                          <option value="">Choose your State in United States</option>
<option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option>
<option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option>
<option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option>
<option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option>
                          </select>
                                </div>
								
								  </div>
								
								
								
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiving Bank</label>
                                    <select name ="r_bank" class="form-control" >            
                                                        <option value="">Select Beneficiary Bank</option>
    <option value="Chase Bank">Chase Bank</option><option value="Bank of America">Bank of America</option><option value="Wells Fargo">Wells Fargo</option>
    <option value="U.S. Bank">U.S. Bank</option><option value="BBVA Compass">BBVA Compass </option><option value="Bank of the west">Bank of the west</option>
    <option value="Santander Consumer Bank">Santander Consumer Bank</option><option value="Citi Bank">Citi Bank</option><option value="Huntington Bank">Huntington Bank</option>
    <option value="M&T Bank">M&T Bank</option><option value="Woodforest National Bank">Woodforest National Bank</option><option value="Citizens Bank">Citizens Bank</option><option value="Fifth Third Bank">Fifth Third Bank</option>
    <option value="Key Bank">Key Bank</option><option value="TD Bank">TD Bank</option><option value="Sun Trust Bank">Sun Trust Bank</option>
    <option value="Regions Bank">Regions Bank</option><option value="PNC Bank">PNC Bank</option><option value="BB&T Bank">BB&T Bank</option>
    <option value="First National Bank">First National Bank</option><option value="BMO Harris Bank">BMO Harris Bank</option><option value="First Citizens Bank">First Citizens Bank</option><option value="Comerica Bank">Comerica Bank</option><option value="People's United Bank">People's United Bank</option>
    <option value="Umpqua Bank">Umpqua Bank</option><option value="Bank of the Ozarks">Bank of the Ozarks</option><option value="HSBC">HSBC</option><option value="MUFG Union Bank">MUFG Union Bank</option><option value="Arvest Bank">Arvest Bank</option>
    <option value="Chemical Bank">Chemical Bank</option><option value="TCF Bank">TCF Bank</option><option value="Synovus Bank">Synovus Bank</option><option value="Bancorp South Bank">Bancorp South Bank</option>
    <option value="Washington Federal">Washington Federal</option><option value="Assiciated Bank">Assiciated Bank</option>
    <option value="Iberiabank">Iberiabank</option><option value="Valley National Bank">Valley National Bank</option><option value="Whitney Bank">Whitney Bank</option><option value="Trust Mark National Bank">Trust Mark National Bank</option><option value="Great Western Bank">Great Western Bank</option><option value="Columbia State Bank">Columbia State Bank</option>
    <option value="Centennial Bank">Centennial Bank</option><option value="Old National Bank">Old National Bank</option>
    <option value="South State Bank">South State Bank</option><option value="First Tennessee Bank">First Tennessee Bank</option>
    <option value="NBT Bank">NBT Bank</option><option value="Renasant Bank">Renasant Bank</option><option value="Banner Bank">Banner Bank</option>
    <option value="Webster Bank">Webster Bank</option><option value="Simmons Bank">Simmons Bank</option><option value="United Bank">United Bank</option>
    <option value="Frost Bank">Frost Bank</option><option value="WesBanco Bank">WesBanco Bank</option><option value="Commerce Bank">Commerce Bank</option>
    <option value="Investors Bank">Investors Bank</option><option value="TrustCo Bank">TrustCo Bank</option><option value="First Commonwealth Bank">First Commonwealth Bank</option><option value="Sterling National Bank">Sterling National Bank</option>
    <option value="Carter Bank And Trust">Carter Bank And Trust</option>
    <option value="First Midwest Bank">First Midwest Bank</option>
    <option value="First Bank">First Bank</option>
    <option value="Park National Bank">Park National Bank</option> <option value="Pinnacle Bank">Pinnacle Bank</option>
    <option value="Glacier Bank">Glacier Bank</option> <option value="Fulton Bank">Fulton Bank</option>
    <option value="Rabobank">Rabobank</option><option value="Zions Bank">Zions Bank</option><option value="First Merchants Bank">First Merchants Bank</option>
    <option value="East West Bank">East West Bank</option><option value="First Interstate Bank">First Interstate Bank</option><option value="Union Bank and Trust">Union Bank and Trust</option><option value="Great Southern Bank">Great Southern Bank</option>
    <option value="Flagster Bank">Flagster Bank</option>
                    				</select>    </div>
                            </div>
                              </div>
                        
							
                             <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver FullName</label>
                                    <input name="bname" id="exampleEmail11" value=""  type="text" class="form-control" required="required"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiver Account Number</label>
                                    <input name="r_accno" id="examplePassword11" value=""  type="text"  class="form-control" required="required"></div>
                                </div>
                            </div>
                            
                            
                            
                            
                             <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Routing Number only</label>
                                    <input name="swift" id="exampleEmail11" value=""  type="text" class="form-control" required="required"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Amount (<?php echo $_SESSION['hlbank_user']['currency'] ?>):</label>
                                    <input name="amt" id="amt" value=""  type="text"  class="form-control" required="required"></div>
                                </div>
                            </div>
                            
                            
                            <div class="position-relative form-group"><label for="exampleAddress" class="">Transaction Naration</label>
                            <input name="description"  style="height:80px;" id="exampleAddress"  type="text" class="form-control"></div>
                            
                                           
                                <input type="hidden" value="<?php echo date("h:i A d M Y"); ?>" name="dot" > 
                                	<input name="toption" type="hidden" readonly="true" value="IT"  class="form-control"  />
						<input name="saccno" type="hidden" readonly="true" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>"  id="saccno" class="form-control"  />
                                            
                                            <button name="submitButton" id="submitButton" type="submit" class="mt-2 btn btn-primary">
                                                <i class='fas fa-globe' style='font-size:24px;color:orange'></i>&nbsp;
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
		