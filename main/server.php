<?php
session_start();
require_once '../database/dbconnection.php';
function data($var){
$var=htmlentities($var);
$var=htmlspecialchars($var);
$var=trim($var);
$var=stripslashes($var);
return $var;
}

if (isset($_POST['login'])) {

$position=data($_POST['role']);
$email=data($_POST['email']);
$password=data($_POST['password']);

if ($position=="admin") {
    $sql="SELECT * FROM `admin`";
    $runq=$connection->query($sql);
    
    while ($results=$runq->fetch_assoc()) {
        if ($results['email']===$email && $results['password']===$password) {
            $_SESSION['admin']=$email;
            header("location: ../admin/index.php");
        }else {
            echo "<script>
            alert('invalid login credential, try again');
            </script>";
            echo "<script>
            window.location.assign('./login.php');
            </script>";
        }
    }
}

if ($position=="client") {
    $sql="SELECT * FROM `conference`";
    $runq=$connection->query($sql);
    while ($results=$runq->fetch_assoc()) {
        if ($results['email']===$email && $results['password']===$password) {
            $_SESSION['user']=$email;
            header("location: ../user/customer.php");
        }else {
            echo "<script>
            alert('invalid login credential, try again');
            </script>";
            echo "<script>
            window.location.assign('./login.php');
            </script>";
        }
    }
}


if ($position=="staff") {
    $sql="SELECT * FROM `staff`";
    $runq=$connection->query($sql);
    
    while ($results=$runq->fetch_assoc()) {
        if ($results['email']===$email && $results['password']===$password) {
            $_SESSION['staff']=$email;
            header("location: ../employee/employee.php");
        }else {
            echo "<script>
            alert('invalid login credential, try again');
            </script>";
            echo "<script>
            window.location.assign('./login.php');
            </script>";
        }
    }
}

}





?>