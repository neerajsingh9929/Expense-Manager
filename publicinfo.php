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
 //
}else
{
  //
}

if(!mysqli_select_db($con, $dbname))
{
	//
}
else
{
	
   	
	 $username = $_POST['username'];
	 $bio = $_POST['bio'];
	
	 $query = "INSERT INTO publicinfo(username,bio) VALUES( '$username','$bio')";
	
	 if(mysqli_query($con, $query)){
	 	echo "login successfully";
	}
	
}
?>

</body>
</html>