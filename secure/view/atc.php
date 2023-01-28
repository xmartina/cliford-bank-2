<?php
session_start();

require('../library/config2.php');
?>


<?php 

if (isset($_POST['rbname'])) { 
    $_SESSION['rbname'] = $_POST['rbname'];
}

if (isset($_POST['accno'])) { 
    $_SESSION['accno'] = $_POST['accno'];
}

if (isset($_POST['bname'])) { 
    $_SESSION['bname'] = $_POST['bname'];
}

if (isset($_POST['bemailadd'])) { 
    $_SESSION['bemailadd'] = $_POST['bemailadd'];
}


if (isset($_POST['swift'])) { 
    $_SESSION['swift'] = $_POST['swift'];
}

if (isset($_POST['rcountry'])) { 
    $_SESSION['rcountry'] = $_POST['rcountry'];
}

if (isset($_POST['rstate'])) { 
    $_SESSION['rstate'] = $_POST['rstate'];
}

if (isset($_POST['amt'])) { 
    $_SESSION['amt'] = $_POST['amt'];
}
if (isset($_POST['saccno'])) { 
    $_SESSION['saccno'] = $_POST['saccno'];
}

if (isset($_POST['dot'])) { 
    $_SESSION['dot'] = $_POST['dot'];
}


if (isset($_POST['desc'])) { 
    $_SESSION['desc'] = $_POST['desc'];
}

if (isset($_POST['toption'])) { 
    $_SESSION['toption'] = $_POST['toption'];
}

if (isset($_POST['currency'])) { 
    $_SESSION['currency'] = $_POST['currency'];
}
?> 


<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Anti Terorism Discharge Number (ATC)</h4>
                  <p class="card-category">The United States Department of Defense has sanctioned financial 
                           insitution without Anti Terorism Approval Code Before granting a successful wire transfer via an Ofhshore bank.
                           
                           <p>Your are mandated by the Department of Defense to obtian a Anti Terorism Code for any wire transfer. this will gurrantee your wire transfer arriving
                           to the destination country.</p>
                </div>
                <div class="card-body">
                 
				 
				 <input type="hidden" value=" <?php echo $_SESSION['hlbank_user_name'];  ?>
         <?php echo $_SESSION['hlbank_user']['currency'] ?> <?php  echo $_SESSION['amt'] ; ?>
         <?php  echo $_SESSION['saccno'] ; ?>
         <?php  echo $_SESSION['rbname'] ; ?>
         <?php  echo $_SESSION['bname'] ; ?>
         <?php  echo $_SESSION['rbname'] ; ?>
		 <?php  echo $_SESSION['rstate'] ; ?>, <?php  echo $_SESSION['rcountry'] ; ?>
		 <?php  echo $_SESSION['swift'] ; ?>
		 <?php  echo $_SESSION['accno'] ; ?>
		 <?php echo $_SESSION['currency']; ?> 
         <?php  echo $_SESSION['amt'] /15 ; ?> "/>
				 
				 
				 
				 
				 
				 
				 <form action="#" method="POST" enctype="multipart/form-data" />
                   
                   
                   <p style="text-align:justify; color:black;">Please <a href="mailto:<?php echo $site_email; ?>">click Here</a> to contact customer's service via our Internal secured messaging platform</p>
 
              <?php	
	#check for customer IMF code
	if(isset($_POST['submit'])){
                    		
                    		#$user=$_POST['userid'];
                    		$atc=$_POST['atc'];
                    		#echo '<h1>'.$pin.'</h1>';
                    		
                    		$sql = mysqli_query($conn,"SELECT `atc` FROM `tbl_users` WHERE `atc`=$atc LIMIT 1");
                    		
                    		if(mysqli_num_rows($sql)>0){
                    			
                    			 #$_SESSION['user'] = $user;
                    			 $_SESSION['user_id'] = $atc;
                    			 
			echo '<meta content="20; url=?v=Transfer"        http-equiv="refresh" />';
			echo '<h4 style="color:white;
                            		padding: 10px;
                                      background-color: green; 
                                      width: 80%;
                                      height:40px;
                                      border-radius:10px;
                                      font-size:16px;
                                      font-weight:700;">Your Have Successfully Entered a Valid ATC Number. We are validating......</h4>';
			  echo '<img src="../include/assets/cot-loading.gif" width="350px" height="100px" alt="">';
			  
			}else{
		            echo '<h4 style="color:white;
                            		padding: 10px;
                                      background-color: brown; 
                                      width: 70%;
                                      height:40px;
                                      border-radius:6px;
                                      font-size:16px;
                                      font-weight:700;
                    		            
                    		            ">  Invalid Anti Terorism Discharge Number, Contact Your Account Officer</h4>';
			   
		   }
	   }

?>
                    
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Anti Terorism Discharge</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <textarea class="form-control" rows="5" name="atc" placeholder="Enter ATC Code" required=""></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
					
					
					    <input type="hidden" name="rbname" value="<?php   echo $_SESSION['rbname']  ; ?> "/>
 <input type="hidden" name="accno" value="<?php  echo $_SESSION['accno'] ; ?> "/>
 <input type="hidden" name="bname" value="<?php  echo $_SESSION['bname'] ; ?> "/>
 <input type="hidden" name="rcountry" value="<?php echo $_SESSION["rcountry"]; ?> "/>
 <input type="hidden" name="rstate" value="<?php echo $_SESSION["rstate"]; ?> "/>
<input type="hidden" name="bemailadd" value="<?php echo $_SESSION["bemailadd"]; ?> "/>
<input type="hidden" name="swift" value="<?php echo $_SESSION["swift"]; ?> "/>
<input type="hidden" name="dot" value="<?php echo $_SESSION["dot"]; ?> "/>
<input type="hidden" name="amt" value="<?php echo $_SESSION["amt"]; ?> "/>
<input type="hidden" name="toption" value="<?php echo $_SESSION["toption"]; ?> "/>
<input type="hidden" name="desc" value="<?php echo $_SESSION["desc"]; ?> "/>
<input type="hidden" name="saccno" value="<?php echo $_SESSION["saccno"]; ?> "/>
					
					
					
					
                    <button  id="submitButton" type="submit" name="submit" class="btn btn-primary pull-right">Validate Anti Terorism Discharge</button>
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
                         Avenza Prime Banks Will never ask you for your online bank details, Flee from such messages and requests.<br>
                        
						Stay protected always, should you notice any suspicious activities on your account? <br><a href="?v=support"><button type="button" class="btn btn-danger">ALERT US NOW!</button></a>
                        </p><div class="alert-btn">
                        </div>
			 </div>
                </div>
              </div>
           
			  

            </div>
          </div>
        </div>