 
  <?php
	 
        session_start();

	error_reporting(0);
	require('../../library/config2.php');
	
  ?>
  
  

 
 <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Bank Card/ATM/ALL Card</span>
                                </a>
                            </li>
                           
                        </ul>      
              
              
                      <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Credit Cards for Customers</h4>
                  <p class="card-category">Please Enter Client Credit Cards Informations</p>
                </div>
                <div class="card-body">
                   
                   <?php
					                                if(isset($_POST['submit'])){
						   
						                            $conn = mysqli_connect($host, $username, $password, $database);
                                                    
                                                    // Check connection
                                                    
                                                    if (!$conn) {
                                                          die("Connection failed: " . mysqli_connect_error());
                                                    }
                                                     
                                                    echo ""; 
                                                    
                                                    $db_select = mysqli_select_db($con, $database);
						   
						                            $sn =$_REQUEST['sn'];
                                                    $exp =$_REQUEST['exp'];
                                                     $cvv =$_REQUEST['cvv'];
                                                      $cardpin =$_REQUEST['cardpin'];
                                                       $type =$_REQUEST['type'];
                                                        $accno =$_REQUEST['accno'];
                                                    
     $sql = "INSERT INTO `cards` (`id`, `sn`, `exp`, `cvv`, `cardpin`, `type`, `accno`) 
     VALUES (NULL, '$sn', '$exp', '$cvv', '$cardpin', '$type', '$accno')";        
     
                                           
                                                    
                            						 
                            						   $insert=mysqli_query($conn, $sql);
                            						   
                            						   if($insert){
                            							   echo '<h3>CREDIT CARD  WAS  APPROVED SUCCESSFUL!</h3>';
                            							   
                            						   }else{echo '<h3>CARD HAS FAILED!</h3>';}
                            					   }
                            					?>
					
                  <form name="myForm" action="" onsubmit="return validateForm()" method="post">
                   
  <script>
function validateForm() {
  var x = document.forms["myForm"]["sn"].value;
  if (x == "") {
    alert("Please Enter Card Serial Number");
    return false;
  }
}

function validateForm() {
  var x = document.forms["myForm"]["exp"].value;
  if (x == "") {
    alert("Please Enter Card Expiry Date");
    return false;
  }
}
function validateForm() {
  var x = document.forms["myForm"]["cvv"].value;
  if (x == "") {
    alert("Please Enter 3 Digit  CVV Code");
    return false;
  }
}

function validateForm() {
  var x = document.forms["myForm"]["cardpin"].value;
  if (x == "") {
    alert("Please Enter Card PIN");
    return false;
  }
}


function validateForm() {
  var x = document.forms["myForm"]["type"].value;
  if (x == "") {
    alert("Please Enter Card Type");
    return false;
  }
}


function validateForm() {
  var x = document.forms["myForm"]["accno"].value;
  if (x == "") {
    alert("Please Enter Client Account umber");
    return false;
  }
}
</script>
  
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          
                          <input type="text" class="form-control" name="sn" id="type"  placeholder="Card Serial Number" >
                            
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          <input type="text" class="form-control" placeholder="Enter  Card Expiry Date e.g 04/22" name="exp" >
                        </div>
                      </div>
                    </div>
                    
                     <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          
                          <input type="text" class="form-control" name="cvv" id="type"  placeholder="Card CVV" >
                            
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          <input type="text" class="form-control" placeholder="Enter  Card 4 -7 Digit PIN" name="cardpin" >
                        </div>
                      </div>
                    </div>
                    
                     <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          
                          <input type="text" class="form-control" name="type" id="type"  placeholder="Card Type (Master)" >
                            
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          <input type="text" class="form-control" placeholder="Enter  Client Account Number" name="accno" >
                        </div>
                      </div>
                    </div>
                 
                  
                    
                        
              <br><br>
                 
                    <button type="submit" name="submit" class="btn btn-success btn-block loginbtn" >Add Card</button>
                    <div class="clearfix"></div>
                  </form>
                   	 
         
                </div>
              </div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              <br>
              
              
               <center><h4 class="card-title">List of Approved Cards for my Bank</h4>
                  <p class="card-category">View account Approved Cards Avaliable</p></center>
                  <div class="table-responsive">
              		<?php
			  
				$query=mysqli_query($conn,"SELECT * FROM `cards` ORDER BY `id` DESC");
				
				echo '<table style="width="70%" class="align-middle mb-0 table table-borderless table-striped table-hover"align="center" border="1px" cellpadding="5px" cellspacing="5px">';
				echo '<caption class=""><br>';
				echo '<tr class="list-head"><th>USERID</th><th>CARD NO:</th><th>EXPIRY DATE</th><th>CVV</th><th>CARD PIN</th><th>CARD TYPE</th><th>A/C NUMBER</th></tr>';
				while($active=mysqli_fetch_array($query)){
					echo '<tr class="list-detail"><td>'.$active['id'].'</td><td>'.$active['sn'].'</td><td>'.$active['exp'].'</td>
					<td>'.$active['cvv'].'</td><td>'.$active['cardpin'].'</td><td>'.$active['type'].'</td><td>'.$active['accno'].'</td></tr>';
				}
				echo '</table>';
			  ?>
                   
                   
         
              </div>
             



