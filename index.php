<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radisson paradise Hotel</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/main.js"></script>
</head>
<body id="main">
  <?php require_once 'nav.html'; ?>
<br>
<center>
<div class="welcome">
    <br>
    <hr style="width: 20%;border: 1px solid orange;">
    <h1 class="center">The Vocation Haven</h1>
    <p class="center">Raddisson Paradasie Hotel, the only 5 star to call home</p>
    <h2 class="center">Have A Luxury Stay</h2>
</div>
</center>

<center>
    <div class="welcome2">
        <h3 class="center">Check Room Availability</h3>
        <form action=""  style="overflow-x: auto;">
            <table class="center">
                <tr>
                    <td>CheckIn Date</td>
                    <td>CheckOut Date</td>
                    <td>Number of rooms</td>
                    <td>Number of clients</td>
                </tr>
                <tr>
                    <td><input type="date" name="checkin"></td>
                    <td><input type="date" name="checkout"></td>
                    <td><input type="text" name="room"></td>
                    <td><input type="number" name="clients"></td>
                    <td><button class="btn" name="submit">Check</button></td>
                </tr>
            </table>
        </form>
    </div>
</center>
<br>
<div class="footer">
        <?php require_once 'footer.php'; ?> 
</div>
 
</body>
</html>