<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
<link rel="icon" href="images/download.ico">

    <title>SEARCH HERE</title>

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
           <div class="col-sm-9 col-sm-offset-1 col-md-10 col-md-offset-2 main"> 
       
       <div class="row" >
       <div class="col-lg-6">
         <form class="form-signin" role="form" action="ss.php" method="post">
 <select class="form-control" class="form-control"  name="type" required>

<option >INF</option>
<option>INFCR</option>
</SELECT>
<br>
<input type="text" class="form-control" placeholder="Work ID  ( eg-: 101)" name="id" required>
        </div><div class="col-lg-2">
      <br>  <button class="btn btn-lg btn-primary btn-block" type="submit">SEARCH</button></form>
</div>
</div></div></div><div>
<div class="row">

        <div class="row" >
       <div class="col-lg-6">
         
 </div>
</div>
<div class="row">
<hr class="alert-danger">
        </div>



<!--next search-->


           <div class="col-sm-9 col-sm-offset-1 col-md-10 col-md-offset-2 main"> 
       
       <div class="row" >
       <div class="col-lg-6">
         <form class="form-signin" role="form" action="ds.php" method="post">
<div class="col-lg-6">
<input type="date" class="form-control"  name="from" required></div>
<div class="col-lg-6">
<input type="date" class="form-control"  name="to" required></div>

        </div><div class="col-lg-2">
      <br>  <button class="btn btn-lg btn-primary btn-block" type="submit">SEARCH</button></form>
</div>
</div></div></div><div>
<div class="row">

        <div class="row" >
       <div class="col-lg-6">
         
 </div>
</div>
<div class="row">
<hr class="alert-danger">
        </div>


<!--next search-->


           <div class="col-sm-9 col-sm-offset-1 col-md-10 col-md-offset-2 main"> 
       
       <div class="row" >
       <div class="col-lg-6">
         <form class="form-signin" role="form" action="shop_s.php" method="post">
<div class="col-lg-6">
<select class="form-control" class="form-control"  name="shop" required>
    <option value="9999">ALL SHOPS</option>
     <option value="8888">CUSTOMERS</option>
<?php
	include 'db_connect.php';
	$sq="SELECT * FROM `shops` WHERE 1;";
        $res=mysqli_query($con,$sq);
        While ($row=  mysqli_fetch_array($res))
        {


?>
    <option value="<?php echo $row['id'];?>" ><?php echo $row['name'];?></option>
<?php
        }
    ?>
</SELECT>
</div>
<div class="col-lg-6">
<select class="form-control" class="form-control"  name="status" required>
    <?php
    ?>

<option value="pending" >PENDING</option>
<option value="Completed" >COMPLETED</option>
<option value="Cannot Repaired" >CANNOT REPAIRED</option>
</SELECT>
</div>

        </div><div class="col-lg-2">
      <br>  <button class="btn btn-lg btn-primary btn-block" type="submit">SEARCH</button></form>
</div>
</div></div></div><div>
<div class="row">

        <div class="row" >
       <div class="col-lg-6">
         
 </div>
</div>
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
