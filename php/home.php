<?php
session_start();
if(isset($_SESSION['user']))
{
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
            <li class="active"><a href="#">OVERVIEW</a></li>
             <li><a href="add_customer.php">ADD CUSTOMER</a></li>
            <li><a href="add_shop.php">ADD A SHOP</a></li>
            <li><a href="add_work.php">ADD A WORK</a></li>
            <li><a href="shops.php">SHOPS</a></li>
            <li><a href="add_money.php">ADD MONEY</a></li>
		
            <li><a href="account.php">SUMMARY</a></li>

          </ul>
       
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="background-image:url('images/1.jpg') ;background-repeat: no-repeat; background-position: center;background-size: cover;">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
               <a href="add_work.php" > <button type="button" class="btn btn-lg btn-success">ADD WORKS</button></a>
            
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
             <a href="shops.php" > <button type="button" class="btn btn-lg btn-success">VIEW SHOPS</button></a>
             
            </div>
            
            <div class="col-xs-6 col-sm-3 placeholder">
              
             <a href="add_money.php" > <button type="button" class="btn btn-lg btn-success">ADD MONEY</button></a>
              
            </div>
           
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="add_shop.php"> <button type="button" class="btn btn-lg btn-success">ADD SHOPS</button></a>
              
              
            </div>
            
            <div class="col-xs-6 col-sm-3 placeholder">
                <a href="add_customer.php"> <button type="button" class="btn btn-lg btn-success">&nbsp; CUSTOMER</button></a>
              
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
                <a href="search.php"> <button type="button" class="btn btn-lg btn-success">&nbsp;&nbsp;&nbsp;SEARCH&nbsp;&nbsp;&nbsp;</button></a>
              
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
                <a href="worker.php"> <button type="button" class="btn btn-lg btn-success">&nbsp;&nbsp;&nbsp;WORKS&nbsp;&nbsp;&nbsp;</button></a>
              
              
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
                <a href="account.php"> <button type="button" class="btn btn-lg btn-success">SUMMARY&nbsp;&nbsp;</button></a>
              
              
            </div>
          </div>
<br>
          
      <a href="worker.php">  <button class="btn btn-lg btn-primary btn-block" type="submit">WORKER'S  AREA</button></a>
      <br><center> <a href="message.php">  <img   src="images/m.png" ></a>
          <a href="message.php"><h2>INBOX</h2></a></center>

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
