<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$user = $_SESSION['hlbank_user'];
$acc_no = $user['acc_no'];
if (!isset($acc_no) && $acc_no <= 0) {
	header('Location: index.php');
}

$sql = "SELECT * FROM cards WHERE accno = $acc_no 
		ORDER BY id DESC LIMIT 20";
$result = dbQuery($sql);

?> 
 

<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Card Details</h4>
                  <p class="card-category">View list of all credit/ debit cards approved for online transactions.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table"> 
					 <thead>
                                           <tr>
                                               <th class="text-center">CARD NO</th>
                                                 <th class="text-center">EXPIRY DATE</th>
                                                <th class="text-center">SECURITY/CVV</th> 
                                                <th class="text-center">CARD PIN</th>
                                                 <th class="text-center">CARD TYPE</th> 
                                                <th class="text-center">STATUS</th>
                                            </tr>
                                            </thead>
                      <tbody>
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

						
												<td class="text-center" > <?php echo $sn; ?></td>
                                                 <td class="text-center"><?php echo $exp; ?></td>
                                                  <td class="text-center"><?php echo $cvv; ?></td>
                                                <td class="text-center">
                                                    <div class="badge badge-danger">  <?php echo $cardpin; ?></div>
                                                </td>
                                                
                                                <td class="text-center"><?php echo $type; ?></td>
                                                 <td class="text-center">
                                                    <div class="badge badge-success">ACTIVE</div>
                                                </td>
                                            </tr>
                          
                        <?php
						} // end while
						}//if
						else {
						?>
						  <tr> 
						   <td colspan="6" align="right">You do not have any approved Credit/Debit Cards yets</td>
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

 

 
