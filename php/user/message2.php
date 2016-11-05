<html>
<script src="../m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../m/dist/sweetalert.css">
<script>

function s()
{
  

	swal({ title:"INFINITY ",text:"Your Message Received", type:"success"},function(){
    window.location.href = 'message.php';});
}
</script><?php
session_start();
    $user=$_SESSION['customer'];
    require_once '../db_connect.php';
    $msg=$_POST['msg'];
    $date=date("Y-m-d");
    $sql="INSERT INTO `message` (user,message,date) VALUES ('$user','$msg','$date');";
    $res=mysqli_query($con, $sql);
    if($res)
    {
        echo ' <body onLoad="s()">';
    }
    else
    {
        echo mysqli_error($con);
    }
    