<html>
<link rel="icon" href="images/download.ico">

<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function w() {
swal({   title: "SHAME?",   text: "You Enter My Name Incorrectly!",   type: "warning",  
 showCancelButton: false,   confirmButtonColor: "#DD6B55",   confirmButtonText: "I am sorry!",   closeOnConfirm: false },
 function(){
    window.location.href = 'add_shop.php';});

 
};
function s()
{
	swal({ title:"GOOD",text:"Shop added successfully!", type:"success"},function(){
    window.location.href = 'add_shop.php';});
}
</script>
<?php

	$name=$_POST['name'];
	$place=$_POST['place'];
	$cont=$_POST['contact'];
	$creator=$_POST['creator'];
	if($creator=='unni' or $creator=='UNNI')
	{
			require_once('db_connect.php');
			$q="INSERT INTO `shops` (`name`,`place`,`contact`,`balance`,`works_pending`,`total_works_given`) VALUES 							              ('$name','$place','$cont',0,0,0);";
			$res=mysqli_query($con,$q);
			if($res)
			{
				echo ' <body onLoad="s()">';
			}
	}
	else
	{
			echo ' <body onLoad="w()">';
			
				;	
	}
		
?>