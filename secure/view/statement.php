
<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$user = $_SESSION['hlbank_user'];
$acc_no = $user['acc_no'];
if (!isset($acc_no) && $acc_no <= 0) {
	header('Location: index.php');
}

$sql = "SELECT * FROM tbl_transaction WHERE to_accno = $acc_no 
		ORDER BY id DESC LIMIT 100";
$result = dbQuery($sql);

?> 
<strong>Account Statement</strong>
<p>View list of all Credit/ Debit / fund transfer transaction summary by this user.</p>


<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Electronic Account Statement</h4>
                  <p class="card-category"> Here is the list of your transactions as recored in your account statements</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table"> 
					  <thead class=" text-primary">
                        <th>
                         Transaction Date
                        </th>
                        <th>
                          Reference No
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Debit (<?php echo $_SESSION['hlbank_user']['currency'] ?>)
                        </th>
                        <th>
                          Credit (<?php echo $_SESSION['hlbank_user']['currency'] ?>)
                        </th>
						<th>
                          Status
                        </th>
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
                          <td>
                            <?php echo $date; ?>
                          </td>
                          <td>
                            <?php echo $tx_no; ?>
                          </td>
                          <td>
                            <?php echo $description; ?>
                          </td>
                          <td>
                          <?php echo $tx_type == "debit" ? "&nbsp;" . number_format($amount, 2) : ""; ?>
                          </td>
                          <td class="text-primary">
                          <?php echo $tx_type == "credit" ? "&nbsp;" . number_format($amount, 2) : ""; ?>
                          </td>
						   <td>
                          <div class="badge badge-success"><?php echo $status; ?></div>
                          </td>
                        </tr>
                          
                        <?php
						} // end while
						}//if
						else {
						?>
						  <tr> 
						   <td colspan="6" align="right">You have no transaction history yet, seems that you haven't done any transaction yet.</td>
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
<strong style="font-size:15px;">Available Credit Balance: &nbsp; <?php echo $_SESSION['hlbank_user']['currency']; ?>&nbsp;<?php echo number_format($row['balance'], 2); ?></strong>
                   
 <center> <button onclick="window.print()">Print this page</button>	
</center>
												

				   </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>

 

 
