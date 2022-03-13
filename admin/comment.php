<?php
session_start();
if (!isset($_SESSION['admin'])) {
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
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div>
        <?php require_once 'header.php'; ?>
        <?php include_once 'header.html'; ?>
    </div>

    <div id="width">
        <?php
            require_once '../database/dbconnection.php';
            $sql="SELECT * FROM `comments`";
            $runq=$connection->query($sql);
        ?>
        <br>
        <center>
            <h3>Comments From Users</h3>
            <table>
                <thead>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Comment</th>
                </thead>
                <tbody>
                    <?php while ($results=$runq->fetch_assoc()) { ?>
                            <tr>
                                <td><?php  echo $results['date']; ?></td>
                                <td><?php  echo $results['email']; ?></td>
                                <td><?php  echo $results['comment']; ?></td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </center>
    </div>
</body>
</html>