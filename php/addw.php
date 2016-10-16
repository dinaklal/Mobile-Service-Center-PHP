
<?php
    $shop=$_POST['shop'];
	$type=$_POST['type'];
	$model=$_POST['model'];
	$det=$_POST['det'];
	$pblm=$_POST['pblm'];

   
	if($type=="999" || $shop=="999")
    {
			echo "<script type=text/javascript>
			alert('DEVICE TYPE AND SHOP NAME NEEDED');
			window.location.href='add_work.php';
		</script>";

    }
    else 
    {
           	
               $con=mysqli_connect("localhost","infinity","949510","infinity");
               $i=0;
            $id="SELECT max(id) as m FROM `works`";
            $r=mysqli_query($con,$id);
            $row=mysqli_fetch_array($r);
            $i=$i+$row['m'];
            $i++;
            
          $date=date("Y-m-d"); 
          echo $date;
          echo $type.$model.$det.$pblm.$shop;
          
			$q="INSERT INTO works ( `type`, `model`, `description`, `problem`, `shop_id`, `date`,`status`,`amount`) VALUES ('$type','$model','$det','$pblm','$shop','$date','pending',0);";

		    mysqli_query($con,$q);
            $q="UPDATE `shops` SET `total_works_given`=`total_works_given`+1 WHERE `id`=$shop";
             mysqli_query($con,$q);
            $q="UPDATE `shops` SET `works_pending`=`works_pending`+1 WHERE `id`=$shop";
            
           	$res= mysqli_query($con,$q);
               
			if($res)
			{
				echo ' <body onLoad="s()">';
			}
    }
		
?>
<html>
<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function w() {
swal({   title: "INFINITY",   text: "SELECT SHOP NAME AND DEVICE TYPE!",   type: "warning",  
 showCancelButton: false,   confirmButtonColor: "#DD6B55",   confirmButtonText: "I am sorry!",   closeOnConfirm: false },
 function(){
    window.location.href = 'add_work.php';});

 
};
function s()
{
   var a= "<?php echo $i; ?>";

	swal({ title:"WORK ADDED",text:"INF"+a+"  IS YOUR WORK ID", type:"success"},function(){
    window.location.href = 'add_work.php';});
}
</script>