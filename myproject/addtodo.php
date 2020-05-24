<html>
    <head>
    	<title>Add Todo</title>
<style>
body{
    background: #9B55C0;
    color:white;
}
form
{
    width:400px;
    margin:auto;
    padding:20px;
    background:#ff00ff;
    color:white;
    font-size: 20px;
}
td{
    padding:7px;
    font-size: 20px;
    



}
input[type=submit]:hover {
  background-color: #45a049;
}
input[type=submit] {
  
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset]:hover {
  background-color: #45a049;
}
input[type=reset] {
 
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}





 </style>

    </head>
    <body>
        <center ><h1> Fill the form below to Add in To DO list  </h1></center>

         <form  action="" method="GET">
  <table>
   <tr>
    <td>To-Do Title :</td>
    <td><input type="text" name="title" required placeholder="Enter Title for To-Do"></td>
   </tr>
   
    <td>Deadline :</td>
    <td><input type="date" name="date" required placeholder="Enter Date"></td>
    <td><input type="time" name="time" required placeholder="Enter Time"></td>
   </tr>
   <tr>
    <td></td>
    <td> <input type="submit" name="submit" value="submit">
    <input type="reset" value="Clear"></td>
   </tr>
  </table>
 </form>


    <?php

    include("connection.php");
    error_reporting(0);


    if($_GET['submit'])
    {
    	$title=$_GET['title'];
    	$date=$_GET['date'];
    	$time=$_GET['time'];

    	if($title!="" && $date!="" && $time!="" )
    	{
    		$query="INSERT into todo VALUES('$title','$date','$time')";
   			$data=mysqli_query($conn,$query);
   			if($data)
   			{
   				echo "Data inserted into database";
                ?>

                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/myproject/display.php">
                <?php 
   			}
    	}
    	else
    	{
    		echo "All feilds required";
    	}
    }


      ?>
   

    </body>
    </html>
    <script>
      document.body.style.zoom="145%"
    </script>