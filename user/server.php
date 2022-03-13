
<?php
require_once '../database/dbconnection.php';
function data($var){
    $var=htmlentities($var);
    $var=htmlspecialchars($var);
    $var=trim($var);
    $var=stripslashes($var);
    return $var;
    }
    $comment=data($_POST['comment']);
    $email=data($_POST['email']);
    $date=date('Y m d');
    

    $sql="INSERT INTO `comments` (`comment`,`email`,`date`)
    VALUES ('$comment','$email','$date')";
    $runq=$connection->query($sql);
    if ($runq) {
        echo "<script>
        alert('successfull submited');
        window.location.assign('./customer.php');
        </script>";
    }else {
        echo "<script>
        alert('Not successfull submited');
       // window.location.assign('./customer.php');
        </script>";
        echo $connection->error;
    }

?>