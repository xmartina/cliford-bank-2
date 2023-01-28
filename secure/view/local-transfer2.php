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

		<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Local Funds Transfer</h4>
                  <p class="card-category">This is a local Transfer process</p>
                  
 
                </div>
                <div class="card-body">
                  
				  <form action="<?php echo WEB_ROOT; ?>view/process.php?action=transfer" method="post" >
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group"> 
                          <input type="hidden" class="form-control" value="SSIBANK" name="rbname"/> 
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group"> 
                          <input type="hidden" class="form-control" value="Same Bank"  name="rname" />
		 
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">

                          <label class="bmd-label-floating"></label>
						  
                          <input name="" type="hidden" id="accno" class="form-control"/>
						  
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
 
                          <label class="bmd-label-floating">Recipient Account Number</label>
						 	  <span id="sprytf_accno">
                          <input type="text" class="form-control" name="accno" type="text" id="accno"/>
						  <br/>
            <span class="textfieldRequiredMsg">Account Number is required.</span>
			<span class="textfieldMinCharsMsg">min of least 10 characters.</span>
			<span class="textfieldMaxCharsMsg">max 15 characters.</span>
			<span class="textfieldInvalidFormatMsg">Account Number must be Integer.</span>
		</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group"> 
                          <label class="bmd-label-floating">Sender's Account Number</label>
                          <input name="saccno" type="text" readonly="true" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>"  id="saccno" class="form-control"  />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <label class="bmd-label-floating">Amount to Transfer USD$</label>
						  <span id="sprytf_amt">
                          <input name="amt" id="amt" type="text" class="form-control"/>
						   <br/>
							<span class="textfieldRequiredMsg">Amount is required.</span>
						</span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
						<input name="toption" type="hidden" readonly="true" value="LT"  class="form-control"  />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date of Transfer</label> 
						<span id="sprytf_dot">
                          <input type="date"  name="dot" class="form-control">
						     <br/>
								<span class="textfieldRequiredMsg">Date of Transfer is required.</span>
								<span class="textfieldInvalidFormatMsg">Invalid date format.</span>
							</span>
                        </div>
                      </div>
                   
                    </div>
					
					
	  
	  
	   
	  
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Transfer Descriptions</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
							<span id="sprytf_desc">
                            <textarea name="desc" id="desc"  class="form-control" rows="5"></textarea>
							<br/>
            <span class="textareaRequiredMsg">Description is required.</span>
			<span class="textareaMinCharsMsg">Description must specify at least 10 characters.</span>
		</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="submitButton" id="submitButton"   class="btn btn-primary pull-right">Transfer Now</button>
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
			  
              
              <div class="card card-profile">
               
                <div class="card-body">
                <div class="card-header card-header-primary">
								<br>																<!-- TradingView Widget BEGIN -->
				<h4><strong>FRAUD ALERT</strong>
                        </h4>
                      <b>
                         Premire Bank Will never ask you for your online bank details, Flee from such messages and requests.<br>
                        
						Stay protected always, should you notice any suspicious activities on your account? <br><a href="?v=support"><button type="button" class="btn btn-danger">ALERT US NOW!</button></a>
                        </b><div class="alert-btn">
                        </div>
			 </div>
                </div>
              </div>
           
			  

            </div>
          </div>
        </div>

 
<script type="text/javascript">
<!--
var sprytf_rbname = new Spry.Widget.ValidationTextField("sprytf_rbname", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_rname = new Spry.Widget.ValidationTextField("sprytf_rname", 'none', {minChars:6, validateOn:["blur", "change"]});
var sprytf_accno = new Spry.Widget.ValidationTextField("sprytf_accno", 'integer', {minChars:10, maxChars: 15, validateOn:["blur", "change"]});
var sprytf_swift = new Spry.Widget.ValidationTextField("sprytf_swift", 'none', {minChars:10, maxChars: 20, validateOn:["blur", "change"]});
var sprytf_amt = new Spry.Widget.ValidationTextField("sprytf_amt", "none", {validateOn:["blur", "change"]});

var sprytf_opt = new Spry.Widget.ValidationSelect("spryselect_opt");

var sprytf_dot = new Spry.Widget.ValidationTextField("sprytf_dot", "date", {format:"", useCharacterMasking: true, validateOn:["blur", "change"]});
var sprytf_desc = new Spry.Widget.ValidationTextarea("sprytf_desc", {isRequired:true, validateOn:["blur", "change"]});
//-->
</script>

<script type="text/javascript">
$(document).ready(function(){
	$('#amt').keyup(function(e){
		$(this).val(format($(this).val()));
    });
	var format = function(num){
		var str = num.toString().replace("$", ""), parts = false, output = [], i = 1, formatted = null;
		if(str.indexOf(".") > 0) {
			parts = str.split(".");
			str = parts[0];
		}
		str = str.split("").reverse();
		for(var j = 0, len = str.length; j < len; j++) {
			if(str[j] != ",") {
				output.push(str[j]);
				if(i%3 == 0 && j < (len - 1)) {
					output.push(",");
				}
				i++;
			}
		}
		formatted = output.reverse().join("");
		return("$" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
	};

});//ready
</script>