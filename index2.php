<!doctype html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Expense Manager</title>
  <link rel="stylesheet" href="style.css">


</head>

<body>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>



  <!-- +++++++++++NAV BAR+++++++++++++++++ -->


  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="profile.php"><b>Profile</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><b>Hello User </b><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php"><b>Contact Us</b></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <b>Notifications</b>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Officials</a>
            <a class="dropdown-item" href="#">Transcations</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"></a>
          </div>

        </li>
        <li class="nav-item">
        <button type="Submit"value="Register"style="margin-up:15px;background-color:DodgerBlue;"data-toggle="modal"data-target="#ModalLoginForm">Register</button>   
        <button type="Submit"value="login"style="margin-top:15px;background-color:DodgerBlue"data-toggle="modal"data-target="#ModalLoginForm">Login</button>

        </li>
        <li class="nav-item">
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="search()">Search</button>
      </form>
    </div>
  </nav>


  <!-- ++++++++++++++++++++++SLIDER++++++++++++++++++++++++ -->



  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://images-na.ssl-images-amazon.com/images/I/61zBn-44zhL.png" height="300px"
          width="100%">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100"
          src="https://images.unsplash.com/photo-1580519542036-c47de6196ba5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NHx8fGVufDB8fHx8&w=1000&q=80"
          alt="Second slide" height="300px" width="100%">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100"
          src="https://images.pexels.com/photos/6693655/pexels-photo-6693655.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
          alt="Third slide" height="300px" width="100%">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- +++++++++++++++++++++++++++PROGRSS BAR++++++++++++++++++++++++++ -->




  <div class="container-fluid">
    <div class="row"
      style="background-color:rgb(189, 177, 162); background-color: rgba(173, 91, 109, 0.548); border:double; border-color: royalblue; margin-top: 4%;">
      <div class="col-md-2">
        <p><b>Monthely Spend</b></p>
      </div>
      <div class="col-md-8" style="margin-top: 5%;">
        <div class="progress" style="height: 1px;">
          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100"></div>
        </div>

        <!-- +++++++++++++++progressbar++++++++++++++++++++++ -->
        <div class="progress" style="height: 40px;">
          <div class="progress-bar"id="p-bar" role="progressbar" style="width:


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
   
		
	$getquery = "SELECT rupees FROM addbudget ";
	$record=mysqli_query($con,$getquery);
	// $record = $con->query($getquery);

	while($data = mysqli_fetch_array($record,MYSQLI_BOTH))
	{
		
	 
			$totalbudget= $data['rupees'];
            
    }

	$getquery = "SELECT SUM(rupees) FROM addexpense ";
	$record=mysqli_query($con,$getquery);
	// $record = $con->query($getquery);

	while($data = mysqli_fetch_array($record,MYSQLI_BOTH))
	{
		
	 
			$totalexpense= $data['SUM(rupees)'];
            
    }
}
$percent=($totalexpense*100)/$totalbudget;
echo $percent."%";
?>
"


