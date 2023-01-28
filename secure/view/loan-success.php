 

<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Loan Acknowledgement</h4>
                  <p class="card-category">Dear <?php echo $_SESSION['hlbank_user']['fname'] ?> <?php echo $_SESSION['hlbank_user']['lname'] ?> <br> A/C No: <?php echo $_SESSION['hlbank_user']['acc_no'] ?>  
</p>
<br>

<h4 style=" color:white;">Reference Number:  LN<?php echo(rand(2222922222,999999999));?></h4>

                </div>
                <div class="card-body">
                 <form action="" method="POST" enctype="multipart/form-data" />
              <p style="text-align:justify; color:black;">
                    We are please to inform you that your Loan Application was submitted successfully, We will get back to you between 2-3 working days of its approval or denial</p>
                    <p style="text-align:justify; color:black;">
                    
                    In addition, We congratulate you for choosing Premire Financial Bank for your online banking transactions. please do not apply twice!! 
                    wait after 2 business working days. </p>
                    
                    <br>
                    Regards
                    <br/>
                    <h3 style=" color:green;">Premire Financial Bank</h3>
               
                     
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
				<h4><strong><p style="color:green"> FRAUD ALERT</p></strong>
                        </h4>
                      <p style="color:green"><b>
                         Premire Bank Will never ask you for your online bank details, Flee from such messages and requests.<br>
                        
						Stay protected always, should you notice any suspicious activities on your account? <br><a href="?v=support"><button type="button" class="btn btn-danger">ALERT US NOW!</button></a>
                        </b></p><div class="alert-btn">
                        </div>
			 </div>
                </div>
              </div>
           
			  

            </div>
          </div>
        </div>