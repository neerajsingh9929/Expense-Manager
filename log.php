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
	
   	
	//  $email = $_POST['email'];
	//  $password = $_POST['password'];
	
	//  $query = "INSERT INTO loginform(email,password) VALUES( '$email','$password')";
	
	//  if(mysqli_query($con, $query)){
	//  	echo "login successfully";
	// }

	if($_POST["submit"]=="login"){

		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM register WHERE email='".$email."' and Password='".$password."'";
		
		$result = $con->query($sql);
		
		if ($result->num_rows > 0) {
		
		echo '<script>
		
		window.location="welcomePagel.php";
		
		</script>';
		
		} 
		
		else {
		
		echo '<script>
		
		alert(“Wrong user name or password”);
		
		</script>';
		
		}
		
		}
	
}
?>

</body>
</html>