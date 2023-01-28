<?php
if (!defined('WEB_ROOT')) {
	exit;
}

if (isset($_GET['accId']) && $_GET['accId'] > 0) {
	$accId = $_GET['accId'];
} else {
	header('Location: index.php');
}

$sql = "SELECT u.id, u.fname, u.lname, u.bdate, u.is_active, u.email, u.phone, u.currency, u.pics,
		a.acc_no, a.type, a.balance,
		ad.address, ad.city, ad.state, ad.zipcode
        FROM tbl_users u, tbl_accounts a, tbl_address ad
		WHERE u.id = a.user_id AND ad.user_id = u.id
		AND a.id = $accId";
		
$result = mysql_query($sql) or die('Cannot get product. ' . mysql_error());
$row = mysql_fetch_assoc($result);
extract($row);

?>

 
 
 
 
 
 
 
 
 
 
 
 
 	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
					 
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">					
						 
               
   
	   <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                             
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>
                                    
                                    <?php
   $upics = (isset($pics) && $pics != "") ? "thumbnails/".$pics : "anonymous-user.jpg"; 
   ?>
   	<img src="<?php echo WEB_ROOT; ?>images/<?php echo $upics; ?>" class="rounded-circle"  width="80" height="80" class="avatar"  />
                                    
                                    
                                    Credit or Debit Customers</span>
                                </a>
                            </li> 
                        </ul>                   
	                      
	                      <div class="tab-content">

                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Please ensure all fields are completed</h5>
                                    
                                       <form action="process.php?action=transaction" method="post" id="frmTransaction">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Customer Name</label>
                                    <input name="r_bank" id="exampleEmail11" value="<?php echo strtoupper( $fname. ' '. $lname); ?>"  type="text" class="form-control" readonly></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Customer Email Address</label>
                                    
                                    <a href="mailto:<?php echo $email; ?>"></a>
   &nbsp;[&nbsp;<a class="btn btn-danger btn-block loginbtn" href="<?php echo WEB_ROOT; ?>backend/user/?view=email&userId=<?php echo $id; ?>">Edit Email</a>
                                    <input  id="examplePassword11" value="<?php echo $email  ; ?>" type="text"  class="form-control" readonly></div>
                                </div>
                            </div>
                            
                             
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Mobile Number</label>
                                    <input name="bname" id="exampleEmail11" value="<?php echo $phone; ?>"  type="text" class="form-control" readonly></div>
                                
                            
                              <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">City</label>
                                    <input name="bname" id="exampleEmail11" value="	<?php echo $city; ?>"  type="text" class="form-control" readonly></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">State</label>
                                    <input name="bemailadd" id="examplePassword11" value="<?php echo $state; ?> " type="text"  class="form-control" readonly></div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Address</label>
                                    <input name="bname" id="exampleEmail11" value="	<?php echo $address; ?>"  type="text" class="form-control" readonly></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Postal Code</label>
                                    <input name="bemailadd" id="examplePassword11" value="<?php echo $zipcode; ?> " type="text"  class="form-control" readonly></div>
                                </div>
                            </div>
                            
     
   
                             
                             
                             <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Account Number</label>
                                    <input name="swift"  value="<?php echo $acc_no; ?> (<?php echo $type; ?>)"  type="text" class="form-control" readonly>
                                    	<input type="hidden" name="user_id" value="<?php echo $id; ?>" />
	                                    <input type="hidden" name="acc_no" value="<?php echo $acc_no; ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">Current Balance</label>
                                    <input name="amt" id="amt" value="<?php echo $currency; ?>&nbsp;<?php echo $balance; ?>" type="text"  class="form-control" readonly></div>
                                </div>
                            </div>
                            
                            
                            <div class="position-relative form-group"><label for="exampleAddress" class="">Transaction History</label>
                         	<a class="btn btn-success btn-block loginbtn" style="color:white; font-size:14px;"  
   	href="<?php echo WEB_ROOT; ?>backend/account/?view=statement&accNo=<?php echo $acc_no; ?>">View Transaction History</a>
                            
                            </div>
                            
                            
                               
                             <div class="form-row">
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Transaction Type</label>
                                     <select name="type"   class="form-control" id="type" >
                                   	<option value="#"> -- select transaction type  --</option>
                                	<option value="credit">Credit Customer</option>
                                	<option value="debit">Debit Customer</option>
                                   </select>
                                
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group"><label for="examplePassword11" class="">AMOUNT (<?php echo $currency; ?>)</label>
                                    <input name="amt" id="amt"  type="text"  class="form-control" required="">
                                     <input type="hidden" name="email" id="email" value="<?php echo $email; ?>" size="10" />
                                       <input type="hidden" name="phone" id="phone" value="<?php echo $phone; ?>" size="10" />
                                        <input type="hidden" name="currency" id="phone" value="<?php echo $currency; ?>" size="10" />
                                        <input type="hidden" name="s_accno" id="s_accno" value="Premier Officer" size="10" />
                                    
                                    </div>
                                </div>
                            </div>
                                   
                                   
                                    <div class="position-relative form-group"><label for="exampleAddress" class="">Date of Transfer</label>
                                    <input type="date" name="date"  class="form-control"  size="20" required/>
                            
                            </div>
                            
                            
                            
                             <div class="position-relative form-group"><label for="exampleAddress" class="">Transaction Naration</label>
                         <textarea name="description" id="desc" 
   placeholder="Funds transfer from inheritance accumulated funds ordered by US Department of State"  class="form-control" cols="35" rows="4" required></textarea>
                            
                            </div>
                              
                                            
                                            <button  name="btnTxType" type="submit" id="btnTxType" class="mt-2 btn btn-primary">
                                                <i class='fa fa-money' style='font-size:24px;color:orange'></i>&nbsp;
                                                Transfer Now ></button>
                                                
                                                  <button  name="btnBack"  type="submit" onClick="window.history.back();"  class="mt-2 btn btn-primary">
                                                <i class='fa fa-money' style='font-size:24px;color:orange'></i>&nbsp;
                                                Cancel </button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
 
 
  