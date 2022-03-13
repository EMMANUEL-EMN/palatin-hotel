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
    <br>
        <center>
            <form action="server.php" method="POST" enctype="multipart/form-data" >
            <h3>Create Website News</h3>
                <table>
                    <tr>
                        <td>Topic</td>
                        <td>Image</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="topic" id="topic" required></td>
                        <td><input type="file" name="image" id="image" required></td>
                    </tr>
                    <tr>
                        <td>News</td>
                    </tr>
                    <tr>
                        <td><textarea name="news" id="news" cols="60" rows="10" placeholder="Type here"></textarea></td>
                        <td><button class="nbtn">Send</button></td>
                    </tr>
                </table>
            </form>
        </center>
    </div>
</body>
</html>