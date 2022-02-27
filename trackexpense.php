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
   
		
	$getquery = "SELECT*FROM addexpense  ";
	$record=mysqli_query($con,$getquery);
	// $record = $con->query($getquery);

	echo "<table border='1'>

<tr>

<th>rupees</th>

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
<form>
<h1> Short by categeries<h1>
<ul>

<li><a href="trackexpense1.php">Education</a></li>
<li><a href="trackexpense2.php">Food</a></li>
<li><a href="trackexpense3.php">Travel</a></li>
<li><a href="trackexpense4.php">BILL</a></li>
<li><a href="trackexpense5.php">General</a></li>
</ul>

</form>


	


</body>
</html>