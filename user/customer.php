<?php
session_start();
if (!isset($_SESSION['user'])) {
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
<div>
    <ul class="nav">
        <li><img src="../siteimg/logo.png" alt=""></li>
        <li><a id="anchor"  href="../main/logout.php">Logout</a></li>
    </ul>
</div>
    <div>
        <center>
                <div class="profile">
                    <?php  
                        require_once '../database/dbconnection.php';
                        $sql="SELECT * FROM `conference` WHERE `email`='$_SESSION[user]'";
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
                            <td>Checked In Date: </td>
                            <td><?php  echo $results['checkin']; ?></td>
                        </tr>
                    </table>
                </div>
        </center>
    </div>
    <center>
        <div id="lform">
            <form action="server.php" method="POST">
                <h3>Comment our services</h3>
                <table>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td>Comment:</td>
                        <td><textarea name="comment" id="comment" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td><button name="comment" class="btn">Submit</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>