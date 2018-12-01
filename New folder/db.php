<?php
$con = mysqil_connect("localhost","peter","abc123");
if (!$con){
  die("Connection error: " . mysqli_connect_errno();}
  Create database
if (mysqli_query($con, "CREATE DATABASE my_db") ) {
  echo "Database created";}
 else{
  echo "Error creating database: " . mysqli_error($con); }
// Create tablemysqli_select_db($con,“my_db");$sql = "CREATE TABLE Persons(FirstName varchar(15),LastName varchar(15),Age int)";// Execute querymysqli_query($con, $sql);mysqli_close($con);?>
 ?>
