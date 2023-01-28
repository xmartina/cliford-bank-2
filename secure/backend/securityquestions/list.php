  <?php
 
	error_reporting(0);
	require('../../library/config2.php');
	
  ?>
  


  
	   <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>List of Bank Security Questions</span>
                                </a>
                            </li>
                           
                        </ul>                   
	                      
	                      <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">All Security Question on the Bank</h5>
                                
                                      
                                        <form name="myForm" action="" onsubmit="return validateForm()" method="post">
                          
                                            	<?php
			  
				$query=mysqli_query($conn,"SELECT * FROM `tbl_users` ORDER BY `id` DESC");
				
				echo '<table align="center" class="align-middle mb-0 table table-borderless table-striped table-hover" border="1px" cellpadding="5px" cellspacing="5px">';
				echo '<caption class=""><br>';
				echo '<tr class="list-head"><th>USERID</th><th>Username:</th><th>Ques 1</th><th>Answer 1</th><th>Ques 2</th><th>Answer 2</th></tr>';
				while($active=mysqli_fetch_array($query)){
					echo '<tr class="list-detail"><td>'.$active['id'].'</td><td>'.$active['fname'].'</td><td>'.$active['q1'].'</td><td>'.$active['ans1'].'</td>
					<td>'.$active['q2'].'</td><td>'.$active['ans2'].'</td> </tr>';
				}
				echo '</table>';
			  ?>
                   
                   
                                            
                                            <button type="submit" name="submit" class="mt-2 btn btn-primary">Edit not Allowed</button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
 
              
              
              
           


