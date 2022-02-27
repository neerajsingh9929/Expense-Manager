<html>
	<head>
		<style>
			table

{
    font-size:30px;
border-style:solid;

border-width:2px;

border-color:pink;
background-color:rgb(130, 180, 130);

}
th{
    background-color:yellow;
    
}
</style>
</head>

<body>

<?php

$servername = 'localhost:3306';
$username = 'root';
$password = "";
$dbname = "expenser";
$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con)
{
 echo "server is not connected";
}else
{
 //
}

if(!mysqli_select_db($con, $dbname))
{
	echo "DB is not connected";
}
else
{
   
		
	$getquery = "SELECT  rupees ,about,month,categery,selector FROM addexpense WHERE categery='Education'";
	$record=mysqli_query($con,$getquery);
	// $record = $con->query($getquery);

	echo "<table border='1'>

<tr>

<th >rupees</th>

<th>about</th>

<th>month</th>

<th>categery</th>

<th>selector</th>

</tr>";


	while($data = mysqli_fetch_array($record,MYSQLI_BOTH))
	{
		
	 
			//  echo $data['rupees']." ".$data['about']." ".$data['month']." ".$data['categery']." ".$data['selector']."<br>";
	

			 echo "<tr>";

			 echo "<td>" . $data['rupees'] . "</td>";
		   
			 echo "<td>" . $data['about'] . "</td>";
		   
			 echo "<td>" . $data['month'] . "</td>";
		   
			 echo "<td>" . $data['categery'] . "</td>";

			 echo "<td>" . $data['selector'] . "</td>";
		   
			 echo "</tr>";


	}
	echo "</table>";

	
}
?>



</body>
</html>