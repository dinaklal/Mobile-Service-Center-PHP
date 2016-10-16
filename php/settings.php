<html>
<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function w() {
swal({   title: "INFINITY",   text: "OH.. SORRY THIS SECTION WILL BE COMPLETE IN NEXT UPDATE!",   type: "warning",  
 showCancelButton: false,   confirmButtonColor: "#DD6B55",   confirmButtonText: "I am sorry!",   closeOnConfirm: false },
 function(){
    window.location.href = 'home.php';});

 
};

</script>
<?php
if(1)
{
echo '<body onLoad="w()">';
}
?>