aria-valuenow="" aria-valuemin="0"
            aria-valuemax="100">
            
            
            
          <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->  
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
   
		
	$getquery = "SELECT rupees FROM addbudget ";
	$record=mysqli_query($con,$getquery);
	// $record = $con->query($getquery);

	while($data = mysqli_fetch_array($record,MYSQLI_BOTH))
	{
		
	 
			$totalbudget= $data['rupees'];
            
    }

	$getquery = "SELECT SUM(rupees) FROM addexpense ";
	$record=mysqli_query($con,$getquery);
	// $record = $con->query($getquery);

	while($data = mysqli_fetch_array($record,MYSQLI_BOTH))
	{
		
	 
			$totalexpense= $data['SUM(rupees)'];
          
    }
}
$percent=($totalexpense*100)/$totalbudget;
echo $percent."%";
?></div>

        </div>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


        <div class="text-center">
          <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <form action="addbudget.php" method="POST">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add Budget</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                  </div>

                  <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                      <i class="fas fa-user prefix grey-text"></i>
                      <input type="text" id="form3" class="form-control validate" name="rupees">
                      <label data-error="wrong" data-success="right" for="form3">Rupees</label><br><br><br>

                      Select Month <br><input type="date" name="month">
                    </div>



                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-indigo">Add<i class="fas fa-paper-plane-o ml-1"></i></button>
                  </div>
              </form>

            </div>
          </div>
        </div>

        <div class="text-center">
          <button class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalSubscriptionForm"
            style="margin-top: 50px;">Add Budget</button>
        </div>
      </div>
    </div>
    <div class="col-md-2">


      <div id="head1">
        <select id='gMonth1'>
          <option value=''selected>--Select Month--</option>
          <option selected value='1'>Janaury</option>
          <option value='2'>February</option>
          <option value='3'>March</option>
          <option value='4'>April</option>
          <option value='5'>May</option>
          <option value='6'>June</option>
          <option value='7'>July</option>
          <option value='8'>August</option>
          <option value='9'>September</option>
          <option value='10'>October</option>
          <option value='11'>November</option>
          <option value='12'>December</option>
        </select>
      </div>
    </div>

  </div>
  </div>

  <!-- +++++++++++++++++++++++++PI CHART+++++++++++++++++++++ -->





  <div class="container-fluid" style="background-color:grey;">
    <div class="row" style=" box-sizing: border-box; ">
      <div class="col-md-6" style="margin-top :15px;">
        <div id="piechart"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
          // Load google charts
          google.charts.load('current', { 'packages': ['corechart'] });
          google.charts.setOnLoadCallback(drawChart);

          // Draw the chart and set the chart values
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['spends', 'rupees per month'],
              ['Education', 
              
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
              
              ],
              ['Food', 
              
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

	$getquery = "SELECT SUM(rupees) FROM addexpense where categery='Food' ";
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
              
              
              ],
              ['Travel', 
              
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

	$getquery = "SELECT SUM(rupees) FROM addexpense where categery='Travel' ";
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
              ],
              ['General', 
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

	$getquery = "SELECT SUM(rupees) FROM addexpense where categery='General' ";
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
              
              ],
              ['Bill', 
              
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

	$getquery = "SELECT SUM(rupees) FROM addexpense where categery='Bill' ";
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
              
              ],

            ]);

            // Optional; add a title and set the width and height of the chart
            var options = { 'title': 'Monthely Expense', 'height': 300 };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
          }
        </script>
      </div>
      <div class="col-md-2 " style="background-color: rgb(214, 203, 203); margin-top: 15px; ">

        <div style="text-align:center ;margin-right: 10px;margin-top: 100px;">
          <div class="text-center">

            <button onclick="trackexpense()"
              style="height: 100px;width: 100px; border: hidden;border-radius: 2pc;">
              Track Your Expenses</button>
             
        
          </div>

        </div>
      </div>

      <div class="col-md-4" style="margin-top: 15px;">
        <img src="https://media.istockphoto.com/photos/businessman-money-clipart-picture-id609950992"
          style="object-fit: coveer;" width="100%" height="300px" />
      </div>/

    </div>
  </div>

  <!-- +++++++++++++++++++++++ADD EXPENSE++++++++++++++++++++++++++++++++ -->


  <div class="container-fluid2" style="margin-top: 20px;margin-bottom: 20px;">
    <div class="row" style="background-color: rgb(185, 141, 141); box-sizing: border-box;">
      <div class="col-md-12">
        <div class="text-center">

          <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% add expense model@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
          <form action="addexpense.php" method="POST">

            <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">

                <div class="modal-content">

                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Add Expense</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                      <i class="fas fa-user prefix grey-text"></i>
                      <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Rupees$"
                        name="rupees">
                      <label data-error="wrong" data-success="right" for="orangeForm-name">Value</label>
                    </div>
                    <div class="md-form mb-5">
                      <i class="fas fa-envelope prefix grey-text"></i>
                      <input type="text" id="orangeForm-email" class="form-control validate"
                        placeholder="What was this expense for?" name="about">
                      <label data-error="wrong" data-success="right" for="orangeForm-email">About</label>
                    </div>
                    <div class="md-form mb-5">
                      Select Month<input type="date" name="month" method="POST" />
                    </div>
                    

                  <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <select  id="cars"name="categery">
                      <option value="Education">Education</option>
                      <option value="Food">Food</option>
                      <option value="Travel">Travel</option>
                      <option value="BILL">Bill</option>
                      <option value="General">General</option>

                    </select>
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Categery</label>
                  </div>
                  <div class="md-form mb-5">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <select  id="cars"name="selector">
                      <option value="single">single</option>
                      <option value="with friend">with friend</option>
                 

                    </select>
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">select</label>
                  </div>
                </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <button class="btn btn-deep-orange">Add</button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </form>



          <form action="addexpense.php" method="POST">

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Expense</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Rupees$"
            name="rupees">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Value</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="orangeForm-email" class="form-control validate"
            placeholder="What was this expense for?" name="about">
          <label data-error="wrong" data-success="right" for="orangeForm-email">About</label>
        </div>
        <div class="md-form mb-5">
          Select Month<input type="date" name="month" method="POST" />
        </div>
        

      <div class="md-form mb-4">
        <i class="fas fa-lock prefix grey-text"></i>
        <select  id="cars"name="categery">
          <option value="Education">Education</option>
          <option value="Food">Food</option>
          <option value="Travel">Travel</option>
          <option value="BILL">Bill</option>
          <option value="General">General</option>

        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-pass">Categery</label>
      </div>
      <div class="md-form mb-5">
        <i class="fas fa-lock prefix grey-text"></i>
        <select  id="cars"name="selector">
          <option value="single">single</option>
          <option value="with friend">with friend</option>
     

        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-pass">select</label>
      </div>
    </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-deep-orange">Add</button>
        </div>

      </div>
    </div>
  </div>
