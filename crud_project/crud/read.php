<?php
include_once "../config/db_connection.php";
$conn = dbConnect();


//Create new user
if($_GET['show']=='all'){
try {
  $stmt = $conn->prepare(
    'SELECT * FROM users;'
  );
  $stmt->execute();
echo "Read from table users<br><hr>";

$results = $stmt->fetchAll(PDO::FETCH_OBJ);
//var_dump($results);

} catch (PDOException $e) {

}

}



 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<pre>

<?php
var_dump($results);
echo '<hr>';
foreach ($results as $obj) {
  print_r($obj->first_name);
  echo '<br>';
  // code...
}
 ?></pre>

  </body>
</html>
