<?php

if(isset($_POST['submit']))
{


$name=$_POST['name'];
$Email=$_POST['email'];
$sub=$_POST['subject'];
$message=$_POST['message'];



$servername="";
$database="khantruck";
$username="khan";
$password="khan";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contactus (name, email, message)
VALUES ('".$name."', '".$Email."', '".$message."')";

if ($conn->query($sql) === TRUE) {
    echo "Email has Sent to root server Successfull";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


echo "<img src='thanks.jpg'>";
}
else
{
	echo "Error";
}

?>