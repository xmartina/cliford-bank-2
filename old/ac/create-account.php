<?php 
	require('function.php');

if (!isStatus($_GET['id'])) {
	header("location:suspended");
}
if (!isLoggedIn($_GET['id'])) {
	$_SESSION['msg'] = "You must log in first";
	header("Location:login?goto=" . urlencode($_SERVER['REQUEST_URI']));
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index");
}
?>
<!DOCTYPE HTML>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<meta name="HandheldFriendly" content="true" />
	<link rel="icon" href="img/core-img/favicon.ico">
	<title>Add Account | Huntington Bank</title>
    <style>
body,html{margin:0;padding:0;background-color:#696969;}
            body{backgrond:#fff;max-width:750px;margin:auto;}
            .head{border-radius: 5px;box-shadow: 0px 1px 0px 1px #000;border-bottom:1px solid #000;background-color: #222;padding:10px;width:auto;}
            .foot{right:0; left: 0;
  bottom: 0;position: absolute;box-shadow: 2px 2px 0px 2px #000;border-bottom:1px solid #000;background-color: #222;padding:10px;width: 100%;}
            .button{background-color: #222;
  color: #fff;
  padding: 12px;
  border-radius: 5px;
  font-weight:bold;
  font-size:17px;
  border:1px solid #000;
  width: 100%;}
            .text{text-shadow: 0px 0px 2px #000;font-size:12px;margin:15px;color:#ffffff;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
            .mtext{text-shadow: 1px 0px 2px #000;font-size:13px;margin:15px;color:#fff;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;}
            .mybox a{text-transform:none;color:brown;}
            .mybox{text-shadow: 0px 0px 0px #000;font-size:12px;margin:15px;padding:10px;border-radius:5px;border:1px solid #000;background-color:#ffffff;font-family:lato,sans-serif;}
            textarea{border: 1px solid #222; background:#fff;width:100%;}
            .input-group {
 margin: 5px 13px 5px 5px; } .input-group label { display: block;
 text-align: left; margin: 3px;} .input-group input { box-shadow: rgba(0,0,0,0.3) 0 0 10px;
 border-collapse: collapse; height: 25px;
 padding: 2px;
 width: 100%;
 font-size: 16px;
 border-radius: 0px; border: 1px solid #222; background:#fff;
 }
 .btn {
 padding: 5px;
 width:auto;
 font-size: 15px;
 color: #fff;
 background: #696969;border-radius: 5px; }
</style>
</head>
<body>
<div class="head"><center><img src="lockup.svg" height="45" width="160" /></center></div>
<br>
<div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script> 

<div class="mybox">
<form method="post" action="regsuccess">
    <div style="color:#fff;border:2px solid #000;height:25;colspan:2;background:brown;padding:10px;">Personal Information</div>
	<div class="input-group">
		<label>First Name</label>
		<input required type="text" value="">
	</div>
	<div class="input-group">
		<label>Last Name</label>
		<input required type="text" value="">
	</div>
	<div class="input-group">
		<label>Gender</label>
		<select id="gender" name="gender" size="1">
                            <option value="" selected="selected">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
	</div>
	<div class="input-group">
		<label>Date of Birth</label>
		<input required type="text" value="">
	</div>
	<div class="input-group">
		<label>Address</label>
		<textarea required rows="4" cols="40"></textarea>
	</div>
	<div class="input-group">
		<label>Phone</label>
		<input required type="number">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input required type="mail">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input required type="password">
	</div>
	<div class="input-group">
		<label>Confirm Password</label>
		<input required type="password">
	</div>
	<div class="input-group">
	   <label> Confirm Password</label>
	    <td><select required>
                            <option value="" selected="selected">Select Your Country</option>
                            <option value="USA">United State of America</option>
                            <option 
                                value="CANADA">United State</option>
                            <option 
                                value="GERMANY">Germany</option>
                            <option 
                                value="FRANCE">France</option>
                            <option 
                                value="UK">United State</option>
                            <option 
                                value="INDIA">India</option>
                            <option 
                                value="">---------------------</option>
                            <option 
                                value="Afghanistan">Afghanistan</option>
                            <option 
                                value="Albania">Albania</option>
                            <option 
                                value="Algeria">Algeria</option>
                            <option 
                                value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option 
                                value="Angola">Angola</option>
                            <option 
                                value="Anguilla">Anguilla</option>
                            <option 
                                value="Antarctica">Antarctica</option>
                            <option 
                                value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option 
                                value="Argentina">Argentina</option>
                            <option 
                                value="Armenia">Armenia</option>
                            <option 
                                value="Aruba">Aruba</option>
                            <option 
                                value="Australia">Australia</option>
                            <option 
                                value="Austria">Austria</option>
                            <option 
                                value="Azerbaijan">Azerbaijan</option>
                            <option 
                                value="Bahamas">Bahamas</option>
                            <option 
                                value="Bahrain">Bahrain</option>
                            <option 
                                value="Bangladesh">Bangladesh</option>
                            <option 
                                value="Barbados">Barbados</option>
                            <option 
                                value="Belarus">Belarus</option>
                            <option 
                                value="Belgium">Belgium</option>
                            <option 
                                value="Belize">Belize</option>
                            <option 
                                value="Benin">Benin</option>
                            <option 
                                value="Bermuda">Bermuda</option>
                            <option 
                                value="Bhutan">Bhutan</option>
                            <option 
                                value="Bolivia">Bolivia</option>
                            <option 
                                value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                            <option 
                                value="Botswana">Botswana</option>
                            <option 
                                value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option 
                                value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option 
                                value="Brunei Darussalam">Brunei Darussalam</option>
                            <option 
                                value="Bulgaria">Bulgaria</option>
                            <option 
                                value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option 
                                value="Cambodia">Cambodia</option>
                            <option 
                                value="Cameroon">Cameroon</option>
                            <option 
                                value="Cape Verde">Cape Verde</option>
                            <option 
                                value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option 
                                value="Chad">Chad</option>
                            <option 
                                value="Chile">Chile</option>
                            <option 
                                value="China">China</option>
                            <option 
                                value="Christmas Island">Christmas Island</option>
                            <option 
                                value="Cocoa (Keeling) Islands">Cocoa (Keeling) Islands</option>
                            <option 
                                value="Colombia">Colombia</option>
                            <option 
                                value="Comoros">Comoros</option>
                            <option 
                                value="Congo">Congo</option>
                            <option 
                                value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote Divoire">Cote Divoire</option>
                            <option 
                                value="Croatia">Croatia</option>
                            <option 
                                value="Cuba">Cuba</option>
                            <option 
                                value="Cyprus">Cyprus</option>
                            <option 
                                value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option 
                                value="Djibouti">Djibouti</option>
                            <option 
                                value="Dominica">Dominica</option>
                            <option 
                                value="Dominican Republic">Dominican Republic</option>
                            <option 
                                value="East Timor">East Timor</option>
                            <option 
                                value="Ecuador">Ecuador</option>
                            <option 
                                value="Egypt">Egypt</option>
                            <option 
                                value="El Salvador">El Salvador</option>
                            <option 
                                value="Equatorial Guinea">Equatorial Guinea</option>
                            <option 
                                value="Eritrea">Eritrea</option>
                            <option 
                                value="Estonia">Estonia</option>
                            <option 
                                value="Ethiopia">Ethiopia</option>
                            <option 
                                value="Falkland Islands">Falkland Islands</option>
                            <option 
                                value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option 
                                value="Finland">Finland</option>
                            <option 
                                value="France, Metropolitan">France, Metropolitan</option>
                            <option 
                                value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option 
                                value="French Southern Territories">French Southern Territories</option>
                            <option 
                                value="Gabon">Gabon</option>
                            <option 
                                value="Gambia">Gambia</option>
                            <option 
                                value="Georgia">Georgia</option>
                            <option 
                                value="Ghana">Ghana</option>
                            <option 
                                value="Gibraltar">Gibraltar</option>
                            <option 
                                value="Greece">Greece</option>
                            <option 
                                value="Greenland">Greenland</option>
                            <option 
                                value="Grenada">Grenada</option>
                            <option 
                                value="Guadeloupe">Guadeloupe</option>
                            <option 
                                value="Guam">Guam</option>
                            <option 
                                value="Guatemala">Guatemala</option>
                            <option 
                                value="Guinea">Guinea</option>
                            <option 
                                value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option 
                                value="Haiti">Haiti</option>
                            <option 
                                value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                            <option 
                                value="Honduras">Honduras</option>
                            <option 
                                value="Hong Kong">Hong Kong</option>
                            <option 
                                value="Hungary">Hungary</option>
                            <option 
                                value="Iceland">Iceland</option>
                            <option 
                                value="Indonesia">Indonesia</option>
                            <option 
                                value="Iran">Iran</option>
                            <option 
                                value="Iraq">Iraq</option>
                            <option 
                                value="Ireland">Ireland</option>
                            <option 
                                value="Israel">Israel</option>
                            <option 
                                value="Italy">Italy</option>
                            <option 
                                value="Jamaica">Jamaica</option>
                            <option 
                                value="Japan">Japan</option>
                            <option 
                                value="Jordan">Jordan</option>
                            <option 
                                value="Kazakhstan">Kazakhstan</option>
                            <option 
                                value="Kenya">Kenya</option>
                            <option 
                                value="Kiribati">Kiribati</option>
                            <option 
                                value="Korea, Democratic Peoples Republic of">Korea, Democratic Peoples Republic of</option>
                            <option 
                                value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option 
                                value="Lao Peoples Democratic Republic">Lao Peoples Democratic Republic</option>
                            <option 
                                value="Latvia">Latvia</option>
                            <option 
                                value="Lebanon">Lebanon</option>
                            <option 
                                value="Lesotho">Lesotho</option>
                            <option 
                                value="Liberia">Liberia</option>
                            <option 
                                value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option 
                                value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option 
                                value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option 
                                value="Madagascar">Madagascar</option>
                            <option 
                                value="Malawi">Malawi</option>
                            <option 
                                value="Malaysia">Malaysia</option>
                            <option 
                                value="Maldives">Maldives</option>
                            <option 
                                value="Mali">Mali</option>
                            <option 
                                value="Malta">Malta</option>
                            <option 
                                value="Marshall Islands">Marshall Islands</option>
                            <option 
                                value="Martinique">Martinique</option>
                            <option 
                                value="Mauritania">Mauritania</option>
                            <option 
                                value="Mauritius">Mauritius</option>
                            <option 
                                value="Mayotte">Mayotte</option>
                            <option 
                                value="Mexico">Mexico</option>
                            <option 
                                value="Micronesia">Micronesia</option>
                            <option 
                                value="Moldova">Moldova</option>
                            <option 
                                value="Monaco">Monaco</option>
                            <option 
                                value="Mongolia">Mongolia</option>
                            <option 
                                value="Montserrat">Montserrat</option>
                            <option 
                                value="Morocco">Morocco</option>
                            <option 
                                value="Mozambique">Mozambique</option>
                            <option 
                                value="Myanmar">Myanmar</option>
                            <option 
                                value="Namibia">Namibia</option>
                            <option 
                                value="Nauru">Nauru</option>
                            <option 
                                value="Nepal">Nepal</option>
                            <option 
                                value="Netherlands">Netherlands</option>
                            <option 
                                value="Netherlands Antilles">Netherlands Antilles</option>
                            <option 
                                value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option 
                                value="Nigeria">Nigeria</option>
                            <option 
                                value="Niue">Niue</option>
                            <option 
                                value="Norfolk Island">Norfolk Island</option>
                            <option 
                                value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option 
                                value="Norway">Norway</option>
                            <option 
                                value="Oman">Oman</option>
                            <option 
                                value="Pakistan">Pakistan</option>
                            <option 
                                value="Palau">Palau</option>
                            <option 
                                value="Panama">Panama</option>
                            <option 
                                value="Papua New Guinea">Papua New Guinea</option>
                            <option 
                                value="Paraguay">Paraguay</option>
                            <option 
                                value="Peru">Peru</option>
                            <option 
                                value="Philippines">Philippines</option>
                            <option 
                                value="Pitcairn">Pitcairn</option>
                            <option 
                                value="Poland">Poland</option>
                            <option 
                                value="Portugal">Portugal</option>
                            <option 
                                value="Puerto Rico">Puerto Rico</option>
                            <option 
                                value="Qatar">Qatar</option>
                            <option 
                                value="Reunion">Reunion</option>
                            <option 
                                value="Romania">Romania</option>
                            <option 
                                value="Russian Federation">Russian Federation</option>
                            <option 
                                value="Rwanda">Rwanda</option>
                            <option 
                                value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option 
                                value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option 
                                value="Samoa">Samoa</option>
                            <option 
                                value="San Marino">San Marino</option>
                            <option 
                                value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option 
                                value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option 
                                value="Seychelles">Seychelles</option>
                            <option 
                                value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option 
                                value="Slovenia">Slovenia</option>
                            <option 
                                value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option 
                                value="South Africa">South Africa</option>
                            <option value="South Georgia">South Georgia</option>
                            <option 
                                value="Spain">Spain</option>
                            <option 
                                value="Sri Lanka">Sri Lanka</option>
                            <option 
                                value="St. Helena">St. Helena</option>
                            <option 
                                value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                            <option 
                                value="Sudan">Sudan</option>
                            <option 
                                value="Suriname">Suriname</option>
                            <option 
                                value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                            <option 
                                value="Swaziland">Swaziland</option>
                            <option 
                                value="Sweden">Sweden</option>
                            <option 
                                value="Switzerland">Switzerland</option>
                            <option 
                                value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option 
                                value="Taiwan">Taiwan</option>
                            <option 
                                value="Tajikistan">Tajikistan</option>
                            <option 
                                value="Tanzania">Tanzania</option>
                            <option 
                                value="Thailand">Thailand</option>
                            <option 
                                value="Togo">Togo</option>
                            <option 
                                value="Tokelau">Tokelau</option>
                            <option 
                                value="Tonga">Tonga</option>
                            <option 
                                value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option 
                                value="Tunisia">Tunisia</option>
                            <option 
                                value="Turkey">Turkey</option>
                            <option 
                                value="Turkmenistan">Turkmenistan</option>
                            <option 
                                value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option 
                                value="Tuvalu">Tuvalu</option>
                            <option 
                                value="Uganda">Uganda</option>
                            <option 
                                value="Ukraine">Ukraine</option>
                            <option 
                                value="United Arab Emirates">United Arab Emirates</option>
                            <option 
                                value="United State Minor Outlying Islands">United State Minor Outlying Islands</option>
                            <option 
                                value="Uruguay">Uruguay</option>
                            <option 
                                value="Uzbekistan">Uzbekistan</option>
                            <option 
                                value="Vanuatu">Vanuatu</option>
                            <option 
                                value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                            <option 
                                value="Venezuela">Venezuela</option>
                            <option 
                                value="Viet Nam">Viet Nam</option>
                            <option 
                                value="Virgin Islands (British)">Virgin Islands (British)</option>
                            <option 
                                value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                            <option 
                                value="Wallisw and Futuna Islands">Wallisw and Futuna Islands</option>
                            <option 
                                value="Western Sahara">Western Sahara</option>
                            <option value="Yeman">Yeman</option>
                            <option 
                                value="Yugoslavia">Yugoslavia</option>
                            <option 
                                value="Zaire">Zaire</option>
                            <option 
                                value="Zambia">Zambia</option>
                            <option 
                                value="Zimbabwe">Zimbabwe</option>
                            <option 
                                value="Not Listed">Not Listed</option>
                        </select></td>
	</div>
	<div class="input-group">
		<label>State</label>
		<input required type="text">
	</div>
	<div class="input-group">
		<label>City</label>
		<input required type="text">
	</div>
	<div class="input-group">
		<label>Zip</label>
		<input required type="number">
	</div>
	<div class="input-group">
		<label>Passport/Photo</label>
		<input required type="file" name="userfile" id="file" />
	</div>
	<br>
	<div style="color:#fff;border:2px solid #000;height:25;colspan:2;background:brown;padding:10px;">Next of Kin details</div>
	<div class="input-group">
		<label>Next of Kin Name</label>
		<input required type="text" value="">
	</div>
	<div class="input-group">
		<label>Next of Kin Address</label>
		<textarea required rows="4" cols="40"></textarea>
	</div>
	<div class="input-group">
		<label>Next of Kin Phone</label>
		<input required type="number">
	</div>
	<div class="input-group">
	    <center><button type="submit" class="btn" name="register_btn">Submit Application</button></center>
	</div>
</form>
			      <p align="center"><a href="home"><strong>Go to Home</strong></a>  
</div>
<br/><br>
<div align="center" class="mtext">© 2021 Huntington Bancshares Incorporated.</div>
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60a112e9185beb22b30dad9b/1f5qj3ofd';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>