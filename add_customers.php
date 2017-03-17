<?php include "menu.php"; ?>
<h2>Add Customer</h2>
<form class="" action="customers.php" method="post">
  <label for="fname">Firstname</label> <br/>
  <input type="text" name="fn" id="fn" value="" required=""><br>

  <label for="lname">Lastname</label> <br/>
  <input type="text" name="ln" id="ln" value="" required=""><br>

  <label for="ad">Street address</label> <br/>
  <input type="text" name="ad" id="ad" value="" required=""><br>

  <input type="submit" name="btnAdd" value="Add">

</form>

<?php include "footer.php"; ?>
