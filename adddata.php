<?php 
$name =$_POST['name'];
$phone =$_POST['contact'];
$address =$_POST['address'];
$email =$_POST['email'];

include 'database.php';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contactdetail (name, contact, address, email)
VALUES ('$name', '$phone', '$address', '$email')";

if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
include 'index.php';
?>