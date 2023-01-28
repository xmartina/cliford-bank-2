  <?php
 
	error_reporting(0);
	require('../../library/config2.php');
	
  ?>
  


  
	   <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Approve Loan and Mortages</span>
                                </a>
                            </li>
                           
                        </ul>                   
	                      
	                      <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">All about Loan and mortages</h5>
                                      
                                      <?php
					                                if(isset($_POST['submit'])){
						   
						                            $conn = mysqli_connect($host, $username, $password, $database);
                                                    
                                                    // Check connection
                                                    
                                                    if (!$conn) {
                                                          die("Connection failed: " . mysqli_connect_error());
                                                    }
                                                     
                                                    echo ""; 
                                                    
                                                    $db_select = mysqli_select_db($con, $database);
						   
						                            $accno =$_REQUEST['accno'];
                                                    $ref =$_REQUEST['ref'];
                                                     $type =$_REQUEST['type'];
                                                      $amt =$_REQUEST['amt'];
                                                       $interest =$_REQUEST['interest'];
                                                        $dura =$_REQUEST['dura'];
                                                         $mreturn =$_REQUEST['mreturn'];
                                                        $status =$_REQUEST['status'];
                                                    
    $sql = "INSERT INTO `approved_loans` (`id`, `accno`, `ref`, `type`, `amt`, `interest`, `dura`, `mreturn`, `status`) 
    VALUES (NULL, '$accno', '$ref', '$type', '$amt', '$interest', '$dura', '$mreturn', '$status')";       
      
                            						   $insert=mysqli_query($conn, $sql);
                            						   
                            						   if($insert){
                            							   echo '<h3>LOAN APPLICATION  WAS  APPROVED SUCCESSFUL!</h3>';
                            							   
                            						   }else{echo '<h3>LOAN APPLICATION HAS FAILED!</h3>';}
                            					   }
                            					?>
                                      
                                        <form name="myForm" action="" onsubmit="return validateForm()" method="post">
                                             <script>
function validateForm() {
  var x = document.forms["myForm"]["accno"].value;
  if (x == "") {
    alert("Please Enter Client Account Number");
    return false;
  }
}

function validateForm() {
  var x = document.forms["myForm"]["ref"].value;
  if (x == "") {
    alert("Please Enter Reference Number");
    return false;
  }
}
function validateForm() {
  var x = document.forms["myForm"]["type"].value;
  if (x == "") {
    alert("Please Enter Loan Type");
    return false;
  }
}

function validateForm() {
  var x = document.forms["myForm"]["amt"].value;
  if (x == "") {
    alert("Please Enter Loan Amount");
    return false;
  }
}


function validateForm() {
  var x = document.forms["myForm"]["interest"].value;
  if (x == "") {
    alert("Please Enter Loan Interest");
    return false;
  }
}


function validateForm() {
  var x = document.forms["myForm"]["dura"].value;
  if (x == "") {
    alert("Please Enter Loan Period");
    return false;
  }
}

function validateForm() {
  var x = document.forms["myForm"]["mreturn"].value;
  if (x == "") {
    alert("Please Enter Monthly Return");
    return false;
  }
}


function validateForm() {
  var x = document.forms["myForm"]["status"].value;
  if (x == "") {
    alert("Please Select Loan Status");
    return false;
  }
}
</script>
                                              
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Client Account Number</label>
                                         <input type="text" class="form-control" name="accno" id="type"  placeholder="Client Account Number" >
                                            </div>
                                            
                                            <div class="position-relative form-group"><label for="exampleAddress2" class="">Loan Reference Number</label>
                                           <input type="text" class="form-control" placeholder="Enter Loan Reference Number " name="ref" >
                                            </div>
                                            
                                            <div class="position-relative form-group"><label for="exampleAddress2" class="">Loan Type</label>
                                           <select class="form-control" name="type" required="">
                                              <option value="" >Select Loan Type</option>
                                              <option value="Home Loan">Home Loan</option>
                                              <option value="Car Loan">Car Loan</option>
                                              <option value="Tuition Fee Loan">Tution Fee Loan</option>
                                              <option value="Investment Loan">Investment Loan</option>
                                               
                                          </select>
                                            </div>
                                            
                                            <div class="position-relative form-group"><label for="exampleAddress2" class="">Loan Amount</label>
                                       <input type="text" class="form-control" placeholder="Enter  Loan Amount e.g 1,000" name="amt" >
                                            </div>
                                            
                                            <div class="position-relative form-group"><label for="exampleAddress2" class="">Loan Interest Rate</label>
                                         <input type="text" class="form-control" name="interest" id="type"  placeholder="Interest e.g 13.10" >
                                            </div>
                                            
                                             <div class="position-relative form-group"><label for="exampleAddress2" class="">Loan Duration</label>
                                         <select class="form-control" name="dura" required="">
                                              <option value="" >Select Loan Duration</option>
                                              <option value=" 1-3 months">1-3 Months</option> 
                                               <option value="3-7 months">3-7 Months</option>
                                                <option value=" 12 months">12 Months</option>
                                                 <option value=" 18 months">18 Months</option>
                                                  <option value=" 24 months">24 Months</option>
                                                   <option value="35 months">35 Months</option>
                                               
                                          </select>
                                            </div>
                                           
                                            
                                            <div class="position-relative form-group"><label for="exampleAddress2" class="">Monthly Repayment</label>
                                         <input type="text" class="form-control" name="mreturn" id="type"  placeholder="Client Monthly Payment e.g 1,233" >
                                            </div>
                                            
                                            <div class="position-relative form-group"><label for="exampleAddress2" class="">Loan Status</label>
                                         <select class="form-control" name="status" required="">
                                              <option value="" >Select Loan Status</option>
                                              <option value="ACTIVE">ACTIVE</option>
                                              <option value="INACTIVE">INACTIVE</option>
                                               
                                          </select>
                                            </div>
                                            
                                            
                                            <button type="submit" name="submit" class="mt-2 btn btn-primary">Approve Loan</button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
 
              
              
              
               
              
              
              
           
                  <center><h4 class="card-title">List of Approved Loans for my Bank</h4>
                  <p class="card-category">View approved loans  Avaliable in my bank</p></center>
                  <div class="table-responsive">
                   		<?php
			  
				$query=mysqli_query($conn,"SELECT * FROM `approved_loans` ORDER BY `id` DESC");
				
				echo '<table align="center" class="align-middle mb-0 table table-borderless table-striped table-hover" border="1px" cellpadding="5px" cellspacing="5px">';
				echo '<caption class=""><br>';
				echo '<tr class="list-head"><th>USERID</th><th>A/C NO:</th><th>REF NO</th><th>TYPE</th><th>AMOUNT</th><th>INTEREST</th><th>PERIOD</th>
				<th>MONTHLY PAYMENT</th><th>STATUS</th></tr>';
				while($active=mysqli_fetch_array($query)){
					echo '<tr class="list-detail"><td>'.$active['id'].'</td><td>'.$active['accno'].'</td><td>'.$active['ref'].'</td><td>'.$active['type'].'</td>
					<td>'.$active['amt'].'</td><td>'.$active['interest'].'</td><td>'.$active['dura'].'</td><td>'.$active['mreturn'].'</td>
					<td>'.$active['status'].'</td</tr>';
				}
				echo '</table>';
			  ?>
                   
                   
          </div>
               
 



