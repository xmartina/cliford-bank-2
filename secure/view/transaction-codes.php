<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Customer Transaction Code</h4>
                  <p class="card-category">View list of all Transfer Codes.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table"> 
					  <thead align="center" class=" text-primary">
                        <th>
                         Cost of Transfer Code
                        </th>
                        <th>
                          TAX and Value Added Tax Code
                        </th>
                        <th>
                          International Monetary Code IMF
                        </th>
                        <th>
                         Anti Terorism Code ATC
                        </th>
                        
                      </thead>
                      <tbody>
                        
						<tr align="center"  class="<?php echo $class; ?>">
						
						
                          <td>
                           <?php echo $_SESSION['hlbank_user']['cot']; ?>
                          </td>
                          <td>
                           <?php echo $_SESSION['hlbank_user']['tax']; ?>
                          </td>
                          <td>
                           <?php echo $_SESSION['hlbank_user']['imf']; ?>
                          </td>
                          <td>
                            <?php echo $_SESSION['hlbank_user']['atc']; ?>
                          </td>
                         
                          
                          
                        </tr>
                       
</table>
<p>&nbsp;</p>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>

 

 
