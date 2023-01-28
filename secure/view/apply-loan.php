
<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Apply for Loan</h4>
                  <p class="card-category">In need of facility? kindly complete the form below, approval take 1-2 business working days
                                       </p>
                </div>
                <div class="card-body">
                 <form action="<?php echo WEB_ROOT; ?>view/process.php?action=applyloan" method="post">
             
                    
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group"> 
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <input type="text" class="form-control"  name="accno"  placeholder="Account Number: <?php echo $_SESSION['hlbank_user']['acc_no'] ?>" disabled />
                          </div>
                        </div>
                      </div>
                
                      <div class="col-md-6">
                        <div class="form-group"> 
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <input type="text" class="form-control"  name="email"  placeholder="Account Email: <?php echo $_SESSION['hlbank_user']['email']; ?>" disabled />
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <input type="text" class="form-control"  name="amt"  placeholder="Enter Loan Amount e.g $10,000.00" required=""/>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <input type="text" class="form-control"  name="dura"  placeholder="Duration of Loan (e.g 12months)" required=""/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <textarea class="form-control" rows="5" name="body" placeholder="Enter Full Loan Details" required=""></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary pull-right">Apply Now</button>
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