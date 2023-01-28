<?php
 require_once '../../library/config2.php';
require_once '../library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
	$result = doRegister();
	if ($result != '') {
		$errorMessage = $result;
	}
}
	
?>
  
  
  
    
  <!-- One "tab" for each step in the form: -->
<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                             
        <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
            <span><i class='fas fa-key' style='font-size:24px;color:orange'></i>Register New Customer</span>
        </a>
    </li> 
</ul>  
                        
                        
         <div class="tab-content">

                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Please ensure all fields are completed</h5>
                                    
                                    <?php echo $errorMessage; ?>
                                    
  	<form class="login100-form validate-form"  method="post" enctype="multipart/form-data"  action="">
  	    
			<div class="tab"><h1><strong style="color: brown; font-weight: 700;">Personal Information</h1></strong>
					 
					  <div class="position-relative form-group">
						 
						<input  type="text" name="firstname"  placeholder="  First Name"  class="form-control" required=""/>
					</div>
					<div class="position-relative form-group">
						 
						<input  type="text" name="lastname" placeholder="Last Name" class="form-control" required=""/>
					</div>
					<div class="position-relative form-group">
							
						<input  type="text" name="email" placeholder="Email Address" class="form-control" required=""/>
					</div>
					<div class="position-relative form-group">
							
						<input  type="text" name="phone" placeholder="Mobile/Phone No"  class="form-control" required=""/>
					</div>
						<label><strong style="color: brown; font-weight: 700;">Date of Birth</strong></label>
						<div class="position-relative form-group">
							
						<input  type="date" name="dob" placeholder="Date of Birth" class="form-control" required=""/>
						</div>
					 
						 <div class="position-relative form-group">
							<select name="gender"  class="form-control" required>
													<option value="">Select Gender</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
						</select></div>
						<div class="position-relative form-group">
						<label><strong style="color: brown; font-weight: 700;">Profile Picture</strong></label>	
					 <div class="position-relative form-group">
					<input  class="form-control" type="file" name="pic"  class="btn btn-primary" required=""/> 
					</div>	 
					
						<input  type="text" name="address" placeholder="Home Address"  class="form-control"required=""/>  
							</div>
							<div class="position-relative form-group">
							
						 <input  type="text" name="city" placeholder="City of Origin"  class="form-control" required=""/> </div>
						 <div class="position-relative form-group">
							
						<input  type="text" name="zipcode" placeholder="Postal/Zip Code" class="form-control" required=""/>  </div>

						<div class="position-relative form-group">
						<script type= "text/javascript" src = "<?php echo WEB_ROOT; ?>assets/countries.js"></script>
			 	 
                         <select name="country" class="form-control"  required=""id="country">
						 <option value="">Please select Country</option> 
						</select>
						 </div>
						  <div class="position-relative form-group">
						<select name="state"  class="form-control" required=""id="state">
						 <option value="">Please select State</option> 
						</select></div>
						
					
						<script language="javascript">
							populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
							populateCountries("country2");
							populateCountries("country2");
						</script> 
				 <div class="position-relative form-group">
							<select name="currency" class="form-control"  id="country" required>
					<option selected value="">Select Account Currency</option>
<option value="USD">America (United States) Dollars – USD</option>
<option value="AFN">Afghanistan Afghanis – AFN</option>
<option value="ALL">Albania Leke – ALL</option>
<option value="DZD">Algeria Dinars – DZD</option>
<option value="ARS">Argentina Pesos – ARS</option>
<option value="AUD">Australia Dollars – AUD</option>
<option value="ATS">Austria Schillings – ATS</OPTION>
 
<option value="BSD">Bahamas Dollars – BSD</option>
<option value="BHD">Bahrain Dinars – BHD</option>
<option value="BDT">Bangladesh Taka – BDT</option>
<option value="BBD">Barbados Dollars – BBD</option>
<option value="BEF">Belgium Francs – BEF</OPTION>
<option value="BMD">Bermuda Dollars – BMD</option>
 
<option value="BRL">Brazil Reais – BRL</option>
<option value="BGN">Bulgaria Leva – BGN</option>
<option value="CAD">Canada Dollars – CAD</option>
<option value="XOF">CFA BCEAO Francs – XOF</option>
<option value="XAF">CFA BEAC Francs – XAF</option>
<option value="CLP">Chile Pesos – CLP</option>
 
