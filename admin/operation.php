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
                    
<center>
    <form action="register.php" method="POST" enctype="multipart/form-data" id="reg">
        <h3>Register Staff</h3>
        <table style="border: none;">
        <tr style="border: none;">
            <td style="border: none;">First Name</td>
            <td style="border: none;">Last Name</td>
        </tr>
        <tr style="border: none;">
            <td style="border: none;"><input type="text" name="fname" id="fname" placeholder="James"></td>
            <td style="border: none;"><input type="text" name="lname" id="lname" placeholder="Juma"></td>
        </tr>
        <tr style="border: none;">
            <td style="border: none;">Email</td>
            <td style="border: none;">Password</td>
        </tr>
        <tr style="border: none;">
            <td style="border: none;"><input type="email" name="email" id="email" placeholder="xyz@gmail.com"></td>
            <td style="border: none;"><input type="password" name="password" id="password"></td>
        </tr>
        <tr style="border: none;">
            <td style="border: none;">ID Number</td>
            <td style="border: none;">Mobile Number</td>
        </tr>
        <tr style="border: none;">
            <td style="border: none;"><input type="idnum" name="idnum" id="idnum"></td>
            <td style="border: none;"><input type="number" name="mobnum" id="mobnum"></td>   
        </tr>
        <tr style="border: none;">
            <td style="border: none;">Date of Birth</td>
            <td style="border: none;">Age</td>
        </tr>
        <tr style="border: none;">
            <td style="border: none;"><input type="date" name="dob" id="dob"></td>
            <td style="border: none;"><input type="number" name="age" id="age"></td>
        </tr>
        <tr style="border: none;">
            <td style="border: none;">Job Title</td>
            <td style="border: none;">Image</td>
        </tr>
        <tr style="border: none;">
            <td style="border: none;"><input type="text" name="jt" id="jt"></td>
            <td style="border: none;"><input type="file" name="image" id="image"></td>
        </tr>
        <tr style="border: none;">
            <td style="border: none;"><input type="submit" value="Register" class="btn" name="book"></td>
        </tr>
        </table>
    </form>
</center>
    </div>
</body>
</html>