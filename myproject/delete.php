<?php 
include("connection.php");
$title=$_GET['t'];
$query="DELETE FROM todo WHERE title='$title'";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "Record deleted from table";

	?>

	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/myproject/display.php">
	<?php 
}
else
{
	echo "Sorry delete process failed";
}




 ?>