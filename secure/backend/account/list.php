<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$errorMessage = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '&nbsp;';

$sql = "SELECT u.id, u.fname, u.lname, a.acc_no, a.balance, a.status, a.bdate, a.type, a.pin, a.id AS acc_id
        FROM tbl_users u, tbl_accounts a
		WHERE u.id = a.user_id
		ORDER BY id DESC LIMIT 200";
$result = dbQuery($sql);

?> 

                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                             
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span><i class='fas fa-key' style='font-size:24px;color:orange'></i>Customers Account Table</span>
                                </a>
                            </li> 
                        </ul>    
                        
                        

      <div class="row">
                            <div class="col-md-12">
         <strong>This menu allow you to account details, credit, debit funds from customer. you can as well suspend customer account from
                  Making Transfer. to credit funds to customer click on ACCOUNT NUMBER</strong></p>
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
                                     
                                    <center> <strong><?php echo $errorMessage; ?></strong></center>
                                     
                                     <form action="" method="post"  name="frmListUser" id="frmListUser">  
                                       
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                     <td class="text-center">CUSTOMER NAME</td>
                                                       <td class="text-center">ACCOUNT NO.</td>
                                                       <td class="text-center">BALANCE</td>
                                                       <td class="text-center">ACCOUNT TYPE</td>
                                                        <td class="text-center">UPDATE FUND</td>
                                                       <td class="text-center">ACCOUNT STATUS</td>
                                                       <td class="text-center">STATEMENT</td> 
                                                 
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
                                                
    <td class="text-center"><?php echo $fname .' '.$lname; ?></td>
   <td class="text-center"><?php echo $acc_no; ?></td>
   <td class="text-center"> <?php echo $balance; ?></td>
   <td class="text-center"><?php echo $type; ?></td>
   <td class="text-center"><a  class="btn btn-danger btn-block loginbtn" href="<?php echo WEB_ROOT; ?>backend/account/?view=detail&accId=<?php echo $acc_id; ?>">Credit / Debit</a></td>
  <td class="text-center">
   	<a   class="btn btn-success"  href="javascript:changeAccStatus(<?php echo $acc_id; ?>, '<?php echo $status; ?>');">
   	<?php echo $status == 'INACTIVE'? 'Inactive' : 'Active'; ?>
	</td>
	
   <td  class="text-center"><a  class="btn btn-warning btn-block loginbtn" href="javascript:viewAccountStatement(<?php echo $id; ?>, <?php echo $acc_no; ?>);">Statement</a></td>                   
                                </tr>
								
	  <?php
} // end while

?>							
								
								
					</table>
                                  </form>
                                  
                                                                
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
 
 
 
 

 
 
 
