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
    <center>
        <div id="lform">
            <form action="comment_script.php" method="POST">
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