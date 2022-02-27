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
	
   	
	 $currentpassword = $_POST['currentpassword'];
	 $newpassword = $_POST['newpassword'];
     $verifypassword = $_POST['verifypassword'];
     
	
	 $query = "INSERT INTO ChangePassword(currentpassword,newpassword,verifypassword) VALUES( '$currentpassword','$newpassword','$verifypassword')";
	
	 if(mysqli_query($con, $query)){
	 	echo "login successfully";
	}
	
}
?>

</body>
</html>