</div>
</form>
<form action="addexpense.php" method="POST">

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Expense</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Rupees$"
            name="rupees">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Value</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="orangeForm-email" class="form-control validate"
            placeholder="What was this expense for?" name="about">
          <label data-error="wrong" data-success="right" for="orangeForm-email">About</label>
        </div>
        <div class="md-form mb-5">
          Select Month<input type="date" name="month" method="POST" />
        </div>
        

      <div class="md-form mb-4">
        <i class="fas fa-lock prefix grey-text"></i>
        <select  id="cars"name="categery">
          <option value="Education"selected>Education</option>
          <option value="Food">Food</option>
          <option value="Travel">Travel</option>
          <option value="BILL">Bill</option>
          <option value="General">General</option>

        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-pass">Categery</label>
      </div>
      <div class="md-form mb-5">
        <i class="fas fa-lock prefix grey-text"></i>
        <select  id="cars"name="selector">
          <option value="single">single</option>
          <option value="with friend">with friend</option>
     

        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-pass">select</label>
      </div>
    </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-deep-orange">Add</button>
        </div>

      </div>
    </div>
  </div>
</div>
</form>




<form action="addexpense.php" method="POST">

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Expense</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Rupees$"
            name="rupees">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Value</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="orangeForm-email" class="form-control validate"
            placeholder="What was this expense for?" name="about">
          <label data-error="wrong" data-success="right" for="orangeForm-email">About</label>
        </div>
        <div class="md-form mb-5">
          Select Month<input type="date" name="month" method="POST" />
        </div>
        

      <div class="md-form mb-4">
        <i class="fas fa-lock prefix grey-text"></i>
        <select  id="cars"name="categery">
          <option value="Education">Education</option>
          <option value="Food"selected>Food</option>
          <option value="Travel">Travel</option>
          <option value="BILL">Bill</option>
          <option value="General">General</option>

        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-pass">Categery</label>
      </div>
      <div class="md-form mb-5">
        <i class="fas fa-lock prefix grey-text"></i>
        <select  id="cars"name="selector">
          <option value="single">single</option>
          <option value="with friend">with friend</option>
     

        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-pass">select</label>
      </div>
    </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-deep-orange">Add</button>
        </div>

      </div>
    </div>
  </div>
