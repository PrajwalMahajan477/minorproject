<?php require 'config_db.php'; ?>

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];


// echo $name,$lname,$father_name,$mother_name;

$sql = "INSERT INTO local_user (first_name,last_name,father_name,mother_name)
VALUES ('$fname','$lname','$father_name','$mother_name')";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "<script> location.href='http://localhost/MINOR%20Project/registrationDivyangjan.php'; </script>";

} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();



?>