<?php
require_once '../database/dbconnection.php';
function data($var){
    $var=htmlentities($var);
    $var=htmlspecialchars($var);
    $var=trim($var);
    $var=stripslashes($var);
    return $var;
    }
    $reason=data($_POST['reason']);
    $email=data($_POST['email']);
    $date=date('Y m d');
    $status="pending";

    $sql="INSERT INTO `leave` (`reason`,`email`,`status`,`date`)
    VALUES ('$reason','$email','$status','$date')";
    $runq=$connection->query($sql);
    if ($runq) {
        echo "<script>
        alert('successfull submited');
        window.location.assign('./employee.php');
        </script>";
    }else {
        echo "<script>
        alert('Not successfull submited');
        window.location.assign('./employee.php');
        </script>";
    }

?>