</div>
</form>


<form action="addexpense.php" method="POST">

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Expense</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Rupees$"
            name="rupees">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Value</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="orangeForm-email" class="form-control validate"
            placeholder="What was this expense for?" name="about">
          <label data-error="wrong" data-success="right" for="orangeForm-email">About</label>
        </div>
        <div class="md-form mb-5">
          Select Month<input type="date" name="month" method="POST" />
        </div>
        

      <div class="md-form mb-4">
        <i class="fas fa-lock prefix grey-text"></i>
        <select  id="cars"name="categery">
          <option value="Education">Education</option>
          <option value="Food">Food</option>
          <option value="Travel"selected>Travel</option>
          <option value="BILL">Bill</option>
          <option value="General">General</option>

        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-pass">Categery</label>
      </div>
      <div class="md-form mb-5">
        <i class="fas fa-lock prefix grey-text"></i>
        <select  id="cars"name="selector">
          <option value="single">single</option>
          <option value="with friend">with friend</option>
     

        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-pass">select</label>
      </div>
    </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-deep-orange">Add</button>
        </div>

      </div>
    </div>
  </div>
</div>
</form>






<form action="addexpense.php" method="POST">

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Expense</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Rupees$"
            name="rupees">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Value</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="orangeForm-email" class="form-control validate"
            placeholder="What was this expense for?" name="about">
          <label data-error="wrong" data-success="right" for="orangeForm-email">About</label>
        </div>
        <div class="md-form mb-5">
          Select Month<input type="date" name="month" method="POST" />
        </div>
        

      <div class="md-form mb-4">
        <i class="fas fa-lock prefix grey-text"></i>
        <select  id="cars"name="categery">
          <option value="Education">Education</option>
          <option value="Food">Food</option>
          <option value="Travel">Travel</option>
          <option value="BILL"selected>Bill</option>
          <option value="General">General</option>

        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-pass">Categery</label>
      </div>
      <div class="md-form mb-5">
        <i class="fas fa-lock prefix grey-text"></i>
        <select  id="cars"name="selector">
          <option value="single">single</option>
          <option value="with friend">with friend</option>
     

        </select>
        <label data-error="wrong" data-success="right" for="orangeForm-pass">select</label>
      </div>
    </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-deep-orange">Add</button>
        </div>

      </div>
    </div>
  </div>
