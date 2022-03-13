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
      <?php require_once 'nav.html'; ?>
  </div>  

<div id="">
    <?php
        require_once '../database/dbconnection.php';
        $query="SELECT * FROM `news`";
        $runq=$connection->query($query);
    ?>
    <div class="flexBox">
        <?php while ($resulsts=$runq->fetch_assoc()) { $imgurl="../profile/$resulsts[image]"; ?>
            <div class="new">
                <h3><?php echo $resulsts['topic']; ?></h3>
                <img src=" <?php echo $imgurl;  ?>" alt="" height="250px" width="300px">
                <p> <?php  echo $resulsts['message']; ?></p>
            </div>
        <?php  } ?>
    </div>
</div>

  <div class="footer">
      <?php require_once '../footer.php'; ?>
  </div>
</body>
</html>