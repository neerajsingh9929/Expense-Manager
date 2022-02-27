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
 
}else
{
 
}

if(!mysqli_select_db($con, $dbname))
{
	
}
else
{
	
   	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $email = $_POST['email'];
	 $comment= $_POST['comment'];
	
	 $query = "INSERT INTO contact(fname, lname, email,comment) VALUES('$fname', '$lname', '$email', '$comment')";
	
	 if(mysqli_query($con, $query)){
	 	echo "we have successfully recieved your opnion";
	}
	
}
?>

</body>
</html>