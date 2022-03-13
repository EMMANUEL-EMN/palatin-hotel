<?php
$status="approved";
require_once '../database/dbconnection.php';
$email=$_GET['email'];
$sql="UPDATE `conference` SET `status`='$status' WHERE `email`='$email'";
$runq=$connection->query($sql);
if ($runq) {
    echo "<script>
    alert('succcessfuly approved');
    window.location.assign('./booking.php');
    </script>";
    
}else {
    echo "<script>
    alert('not succcessfuly approved');
    window.location.assign('./booking.php');
    </script>"; 
}

?>