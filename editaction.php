<?php 
include 'database.php';
$id = $_POST['id'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$email =$_POST['email'];

$sql = "UPDATE contactdetail SET name='$name',contact= '$contact',address = '$address', email = '$email' WHERE id =$id";
if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();

include 'index.php';

?>