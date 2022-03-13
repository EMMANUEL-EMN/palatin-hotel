<?php
session_start();
if (!isset($_SESSION['staff'])) {
    header("location: ../main/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/user.css">
    
</head>
<body>
    <?php require_once 'nav.html'; ?>
    <div>
        <center>
                <div class="profile">
                    <?php  
                        require_once '../database/dbconnection.php';
                        $sql="SELECT * FROM `staff` WHERE `email`='$_SESSION[staff]'";
                        $runq=$connection->query($sql);
                        $results=$runq->fetch_assoc();
                        $imgurl="../profile/$results[image]";
                    ?>
                    <img src="<?php echo $imgurl; ?>" alt="" height="300px" width="300px">
                    <table>
                        <tr>
                            <td>Name: </td>
                            <td><?php  echo $results['first name']." ".$results['last name']; ?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><?php  echo $results['email']; ?></td>
                        </tr>
                        <tr>
                            <td>ID Number: </td>
                            <td><?php  echo $results['id number']; ?></td>
                        </tr>
                        <tr>
                            <td>Mobile Number: </td>
                            <td><?php  echo $results['mobile number']; ?></td>
                        </tr>
                        <tr>
                            <td>Job Title: </td>
                            <td><?php  echo $results['position']; ?></td>
                        </tr>
                    </table>
                </div>
        </center>
    </div>
</body>
</html>