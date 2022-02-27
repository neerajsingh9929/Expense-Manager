<html>
<body>


<?php

$servername = 'localhost:3306';
$username = 'root';
$password = "";
$dbname = "expenser";
$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con)
{
 echo"server not connected";
}else
{
	echo"db not connected";
 
}

if(!mysqli_select_db($con, $dbname))
{
	echo"db connected";
}
else
{
	
   	 $rupees = $_POST['rupees'];
	 $month = $_POST['month'];
	
	
	 $query = "INSERT INTO addbudget(rupees, month) VALUES('$rupees', '$month')";
	


	 if(mysqli_query($con, $query)){
	 	echo "we have successfully recieved your opnion";
	}

}
?>

</body>
</html>