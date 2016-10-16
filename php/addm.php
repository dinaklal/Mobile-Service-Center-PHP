<?php

					$shop=$_POST['shop'];
					$amount=$_POST['amount'];
					$date=date("Y-m-d"); 
					if($shop==999)
					{
						echo '<body onLoad="w()">';
					}
					$con=mysqli_connect("localhost","infinity","949510","infinity");
					$q="UPDATE `shops` SET total_money_given=total_money_given + $amount WHERE id=$shop";
					$res=mysqli_query($con,$q);
					$q="INSERT INTO `accounts` (id,amount,date) VALUES ('$shop','$amount','$date');";
					$res=mysqli_query($con,$q);
					if($res)
					{
						echo '<body onLoad="s()">';
					}
					
					
?>
<html>
<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function w() {
swal({   title: "INFINITY",   text: "SELECT SHOP NAME !",   type: "warning",  
 showCancelButton: false,   confirmButtonColor: "#DD6B55",   confirmButtonText: "I am sorry!",   closeOnConfirm: false },
 function(){
    window.location.href = 'add_money.php';});

 
};
function s()
{
  var a= "<?php echo $amount; ?>";


	swal({ title:"MONEY ADDED",text:a+" Rupees", type:"success"},function(){
    window.location.href = 'add_money.php';});
}
</script>