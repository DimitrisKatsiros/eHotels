<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
	  
	  <div class="w3-container w3-blue">
                <h2>Εισάγεται τα στοιχεία του Πελάτη:</h2>
            </div>
	  
	  <form action="update_costumer.php" method="post" class="w3-container"><br/>
                IRS_number: <input type="number" name="irs" class="w3-input" required><br>
                Street: <input type="text" name="street"  class="w3-input" required><br/>      
                Number: <input type="number" name="number"  class="w3-input" required><br/>  
                Postal_Code: <input type="text" name="postal_code"  class="w3-input" required><br/> 
                City: <input type="text" name="city"  class="w3-input" required><br/> 
                First_name: <input type="text" name="first_name"  class="w3-input" required><br/>
                Last_name: <input type="tel" name="last_name"  class="w3-input" required><br/>
                Social_Security_Number:<input type="number" name="social_security_number"  class="w3-input" required><br/> 
                <input type="submit"><br><br>
                <input type="reset"> <br><br>
            </form>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>
	  
	  
	  
	  