</div>
</form>
  <div class="text-center">
    <button onclick="addexpense()" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
      data-target="#modalRegisterForm" style="border-radius:2pc; margin-top:40px;height: 50px;width: 200px;">+Add
      Expenses</button>
  </div>
  </div>

  </div>

  </div>
  <div class="row" style="background-color: rosybrown; box-sizing: border-box;">
    <div class="col-md-2">
      <div class="text-center">
        <button type="submit" class="test"
          style="margin-top: 40px;margin-bottom:10px;border: hidden;border-radius: 2pc; " data-toggle="modal"
          data-target="#modalRegisterForm">All</button>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <button type="submit" class="test" data-toggle="modal" data-target="#modalRegisterForm"
          style="margin-top: 40px; margin-bottom:10px;border: hidden;border-radius: 2pc; ">Education</button>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <button type="submit" class="test" data-toggle="modal" data-target="#modalRegisterForm"
          style="margin-top: 40px;margin-bottom:10px; border: hidden;border-radius: 2pc;">Food</button>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <button type="submit" class="test" data-toggle="modal" data-target="#modalRegisterForm"
          style="margin-top: 40px;margin-bottom:10px;border: hidden;border-radius: 2pc; ">Travel</button>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <button type="submit" class="test" data-toggle="modal" data-target="#modalRegisterForm"
          style="margin-top: 40px;margin-bottom:10px;border: hidden;border-radius: 2pc;">Bill</button>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <button type="submit" class="test" data-toggle="modal" data-target="#modalRegisterForm"
          style="margin-top: 40px;margin-bottom:10px; border: hidden;border-radius: 2pc;">General</button>
      </div>
    </div>

  </div>

  </div>





  <!-- ++++++++++++++++++++++++++ SOME TEXT AND IMAGE++++++++++++++++++++++++++++++ -->




  <div class="container-fluid">
    <div class="row" style="background-color: #f3aa0d; box-sizing: border-box;">
      <div class="col-md-4" style="margin-top:50px;margin-bottom:50px;">
        <div class="card">
          <img class="card-img-top"
            src="https://animasmarketing.com/wp-content/uploads/2021/03/tracking-your-expenses-1.png" height="200px"
            width="100%" alt="Card image cap">
          <div class="card-block">
            <p class="card-text">Track your Expenses at any time ,any places with friends with the help of Expense
              Manager.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" style="margin-top:50px;margin-bottom:50px;">
        <div class="card">
          <img class="card-img-top" src="https://www.actioncoach.com/wp-content/uploads/2019/09/iStock-1172276924.jpg"
            height="200px" width="100%" alt="Card image cap">
          <div class="card-block">
            <p class="card-text">Manage Spends and track them using a standerd Web browser.Easy reporting by using month
              sheet.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" style="margin-top:50px;margin-bottom:50px;">
        <div class="card">
          <img class="card-img-top" src="https://i.pinimg.com/736x/c9/17/ff/c917ffa621ef84da4936465737d9620b.jpg"
            height="200px" width="100%" alt="Card image cap">
          <div class="card-block">
            <p class="card-text">Not only the System free. it is also very affordable if you want to continue using our
              services.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- ++++++++++++++++++++++FEATURES++++++++++++++++++++++++++ -->






  <div class="container-fluid2" style="margin-top: 20px;margin-bottom: 20px;">
    <div class="row" style="background-color: rgb(185, 141, 141); box-sizing: border-box;">
      <div class="col-md-12">
        <div class="text-center">
          <h4><b>Features </b></h4>
        </div>

      </div>

    </div>
    <div class="row" style="background-color: rosybrown; box-sizing: border-box;">
      <div class="col-md-3">
        <div class="text-center">
          <p><b> Custimize Spendee</b></p>
          <p>Customize your catagroies,add manually to every expense</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-center">
          <p><b> Alerts and reminders</b></p>
          <p>will notyfi you to add expense and exceed to budget</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-center">
          <p><b> Painless Budgeting</b></p>
          <p>set budgets that are easy to stick up based on your own spending habbits </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-center">
          <p><b> The whole picture in one place </b></p>
          <p>One report to give a clear view of ypur spending patterns. understand where your money go with easy to read
            graphs.</p>
        </div>
      </div>


    </div>

  </div>


  <!-- +++++++++++++++++++++++++++++++++HOME FRIENDS GROUPS TRANSCATIONS++++++++++++++++++++++++++++++++++ -->




  <div class="container-fluid" style="margin-top: 2px; margin-bottom: 10px;">
    <div class="row" style="background-color: #e7e2d8; box-sizing: border-box; ">
      <div class="col-md-3" style="margin-bottom:20px;margin-top:20px;">
        <button class="test" onclick="todolist()"
          style=" border: hidden;border-radius: 2pc;width: 200px;height: 70px;"><b>TODOLIST</b></button>
      </div>
      <div class="col-md-3" style="margin-bottom:20px;margin-top:20px;">
        <button class="test" data-toggle="modal" data-target="#addfriend"
          style=" border: hidden;border-radius: 2pc;width: 200px;height: 70px;"><b>FRIENDS</b></button>
      </div>
      <div class="col-md-3" style="margin-bottom:20px;margin-top:20px;">
        <button class="test" data-toggle="modal" data-target="#addgroup"
          style=" border: hidden;border-radius: 2pc;width: 200px;height: 70px;"><b>GROUPS</b></button>
      </div>
      <div class="col-md-3" style="margin-bottom:20px;margin-top:20px;">
        <button class="test"onclick="pdf()"
          style=" border: hidden;border-radius: 2pc;width: 200px;height: 70px;"><b>TRANSACTIONS</b></button>
      </div>

    </div>
  </div>

  <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ Add friends_+++++++++++++++++++++++++++++++++++++++ -->

  <div class="modal fade" id="addfriend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold"> Add friends</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <center>

          <div class="modal-body mx-3">
            <form action="friend2.php" method="POST">
              <div class="md-form mb-5">


                Name <input type="text" name="friendname"><br>


                Phone <input type="text" style="margin-top: 4%;" name="phone"><br>


                <input type="button" value="Add" style="margin-top: 6%;background-color:yello;">

              </div>

            </form>

            <h4> Your Friends</h4><br>
            <input type="button" value="view friends">
        </center>




      </div>



    </div>
  </div>


  </div>

  <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->


  <div class="modal fade" id="addgroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold"> CREATE GROUP</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <center>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">

              Group Name <input type="text"><br>



              <div class="md-form mb-5">


                <input type="radio" name="singlewithfriend" method="POST" onclick="friend()" />
                <label for="friend">Choose Friend </label>

              </div>

              </select><br>


              <input type="button" value="Add" style="margin-top: 6%;background-color:yello;">

            </div>


            <h4> YOUR GROUPS</h4><br>
            <button>view</button>
        </center>




      </div>



    </div>
  </div>
  </div>

  <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

  <!-- ++++++++++++++++++++++++++++++++FEEDBACK MODEL+++++++++++++++ -->



  <div class="container-fluid">
    <div class="row" style="background-color: #cfccc6; box-sizing: border-box;">
      <div class="col-md-12">

      </div>

      <button type="button" class="btn btn-danger"
        style=" border-radius: 3pc;border:hidden;background-color: cadetblue;" data-toggle="modal" data-target="#form">
        Send Feedback </button>

      <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="text-right cross"> <i class="fa fa-times mr-2"></i> </div>
            <div class="card-body text-center"> <img
                src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDhp3rrXaIVa5RS0CXSp0z5VF7Ff-Yt8ojng&usqp=CAU"
                height="100" width="100">
            <div class="comment-box text-center">
              <form action="rating.php"method="POST">
                <h4>Add a comment</h4>
                <div class="rating"> 
                  <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                <input type="radio" name="rating" value="2"id="2"><label for="2">☆</label>
                 <input type="radio" name="rating" value="1" id="1"><labelfor="1">☆</label> </div>
                <div class="comment-area"> <textarea class="form-control" placeholder="what is your view?"
                    rows="4"></textarea> </div>
                <div class="text-center mt-4"> <button class="btn btn-success send px-5">Send message <i class="fa fa-long-arrow-right ml-1"></i></button> </div>
             </form>
            </div>
            </div>
          </div>
        </div>
      </div>



      <!-- +++++++++++++++++++++++++++++++++++FOOTER+++++++++++++++++++++++++++++++++++ -->




      <!-- Footer -->
      <footer class="page-footer font-small mdb-color lighten-3 pt-4" style="background-color:silver ;width: 100%; ">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

              <!-- Content -->
              <h5 class="font-weight-bold text-uppercase mb-4">Expense Manager</h5>
              <Ul>
                <li>
                  <a href="#">why Expense Manager</a>
                </li>
                <li>
                  <a href="#">why Expense Manager</a>
                </li>
              </Ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

              <ul class="list-unstyled">
                <li>
                  <p style="font-size: small;">
                    <a href="privacypolicy.html">PRIVACY POLICY</a>
                  </p>
                </li>
                <li>
                  <p style="font-size: small;">
                    <a href="#!">ABOUT US</a>
                  </p>
                </li>
                <li>
                  <p style="font-size: small;">
                    <a href="help.html">HELP</a>
                  </p>
                </li>
                <li>
                  <p style="font-size: small;">
                    <a href="#!">AWARDS</a>
                  </p>
                </li>
              </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

              <!-- Contact details -->
              <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

              <ul class="list-unstyled" style="font-size: small;">
                <li>

                  <i class="fa fa-home" style="padding-top: 0px;"></i>
                  MP Nagar ,Zone-I,Bhopal,Madhya Pradesh,INDIA


                </li>
                <li>

                  <i class="fa fa-envelope" style="font-size:medium;">ns341920@gmail.com</i>


                </li>
                <li>

                  <i class="fa fa-phone" style="padding-top:0px;"></i>
                  +917879617232

                </li>

              </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

              <!-- Social buttons -->
              <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

              <a href="https://www.facebook.com/profile.php?id=100015422769289" class="fa fa-facebook"
                style="font-size: small;"></a>

              <a href="https://mobile.twitter.com/home" class="fa fa-twitter" style="font-size: small;"></a>
              <a href="https://www.linkedin.com/in/neeraj-singh-55564420b" class="fa fa-linkedin"
                style="font-size:small"></a>
              <a href="https://www.instagram.com/p/CMw22lHhCY7ytIa74XsNeSxI4eYjVyPW8vUi1Y0/?utm_medium=copy_link"
                class="fa fa-instagram" style="font-size:small"></a>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>




      </footer>
      <!-- Footer -->
      <!-- ++++++++++++++++++=LOGIN FORM MODEL+++++++++++++++++++++++++++++++++++ -->

      <!-- Modal HTML Markup -->
      <div id="ModalLoginForm" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title">Login</h1>
            </div>
            <div class="modal-body">
              <form role="form" method="POST" action="login.php">
                <input type="hidden" name="_token" value="">
                <div class="form-group">
                  <label class="control-label">Email Address</label>
                  <div>
                    <input type="email" class="form-control input-lg" name="email" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Password</label>
                  <div>
                    <input type="password" class="form-control input-lg" name="password">
                  </div>
                </div>

                <div class="form-group">
                  <div>
                    <button type="submit" class="btn btn-success">Login</button>

                    <a class="btn btn-link" href="profile.php">Forgot Your Password?</a>
                  </div>
                </div>
              </form>
              <h1>Or Signup!</h1>
              <form role="form" method="POST" action="registerform.php">
                <input type="hidden" name="_token" value="">
                <div class="form-group">
                  <label class="control-label">Username</label>
                  <div>
                    <input type="text" class="form-control input-lg" name="username" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">E_Mail_Address</label>
                  <div>
                    <input type="email" class="form-control input-lg" name="email" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Passward</label>
                  <div>
                    <input type="password" class="form-control input-lg" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Confirm Password</label>
                  <div>
                    <input type="password" class="form-control input-lg" name="confpassword">
                  </div>
                </div>
                <div class="form-group">
                  <div>
                    <button type="submit" class="btn btn-success">
                      Register
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->


      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

      <!-- add expenses ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      <script>
        function trackexpense() {
          location.replace("trackexpense.php")
        }

      </script>
      <script>
        function search() {
          location.replace("https://www.google.com")
        }
        function friend() {
          location.replace("friend.php")
        }
        function todolist() {
          location.replace("todolist.php")
        }
        function pdf()
        {
          location.replace("expensepdf.php")
        }
      </script>
      <!-- ######################################top button############ -->


      <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>

</body>

</html>