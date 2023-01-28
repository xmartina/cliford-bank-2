 
	<script async="" src="file/analytics.js"></script><script type="text/javascript">
    window.onload = setInterval(clock,1000);

    function clock()
    {
	  var d = new Date();
	  
	  var date = d.getDate();
	  
	  var month = d.getMonth();
	  var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
	  month=montharr[month];
	  
	  var year = d.getFullYear();
	  
	  var day = d.getDay();
	  var dayarr =["Sun","Mon","Tues","Wed","Thurs","Fri","Sat"];
	  day=dayarr[day];
	  
	  var hour =d.getHours();
      var min = d.getMinutes();
	  var sec = d.getSeconds();
	
	  document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
	  document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
    }
  </script>
 <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <?php
	$my_pic = $_SESSION['hlbank_user']['pics'];
   	$upics = (isset($my_pic) && $my_pic != "") ? $my_pic : "anonymous-user.jpg"; 
   	?>
            <img src="<?php echo WEB_ROOT; ?>images/thumbnails/<?php echo $upics; ?>" alt="Photo"  height="80px" />
                  </div>
				  
				    <?php 
	  $user_id = $_SESSION['hlbank_user']['user_id'];
	  $acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	  $balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	  $result = dbQuery($balance_sql);
	  $row = dbFetchAssoc($result);
	  ?>
                  <h5 class="card-title"><?php echo $_SESSION['hlbank_user_name'] ?></h5>
                <h5 class="card-title">Account No: <?php echo $_SESSION['hlbank_user']['acc_no'] ?></h5>
				<h6 class="card-title">(<?php echo $_SESSION['hlbank_user']['type'] ?>)</h6>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <img src="<?php echo WEB_ROOT; ?>include/assets/ds.png" alt="Photo"  height="80px" />
                  </div>
				   <?php 
	  $user_id = $_SESSION['hlbank_user']['user_id'];
	  $acc_no = $_SESSION['hlbank_user']['acc_no'];
	  
	  $balance_sql = "SELECT balance FROM tbl_accounts WHERE user_id = $user_id AND acc_no = $acc_no";
	  $result = dbQuery($balance_sql);
	  $row = dbFetchAssoc($result);
	  ?>
                  <p class="card-category"><strong>Ledger Balance</strong></p>
                  <h3 class="card-title"><?php echo $_SESSION['hlbank_user']['currency']; ?>&nbsp;<?php echo number_format($row['balance'], 2); ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <img src="<?php echo WEB_ROOT; ?>include/assets/loan.png" alt="Photo"  height="80px" />
                  </div>
                  <p class="card-category"><strong>Loan Balance</strong></p>
                   
                  <h3 class="card-title"><a href="<?php echo WEB_ROOT; ?>view/?v=loan-menu"><strong style="color:brown;">View</strong></a></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
           
          </div>
          
          
          
          
          
          
          
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
		ORDER BY id DESC LIMIT 5";
$result = dbQuery($sql);

?>
           <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Mini Account Statement</h4>
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


												

				   </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Cards:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">bug_report</i>Credit
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i>Debit
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i>Visa
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td><?php echo $_SESSION['hlbank_user_name'];  ?>, you are eligible for Credit Cards"</td>
                            <td class="td-actions text-right">
                             <a href="?v=support">Apply Now</a>
                            </td>
                          </tr>
                       
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Request for debit card from our branch near your location
                            </td>
                            <td class="td-actions text-right">
                              
                            </td>
                          </tr>
                           
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>You are not eligible to get a Visa Card</td>
                            <td class="td-actions text-right">
                              
                            </td>
                          </tr>
                          
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
		