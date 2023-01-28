
<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">User Account Information</h4>
                  <p class="card-category">Complete Customer's profile</p>
                </div>
                <div class="card-body">
                  <form>
				  <h3 style="font-weight:700; color:Purple;">Basic User information </h3>
                    <div class="row">
                    
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Customer Fullname</label>
                          <input type="text"  value="<?php echo $_SESSION['hlbank_user_name'];  ?>" class="form-control" disabled >
                        </div>
                      </div>
					  
					  
					  <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Gender</label>
                          <input type="text"  value="<?php echo $_SESSION['hlbank_user']['gender']; ?>" class="form-control" disabled >
                        </div>
                      </div>
					  
					  
					  
					  
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" value="<?php echo $_SESSION['hlbank_user']['email']; ?>" disabled="disabled" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile number</label>
                          <input type="text" value="<?php echo $_SESSION['hlbank_user']['phone']; ?>" disabled="disabled" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date of Birth</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['dob']; ?>" disabled="disabled" >
                        </div>
                      </div>
					  <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City/State</label>
                          <input type="text" class="form-control"  value="<?php echo $_SESSION['hlbank_user']['city']. ', '.$_SESSION['hlbank_user']['state'] ?>" disabled="disabled">
                        </div>
                      </div>
                    </div>
					
					
					
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Residential Address</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['address']; ?>" disabled="disabled" >
                        </div>
                      </div>
					  <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">State Security Number</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['ssn']; ?>" disabled="disabled" >
                        </div>
                      </div>
					  <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['zipcode']; ?>" disabled="disabled" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['country']; ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Account Number</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>&nbsp;(<?php echo $_SESSION['hlbank_user']['type'] ?>)" disabled="disabled">
                        </div>
                      </div>
					   
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Account Balance</label>
						   <?php 
						  $user_id = $_SESSION['hlbank_user']['user_id'];
						  $acc_no = $_SESSION['hlbank_user']['acc_no'];
						  
						  
						  $balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
						  $result = dbQuery($balance_sql);
						  $row = dbFetchAssoc($result);
						  ?>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['currency']; ?>&nbsp;<?php echo number_format($row['balance'], 2); ?>" disabled="disabled">
                        </div>
                      </div>
                    </div>
					
					
					
                          <h3 style="font-weight:700; color:blue;">Employment Information</h3>
                        
					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name, & Address of Employer</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['empname']; ?>" disabled="disabled" >
                        </div>
                      </div>
					 
                    </div>
                    <div class="row">
					 <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Eligible Loan State</label>
                          <input type="text" class="form-control" value="Active" disabled="disabled" >
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nature of Employment</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['emptype']; ?>" disabled>
                        </div>
                      </div>
					 <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Estimated Salary Range</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['salary']; ?>" disabled="disabled">
                        </div>
                      </div>
					   
					   </div>
					
					
					
					
					
                          <h3 style="font-weight:700; color:green;">Registered Next of Kin</h3>
                        
					
					<div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Beneficiary Name</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['bname']; ?>" disabled="disabled" >
                        </div>
                      </div>
					 
                   
					 <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Occupation</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['boccu']; ?>" disabled="disabled" >
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Beneficiary Email</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['bemail']; ?>" disabled>
                        </div>
                      </div>
					   <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Beneficiary Mobile</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['bmobile']; ?>" disabled="disabled" >
                        </div>
                      </div>
					  
					 <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Relationship</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['brela']; ?>" disabled="disabled" >
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Beneficiary Age Bracket</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['bage']; ?>" disabled>
                        </div>
                      </div>
					  </div>
					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Residential Address of Next of Kin</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['badd']; ?>" disabled="disabled" >
                        </div>
                      </div>
					
					</div>
					
					
				
						
					
					
					
					
                          <h3 style="font-weight:700; color:red;">Security Details</h3>
                        
					
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Security Question 1</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['q1']; ?>" disabled="disabled" >
                        </div>
                      </div>
					 
                   
					 <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Answer One</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['ans1']; ?>" disabled="disabled" >
                        </div>
                      </div>
					  
                        <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Security Question 2</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['q2']; ?>" disabled>
                        </div>
                      </div>
					   <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Answer Two</label>
                          <input type="text" class="form-control" value="<?php echo $_SESSION['hlbank_user']['ans2']; ?>" disabled="disabled" >
                        </div>
                      </div>
					  
					
                        </div>
					
					<br>
					
					
					
					
					
					
					
					
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
 
   

  