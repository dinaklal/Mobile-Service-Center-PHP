<html>
<script src="../m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../m/dist/sweetalert.css">
<script>

function s()
{
  

	swal({ title:"INFINITY ",text:"Password Changed Successfully", type:"success"},function(){
    window.location.href = 'chpass.php';});
}
</script><?php
session_start();
    $user=$_SESSION['customer'];
    require_once '../db_connect.php';
    $pass=$_POST['pass'];
    $sql="UPDATE `customer` SET password=$pass WHERE id=$user";
    $res=mysqli_query($con, $sql);
    if($res)
    {
         echo '<body onLoad="s()">';
    }
    