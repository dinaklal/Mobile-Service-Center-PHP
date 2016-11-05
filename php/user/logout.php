<html>
<script src="../m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="../m/dist/sweetalert.css">
<script>

function s()
{
  

	swal({ title:"INFINITY ",text:"GOOD BYE VISIT AGAIN", type:"success"},function(){
    window.location.href = 'index.html';});
}
</script><?php

    session_start();
    session_destroy();
   echo ' <body onLoad="s()">';
    ?>
   