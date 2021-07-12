<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="sets";
$conn = mysqli_connect($servername, $username, $password,$database);

$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$number=$_POST['number'];
$address=$_POST['address'];

 if($conn->connect_error){
	 die('Connection Failed :'.$conn->connect_error);
 }
 else{
	 mysqli_query($conn,"INSERT INTO info ( username, password, gender, email, number, address) 
	 VALUES ( '$username', '$password', '$gender', '$email', '$number', '$address');");
    echo "registration successfully"; 
	echo "<br>";
	echo "$username";
	echo "<br>";
	echo "$password";
	echo "<br>";
	echo "$gender";
	echo "<br>";
	echo "$email";
	echo "<br>";
	echo "$number";
	echo "<br>";
	echo "$address";
 }
?>
