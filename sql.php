<?php include "menu.php"; ?>
<h2>SQL-code for databases</h2>
<pre>
  CREATE DATABASE company;
  USE company;
  GRANT ALL ON company.* TO 'webuser'@'localhost' IDENTIFIED BY 'webpass';
  CREATE TABLE customers(
  id_customers SMALLINT PRIMARY KEY auto_increment,
  firstname VARCHAR(30),
  lastname VARCHAR(30),
  streetaddress VARCHAR(20)
  ) Engine = InnoDB;

  INSERT INTO customers(firstname, lastname) VALUE('Ann', 'Smith');
  INSERT INTO customers(firstname, lastname) VALUE('Tom', 'Jones');
</pre>
<?php include "footer.php"; ?>
