<html>
<script src="../m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../m/dist/sweetalert.css">

    <script>
function w() {
swal({   title: "INFINITY",   text: "SELECT SHOP NAME AND DEVICE TYPE!",   type: "warning",  
 showCancelButton: false,   confirmButtonColor: "#DD6B55",   confirmButtonText: "I am sorry!",   closeOnConfirm: false },
 function(){
    window.location.href = 'login.php';});

 
};
function s()
{
   var a= "<?php echo $i; ?>";

	swal({ title:"WORK ADDED",text:"INF"+a+"  IS YOUR WORK ID", type:"success"},function(){
    window.location.href = 'add_work.php';});
}
</script>
   <html>
<script src="../m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../m/dist/sweetalert.css">
<script>

function s()
{
  

	swal({ title:"INFINITY ",text:"Welcome User", type:"success"},function(){
    window.location.href = 'home.php';});
}
function w()
{
  

	swal({ title:"INFINITY ",text:"User Name Or Password Error", type:"warning"},function(){
    window.location.href = 'login.php';});
}
</script> <?php
        session_start();
	$user=$_POST['user'];
	$pass=$_POST['password'];

           	
        require_once('../db_connect.php');
        $t= substr($user,0,5);
       $user=substr($user,5);
      
        if($t=="INFCR" || $t=="infcr" || $t=="Infcr")
        {       
            $sql="SELECT * FROM `customer` WHERE id=$user and password=$pass ;";
            $res=  mysqli_query($con, $sql);
            $row= mysqli_fetch_array($res);
            if($row)
            {   
                $_SESSION['customer']=$user;
               
               echo '<body onLoad="s()">';
                
            }
            else
            {
                echo '<body onLoad="w()">';
            }
            
        }
        else
        {
        
          echo '<body onLoad="w()">';
          
        }
        
    
		
?>

