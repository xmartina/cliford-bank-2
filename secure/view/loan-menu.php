 <?php
if (!defined('WEB_ROOT')) {
	exit;
}

$user = $_SESSION['hlbank_user'];
$acc_no = $user['acc_no'];
if (!isset($acc_no) && $acc_no <= 0) {
	header('Location: index.php');
}

$sql = "SELECT * FROM approved_loans WHERE accno = $acc_no 
		ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 
 
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Approved Loan Facilities Details on your Account</h4>
                  <p class="card-category"> Here is the list of your approved Loans from our Customer's Service</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table"> 
					   <thead>
					<tr>
					 <th class="text-center">REFERENCE NO</th>
						 <th class="text-center">LOAN TYPE</th>
						<th class="text-center">AMOUNT</th>
					   
						<th class="text-center">INTEREST</th>
						 <th class="text-center">DURATION</th>
						  <th class="text-center">MONTHLY PAYMENT</th>
						<th class="text-center">STATUS</th>
					</tr>
					</thead>
                        <tr class="<?php echo $class; ?>">
						
						<?php

if(dbAffectedRows($result) > 0) { //if
$i = 0;
while($row = dbFetchAssoc($result)) {
	extract($row);
	if ($i%2) {$class = 'row1';} 
	else {$class = 'row2';}
	$i += 1;
?>
                        <td class="text-center"> <?php echo $ref; ?></td>
					 <td class="text-center"><?php echo $type; ?></td>
					  <td class="text-center"><?php echo $_SESSION['hlbank_user']['currency'] ?><?php echo $amt; ?></td>
					<td class="text-center">
						<div class="badge badge-danger">  <?php echo $interest; ?>%</div>
					</td>
					<td class="text-center">
						<button type="button" class="badge badge-warning"> <?php echo $dura; ?>Months</button>
					</td>
					<td class="text-center"><?php echo $_SESSION['hlbank_user']['currency'] ?><?php echo $mreturn; ?></td>
					 <td class="text-center">
						<div class="badge badge-success"><?php echo $status; ?></div>
					</td>
                          
                          
                        </tr>
                          
                        <?php
						} // end while
						}//if
						else {
						?>
						  <tr> 
						   <td colspan="6" align="right">You do not have any approved Loans yet</td>
						  </tr>
						<?php 
						}//else
	$user_id = $_SESSION['hlbank_user']['user_id'];
	$acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	$balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	$result = dbQuery($balance_sql);
	$row = dbFetchAssoc($result);
?>
</table>
<p>&nbsp;</p>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>

 

 
