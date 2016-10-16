
<?php
	$name=$_POST['name'];
	$cont=$_POST['contact'];
	$plce=$_POST['place'];
	$type=$_POST['type'];
	$model=$_POST['model'];
	$det=$_POST['det'];
	$pblm=$_POST['pblm'];

   
	if($type=="999" )
    {
			echo "<script type=text/javascript>
			alert('DEVICE TYPE NEEDED');
			window.location.href='add_customer.php';
		</script>";

    }
    else 
    {
           	
               require_once('db_connect.php');
          $date=date("Y-m-d"); 
                 $i=0;
            $id="SELECT max(id) as m FROM `customer`";
            $r=mysqli_query($con,$id);
            $row=mysqli_fetch_array($r);
            $i=$i+$row['m'];
            $i++;

	//$qr="INSERT INTO customer ( `name`,`place`,`contact`,`type`, `model`, `description`, `problem`,`date`,`status`,`amount`) VALUES ('$name','$plce','$con','$type','$model','$det','$pblm','$date','pending',0);";
	$sql = "INSERT INTO `infinity`.`customer` (`name`, `contact`, `place`, `type`, `model`, `description`, `problem`, `amount`, `status`, `date`,`password`) VALUES ('$name','$cont','$plce','$type','$model','$det','$pblm',0,'pending','$date','$i');";

		    $res=mysqli_query($con,$sql);
            echo $res;
			if($res)
			{
				echo ' <body onLoad="s()">';
			}
    }
		
?>
<html>
<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function s() {
     var a= "<?php echo $i; ?>";
swal({     title: "INFINITY",   text: "Do You need to print your bill?", 
    type: "success",   showCancelButton: true,   confirmButtonColor: "#AEDEF4",   confirmButtonText: "Yes, Print Bill", cancelButtonColor: "#DD6B55"  ,
    cancelButtonText: "No, Bill!",   closeOnConfirm: false,   closeOnCancel: false } ,
function(isConfirm){   if (isConfirm) {    
        window.open ( 'addc_bill.php?id='+a, '_blank');
    window.location.href = 'add_customer.php';  } 
    else {     swal({ title:"WORK ADDED",text:"INFCR  "+a+"  IS YOUR WORK ID", type:"success"},function(){
    window.location.href = 'add_customer.php';}); 
    }},
 function(){
    });

 
};
function ssss()
{
  

	swal({ title:"WORK ADDED",text:"INFCR"+a+"  IS YOUR WORK ID", type:"success"},function(){
    window.location.href = 'add_customer.php';});
}
</script>