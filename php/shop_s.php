<?php


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
<link rel="icon" href="images/download.ico">

    <title>SEARCH RESULTS</title>

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
          <ul class="nav navbar-nav navbar-right">  <li><a class= "active" href="home.php">Dashboard</a></li>
            <li ><a href="worker.php">Worker</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>

          </ul>
          
        </div>
      </div>
    </div>

<br>
       
        <a href='worker.php'>  <button class="btn btn-lg btn-primary btn-block-3" type="submit">WORKER HOME</button></a><br><br>
          <a href='home.php'><button class="btn btn-lg btn-success btn-block-3 " type="submit">&nbsp;&nbsp;&nbsp;DASHBOARD&nbsp;</button></a>
<div class="row">
           <div class="col-sm-5 col-sm-offset-1 col-md-2 col-md-offset-1 main"> 
               <div class="row">
           <div class="col-sm-5 col-sm-offset-1 col-md-1 col-md-offset-1 main"> <?php
	include 'db_connect.php';
	$shop=$_POST['shop'];
        
	$status=$_POST['status'];
        if($shop==8888)
        {
            
            $q="SELECT * From `customer` WHERE status='$status'";
            $res=mysqli_query($con,$q);
            echo " <b><form class='form-signin' role='form' action='work_submit_d.php' method='post'><div class='table-responsive'>
                <table class='table table-bordered' >
                            <thead><tr><th  >ID</th><th >CUSTOMER&nbspNAME</th><th>CONTACT</th><th>PLACE</th><th>TYPE</th><th>MODEL</th><th>PROBLEM&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th >DESCRIPTION</th><th>AMOUNT&nbsp&nbsp&nbsp&nbsp</th><th>STATUS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th></th></tr></thead>";
            while($row=mysqli_fetch_array($res))
            {
                       $id=$row['id'];
			$name=$row['name'];
			$cont=$row['contact'];
			$plce=$row['place'];
			$type=$row['type'];
			$model=$row['model'];
			$des=$row['description'];
			$pblm=$row['problem'];
			$dte=$row['date'];
			$amnt=$row['amount'];
			$status=$row['status'];
		echo "
			<tr><td>INFCR$id</td><td>$name</td><td>$cont</td><td>$plce</td><td>$type</td>
			<td>$model</td>
			<td  class='col-md-1'>$des</td> 
			<td>$pblm</td>
			<td><input type='hidden' name=id value='$id' ><input type='text' class='form-control' placeholder='$amnt' name='amount' value='$amnt' ></td>
			<td>   <select class='form-control' class='form-control' name='status' required > <option >$status
                        </option  >";
                            if($status=='pending')
                            {
                                      echo " <option >Completed
                        </option  >
                            <option >Cannot Repaired
                        </option  >";
                            }
                            else if($status=='Completed')
                            {
                                    echo " <option >pending
                        </option  >
                            <option >Cannot Repaired
                        </option  >";

                                }
                            else
                            {
                                    echo " <option >Completed
                        </option  >";

                        }
                          echo "
                        </select>
                </td>    <td>

                         <button class='btn btn-lg btn-primary btn-block' type='submit'>OK</button></td></tr>
                ";



	}
        }
 elseif ($shop==9999)
     
     
     {
 
    

?>
			
<div class="row">
           <div class="col-sm-5 col-sm-offset-1 col-md-1 col-md-offset-1 main">
           
           
            <?php
	include 'db_connect.php';
	
	$q="SELECT * From `shops` join `works` on `shops`.id=`works`.shop_id WHERE 	`works`.status='$status';";
	$res=mysqli_query($con,$q);
	echo " <b><form class='form-signin' role='form' action='work_submit_d.php' method='post'><div class='table-responsive'>
            <table class='table table-bordered' >
			<thead><tr><th>SHOP	&nbspNAME</th><th>CONTACT</th><th>PLACE</th><th>TYPE</th><th>MODEL</th><th>PROBLEM&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>DESCRIPTION&nbsp&nbsp&nbsp</th><th>AMOUNT&nbsp&nbsp&nbsp&nbsp</th><th>STATUS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th></th></tr></thead>";
	while($row=mysqli_fetch_array($res))
	{
	           $id=$row['id'];
			$name=$row['name'];
			$cont=$row['contact'];
			$plce=$row['place'];
			$type=$row['type'];
			$model=$row['model'];
			$des=$row['description'];
			$pblm=$row['problem'];
			$dte=$row['date'];
			$amnt=$row['amount'];
			$status=$row['status'];
		echo "
			<tr><td>$name</td><td>$cont</td><td>$plce</td><td>$type</td>
			<td>$model</td>
			<td>$des</td> 
			<td>$pblm</td>
			<td><input type='hidden' name=id value='$id' ><input type='text' class='form-control' placeholder='$amnt' name='amount' value='$amnt' ></td>
			<td>   <select class='form-control' class='form-control' name='status' required > <option >$status
    </option  >";
	if($status=='pending')
	{
		  echo " <option >Completed
    </option  >
	<option >Cannot Repaired
    </option  >";
	}
	else if($status=='Completed')
	{
		echo " <option >pending
    </option  >
	<option >Cannot Repaired
    </option  >";

	}
	else
	{
		echo " <option >Completed
    </option  >";

	}
	  echo "
	</select>
</td>    <td>

         <button class='btn btn-lg btn-primary btn-block' type='submit'>OK</button></td></tr>
";

			

	}
     }
     else
     {
         
         
         
                

?>
			
<div class="row">
           <div class="col-sm-5 col-sm-offset-1 col-md-2 col-md-offset-1 main">
           
           
            <?php
	include 'db_connect.php';
	
	$q="SELECT * From `shops` join `works` on `shops`.id=`works`.shop_id WHERE 	`works`.status='$status' and `shops`.id='$shop'  ;";
	$res=mysqli_query($con,$q);
	echo " <b><form class='form-signin' role='form' action='work_submit_d.php' method='post'><div class='table-responsive'>
            <table class='table table-bordered' style='margin-left:-10%;'>
			<thead><tr><th>SHOP	&nbspNAME</th><th>CONTACT</th><th>PLACE</th><th>TYPE</th><th>MODEL</th><th>PROBLEM&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th>DESCRIPTION&nbsp&nbsp&nbsp</th><th>AMOUNT&nbsp&nbsp&nbsp&nbsp</th><th>STATUS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><th></th></tr></thead>";
	while($row=mysqli_fetch_array($res))
	{
	           $id=$row['id'];
			$name=$row['name'];
			$cont=$row['contact'];
			$plce=$row['place'];
			$type=$row['type'];
			$model=$row['model'];
			$des=$row['description'];
			$pblm=$row['problem'];
			$dte=$row['date'];
			$amnt=$row['amount'];
			$status=$row['status'];
		echo "
			<tr><td>$name</td><td>$cont</td><td>$plce</td><td>$type</td>
			<td>$model</td>
			<td>$des</td> 
			<td>$pblm</td>
			<td><input type='hidden' name=id value='$id' ><input type='text' class='form-control' placeholder='$amnt' name='amount' value='$amnt' ></td>
			<td>   <select class='form-control' class='form-control' name='status' required > <option >$status
    </option  >";
	if($status=='pending')
	{
		  echo " <option >Completed
    </option  >
	<option >Cannot Repaired
    </option  >";
	}
	else if($status=='Completed')
	{
		echo " <option >pending
    </option  >
	<option >Cannot Repaired
    </option  >";

	}
	else
	{
		echo " <option >Completed
    </option  >";

	}
	  echo "
	</select>
</td>    <td>

         <button class='btn btn-lg btn-primary btn-block' type='submit'>OK</button></td></tr>
";

			

     }
     }
	?>


       
       <div class="row" >
     
        
       

       
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

