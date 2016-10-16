<?php
session_start();
if(isset($_SESSION['user']))
{
    ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/download.ico">
  <script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function w()
{
  swal({   title: "INFINITY ",   text: "Tell my Name to prove you are A worker",   type: "input",   showCancelButton: false,  
   closeOnConfirm: false,   animation: "slide-from-top",   inputPlaceholder: "Write my name!" },
   function(inputValue){   if (inputValue === false) return false;      if ((inputValue !="unni" ) && (inputValue !="UNNI" )) {  
          swal.showInputError("You need to Remember my name to continue!");     return false   }   
             swal("Nice!", "Do Your Works Buddie! ", "success"); });
};
</script>
    <title>INFINITY SHOP MANAGER</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">INFINITY SHOP MANAGER</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class= "active" href="home.php">Dashboard</a></li>
            <li ><a href="worker.php">Worker</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
            
           
          </ul>
          
        </div>
      </div>
    </div>

   





   < <div class="container-fluid">
      <div class="row">
        <div  class="col-sm-3 col-md-2 sidebar" >
          <ul class="nav nav-sidebar">
              <li ><a href="home.php">OVERVIEW</a></li>
             <li><a href="add_customer.php">ADD CUSTOMER</a></li>
            <li><a href="add_shop.php">ADD A SHOP</a></li>
            <li><a href="add_work.php">ADD A WORK</a></li>
            <li><a href="shops.php">SHOPS</a></li>
            <li><a href="add_money.php">ADD MONEY</a></li>
		


		
            <li class="active"><a href="account.php">SUMMARY</a></li>

          </ul>
       
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="background-image:url('images/1.jpg') ;background-repeat: no-repeat; background-position: center;background-size: cover;">
          <h1 class="page-header">SUMMARY- SHOPS</h1>

          <?php
              require_once 'db_connect.php';
           $q="SELECT sum(amount) as tot from `accounts`;";
		   $res=mysqli_query($con,$q);
		   $row=mysqli_fetch_array($res);
		   $total=$row['tot'];
		   
          $date=date("Y-m-d"); 

		   echo "<h3 class='sub-header'>TOTAL MONEY RECIEVED (TILL $date) : $total Rupees<h3>";
		   $q="SELECT count(*) as wt from `works`;";
		   $res=mysqli_query($con,$q);
		   $row=mysqli_fetch_array($res);
		   $wt=$row['wt'];
		    echo "<h3 class='sub-header'>TOTAL WORKS RECIEVED (TILL $date) : $wt<h3>";
			$q="SELECT count(*) as st from `shops`;";
		   $res=mysqli_query($con,$q);
		   $row=mysqli_fetch_array($res);
		   $st=$row['st'];
		    echo "<h3 class='sub-header'>TOTAL SHOPS (TILL $date) : $st<h3>";
		 ?>
           <h1 class="page-header">SUMMARY- INFINITY</h1>

          <?php
		  
           $q="SELECT sum(amount) as tot from `customer` where payment=1;";
		   $res=mysqli_query($con,$q);
		   $row=mysqli_fetch_array($res);
		   $total=$row['tot'];
		   
          $date=date("Y-m-d"); 

		   echo "<h3 class='sub-header'>TOTAL MONEY RECIEVED (TILL $date) : $total Rupees<h3>";
		   $q="SELECT count(*) as wt from `customer`;";
		   $res=mysqli_query($con,$q);
		   $row=mysqli_fetch_array($res);
		   $wt=$row['wt'];
		    echo "<h3 class='sub-header'>TOTAL WORKS RECIEVED (TILL $date) : $wt<h3>";
			$q="SELECT count(*) as st from `customer` where payment=1;";
		   $res=mysqli_query($con,$q);
		   $row=mysqli_fetch_array($res);
		   $st=$row['st'];
		    echo "<h3 class='sub-header'>TOTAL WORKS DONE (TILL $date) : $st<h3>";
           $q="SELECT `shops`.name as name,`accounts`.amount as amount,`accounts`.date as date FROM `accounts` JOIN `shops` on `accounts`.id=`shops`.id ;";
				$res=mysqli_query($con,$q);
				echo "<b><center>MONEY RECEIVED-SHOPS</center></b><br><div class='table-responsive'>
            <table class='table table-striped'>
              <thead>
                <tr>
				<th>SHOP</th>
                  <th>AMOUNT</th>
                  <th>GIVEN DATE</th>
                
                  
                </tr>
              </thead>
              <tbody>";

				while($row=mysqli_fetch_array($res))
				{
					$am=$row['amount'];
					$dte=$row['date'];
					$name=$row['name'];
					echo "<tr><td> $name</td><td>$am</td><td>$dte</td></tr>";
				}

		  ?>
          

               
              </tbody>
            </table>
          </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
<?php
}
else
 {
  $_SESSION['error'] = "Please Login to continue";
  header("Location: index.php");
}
?>