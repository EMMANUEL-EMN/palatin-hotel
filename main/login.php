<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/animation.css">
    <script src="../js/main.js"></script>
</head>
<body>
  <div>
      <?php require_once 'nav.html'; 
      

      ?>
  </div>  

<div class="content_wrapper" style="background-color: rgba(0,0,0,0.8);">
    <img src="../siteimg/bar3.jpg" alt="" height="100px" width="100px" id="limg">
    <form action="server.php" method="POST" enctype="multipart/form-data">
    <br>
        <p>Select Your Role</p>
        <select name="role" id="role">
            <option value="admin">Admin</option>
            <option value="client">Client</option>
            <option value="staff">Staff</option>
        </select>
        <br>
        <p>Email</p>
        <input type="email" name="email" placeholder="xyz@gmail.com" id="email">
        <br>
        <p>Password</p>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <input type="submit" name="login" value="Login" class="btn">
    </form>
</div>

  <div class="footer" style="margin-top: 550px;">
           <?php require_once '../footer.php'; ?>  
  </div>
</body>
</html>