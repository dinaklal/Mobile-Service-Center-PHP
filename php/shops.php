<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="icon" href="images/download.ico">


    <title>INFINITY </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
<script>
$(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>

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
            <li ><a href="add_work.php">ADD A WORK</a></li>
            <li class="active"><a href="shops.php">SHOPS</a></li>
            <li ><a href="add_money.php">ADD MONEY</a></li>
		
            <li><a href="account.php">SUMMARY</a></li>


          </ul>
       
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="background-image:url('images/1.jpg') ;background-repeat: no-repeat; background-position: center;background-size: cover;">
         


<?Php

		            require_once('db_connect.php');
           $q="Select `shops`.id as id,count(*) as m,sum(amount) as am ,total_money_given as tot    from `shops` join `works` on `shops`.id=`works`.shop_id  group by `shops`.id  ; ";
          	$res=mysqli_query($con,$q) ;
           while($row=mysqli_fetch_array($res))
           {
             $id=$row['id'];
             $p=$row['m'];
		  $tot=$row['tot'];
            $balance=$row['am'];
		$balance=$balance-$tot;
            $qu="UPDATE `shops` SET works_pending=$p , balance=$balance WHERE id=$id";
            mysqli_query($con,$qu);
           }
					$q="SELECT * FROM `shops` ;";
					$res=mysqli_query($con,$q);
					$i=0;
					echo "<h2 class='sub-header'>Shops</h2>
          <div class='table-responsive'>
            <table class='table table-striped'>
              <thead>
                <tr>
                  <th>SINO</th>
                  <th>NAME</th>
                  <th>PLACE</th>
                  <th>CONTACT</th>
                  <th>BALANCE</th>
				  <th>TOTAL WORKS</th>
                </tr>
              </thead>
              <tbody>";
					while($row=mysqli_fetch_array($res))
					{
						$i++;
            $id=$row['id'];
						$name=$row['name'];
						$plce=$row['place'];
						$cnt=$row['contact'];
						$bal=$row['balance'];
						$wrks=$row['works_pending'];
						$total=$row['total_works_given'];
						echo "<tr  class='clickable-row' data-href='shop_home.php?id=$id&name=$name'>
                  <td>$i</td>
                <td>  $name</td>
                  <td>$plce</td>
                  <td>$cnt</td>
                  <td>$bal</td>
				  <td>$total</td>
                </tr>";
					}
                                        $sql="SELECT sum(amount) as tot FROM `customer` WHERE payment=0;";
                                        $res=  mysqli_query($con, $sql);
                                        $row=  mysqli_fetch_array($res);
                                        $am=$row['tot'];
                                         $sql="SELECT count(*) as tot FROM `customer` ;";
                                        $res=  mysqli_query($con, $sql);
                                        $row=  mysqli_fetch_array($res);
                                        
                                       $c=$row['tot'];
                                        echo "<tr  class='clickable-row' data-href='infinity.php'>
                  <td>$i</td>
                <td>INFINITY CUSTOMER WORK</td>
                  <td>----------</td>
                  <td>----------</td>
                  <td>$am</td>
				  <td>$c</td>
                </tr>";

?>

               
              </tbody>
            </table>
          </div>
        </div>
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
