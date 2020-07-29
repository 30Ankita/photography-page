

<?php

$con = mysqli_connect("localhost", "root", "", "photography") or die (mysqli_error($con));

$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

$user_registration_query = "INSERT INTO user (email,name,message) VALUES('$email','$name','$message')";

$user_registration_submit= mysqli_query($con,$user_registration_query) or die (mysqli_error($con));
 echo 'Message succesfully sent, You willl be contacted soon :)';
 

 /*

$con = mysqli_connect("localhost", "root", "", "photography") or die (mysqli_error($con));
$select_query = "SELECT id, email, name, message FROM user";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);
echo $row['id']."<br>";
echo $row['email']."<br>";
echo $row['name']."<br>";


*/
 ?>
