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
</body>
</html>