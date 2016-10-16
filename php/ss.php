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
           <div class="col-sm-9 col-sm-offset-1 col-md-10 col-md-offset-2 main"> <?php


	include 'db_connect.php';
	$id=$_POST['id'];
	$ty=$_POST['type'];

	if($ty=='INF')
	{
			$result = mysqli_query($con, "SELECT * FROM `works` JOIN `shops` ON `works`.shop_id=`shops`.id WHERE `works`.id='$id';");
			
			$row=mysqli_fetch_array($result);
			
			$shop=$row['name'];
			$type=$row['type'];
			$model=$row['model'];
			$des=$row['description'];
			$pblm=$row['problem'];
			$dte=$row['date'];
			$amnt=$row['amount'];
			$status=$row['status'];
			echo " <b><form class='form-signin' role='form' action='work_submit.php' method='post'><div class='table-responsive'>
            <table class='table table-bordered'>
			<tr><td>SHOP NAME</td><td>$shop</td></tr>
			<tr><td>TYPE</td><td>$type</td></tr>
			<tr><td>MODEL</td><td>$model</td></tr>
			<tr><td>DESCRIPTION</td><td>$des</td></tr> 
			<tr><td>PROBLEM</td><td>$pblm</td></tr>
			<tr><td>AMOUNT</td><td><input type='hidden' name=id value='$id' ><input type='text' class='form-control' placeholder='$amnt' name='amount' value='$amnt' ></td></tr>
			<tr><td>STATUS</td><td>   <select class='form-control' class='form-control' name='status' required > <option >$status
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
</td>    </tr><tr><td>

         <button class='btn btn-lg btn-primary btn-block' type='submit'>OK</button></td>
";

			
	}
	else
	{
		$result = mysqli_query($con, "SELECT * FROM `customer` WHERE id='$id';");
			
			$row=mysqli_fetch_array($result);
			
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
			echo " <b><form class='form-signin' role='form' action='work_submit_d.php' method='post'><div class='table-responsive'>
            <table class='table table-bordered'>
			<tr><td>CUSTOMER NAME</td><td>$name</td></tr>
			<tr><td>CONTACT</td><td>$cont</td></tr>
			<tr><td>PLACE</td><td>$plce</td></tr>

			<tr><td>TYPE</td><td>$type</td></tr>
			<tr><td>MODEL</td><td>$model</td></tr>
			<tr><td>DESCRIPTION</td><td>$des</td></tr> 
			<tr><td>PROBLEM</td><td>$pblm</td></tr>
			<tr><td>AMOUNT</td><td><input type='hidden' name=id value='$id' ><input type='text' class='form-control' placeholder='$amnt' name='amount' value='$amnt' ></td></tr>
			<tr><td>STATUS</td><td>   <select class='form-control' class='form-control' name='status' required > <option >$status
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
</td>    </tr><tr><td>

         <button class='btn btn-lg btn-primary btn-block' type='submit'>OK</button></td>
";

			

	}
/*	$result = mysqli_query($con, "SELECT * FROM members WHERE ('$pasyear' = '' OR pasyear = '$pasyear') "
					. "AND ('$branch' = '' OR branch = '$branch')"
					. "AND ('$name' = '' OR name LIKE '%$name%')"
					. "AND ('$dist' = '' OR district = '$dist')"
					. "AND ('$phno' = '' OR phno = '$phno')"
					. "AND ('$email' = '' OR email = '$email')"
					. "AND ('$uid' = '' OR uid = '$uid')");
					*/

?>

       
       <div class="row" >
       <div class="col-lg-6">
         
</div>
</div></div>
<div class="row">
<hr class="alert-danger">
        </div>
        
        
       

       
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
