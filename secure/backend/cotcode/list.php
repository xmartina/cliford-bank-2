<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$sql = "SELECT u.id, u.fname, u.lname, u.cot, a.acc_no
        FROM tbl_users u, tbl_accounts a
		WHERE u.id = a.user_id
		ORDER BY id DESC LIMIT 200";
$result = dbQuery($sql);

?> 

  
              <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>List of Cost of Transfer Codes  COT</span>
                                </a>
                            </li>
                           
                        </ul>      
             
             <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">All COT Codes</h5>
                  <form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
 <table width="80%" border="0" class="align-middle mb-0 table table-borderless table-striped table-hover" align="center" cellpadding="10" cellspacing="10" class="text">
  <tr align="center" id="listTableHeader"> 
   <td>USER NAME</td>
   <td>ACCOUNT NUMBER</td>
   <td>COT CODES</td>  
    <td>EDIT/CHANGE CODE</td> 
  </tr>
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
   <td class="text-center"><?php echo $cot; ?></td>
   <td class="text-center"><a  class="btn btn-success"   href="<?php echo WEB_ROOT; ?>backend/cotcode/?view=cot&userId=<?php echo $id; ?>"><?php echo $cot; ?></a></td>
  
  </tr>
<?php
} // end while

?>
   
 </table>
 <p>&nbsp;</p>
</form>
</div>
                                </div>
                                
                            </div>
                            
                        </div>
	                         
 


 



