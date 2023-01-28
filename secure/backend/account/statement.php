<?php
if (!defined('WEB_ROOT')) {
	exit;
}

if (isset($_GET['accNo']) && $_GET['accNo'] > 0) {
	$acc_no = $_GET['accNo'];
} else {
	header('Location: index.php');
}

$sql = "SELECT * FROM tbl_transaction WHERE to_accno = $acc_no ORDER BY id DESC LIMIT 200";
$result = dbQuery($sql);

?> 

<div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header" > <a href="" class="badge badge-warning"><?php echo $acc_no; ?>  Account Statement</a>
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        
                                          <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                        
                                            <tr>
                                                
                                                <td  class="text-center"> DATE</td>
                                                <td  class="text-center">REFERENCE NO</td>
                                                <td  class="text-center">TYPE</td>
                                                <td  class="text-center">AMOUNT</td>
                                                <td  class="text-center">NARATION</td>
                                                <td  class="text-center">SENDER</td>
                                                <td  class="text-center">RECEIVER A/C</td>
                                                <td  class="text-center">STATUS</td>
                                             </tr>
                                            </thead>
                                            
                                              
                                            
                                            <tbody>
          <?php
if(dbNumRows($result) > 0) {
while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {$class = 'row1';}
	else {$class = 'row2';}
	$i += 1;
?>
					<center>  <tr class="<?php echo $class; ?>"> 
                         <td class="text-center text-muted"><?php echo $date; ?></td>
                        <td class="text-center text-muted"><?php echo $tx_no; ?></td> 
                        <td class="text-center text-muted"><?php echo $tx_type; ?></td>
                         <td class="text-center text-muted"><?php echo $amount; ?></td>
                        <td class="text-center text-muted"><?php echo $description; ?></td>
                        <td class="text-center text-muted"><?php echo $s_accno; ?></td>
                        <td class="text-center text-muted"><?php echo $r_accno; ?></td>
                        <td class="badge badge-success"><?php echo $status; ?></td> 
                                                    
                                                
                    </tr></center>
                    			 <?php
}// end while
?>
                    	</table>
                    	
                    	      
                            </div>
                        </div>
                    </div>
                    </div>



<?php 
}//
else {
?> 


			
			 
                                        
                                      
                  
                
                
                   

<?php 
}//else
?>
