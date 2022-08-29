<?php
$servername="localhost";
$user="root";
$pwd="";
$dbname="test";
$conn=mysqli_connect($servername, $user, $pwd, $dbname);
if(!$conn)
{
	echo "Connection failed";
}
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="INSERT INTO user VALUES('$name','$email','$password')";
  if (mysqli_query($conn, $sql))
  {
    echo "<script> alert('You have successfully registered! Please login using the credentials you provided.')
  </script>";
  }
}
?>