<html>
<body>


<?php

$servername = 'localhost:3306';
$username = 'root';
$password = "";
$dbname = "student";
$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con)
{
 echo "Server is not connected";
}else
{
  echo "Server is connected";
}

if(!mysqli_select_db($con, $dbname))
{
	echo "DB is not connected";
}
else
{
	
   	 $name = $_POST['name'];
	 $std_id = $_POST['std_id'];
	 $address = $_POST['address'];
	 $email = $_POST['email'];
	
	 $query = "INSERT INTO student(name, std_id, address, email) VALUES('$name', '$std_id', '$address', '$email')";
	
	 if(mysqli_query($con, $query)){
	 	echo "Data inserted succesfully";
	}
	
}
?>

</body>
</html>