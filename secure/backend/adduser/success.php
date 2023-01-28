
  		<script language="JavaScript" type="text/javascript">
var seconds =2;
var url="../user/index.php";

function redirect(){
 if (seconds <=0){
 // redirect to new url after counter  down.
  window.location = url;
 }else{
  seconds--;
  document.getElementById("pageInfo").innerHTML = "... "+seconds+" seconds."
  setTimeout("redirect()", 1000)
 }
}
</script>
    
                 
         <div class="tab-content">

                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                
                                                <p> <br>  </p>  
												  <p> <br>  </p> 
												  <p> <br>  </p>   
                                       <center>  <h2><strong style="color:green;">Account Created Successfully!!</strong></h2></center>
                                           
											
											</div>
												</div>
												 <p> <br>  </p>  
												  <p> <br>  </p> 
												  <p> <br>  </p>   <p> <br>  </p>  
												  <p> <br>  </p> 
												  <p> <br>  </p>   <p> <br>  </p>  
												  <p> <br>  </p> 
												  <p> <br>  </p>   <p> <br>  </p>  
												  <p> <br>  </p> 
												  <p> <br>  </p>   <p> <br>  </p>  
												  <p> <br>  </p> 
												  <p> <br>  </p>   <p> <br>  </p>  
												  
												 
												             	 <p><center> <div id="pageInfo"></center>  
        <script>
         redirect();
        </script></p> 