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
	
   	
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
     $email = $_POST['email'];
     $address = $_POST['address'];
	
	 $query = "INSERT INTO privateinfo(fname,lname,email,address) VALUES( '$fname','$lname','$email','$address')";
	
	 if(mysqli_query($con, $query)){
	 	echo "login successfully";
	}
	
}
?>

</body>
</html>