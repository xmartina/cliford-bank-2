<?php
session_start();

if (isset($_POST['acc_no'])) { 
    $_SESSION['acc_no'] = $_POST['acc_no'];
}
 
?> 
<?php

require('../library/config2.php');
?>


<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h5 class="card-title"><?php echo $site_title; ?> <STRONG> TO </STRONG><?php echo $site_title; ?>  MONEY TRANSFER</h5>
                
                </div>
                <div class="card-body">
                 <form action="" method="POST" enctype="multipart/form-data" />
                   
                   
                  <div class="position-relative form-group"><label for="exampleAddress" class="">10 Digit <?php echo $site_title; ?>  Account Number</label>
               <?php
									if(isset($_POST['check']))
									{
										//Get form data
										$acc_no=$_POST['acc_no'];
										
										$query=mysqli_query($conn,"SELECT * FROM `tbl_accounts` WHERE `acc_no`=$acc_no");
										$row=mysqli_fetch_array($query);
										if($row['acc_no']==$acc_no){
										   
										   
										   echo '<meta content="5; url=?v=Samebank"       http-equiv="refresh" />';
                        			echo '<h4 style="
                        			
                        			color:white;
                            		padding: 10px;
                                      background-color: green; 
                                      width: 60%;
                                      height:40px;
                                      border-radius:10px;
                                      font-size:16px;
                                      font-weight:700;">Customer Account Number is valid, PLease Wait a moment</h4>';
			  echo '<img src="../include/assets/cot-loading.gif" width="350px" height="100px" alt="">';
			  
			}else{
		            echo '<h4 style="color:white;
                            		padding: 10px;
                                      background-color: brown; 
                                      width: 65%;
                                      height:40px;
                                      border-radius:6px;
                                      font-size:16px;
                                      font-weight:700;
                    		            
                    		            ">  Invalid Customer Account Number!</h4>';
			   
		   }
	   }

?>
                    
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                         
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <textarea class="form-control" rows="5" name="acc_no" placeholder="Enter Beneficiary Account Number" required=""></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button id="submitButton" type="submit" name="check" class="btn btn-primary pull-right"> Check Account</button>
                    <div class="clearfix"></div>
                  </form>
                </div></div>
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

 

 