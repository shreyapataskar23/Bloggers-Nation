<?php
$servername="localhost";
$user="root";
$password="";
$dbname="myproject1";

$conn=mysqli_connect($servername, $user, $password, $dbname);
if($conn)
{
#  echo "<script>alert('Database connection successful')</script>";
}
else
  {
echo "<script>alert('Connection failed!') </script>";
  }

?>
