	
						<div class="row">
						
						 
                            <div class="col-md-6 col-xl-4">
                               
								<div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Customers</div>
                                            <div class="widget-subheading">all registered users</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>
                                                
                                                <?php
                                                
                                                require('./../library/config2.php');
                                                
                                                $sql="select count('accno') from tbl_accounts";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_array($result);
                                                echo "$row[0]";
                                                mysqli_close($conn);
                                                ?>
                                                                                                
                                                
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Transactions</div>
                                            <div class="widget-subheading">all methods</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>
                                                 <?php
                                                
                                                require('./../library/config2.php');
                                                
                                                $sql="select count('to_accno') from tbl_transaction";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_array($result);
                                                echo "$row[0]";
                                                mysqli_close($conn);
                                                ?>
                                                
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                 <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Bank Cards</div>
                                            <div class="widget-subheading">ATM only</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>
                                                 <?php
                                                
                                                require('./../library/config2.php');
                                                
                                                $sql="select count('ssn') from cards";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_array($result);
                                                echo "$row[0]";
                                                mysqli_close($conn);
                                                ?>
                                                
                                            </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
						
						
						
						 
						
						
						
						
                       
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Approved Loans</div>
                                                <div class="widget-subheading">Loans and Mortgages </div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-success">
                                      <?php
                                                
                                                require('./../library/config2.php');
                                                
                                                $sql="select count('accno') from approved_loans";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_array($result);
                                                echo "$row[0]";
                                                mysqli_close($conn);
                                                ?>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Telex Codes</div>
                                                <div class="widget-subheading">Quick Transfer</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning">
                                                    
                                  <?php
                                                
                                                require('./../library/config2.php');
                                                
                                                $sql="select count('telex_no') from telex_code";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_array($result);
                                                echo "$row[0]";
                                                mysqli_close($conn);
                                                ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <div class="col-md-6 col-xl-4">
                                <div class="card mb-6 widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Account Number</div>
                                                <div class="widget-subheading">All Accounts</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning">
                                                    
                                  <?php
                                                
                                                require('./../library/config2.php');
                                                
                                                $sql="select count('acc_no') from tbl_accounts";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_fetch_array($result);
                                                echo "$row[0]";
                                                mysqli_close($conn);
                                                ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                            
                        </div>
                
                
                
                
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
                                        
                require('./../library/config2.php');
			  
				$query=mysqli_query($conn,"SELECT * FROM `tbl_transaction` ORDER BY `id` DESC LIMIT 30");
				
				echo '<table class="align-middle mb-0 table table-borderless table-striped table-hover">';
				 
				echo '   
                                            <tr>
                                                
                                                <th class="text-center">DATE</th>
                                                <th class="text-center">REFERENCE NO</th>
                                                <th class="text-center">TYPE</th>
                                                <th class="text-center">CURRENCY</th>
                                                <th class="text-center">AMOUNT</th>
                                                <th class="text-center">NARATION</th>
                                                <th class="text-center">RBANK</th>
                                                <th class="text-center">SENDER</th>
                                                <th class="text-center">RECEIVER A/C</th>
                                                <th class="text-center">STATUS</th>
                                            </tr>
                                             
                                            
				
				';
				while($active=mysqli_fetch_array($query)){
					echo '
					 
					 <tr >
                        <td class="text-center text-muted">'.$active['date'].'</td>
                        <td class="text-center text-muted">'.$active['tx_no'].'</td> 
                        <td class="text-center text-muted">'.$active['tx_type'].'</td>
                        <td class="text-center text-muted">'.$active['currency'].'</td>
                        <td class="text-center text-muted">'.$active['amount'].'</td>
                        <td class="text-center text-muted">'.$active['comments'].' - '.$active['description'].'</td>
                         <td class="text-center text-muted">'.$active['r_bank'].'</td>
                        <td class="text-center text-muted">'.$active['s_accno'].'</td>
                        <td class="text-center text-muted">'.$active['to_accno'].'</td>
                        <td class="badge badge-success">'.$active['status'].'</td>
                                                    
                                                
                    </tr>
					
					';
				}
				echo '</table>';
			  ?>
                                        
                                      
                  
                
                
                         
                            </div>
                        </div>
                    </div>
                    </div>