<option value="CNY">China Yuan Renminbi – CNY</option>
<option value="CNY">RMB (China Yuan Renminbi) – CNY</option>
<option value="COP">Colombia Pesos – COP</option>
<option value="XPF">CFP Francs – XPF</option>
<option value="CRC">Costa Rica Colones – CRC</option>
<option value="HRK">Croatia Kuna – HRK</option>
 
<option value="CYP">Cyprus Pounds – CYP</option>
<option value="CZK">Czech Republic Koruny – CZK</option>
<option value="DKK">Denmark Kroner – DKK</option>
<option value="DEM">Deutsche (Germany) Marks – DEM</OPTION>
<option value="DOP">Dominican Republic Pesos – DOP</option>
<option value="NLG">Dutch (Netherlands) Guilders – NLG</OPTION>
 
<option value="XCD">Eastern Caribbean Dollars – XCD</option>
<option value="EGP">Egypt Pounds – EGP</option>
<option value="EEK">Estonia Krooni – EEK</option>
<option value="EUR">Euro – EUR</option>
<option value="FJD">Fiji Dollars – FJD</option>
<option value="FIM">Finland Markkaa – FIM</OPTION>
 
<option value="FRF*">France Francs – FRF*</OPTION>
<option value="DEM">Germany Deutsche Marks – DEM</OPTION>
<option value="XAU">Gold Ounces – XAU</option>
<option value="GRD">Greece Drachmae – GRD</OPTION>
<option value="GTQ">Guatemalan Quetzal – GTQ</OPTION>
<option value="NLG">Holland (Netherlands) Guilders – NLG</OPTION>
<option value="HKD">Hong Kong Dollars – HKD</option>
 
<option value="HUF">Hungary Forint – HUF</option>
<option value="ISK">Iceland Kronur – ISK</option>
<option value="XDR">IMF Special Drawing Right – XDR</option>
<option value="INR">India Rupees – INR</option>
<option value="IDR">Indonesia Rupiahs – IDR</option>
<option value="IRR">Iran Rials – IRR</option>
 
<option value="IQD">Iraq Dinars – IQD</option>
<option value="IEP*">Ireland Pounds – IEP*</OPTION>
<option value="ILS">Israel New Shekels – ILS</option>
<option value="ITL*">Italy Lire – ITL*</OPTION>
<option value="JMD">Jamaica Dollars – JMD</option>
<option value="JPY">Japan Yen – JPY</option>
 
<option value="JOD">Jordan Dinars – JOD</option>
<option value="KES">Kenya Shillings – KES</option>
<option value="KRW">Korea (South) Won – KRW</option>
<option value="KWD">Kuwait Dinars – KWD</option>
<option value="LBP">Lebanon Pounds – LBP</option>
<option value="LUF">Luxembourg Francs – LUF</OPTION>
 
<option value="MYR">Malaysia Ringgits – MYR</option>
<option value="MTL">Malta Liri – MTL</option>
<option value="MUR">Mauritius Rupees – MUR</option>
<option value="MXN">Mexico Pesos – MXN</option>
<option value="MAD">Morocco Dirhams – MAD</option>
<option value="NLG">Netherlands Guilders – NLG</OPTION>
 
<option value="NZD">New Zealand Dollars – NZD</option>
<option value="NGN">Nigeria Naira – NGN</option>
<option value="NOK">Norway Kroner – NOK</option>
<option value="OMR">Oman Rials – OMR</option>
<option value="PKR">Pakistan Rupees – PKR</option>
<option value="XPD">Palladium Ounces – XPD</option>
<option value="PEN">Peru Nuevos Soles – PEN</option>
 
<option value="PHP">Philippines Pesos – PHP</option>
<option value="XPT">Platinum Ounces – XPT</option>
<option value="PLN">Poland Zlotych – PLN</option>
<option value="PTE">Portugal Escudos – PTE</OPTION>
<option value="QAR">Qatar Riyals – QAR</option>
<option value="RON">Romania New Lei – RON</option>
 
<option value="ROL">Romania Lei – ROL</option>
<option value="RUB">Russia Rubles – RUB</option>
<option value="SAR">Saudi Arabia Riyals – SAR</option>
<option value="XAG">Silver Ounces – XAG</option>
<option value="SGD">Singapore Dollars – SGD</option>
<option value="SKK">Slovakia Koruny – SKK</option>
 
<option value="SIT">Slovenia Tolars – SIT</option>
<option value="ZAR">South Africa Rand – ZAR</option>
<option value="KRW">South Korea Won – KRW</option>
<option value="ESP">Spain Pesetas – ESP</OPTION> 
 
