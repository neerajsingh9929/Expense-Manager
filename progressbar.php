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
   
		
	$getquery = "SELECT rupees FROM addbudget";
	$record=mysqli_query($con,$getquery);
	// $record = $con->query($getquery);

	while($data = mysqli_fetch_array($record,MYSQLI_BOTH))
	{
		
	 
			$totalbudget= $data['rupees'];
            // echo $totalbudget;
    }

	$getquery = "SELECT SUM(rupees) FROM addexpense where categery='Education' ";
	$record=mysqli_query($con,$getquery);
	// $record = $con->query($getquery);

	while($data = mysqli_fetch_array($record,MYSQLI_BOTH))
	{
		
	 
			$totalexpense= $data['SUM(rupees)'];
            echo $totalexpense;
    }


		

	

	
}
// $percent=($totalexpense*100)/$totalbudget;
// echo $percent;
?>