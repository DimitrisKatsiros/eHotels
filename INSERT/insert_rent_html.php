<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Επιλογές διαχειριστή</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->
<!--  Content changes down-->


<section>
      <br>
    <div class="w3-container w3-blue">
        <h2>Εισάγεται τα στοιχεία της ενοικίασης:</h2>
    </div>
 
      <form action="insert_rent.php" method="post" class="w3-container"><br/>
         Customer IRS number : <input type="number" name="customer_irs_number" class="w3-input" required> <br>
          Employee IRS number: <input type="number" name="employee_irs_number"  class="w3-input" required><br/>
          Hotel room ID: <input type="number" name="hotel_room_id"  class="w3-input" required><br/>
          Start date: <input type="date" name="start_date"  class="w3-input" required><br/>
          Finish date: <input type="date" name="finish_date"  class="w3-input" required><br/>
          Payment amount: <input type="number" name="payment_amount"  class="w3-input" required><br/>
          Payment method: <input type="text" name="payment_method"  class="w3-input" required><br/>
          

           <input type="submit" class="dark-button" value="Εισαγωγή"><br><br><br>
           <input type="reset" class="dark-button"> <br><br><br> 
      </form>



    </section>
    <!--  Content changes up-->
    <?php include "bottom_buttons.php" ?>
        </div>
        <!--  Wrapper ends-->
      </body>
      </html>