<option value="SDD">Sudan Dinars – SDD</option>
<option value="SEK">Sweden Kronor – SEK</option>
<option value="CHF">Switzerland Francs – CHF</option>
<option value="TWD">Taiwan New Dollars – TWD</option>
<option value="THB">Thailand Baht – THB</option>
<option value="TTD">Trinidad and Tobago Dollars – TTD</option>
 
<option value="TND">Tunisia Dinars – TND</option>
<option value="TRY">Turkey New Lira – TRY</option>
<option value="AED">United Arab Emirates Dirhams – AED</option>
<option value="GBP">United Kingdom Pounds – GBP</option>
<option value="USD">United States Dollars – USD</option>
<option value="VEB">Venezuela Bolivares – VEB</option>
 
<option value="VND">Vietnam Dong – VND</option>
<option value="ZMK">Zambia Kwacha – ZMK</option>
				</select></div>
					
				<div class="position-relative form-group"> 
					<select  class="form-control" name="acctype" required>
					<option value="">Please select Account Type</option> 
						<option value="Checking Account">Checking Account</option>
						<option value="Savings Account">Saving Account</option>
						<option value="Fixed Deposit Account">Fixed Deposit Account</option>
						<option value="Current Account">Current Account</option>
						<option value="Business Account">Business Account</option>
						<option value="Non Resident Account">Non Resident Account</option>
						<option value="Cooperate Business Account">Cooperate Business Account</option>
						<option value="Investment Account">Investment Account</option>
					</select>
					 </div>					
			</div>
			
			 
			 
			 <div class="tab"><h1><strong style="color: gold; font-weight: 900;">Employment Section</strong></h1>
					
					 
						<div class="position-relative form-group">
							<input  class="form-control" type="text" name="empname" placeholder="Name and Address of Employer" /> 
					</div>
					
					<div class="position-relative form-group">
							
					<select name="emptype"  class="form-control" id="form-first-name">
					<option value="">Type of Employment</option>
												<option value="self Employed">Self Employed</option>  
												<option value="self Employed">Public/Government Office</option>  
												<option value="self Employed">Private/Partnership Office</option>  
												<option value="self Employed">Business/Sales</option>  
												<option value="self Employed">Trading/Market</option>  
												<option value="self Employed">Military/Paramilitary</option>  
												<option value="self Employed">Politician/Celebrity</option>  
					</select></div>
						

							<div class="position-relative form-group">
													<select class="form-control" name="salary" >
					<option value="">Select Your Salary Range</option>
												<option value="$100.00 - $500.00">$100.00 - $500.00</option> 
												<option value="$700.00 - $1,000.00">$700.00 - $1,000.00</option> 
												<option value="$1,000.00 - $2,000.00">$1,000.00 - $2,000.00</option> 
												<option value="$2,000.00 - $5,000.00">$2,000.00 - $5,000.00</option> 
												<option value="$5,000.00 - $10,000.00">$5,000.00 - $10,000.00</option> 
												<option value="$15,000.00 - $20,000.00">$15,000.00 - $20,000.00</option> 
												<option value="$25,000.00 - $30,000.00">$25,000.00 - $30,000.00</option> 
												<option value="$30,000.00 - $70,000.00">$30,000.00 - $70,000.00</option> 
												<option value="$80,000.00 - $140,000.00">$80,000.00 - $140,000.00</option> 
												<option value="$150,000.00 - $300,000.00">$150,000.00 - $300,000.00</option> 
												<option value="$300,000.00 - $1,000,000.00">$300,000.00 - $1,000,000.00</option> 
					</select></div>
					
					<div class="tab"><h1><strong style="color: blue; font-weight: 900;">Next of Kin Section</strong></h1>
					
					<div class="position-relative form-group">
							
					<input  type="text" name="bname"  placeholder="Next of Kin Legal Name" class="form-control" /></div>
					
					<div class="position-relative form-group">
							<input  type="text" name="boccu"  placeholder="Next of Kin Occupation" class="form-control" /></div>
							
							<div class="position-relative form-group">
							<input  type="text" name="bemail"  placeholder="Next of Kin Email" class="form-control" /></div>
							
							<div class="position-relative form-group">
							<input  type="text" name="bmobile"  placeholder="Next of Kin Phone No" class="form-control" /></div>
							
							
					<div class="position-relative form-group">
							
					<input  type="text" name="badd"  placeholder="Next of Kin Residential Address" class="form-control" /></div>
					
					
				<div class="position-relative form-group">
							
					<select name="brela"  class="form-control" id="form-first-name">
					<option value="">Please select Relationship</option>
						<option value="Son">Son</option>
						<option value="Daughter">Daughter</option>
						<option value="Father">Father</option>
						<option value="Mother">Mother</option>
						<option value="Husband">Husband</option>
						<option value="Spouse">Spouse</option>
						<option value="Hobby">Hobby</option>
						<option value="Cousin">Cousin</option>
						<option value="Others">Others</option>
					</select></div>


				<div class="position-relative form-group">
							
					<select name="bage"  class="form-control" id="form-first-name">
					<option value="">Please select Age</option>
						<option value="">Age</option>
					<option value="18-25yrs">18-25yrs</option>
					<option value="25-35yrs">25-35yrs</option>
					<option value="35-50yrs">35-50yrs</option>
					<option value="50-above">50yrs and above</option>
					</select></div>

 

						
			</div>
			
			
			
			
			 <div class="tab"><h1><strong style="color: green; font-weight: 900;">Security Section</strong></h1>
	 
					<div class="position-relative form-group">
							 
					<select name="q1" class="form-control" >
					<option value="">Select Question One</option>
												<option value="What is your pet name?">What is your pet name?</option>    
												<option value="What is your nick name?">What is your nick name?</option>    
												<option value="What is the name of your first car?">What is the name of your first car?</option>    
												<option value="when did you finish high school?">when did you finish high school?</option>    
												<option value="your favorite music?">your favorite music?</option>    
												<option value="your favorite movie?">your favorite movie</option>    
												<option value="your favorite roll model?">your favorite role model</option>    
												<option value="favorite state?">favorite state?</option>    
					</select></div>
					
					<div class="position-relative form-group">
							
					<input  type="text"  name="ans1" class="form-control"  placeholder="Answer Question One" /></div>
					
					<div class="position-relative form-group">
							
							<select name="q2" class="form-control" >
					<option value="">Select Question Two</option>
												<option value="What is your pet name?">What is your pet name?</option>    
												<option value="What is your nick name?">What is your nick name?</option>    
												<option value="What is the name of your first car?">What is the name of your first car?</option>    
												<option value="when did you finish high school?">when did you finish high school?</option>    
												<option value="your favorite music?">your favorite music?</option>
												<option value="your favorite roll model?">your favorite role model</option>    
												<option value="favorite state?">favorite state?</option>  												
					</select></div>
					 <div class="position-relative form-group">
							
					<input  type="text" name="ans2" class="form-control"  placeholder="Answer Question Two" /></div>
					
					<div class="position-relative form-group">
							
					<input  type="password" id="pass" class="form-control" name="password" placeholder="Account Password" required="" /></div>
					<div class="position-relative form-group">
							
					<input  type="password" id="pass" class="form-control" name="cpassword" placeholder="Confirm Account Password" required="" />
					</div>
					<div class="position-relative form-group">
							
					<input  type="text" name="pin" class="form-control" placeholder="Choose Transaction PIN" required="" /></div>
					<div class="position-relative form-group">
							
					<input  type="text" name="cpin" class="form-control" placeholder="Confirm Transaction PIN" required=""/></div>
					
					
					 <div class="tab"><h1><strong style="color: purple; font-weight: 900;">Transaction Codes</strong></h1>

					 
                 <div class="position-relative form-group"> <input type="text" placeholder="Enter COT Code e.g 00000"  class="form-control" name="cot"  />	</div> 
			  <div class="position-relative form-group"><input type="text" placeholder="Enter TAX Code e.g 00000"  class="form-control" name="tax" /></div>	
			 <div class="position-relative form-group"> <input type="text" class="form-control" placeholder="Enter IMF Code e.g 00000"  name="imf" /></div>
			  <div class="position-relative form-group"><input type="text" placeholder="Enter ATC Code e.g 00000" class="form-control" name="atc"  /></div>
			  <div class="position-relative form-group"><input type="text" placeholder="Enter TELEX Code e.g 0000000000" class="form-control" name="telex_code" /></div>
			   <div class="position-relative form-group"><input type="hidden" class="form-control" name="msg"  value="Your Account Has Been Activated Successfully" /></div>

						
			</div>
			
			 
			 
			  
			  
  
					<div class="container-login100-form-btn p-t-10">
				 
						<button class="mt-2 btn btn-primary" style="width:150px;" type="submit" name="submitButton" id="submitButton"  >Save Now</button>
				 
					</div>
  
 
</form>

</div></div></div></div>
  


  
	 