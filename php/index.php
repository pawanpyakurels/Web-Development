<?php
$server='localhost';
$user='username';
$pass='password';
$database='subscribers';



$conn = mysqli_connect($server, $user, $pass, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 


$email = $_POST['email'];
$message=$_POST['message'];

 
$sql = "INSERT INTO $database (email, message) VALUES ('$email', '$message')";
if (mysqli_query($conn, $sql)) {
      echo "Thankyou! I am sure I will go through the message";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>




