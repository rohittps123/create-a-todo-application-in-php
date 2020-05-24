<style>
td
{
	padding:10px;
	margin:auto;
	color:black;
	font-size: 20px;

}
th
{
	padding:10px;
	margin:auto;
	color:black;
	font-size: 20px;

}

a {
  

    background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

button {
  background-color: #008CBA; 
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>


<?php
include("connection.php");
error_reporting(0);
$query= "SELECT * FROM todo";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);




if($total!=0)
{
	?>
	<center>
	<div>
	<table border='2'>
		<tr>
			<th>ToDo</th>
			<th>Deadline</th>
			<th>Action</th>
		</tr>

	

	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td>".$result['title']."</td>
			<td>".$result['date']."&nbsp;&nbsp;&nbsp; ".$result['time']."</td>
			<td><a href='delete.php?t=$result[title]' onclick='return  checkdelete()'>Delete </a></td>
		     </tr>";
	}
}
else
{
	echo "No Record Found </br>";
}




?>
</table>
</div>


<button type="submit" onclick="window.location='http://localhost/myproject/addtodo.php'">Add More ToDos</button>

</center>
<script>
	function checkdelete()
	{
		return confirm('Are you sure you want to delete this record?');
	}
</script>