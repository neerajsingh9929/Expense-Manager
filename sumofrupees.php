<html>
	<head>
		<style>
			table

{
background-color:cadetblue;
border-style:solid;

border-width:2px;

border-color:pink;
font-size: 20px;
width: 100%;

}
th
{
	background-color:green;
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
   
		
	$getquery = "SELECT*SUM(rupees)FROM addexpense";
	$record=mysqli_query($con,$getquery);
	// $record = $con->query($getquery);

	echo "<table border='1'>

<tr>

<th>rupees</th>

</tr>";


	while($data = mysqli_fetch_array($record,MYSQLI_BOTH))
	{
		
	 
			//  echo $data['rupees']." ".$data['about']." ".$data['month']." ".$data['categery']." ".$data['selector']."<br>";
	

			 echo "<tr>";

			 echo "<td>" . $data['SUM(rupees)'] . "</td>";
			
		   
		   
			 echo "</tr>";

			 $totalexpense=$dagta['SUM(rupees)'];
	}
	echo "</table>";

	
}
?>

</body>
</html>