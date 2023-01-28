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

$sql = "SELECT id, fname, lname, telex_code FROM tbl_users
        WHERE id = $userId";
$result = dbQuery($sql);		
extract(dbFetchAssoc($result));


?> 
  <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Edit TELEX Code</span>
                                </a>
                            </li>
                           
                        </ul> 
<p class="errorMessage"><?php echo $errorMessage; ?></p>


                    <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">change TELEX code here</h5>
                                        <form action="processUser.php?action=telex_code" method="post" >
                                           
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Username</label>
                                        	<input name="txtUserName" type="text"  id="txtUserName" value="<?php echo $fname. ' '.$lname; ?>" size="30" class="form-control" readonly="readonly">
                                         <input name="hidUserId" type="hidden" id="hidUserId" value="<?php echo $id; ?>"> 
                                            </div>
                                            
                                            <div class="position-relative form-group"><label for="exampleAddress2" class="">Old TELEX Code</label>
                                   	            <input name="old_telex_code" type="text" class="form-control"  value="<?php echo $telex_code; ?>" id="old_cot" size="30" readonly="readonly">
                                            </div>
                                            
                                             <div class="position-relative form-group"><label for="exampleAddress2" class="">New TELEX Code</label>
                                   	              	<input name="new_telex_code" type="text" class="form-control"   id="new_tax" size="30">
                                            </div>
                                           
                                            
                                            
                                            <button  name="btnModifyUser"  type="submit" id="btnModifyUser" class="mt-2 btn btn-primary">Modify TELEX Code</button> 
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>