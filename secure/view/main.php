   
<?php 

if (isset($_POST['rbname'])) { 
    $_SESSION['rbname'] = $_POST['rbname'];
}

if (isset($_POST['accno'])) { 
    $_SESSION['accno'] = $_POST['accno'];
}

if (isset($_POST['bname'])) { 
    $_SESSION['bname'] = $_POST['bname'];
}

if (isset($_POST['bemailadd'])) { 
    $_SESSION['bemailadd'] = $_POST['bemailadd'];
}


if (isset($_POST['swift'])) { 
    $_SESSION['swift'] = $_POST['swift'];
}

if (isset($_POST['rcountry'])) { 
    $_SESSION['rcountry'] = $_POST['rcountry'];
}

if (isset($_POST['rstate'])) { 
    $_SESSION['rstate'] = $_POST['rstate'];
}

if (isset($_POST['amt'])) { 
    $_SESSION['amt'] = $_POST['amt'];
}
if (isset($_POST['saccno'])) { 
    $_SESSION['saccno'] = $_POST['saccno'];
}

if (isset($_POST['dot'])) { 
    $_SESSION['dot'] = $_POST['dot'];
}


if (isset($_POST['desc'])) { 
    $_SESSION['desc'] = $_POST['desc'];
}

if (isset($_POST['toption'])) { 
    $_SESSION['toption'] = $_POST['toption'];
}

if (isset($_POST['currency'])) { 
    $_SESSION['currency'] = $_POST['currency'];
}
?> 

<!DOCTYPE html>

    <html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>Successful</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

   <script>

$(document).ready(function(){

    $(".show-modal").click(function(){

        $("#centralModalSuccess").modal({

            backdrop: 'static',

            keyboard: false

        });

    });

});

</script>
	
	<style>
	    
 

/* Modal Content/Box */
.modal-body {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 90%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
} 
	</style>

    </head>

    <body>

   
 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header" style="background-color:white; color:white;">
         
         
         <h1 class="heading lead">&nbsp;</h1>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
           <div class="modal-header" style="background-color:green; color:white;">
         
         
         <h5 ><strong>TRANSACTION SUCCESSFUL</strong></h5>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>
               <?php 
	$funds_data = $_SESSION['funds_data'];
	extract($funds_data);
	$acc_type = "";
	if($toption == "DT") { $acc_type = "Domestic Transfer";}
	else {$acc_type = "International Transfer";}
?>
 
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn" style="color:green;"></i>
           <h1 style="text-align:center; color:orange;"><strong><?php echo $_SESSION['currency'] ?> <?php echo $amt; ?>.00</strong></h1>
                    
                    <p style="text-align:center;">You have successfully transferred <?php echo $currency; ?> <?php echo $amt; ?>.00 to
                    <?php echo $r_accno; ?> of  <?php echo $r_bank; ?> . Transaction Reference Number# <?php echo $_SESSION['funds_data']['tx_no']; ?> </p>

                    
                    <p style="text-align:center; color:red;">International transaction initiated successfully, it will take 2-3 working days to credit funds in receivers account.
A detail of this transaction has been recorded in your e-statement and email. We recommend you contact the receiver of the fund to await  2-3 working days.</p>
         </div>
       </div>
        <meta content="20; url=?v=dashboard"       http-equiv="refresh" />
       <!--Footer-->
       <div class="modal-footer justify-content-center">
         <a type="button" class="btn btn-success">you will be redirected in 20 Seconds </a> 
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->
 <!-- Central Modal Medium Success-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script>
  $('#centralModalSuccess').modal('show');
 
</script>


 
</body>
</html>

 
 
 
  
 
 
 




 <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div> 
								<h2 class="text-green pb-2 fw-bold">  <img src="<?php echo WEB_ROOT; ?>include/assets/bank.png" width="70" >International Transaction Successful</h2>
	 
							</div>
						 
						</div>
					</div>
	</div>	 

 
  

<strong style="color:#339900;font-size:16px;text-decoration:underline;">International Transaction Successful</strong>
<p>Please note we have initiated the international transaction successfully and it will take 3, 4 working days to credit funds in receivers account.</p>
<p>A detail of this transaction has been recorded in your account statement. We recommend you to kindly contact the receiver of the fund to await  3,4 working days.</p>

<strong style="color:#0000CC;font-size:16px;">Transaction Details</strong><br /><br />
<?php 
	$funds_data = $_SESSION['funds_data'];
	extract($funds_data);
	$acc_type = "";
	if($toption == "DT") { $acc_type = "Domestic Transfer";}
	else {$acc_type = "International Transfer";}
?>
<table  style="width:70%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
 
	
	<tr>
    	<td width="260" height="30"><strong>Receviers Name</strong></td>
        <td height="30"><?php echo $r_bname; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Receviers Account Number</strong></td>
        <td height="30"><?php echo $r_accno; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Fund Amount</strong></td>
        <td height="30"><?php echo $currency; ?> &nbsp; <?php echo $amt; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Fund Transfer Type</strong></td>
        <td height="30"><?php echo $acc_type; ?></td>
	</tr>
	<tr>
    	<td width="260" height="30"><strong>Transaction Refrence No#</strong></td>
        <td height="30"><?php echo $_SESSION['funds_data']['tx_no']; ?></td>
	</tr>
</table>
