<?php
$status="declined";
require_once '../database/dbconnection.php';
$email=$_GET['email'];
$sql="UPDATE `conference` SET `status`='$status' WHERE `email`='$email'";
$runq=$connection->query($sql);
if ($runq) {
    echo "<script>
    alert('succcessfuly declined');
    window.location.assign('./booking.php');
    </script>";
    
}else {
    echo "<script>
    alert('not succcessfuly declined');
    window.location.assign('./booking.php');
    </script>"; 
}

?>