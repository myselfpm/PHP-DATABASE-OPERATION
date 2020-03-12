<?php


$conn=mysqli_connect('localhost','root','','sbit');
if ($conn)
 {
	echo "database connected sucessfully";

}
else
{
echo "not connected";
}
function showdata()
{
global $conn;
$query="SELECT * FROM `record`";
$run=mysqli_query($conn,$query);
if($run==TRUE)
{
	?>
	<table border="2" width="50%">
	<?php
	while ($data=mysqli_fetch_assoc($run))
	 {
		
	?>
	<tr>
		<td><?php echo $data['Name'];  ?></td><td><?php echo $data['Email'];  ?></td>
	</tr>
	<?php
}
?>
</table>
  <?php

}
else
{
	echo "unsucessful";

}

}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php showdata(); ?>

</body>
</html> 