
<?php
	 
 session_start(); 
 
 
	
?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: ;
  padding: 20px;
}
</style>
 <style>
.loader {
   border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-bottom: 16px solid blue;
  width: 60px;
  height: 60px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2025 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = seconds + "seconds ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
  

<style>
#demo{
  text-align: center;
  color:red;
  font-size: 42px; 
}
</style>



<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Transfer Processing</h4>
                  <p class="card-category">You have initiated the transfer process, please wait 2-3 minutes for system to validate your receiver's account details.

make sure the receipent bank name is registered and recognized by International Monetary Funds and US Departments of States</p>
                </div>
                <div class="card-body">
                  <form>
                     <center><div class="loader"></div></center>
          
                            <script type="text/javascript">
							<!--
							function Redirect() {
							window.location="<?php echo WEB_ROOT; ?>view/?v=Transfer";
							}
							document.write ("");
							setTimeout('Redirect()', 60000);
							//-->
							</script>

<div class="container">
    
    <div id="demo"></div>
    
  
</div>
 <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#mybutton').hide().delay(3000).fadeIn(2200);
});
    </script>
	
	
	 <form action="<?php echo WEB_ROOT; ?>view/?v=Transfer" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="rname" value="<?php echo $_POST["rname"]; ?> "/>
                        <input type="hidden" name="rbnk" value="<?php echo $_POST["rbnk"]; ?> "/>
                        <input type="hidden" name="swiftcode" value="<?php echo $_POST["swiftcode"]; ?> "/>
                        <input type="hidden" name="raccno" value="<?php echo $_POST["raccno"]; ?> "/>
                        
	
	
	
	
              
                    <button type="submit" id="mybutton" name="submit" class="btn btn-primary pull-right">Click Next</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
              
			  
			  
			  
			  <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
				<?php
	$my_pic = $_SESSION['hlbank_user']['pics'];
   	$upics = (isset($my_pic) && $my_pic != "") ? $my_pic : "anonymous-user.jpg"; 
   	?>
                  <a href="">
                    <img class="img" src="<?php echo WEB_ROOT; ?>images/thumbnails/<?php echo $upics; ?>" alt="Photo"  height="130px" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Account User</h6>
                  <h4 class="card-title"><?php echo $_SESSION['hlbank_user_name'];  ?></h4>
                  <p class="card-description">
                    Your are welcome to our online banking plaform, the most secured internet banking channel in America, Asia, Europe and UK
                  </p>
                 
                </div>
				
				
              </div>
			  
               
              <div class="card card-profile">
               
                <div class="card-body">
                <div class="card-header card-header-primary">
								<br>																<!-- TradingView Widget BEGIN -->
				<h4><strong><p style="color:green"> FRAUD ALERT</p></strong>
                        </h4>
                      <p style="color:green"><b>
                         Premire Bank Will never ask you for your online bank details, Flee from such messages and requests.<br>
                        
						Stay protected always, should you notice any suspicious activities on your account? <br><a href="?v=support"><button type="button" class="btn btn-danger">ALERT US NOW!</button></a>
                        </b></p><div class="alert-btn">
                        </div>
			 </div>
                </div>
              </div>
			  

            </div>
          </div>
        </div>