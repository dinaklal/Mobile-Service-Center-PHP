<?php
$id=$_GET['id'];
$name=$_GET['name'];?>
<!DOCTYPE html>
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
            <li ><a href="shop_home.php?id=<?php echo $id?>&name=<?php echo $name?>">DETAILS</a></li>
            <li class="active"><a href="shop_works.php?id=<?php echo $id?>&name=<?php echo $name?>">TOTAL WORKS</a></li>
           
            <li><a href="account_shop.php?id=<?php echo $id?>&name=<?php echo $name?>">ACCOUNTS</a></li>
          </ul>
       
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="background-image:url('images/1.jpg') ;background-repeat: no-repeat; background-position: center;background-size: cover;">
          <h1 class="page-header"><?php echo $name?></h1>
          <center><h2 class="page-header">Pending Works</h1></center>
          <?Php

		            $con=mysqli_connect("localhost","infinity","949510","infinity");
					$q="SELECT * FROM `shops` join `works` on `shops`.id=`works`.shop_id where `works`.status='pending'and `shops`.id=$id;";
					$res=mysqli_query($con,$q);
					$i=0;
					echo "
          <div class='table-responsive'>
            <table class='table table-striped'>
			

         
              <thead>
                <tr>
                  <th>ID</th>
                  <th>TYPE</th>
                  <th>MODEL</th>
                  <th>DESCRIPTION</th>
                  <th>PROBLEM</th>
				  <th>SHOPNAME</th>
				 <th>DATE</th> 
				  <th>AMOUNT</th>
				
				   <th>STATUS</th>
                </tr>
              </thead>
              <tbody>";
					while($row=mysqli_fetch_array($res))
					{
						$i++;
						$id=$row['id'];
						$name=$row['name'];
						$type=$row['type'];
						$model=$row['model'];
						$des=$row['description'];
						$pblm=$row['problem'];
						$dte=$row['date'];
						$amnt=$row['amount'];
						$status=$row['status'];
						echo " <tr>
                  <td>INF$id</td>
				  <td>$type</td>
                  <td>$model</td>
                  <td>$des</td>
				  <td>$pblm</td>
                <td>  $name</td>
				<td>$dte</td>
                  <td>$amnt</td>
                  <td>    $status</td> 
			
                  
                </tr>";
					}

?>

        
              </tbody>
            </table>
           
          
</div>
<center><h2 class="page-header">Completed Works</h1></center>
          <?Php

		            $con=mysqli_connect("localhost","infinity","949510","infinity");
					$q="SELECT * FROM `shops` join `works` on `shops`.id=`works`.shop_id where `works`.status='Completed' and `shops`.id=$id;";
					$res=mysqli_query($con,$q);
					$i=0;
					echo "
          <div class='table-responsive'>
            <table class='table table-striped'>
			

         
              <thead>
                <tr>
                  <th>ID</th>
                  <th>TYPE</th>
                  <th>MODEL</th>
                  <th>DESCRIPTION</th>
                  <th>PROBLEM</th>
				  <th>SHOPNAME</th>
				 <th>DATE</th> 
				  <th>AMOUNT</th>
				
				   <th>STATUS</th>
                </tr>
              </thead>
              <tbody>";
					while($row=mysqli_fetch_array($res))
					{
						$i++;
						$id=$row['id'];
						$name=$row['name'];
						$type=$row['type'];
						$model=$row['model'];
						$des=$row['description'];
						$pblm=$row['problem'];
						$dte=$row['date'];
						$amnt=$row['amount'];
						$status=$row['status'];
						echo " <tr>
                  <td>INF$id</td>
				  <td>$type</td>
                  <td>$model</td>
                  <td>$des</td>
				  <td>$pblm</td>
                <td>  $name</td>
				<td>$dte</td>
                  <td>
      $amnt </td>
                  <td>    $status </td>      
			
                  
                </tr>";
					}

?>

        
              </tbody>
            </table>
            <center><h2 class="page-header">Cannot Repaired Works</h1></center>
          <?Php

		            $con=mysqli_connect("localhost","infinity","949510","infinity");
					$q="SELECT * FROM `shops` join `works` on `shops`.id=`works`.shop_id where `works`.status='Cannot Repaired' and `shops`.id=$id";
					$res=mysqli_query($con,$q);
					$i=0;
					echo "
          <div class='table-responsive'>
            <table class='table table-striped'>
			

         
              <thead>
                <tr>
                  <th>ID</th>
                  <th>TYPE</th>
                  <th>MODEL</th>
                  <th>DESCRIPTION</th>
                  <th>PROBLEM</th>
				  <th>SHOPNAME</th>
				 <th>DATE</th> 
				  <th>AMOUNT</th>
				
				   <th>STATUS</th>
                </tr>
              </thead>
              <tbody>";
					while($row=mysqli_fetch_array($res))
					{
						$i++;
						$id=$row['id'];
						$name=$row['name'];
						$type=$row['type'];
						$model=$row['model'];
						$des=$row['description'];
						$pblm=$row['problem'];
						$dte=$row['date'];
						$amnt=$row['amount'];
						$status=$row['status'];
						echo " <tr>
                  <td>INF$id</td>
				  <td>$type</td>
                  <td>$model</td>
                  <td>$des</td>
				  <td>$pblm</td>
                <td>  $name</td>
				<td>$dte</td>
                  <td>
       $amnt</td>
                  <td>  $status</td>      
			
                  
                </tr>";
					}

?>

        
              </tbody>
            </table>
           

          

        

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
