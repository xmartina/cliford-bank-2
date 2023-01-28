 	<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
			 
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Start Funds Transfer</h4>
                  <p class="card-category">Choose Transfer Option</p>
                </div>
                <div class="card-body">
                  <form>
                    <p><br></p>
					
                   <center> <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <a href="<?php echo WEB_ROOT; ?>view/?v=intl-transfer"><img src="<?php echo WEB_ROOT; ?>include/assets/intl.png" title="International Funds Transfer" height="140"/></a>
						  <h5><strong>Int'l Funds Transfer</strong></h5>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <a href="<?php echo WEB_ROOT; ?>view/?v=local-transfer"><img src="<?php echo WEB_ROOT; ?>include/assets/local.png" title="Local Funds Transfer"  height="140" /></a>
						  <h5><strong>Local Funds Transfer</strong></h5>
                        </div>
                      </div>
					  
					   <div class="col-md-4">
                        <div class="form-group">
                          <a href="<?php echo WEB_ROOT; ?>view/?v=telex-transfer"><img src="<?php echo WEB_ROOT; ?>include/assets/telex.png" title="Telex Funds Transfer"  height="140" /></a>
						  <h5><strong>Telex Funds Transfer</strong></h5>
                        </div>
                      </div>
					    
                    </div></center>
                     
                 <p><br></p>
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
                         Avenza Prime Bank Will never ask you for your online bank details, Flee from such messages and requests.<br>
                        
						Stay protected always, should you notice any suspicious activities on your account? <br><a href="?v=support"><button type="button" class="btn btn-danger">ALERT US NOW!</button></a>
                        </b><div class="alert-btn">
                        </div>
			 </div>
                </div>
              </div>
           
			  

            </div>
          </div>
        </div>