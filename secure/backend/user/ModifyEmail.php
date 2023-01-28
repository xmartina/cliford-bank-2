<?php
if (!defined('WEB_ROOT')) {
	exit;
}

if (isset($_GET['userId']) && (int)$_GET['userId'] > 0) {
	$userId = (int)$_GET['userId'];
} else {
	header('Location: index.php');
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';

$sql = "SELECT id, fname, lname, email, dob, phone, bname, boccu, empname, currency, gender, salary, emptype  FROM tbl_users
        WHERE id = $userId";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));

$sql = "SELECT id, address, city, state, zipcode, country  FROM tbl_address
        WHERE id = $userId";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));

?> 


                         <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Change Customer Account Details</span>
                                </a>
                            </li>
                           
                        </ul>                   
	                      
	                      <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Edit Customer Account Information</h5>
                                    
                                    <p class="errorMessage"><?php echo $errorMessage; ?></p>
                                       
                                       <form action="processUser.php?action=email" method="post" >
                                           
                                <div class="position-relative form-group"><label for="exampleAddress" class="">First Name</label>
                                <input name="fname" id="exampleAddress" value="<?php echo $fname; ?>" type="text"  class="form-control"> 
                                    <input name="hidUserId" type="hidden" id="hidUserId" value="<?php echo $id; ?>"> </td>
                                
                                </div>
                               
                                <div class="position-relative form-group"><label for="exampleAddress2" class="">Lastname</label>
                                <input name="lname" id="exampleAddress2" value="<?php echo $lname; ?>" type="text" class="form-control" >
                                </div>
                               
							    <div class="position-relative form-group"><label for="exampleAddress2" class="">Gender</label>
                                <input name="gender" id="exampleAddress2" value="<?php echo $gender; ?>" type="text" class="form-control" >
                                </div>
                                
                              
                                 <div class="position-relative form-group"><label for="exampleAddress2" class="">Mobile Number</label>
                                <input name="phone" id="exampleAddress2" value="<?php echo $phone; ?>" type="text" class="form-control" >
                                </div>
                                
                                <div class="position-relative form-group"><label for="exampleAddress2" class="">Date of Birth</label>
                                <input name="dob" id="exampleAddress2" value="<?php echo $dob; ?>" type="text" class="form-control" >
                                </div>        
                                       
                                <div class="position-relative form-group"><label for="exampleAddress2" class="">Email Address</label>
                                <input name="email" id="exampleAddress2" value="<?php echo $email; ?>" type="text" class="form-control" >
                                </div>
                                
								  <div class="position-relative form-group"><label for="exampleAddress2" class="">Currency</label>
                                <input name="currency" id="exampleAddress2" value="<?php echo $currency; ?>" type="text" class="form-control" >
                                </div>
                                
								
								
                                 <div class="position-relative form-group"><label for="exampleAddress2" class="">Employer Name</label>
                                <input name="empname" id="exampleAddress2" value="<?php echo $empname; ?>" type="text" class="form-control" >
                                </div>
                                
                                
                                 <div class="position-relative form-group"><label for="exampleAddress2" class="">Employment Type</label>
                                <input name="emptype" id="exampleAddress2" value="<?php echo $emptype; ?>" type="text" class="form-control" >
                                </div>
                                 <div class="position-relative form-group"><label for="exampleAddress2" class="">Salary Range</label>
                                <input name="salary" id="exampleAddress2" value="<?php echo $salary; ?>" type="text" class="form-control" >
                                </div>
                                
                               
                                
                                  <div class="position-relative form-group"><label for="exampleAddress2" class="">Next of Kin Name</label>
                                <input name="bname" id="exampleAddress2" value="<?php echo $bname; ?>" type="text" class="form-control" >
                                </div>      
                                   
                                   
                                    <div class="position-relative form-group"><label for="exampleAddress2" class="">Next of Kin Occupation</label>
                                <input name="boccu" id="exampleAddress2" value="<?php echo $boccu; ?>" type="text" class="form-control" >
                                </div>    
                                       
                                       
                                       
                                       
                                       
                                            
                                            <button name="btnModifyUser"   id="btnModifyUser" type="submit" class="mt-2 btn btn-primary">Modify Account</button>
                                            
                                              <button name="btnCancel" id="btnCancel" onClick="window.location.href='index.php';" class="mt-2 btn btn-primary">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>





 