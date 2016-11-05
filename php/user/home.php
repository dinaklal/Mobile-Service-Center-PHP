<html>
<script src="../m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../m/dist/sweetalert.css">

    <script>
function w() {
swal({   title: "INFINITY",   text: "SELECT SHOP NAME AND DEVICE TYPE!",   type: "warning",  
 showCancelButton: false,   confirmButtonColor: "#DD6B55",   confirmButtonText: "I am sorry!",   closeOnConfirm: false },
 function(){
    window.location.href = 'login.php';});

 
};
function s()
{
   var a= "<?php echo $i; ?>";

	swal({ title:"WORK ADDED",text:"INF"+a+"  IS YOUR WORK ID", type:"success"},function(){
    window.location.href = 'add_work.php';});
}
</script>
   <html>
<script src="../m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../m/dist/sweetalert.css">
<script>

function s()
{
  

	swal({ title:"INFINITY ",text:"Welcome User", type:"success"},function(){
    window.location.href = 'home.php';});
}
function w()
{
  

	swal({ title:"INFINITY ",text:"User Name Or Password Error", type:"warning"},function(){
    window.location.href = 'login.php';});
}
</script><?php
session_start();
if(isset($_SESSION['customer']))
{
     $id=$_SESSION['customer'];
    require_once '../db_connect.php';
    $sql="SELECT * FROM `customer` WHERE id=$id ;";
    $res=  mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);

			
			
			$id="INFCR".$id;
			$name=$row['name'];
                        $cont=$row['contact'];
                        $plce=$row['place'];
                        $type=$row['type'];
                        
                        $pay=$row['payment'];
			$model=$row['model'];
			$des=$row['description'];
			$pblm=$row['problem'];
			$dte=$row['date'];
			$amnt=$row['amount'];
			$status=$row['status'];  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $name;?> STATUS</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
        <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">INFINITY USER[<?php echo $name;?>]</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                  <li class="active"><a href="#">Home</a></li>
                  
                  <li ><a href="chpass.php">Change Password</a></li>
            
                  <li ><a href="message.php">Message Admin</a></li>
                 <li ><a href="logout.php">Logout</a></li>
                
          
               
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


   
 <div class="container">
          <?php
        

       
			echo " <b><br><br><br><br><div class='table-responsive'>
            <table class='table table-bordered'>
			
			<tr><td>ID</td><td>$id</td></tr>
                            <tr><td>NAME</td><td>$name</td></tr>
                             <tr><td>CONTACT</td><td>$cont</td></tr>
                             <tr><td>PLACE</td><td>$plce</td></tr>
                             <tr><td>TYPE</td><td>$type</td></tr>
			<tr><td>MODEL</td><td>$model</td></tr>
			<tr><td>DESCRIPTION</td><td>$des</td></tr> 
			<tr><td>PROBLEM</td><td>$pblm</td></tr>
			<tr><td>AMOUNT</td><td>$amnt</td></tr>
			<tr><td>STATUS</td><td>$status</td>
</div></div></table><br><br>

        ";

			
   ?>




      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php
}
else
{
 
     echo '<body onLoad="w()">';
}
?>