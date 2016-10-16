 <html>
<?php

   $con=mysqli_connect("localhost","infinity","949510","infinity");

   $id=$_POST['id'];
   $amnt=$_POST['amount'];
   $status=$_POST['status'];
       
       if($status!='pending'){
       $sql="UPDATE `customer` SET amount='$amnt' , status='$status' , payment=1 WHERE id=$id";
        $res=mysqli_query($con, $sql); 
  		if($res)
			{
				echo '  <body onLoad="s()">';
			}
       }
       else
       {
            $sql="UPDATE `customer` SET amount='$amnt' , status='$status' WHERE id=$id";
        $res=mysqli_query($con, $sql); 
  		if($res)
			{
				echo '  <body onLoad="s()">';
			}
       }

	
?>
<html>
<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">

 <script>

function s()
{
   var a= "<?php echo $id; ?>";
    var b= "<?php echo $amnt; ?>";

	swal({ title:"WORK INFCR"+a,text:"Amount : "+b+" Rupees", type:"success"},function(){
    window.location.href = 'd_works.php';});
}
</script>
</html>