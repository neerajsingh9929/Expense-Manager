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
 
}

if(!mysqli_select_db($con, $dbname))
{
	echo"db not connected";
}
else
{
	
   	 $friendname = $_POST['friendname'];
	 $phone = $_POST['phone'];
	
	
	 $query = "INSERT INTO friend(friendname, phone) VALUES('$friendname', '$phone')";
	
	 if(mysqli_query($con, $query)){
	 	echo "we have successfully recieved your opnion";
	}
	
}
?>

</body>
</html>