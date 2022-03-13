<?php
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
$dob=data($_POST['dob']);
$age=data($_POST['age']);
$jt=data($_POST['jt']);
$image=$_FILES['image']['name'];

//image isertion

$target_dir="../profile/";
$file_path=$target_dir.basename($image);
move_uploaded_file($_FILES['image']['tmp_name'],$file_path);

$sql="INSERT INTO `staff` (`sid`,`first name`,`last name`,`email`,`password`,`id number`,`mobile number`,`age`,`dob`,`position`,`status`,`image`) VALUES (NULL,'$fname','$lname','$email','$password',
'$idnum','$mobnum','$age','$dob','$jt','active','$image')";
$runq=$connection->query($sql);

if ($runq) {
    echo "<script>
    alert('successfuly registered.');
    </script>";
    echo "<script>
    window.location.assign('./operation.php');
    </script>";
}else {
    echo "<script>
    alert('Not successfuly registered.');
    </script>";
    echo "<script>
   // window.location.assign('./operation.php');
    </script>";
    echo $connection->error;
}

}



if (isset($_POST['staff'])) {
    
    $fname=data($_POST['fname']);
    $lname=data($_POST['lname']);
    $email=data($_POST['email']);
    $password=data($_POST['password']);
    $idnum=data($_POST['idnum']);
    $mobnum=data($_POST['mobnum']);
    $jt=data($_POST['jt']);
    $image=$_FILES['image']['name'];
    
    //image isertion
    
    $target_dir="../profile/";
    $file_path=$target_dir.basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'],$file_path);
    
    $sql="INSERT INTO `admin` (`aid`,`first name`,`last name`,`email`,
    `password`,`id number`,`mobile number`,`position`,`image`) 
    VALUES (NULL,'$fname','$lname','$email','$password',
    '$idnum','$mobnum','$jt','$image')";
    $runq=$connection->query($sql);
    
    if ($runq) {
        echo "<script>
        alert('successfuly registered.');
        </script>";
        echo "<script>
        window.location.assign('./add.php');
        </script>";
    }else {
        echo "<script>
        alert('Not successfuly registered.');
        </script>";
        echo "<script>
       window.location.assign('./add.php');
        </script>";
      //   echo $connection->error;
    }
    
    }
    ?>