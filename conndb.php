<?php 
$name  = $_POST['name'];
$email = $_POST['Email'];
$conn=mysqli_connect('localhost','root','','sbit');
if($conn)
{
	echo "db connected sucessfully";

}
else
{
	echo "db not connected sucessfully";
}



$query="INSERT INTO `record`( `Name`, `Email`) VALUES ('$name','$email')";
$run=mysqli_query($conn,$query);
echo "<br>";
if ($run==TRUE)
{
	echo "record insrted sucessfully <a href='index.php'>click here</a>";
}
else
{
	"not inserted";
}

echo "<br>";



?>