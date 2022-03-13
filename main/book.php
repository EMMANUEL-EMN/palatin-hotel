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

if (isset($_POST['book'])) {
    
$fname=data($_POST['fname']);
$lname=data($_POST['lname']);
$email=data($_POST['email']);
$password=data($_POST['password']);
$idnum=data($_POST['idnum']);
$mobnum=data($_POST['mobnum']);
$checkin=data($_POST['checkin']);
$checkout=data($_POST['checkout']);
$num=data($_POST['num']);
$image=$_FILES['image']['name'];

//image isertion

$target_dir="../profile/";
$file_path=$target_dir.basename($image);
move_uploaded_file($_FILES['image']['tmp_name'],$file_path);

$sql="INSERT INTO `conference` (`bid`,`first name`,`last name`,`email`,`password`,`id number`,`mobile number`,`checkin`,`checkout`,`number of people`,`status`,`image`) VALUES (NULL,'$fname','$lname','$email','$password',
'$idnum','$mobnum','$checkin','$checkout','$num','pending','$image')";
$runq=$connection->query($sql);

if ($runq) {
    echo "<script>
    alert('successfuly booked.');
    </script>";
    echo "<script>
    window.location.assign('./booking.php');
    </script>";
}else {
    echo "<script>
    alert('Not successfuly booked.');
    </script>";
    echo "<script>
    window.location.assign('./booking.php');
    </script>";
    
}

}