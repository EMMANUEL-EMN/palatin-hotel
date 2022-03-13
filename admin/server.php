<?php
require_once '../database/dbconnection.php';
function data($var){
$var=htmlentities($var);
$var=htmlspecialchars($var);
$var=trim($var);
$var=stripslashes($var);
return $var;
}

$topic=data($_POST['topic']);
$image=$_FILES['image']['name'];
$news=data($_POST['news']);
$date=date('d M Y H:i:s');


//image isertion

$target_dir="../profile/";
$file_path=$target_dir.basename($image);
move_uploaded_file($_FILES['image']['tmp_name'],$file_path);

$sql="INSERT INTO `news` (`nid`,`message`,`date`,`topic`,`image`) 
VALUES (NULL,'$news','$date','$topic','$image')";
$runq=$connection->query($sql);

if ($runq) {
    echo "<script>
    alert('successfuly send.');
    </script>";
    echo "<script>
    window.location.assign('./news.php');
    </script>";
}else {
    echo "<script>
    alert('Not successfuly send.');
    </script>";
    echo "<script>
    window.location.assign('./news.php');
    </script>";
}
?>