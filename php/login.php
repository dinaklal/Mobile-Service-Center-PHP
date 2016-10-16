<html>
<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function w() {
swal({   title: "INFINITY SHOP MANAGER",   text: "PASSWORD INCORRECT!",   type: "warning",  
 showCancelButton: false,   confirmButtonColor: "#DD6B55",   confirmButtonText: "I am sorry!",   closeOnConfirm: false },
 function(){
    window.location.href = 'index.php';});

 
};
</script>
<?php
session_start();
$pass=$_POST['passwd'];
$con=mysqli_connect("localhost","infinity","949510","infinity");
$q="SELECT * FROM user WHERE username='admin' and password=$pass";
$res=mysqli_query($con,$q);
if($res)
{
        $_SESSION['user']='admin';
	header("Location:home.php");
}
else
{

	echo ' <body onLoad="w()">';
}
?>