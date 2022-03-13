<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/main.js"></script>
</head>
<body>
  <div>
      <?php require_once 'nav.html'; ?>
  </div> 
      <br> 
<div>

<center>
    <form action="book.php" method="POST" enctype="multipart/form-data" id="book">
        <h3>Book A luxurious Room with Us</h3>
        <table>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
        </tr>
        <tr>
            <td><input type="text" name="fname" id="fname" placeholder="James"></td>
            <td><input type="text" name="lname" id="lname" placeholder="Juma"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>Password</td>
        </tr>
        <tr>
            <td><input type="email" name="email" id="email" placeholder="xyz@gmail.com"></td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td>ID Number</td>
            <td>Mobile Number</td>
        </tr>
        <tr>
            <td><input type="idnum" name="idnum" id="idnum"></td>
            <td><input type="number" name="mobnum" id="mobnum"></td>   
        </tr>
        <tr>
            <td>Checkin Date</td>
            <td>Checkout Date</td>
        </tr>
        <tr>
            <td><input type="date" name="checkin" id="checkin"></td>
            <td><input type="date" name="checkout" id="checkout"></td>
        </tr>
        <tr>
            <td>Number of People</td>
            <td>Image</td>
        </tr>
        <tr>
            <td><input type="number" name="num" id="num"></td>
            <td><input type="file" name="image" id="image"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Book" class="btn" name="book"></td>
        </tr>
        </table>
    </form>
</center>
</div>
<br>
  <div class="footer">
      <?php require_once '../footer.php'; ?>
  </div>
</body>
</html>