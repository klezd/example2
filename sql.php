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

  CREATE TABLE cats(
  id_cats SMALLINT PRIMARY KEY auto_increment,
  name VARCHAR(30),
  color VARCHAR(20),
  id_customers SMALLINT,
  FOREIGN KEY (id_customers) REFERENCES customers(id_customers)
    ON DELETE RESTRICT
    ON UPDATE CASCADE ) Engine =InnoDB;

  INSERT INTO cats (name, color, id_customers) VALUES('Garfield', 'orange', 1);
  INSERT INTO cats (name, color, id_customers) VALUES('Hello Kitty', 'pink', 2);
</pre>
<?php include "footer.php"; ?>
