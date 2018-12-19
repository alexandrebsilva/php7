<?php
function dbConnect(){
  //parameters for the db connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "crud";
  //connection itself
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
      }
  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }
}
