<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>ADD WORK</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <link rel="icon" href="images/download.ico">


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
            <li ><a href="add_shop.php">ADD A SHOP</a></li>
            <li class="active"><a href="add_work.php">ADD A WORK</a></li>
            <li><a href="shops.php">SHOPS</a></li>
            <li ><a href="add_money.php">ADD MONEY</a></li>
		
            <li><a href="account.php">SUMMARY</a></li>




          </ul>
       
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">ADD WORK</h1>

         
          

          <form class="form-signin" role="form" action="addw.php" method="post">
   
        <div class="form-group">
 
     <select class="form-control" class="form-control" id="sel1" name="shop" required>
      <option value="999">Shop Name
    </option  >
     <?Php

		            $con=mysqli_connect("localhost","infinity","949510","infinity");
					$q="SELECT * FROM `shops` ;";
					$res=mysqli_query($con,$q);
					$i=0;
				
					while($row=mysqli_fetch_array($res))
					{
						$i++;
						$name=$row['name'];
					  $id=$row['id'];
						echo "
    <option value='$id'>$name
    </option >";
					}
?>
     
   
  </select>
</div>
        <div class="form-group">
        <select class="form-control" class="form-control" name="type" required >
             <option value="999">Device Type
                          </option >
                           <option>Computers
                          </option value="computer" >
                           <option>Mobiles
                          </option value="mobile" >
                           <option>Others
                          </option value="other" >
          </select></div>
        <input type="text" class="form-control" placeholder="Model" name="model" required><br>
         <input type="text" class="form-control" placeholder="Details (IMEI last 4 digits / Other Details)" name="det" required><br>
        <textarea rows="3" cols="50" class="form-control" placeholder="Status of Device............" name="pblm" required></textarea><br>
        
        
       
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add Work</button>
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
