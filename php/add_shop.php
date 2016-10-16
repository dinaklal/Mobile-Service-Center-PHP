<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
<link rel="icon" href="images/download.ico">

    <title>ADD SHOP</title>

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

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li ><a href="home.php">OVERVIEW</a></li>
             <li ><a href="add_customer.php">ADD CUSTOMER</a></li>
            <li class="active"><a href="add_shop.php">ADD A SHOP</a></li>
            <li><a href="add_work.php">ADD A WORK</a></li>
            <li><a href="shops.php">SHOPS</a></li>
            <li ><a href="add_money.php">ADD MONEY</a></li>
		
            <li><a href="account.php">SUMMARY</a></li>


          </ul>
       
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">ADD SHOP</h1>

         
          

          <form class="form-signin" role="form" action="add.php" method="post">
   
        
        
        <input type="text" class="form-control" placeholder="Shop name" name="name" required><br>
        <input type="text" class="form-control" placeholder="Place" name="place" required><br>
        <input type="text" class="form-control" placeholder="Contact" name="contact" required><br>
        ANSWER THIS<br>
        <input type="text" class="form-control" placeholder="Creator of this ?" name="creator" required><br>
        
       
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add Shop</button>
      </form>
        
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
