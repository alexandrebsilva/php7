<?php
include_once "../config/db_connection.php";
$conn = dbConnect();


//Create new user
if($_SERVER['REQUEST_METHOD']=='POST'){

  $first_name = $_POST['first_name'];
  $last_name = $_POST['first_name'];
  $age = $_POST['age'];

  try {
    $stmt = $conn->prepare(
      'INSERT INTO users (first_name, last_name, age)
      VALUES (:first_name, :last_name, :age)'
  );

  $stmt->execute(['first_name'=>$first_name, 'last_name'=>$last_name, 'age'=>$age]);

  echo "User inserted: {$first_name}";

  //get the last id of the insrerted line
$id=$conn->lastInsertId();

  echo "<script>location.href='read.php?show=all&id={$id}'</script>";


  } catch (PDOException $e) {
    echo $e->getMessage();
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
    <form action="create.php" method="post">
      <label for="first_name">First Name</label><br>
      <input type="text" name="first_name"><br>

      <label for="last_name">Last Name</label><br>
      <input type="text" name="last_name"><br>

      <label for="age">Age</label><br>
      <input type="text" name="age"><br>

      <button type="submit">Save</button>

    </form>
  </body>
</html>
