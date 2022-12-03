<?php

// after drop a table we loss your all data and show a clear table 

ALTER TABLE Customers
DROP COLUMN ContactName;


DROP TABLE Shippers;


DROP DATABASE testDB;


ALTER TABLE table_name
DROP INDEX index_name;



ALTER TABLE Persons
ALTER City DROP DEFAULT;
?>