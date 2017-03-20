<?php
include 'connection.php';

if (isset($_POST['btnAdd'])) {
  $add=$db->prepare("INSERT INTO customers(firstname, lastname, streetaddress) VALUES(:fn,:ln,:ad)"); //name
  $add->bindParam(':fn', $fn);
  $add->bindParam(':ln', $ln);
  $add->bindParam(':ad', $ad);
  $fn = $_POST['fn'];
  $ln = $_POST['ln'];
  $ad = $_POST['ad'];
  $add->execute();
}
 ?>
<?php include "menu.php"; ?>
<h2>Customers</h2>
<table border="1">
  <tr>
    <th>First name</th>
    <th>Last name</th>
    <th>Street Address</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

<?php

$myquery="SELECT firstname, lastname, streetaddress, id_customers FROM customers";
$customers_data = $db->query($myquery);
// print_r($customers_data);
foreach ($customers_data as $row) {
  echo '<tr><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td><td>'.$row['streetaddress'].'</td>';
  echo '<td><a href="update_customer.php?id='.$row['id_customers'].'"><button>Update </button></a></td></tr>';
}
 ?>
 </table>
<?php include "footer.php"; ?>