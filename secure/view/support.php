
<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Customer Service Desk</h4>
                  <p class="card-category">Customer service is the act of taking care of the customer's needs by providing and delivering professional, 
helpful, high quality service and assistance before, during, and after the customer's requirements are met. Customer service is meeting the
needs and desires of any customer, Use our Internal Messaging Application to Contact our customer's service with easy.</p>
                </div>
                <div class="card-body">
                 <form action="<?php echo WEB_ROOT; ?>view/process.php?action=support" method="post">
							<input type="hidden" class="form-control"  name="accno" value="<?php echo $_SESSION['hlbank_user']['acc_no'] ?>" disabled/> 
                            <input type="hidden" class="form-control"  name="email"  value="<?php echo $_SESSION['hlbank_user']['email']; ?>"/>
                            <input type="hidden" class="form-control"  name="siteemail"  value="<?php echo $site_email; ?>"/>
                            <input type="hidden" class="form-control"  name="sitetitle"  value="<?php echo $site_title; ?>"/>
                    
                                           <br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <input type="text" class="form-control"  name="" value="A/c No.: &nbsp; <?php echo $_SESSION['hlbank_user']['acc_no'] ?>" disabled/>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <div class="form-group">
                          <select class="form-control"  name="dept"  required="">
                                
                                <option  value="">Please Select Customer Service Department</option>
                                <option  value="Customer Services Department">Customer Services Department</option>
                                <option  value="Account Department">Account Department</option>
                                <option  value="Transfer Department">Transfer Department</option>
                                <option  value="Card Services Department">Card Services Department</option>
                                <option  value="Loan Department">Loan Department</option>
                                <option  value="Bank Deposit Department">Bank Deposit Department</option>
                                
                            </select> </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <textarea class="form-control" rows="5" name="body" placeholder="Enter Message Details Here" required=""></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary pull-right">Submit Message</button>
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