<?php include "menu.php"; ?>
<h2>Edit customer</h2>
<?php
include "connection.php";
$sql_add = "SELECT * FROM customers WHERE id_customers=".$_GET['id'];
$result=$db->query($sql_add);
$theArray = $result->fetch(PDO::FETCH_ASSOC);
$fn = $theArray['firstname'];
$ln = $theArray['lastname'];
$ad = $theArray['streetaddress'];
?>

<form class="" action="customers.php" method="post">
  <label for="fn">Firstname</label> <br/>
  <input type="text" name="fn" id="fn" value="<?php echo $fn; ?>" required=""><br>

  <label for="ln">Lastname</label> <br/>
  <input type="text" name="ln" id="ln" value="<?php echo $ln; ?>" required=""><br>

  <label for="ad">Street address</label> <br/>
  <input type="text" name="ad" id="ad" value="<?php echo $ad; ?>" required=""><br>

  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
  <input type="submit" name="btnEdit" value="Update"> <br/>

</form>

<?php include "footer.php"; ?>
