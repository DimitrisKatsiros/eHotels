<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εισαγωγή ξενοδοχειακής μονάδας</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->





<!--  Content changes here-->


    <section>
      <br>
<div class="w3-container w3-blue">
  <h2>Εισάγετε τα νέα στοιχεία του ξενοδοχείου προκειμένου να ενημερωθούν:</h2>
</div>

      <form action="update_hotel.php" method="post" class="w3-container"><br/>
	      Hotel ID: <input type="number" name="hotel_id" class="w3-input" required><br/> 
          Stars: <input type="number" name="stars"  class="w3-input" required><br/>
          Phone Number:<input type="number" name="phone_number"  class="w3-input" required><br/>
          Email Address:<input type="text" name="email_address" class="w3-input" required> <br/>
          Street: <input type="text" name="street"  class="w3-input" required><br/>
          Number: <input type="number" name="number"  class="w3-input" required><br/>
          Postal Code: <input type="text" name="postal_code"  class="w3-input" required><br/>
          City: <input type="text" name="city"  class="w3-input" required><br/>
		  Number Of Rooms: <input type="number" name="number_of_rooms" class="w3-input" required><br/>
		  Hotel Group ID: <input type="number" name="hotel_group_id"	class="w3-input"	required><br/>

          <input type="submit" class="dark-button" value="Ενημέρωση"><br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" class="dark-button"> <br><br><br><br><br>
      </form>

  </section>





<!--  Content changes here-->

<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>