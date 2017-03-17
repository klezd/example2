<?php include "menu.php"; ?>
<h2>Customers</h2>
<table border="1">
  <tr>
    <th>First name</th>
    <th>Last name</th>
    <th>Street Address</th>
  </tr>

<?php
include "connection.php";
$myquery="SELECT firstname, lastname, streetaddress FROM customers";
$customers_data = $db->query($myquery);
print_r($customers_data);
foreach ($customers_data as $row) {
  echo '<tr><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td><td>'.$row['streetaddress'].'</td></tr>';
}
 ?>
 </table>
<?php include "footer.php"; ?>
