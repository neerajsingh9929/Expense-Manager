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
	
   	 $rupees = $_POST['rupees'];
	 $about = $_POST['about'];
	 $month = $_POST['month'];
	 $categery = $_POST['categery'];
	 $selector = $_POST['selector'];
	
	
	 $query = "INSERT INTO addexpense(rupees, about,month,categery,selector) VALUES('$rupees', '$about','$month','$categery','$selector')";
	
	 if(mysqli_query($con, $query)){
	 	echo "successfully added ";
	}
	
}
?>

</body>
</html>