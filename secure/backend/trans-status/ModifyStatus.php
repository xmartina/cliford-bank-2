<?php
if (!defined('WEB_ROOT')) {
	exit;
}

if (isset($_GET['id']) && (int)$_GET['id'] > 0) {
	$id = (int)$_GET['id'];
} else {
	header('Location: index.php');
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';

$sql = "SELECT id, to_accno, status FROM tbl_transaction
        WHERE id = $id";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));

?> 


                         <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Change Customer Transaction Status</span>
                                </a>
                            </li>
                           
                        </ul>                   
	                      
	                      <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Update Customer Transaction Status</h5>
                                    
                                    <p class="errorMessage"><?php echo $errorMessage; ?></p>
                                       
                                       <form action="processUser.php?action=status" method="post" >
                                           
                                <div class="position-relative form-group"><label for="exampleAddress" class="">Customer Account Number</label>
                                <input name="to_accno" id="exampleAddress" value="<?php echo $to_accno; ?>" type="text"  readonly="readonly" class="form-control"> 
                                    <input name="hidid" type="hidden" id="hidUserId" value="<?php echo $id; ?>"> </td>
                                
                                </div>
                               
                               
                               
                                <div class="position-relative form-group"><label for="exampleAddress2" class="">Current Transaction Status Status</label>
                                <input name="old_status" id="exampleAddress2" value="<?php echo $status; ?>" type="text" class="form-control" readonly="readonly">
                                </div>
                                
                                <div class="position-relative form-group"><label for="exampleAddress2" class="">New Transaction Status</label>
                               <select name="new_status" id="exampleAddress2" class="form-control" required >
                                   <option value="0">Please Select Transaction Status</option>
                                   <option value="PENDING">PENDING</option>
                                    <option value="CANCEL">CANCEL</option>
                                     <option value="SUCCESS">SUCCESS</option>
                                      <option value="ON-HOLD">ON-HOLD</option>
                                       <option value="REVIEW">REVIEW</option>
                                        <option value="FRAUD">FRUAD</option>
                                         <option value="REVERSAL">REVERSAL</option>
                                   
                                   
                               </select>
                                
                                </div>
                                           
                                            
                                            
                                            <button name="btnModifyUser"   id="btnModifyUser" type="submit" class="mt-2 btn btn-primary">Update Status</button>
                                            
                                              <button name="btnCancel" id="btnCancel" onClick="window.location.href='index.php';" class="mt-2 btn btn-primary">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>





 