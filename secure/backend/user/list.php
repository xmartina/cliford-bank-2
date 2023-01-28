<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$sql = "SELECT u.id, u.fname, u.lname, u.bdate, u.is_active, u.email, u.pics,  u.phone, u.empname, u.gender, u.dob, u.salary, a.acc_no
        FROM tbl_users u, tbl_accounts a
		WHERE u.id = a.user_id
		ORDER BY id DESC LIMIT 100";
$result = dbQuery($sql);

?> 

<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                             
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span><i class='fas fa-key' style='font-size:24px;color:orange'></i>Customers Profile Informations</span>
                                </a>
                            </li> 
                        </ul>    
                        
                        

      <div class="row">
                            <div class="col-md-12">
                                
           <p style="color:red;">this menu will allow you to delete customer account, suspend customer login, TO MODIFY USER ACCOUNT CLICK ON EMAIL</p>
                                <div class="main-card mb-3 card">
                                    <div class="card-header">List of Customer Accoutn Profile
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                     
                                     
                                     <form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">  
                                       
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                    
                                                    
                                                    <td class="text-center">
                                                         PICTURE
                                                        
                                                    </td>
                                                    
                                                    <td class="text-center">USER NAME</td>
                                                   <td class="text-center">GENDER</td>
                                                   <td class="text-center">DOB</td>
                                                    <td class="text-center">EMAIL / PHONE</td>
                                                   <td class="text-center">ENROLL DATE</td>
                                                   <td class="text-center">CUSTOMER STATUS</td>
                                                   <td class="text-center">EDIT CUSTOMER</td>
                                                   <td class="text-center">DELETE CUSTOMER</td>
                                                 
                                            </tr>
                                            </thead>
                                            
                                              
                                            
                                            <tbody>
                                            
                                           <?php
                                                while($row = dbFetchAssoc($result)) {
                                                	extract($row);
                                                	
                                                	if ($i%2) {
                                                		$class = 'row1';
                                                	} else {
                                                		$class = 'row2';
                                                	}
                                                	
                                                	$i += 1;
                                                ?>
                                            <tr class="<?php echo $class; ?>">
      
      <td class="text-center">
          
          <?php
   $upics = (isset($pics) && $pics != "") ? "thumbnails/".$pics : "anonymous-user.jpg"; 
   ?>
   	<img src="<?php echo WEB_ROOT; ?>images/<?php echo $upics; ?>" class="rounded-circle"  width="80" height="80" class="avatar"  /> 
      </td>
      
      <td class="text-center"><?php echo $fname .' '.$lname; ?></td>
   <td class="text-center"><?php echo $gender; ?></td>
   <td class="text-center"><?php echo $dob; ?></td>
   <td class="text-center"><?php echo $email; ?><br><?php echo $phone; ?></td>
   <td class="text-center"><?php echo $bdate; ?></td>
   <td class="text-center"><a  class="btn btn-primary"  href="javascript:changeUserStatus(<?php echo $id; ?>, '<?php echo $is_active; ?>');"><?php echo $is_active == 'FALSE'? 'Inactive' : 'Active'; ?></td>
   <td class="text-center"><a  class="btn btn-success btn-block loginbtn"  href="<?php echo WEB_ROOT; ?>backend/user/?view=email&userId=<?php echo $id; ?>">Edit</a></td>
   <td class="text-center"><a class="btn btn-success btn-block loginbtn" href="javascript:deleteUser(<?php echo $id; ?>);">Delete</a></td>        
                                               
                                      
                                            </tr>
					
					<?php
} // end while

?>

                                            </tbody>
                                        </table>
                                        </form>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
  
 
 
 



