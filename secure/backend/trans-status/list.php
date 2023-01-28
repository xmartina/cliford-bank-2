 <?php
if (!defined('WEB_ROOT')) {
	exit;
}
 
?> 

<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                             
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span><i class='fas fa-key' style='font-size:24px;color:orange'></i>Customers Transactions and Status</span>
                                </a>
                            </li> 
                        </ul>    
                        
                        

     <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Recent Customers Transactions
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        
                                        
                                        <?php
                                        
                require('../../library/config2.php');
			  
				$query=mysqli_query($conn,"SELECT * FROM `tbl_transaction` ORDER BY `id` DESC LIMIT 20");
				
				echo '<table class="align-middle mb-0 table table-borderless table-striped table-hover">';
				 
				echo '   
                                            <tr>
                                                
                                                <th class="text-center">DATE</th> 
                                                <th class="text-center">TRANSACTION TYPE</th> 
                                               <th class="text-center">NARATION</th>
                                                <th class="text-center">SENDER</th>
                                                <th class="text-center">RECEIVER A/C</th>
                                                <th class="text-center">STATUS</th>
                                            </tr>
                                             
                                            
				
				';
				while($active=mysqli_fetch_array($query)){
					echo '
					 
					 <tr >
                        <td class="text-center text-muted">'.$active['date'].'</td>  
                        <td class="text-center text-muted">'.$active['tx_type'].'</td> 
                       <td class="text-center text-muted">'.$active['comments'].' - '.$active['description'].'</td>
                       <td class="text-center text-muted">'.$active['s_accno'].'</td>
                        <td class="text-center text-muted">'.$active['to_accno'].'</td>
                        <td class="badge badge-success"><a href="?view=status&id='.$active['id'].'">'.$active['status'].'</a></td>
                                                    
                                                
                    </tr>
					
					';
				}
				echo '</table>';
			  ?>
                                        
                                      
                  
                
                
                         
                            </div>
                        </div>
                    </div>
                    </div>

