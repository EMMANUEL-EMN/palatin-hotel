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
            $sql="SELECT * FROM `staff` INNER JOIN `leave` ON `staff`.`email`=`leave`.`email` ORDER BY `leave`.`lid` ASC";
            $runq=$connection->query($sql);
           

        ?>
        <center>
        <h3>Leave Applications</h3>
        <table>
            <thead>
                <th>Profile Image</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Position</th>
                <th>Reason</th>
                <th>Date Appllied</th>
                <th>Action</th>
            </thead>
            <tbody>
              <?php while ( $results=$runq->fetch_assoc()) { $imgurl="../profile/$results[image]";
?>

            <tr>
                  <td><img src="<?php echo $imgurl; ?>" alt="" height="60px" width="60px" id="img"></td>
                  <td><?php echo $results['first name']." ".$results['last name']; ?></td>  
                  <td><?php echo $results['email']; ?></td>  
                  <td><?php echo $results['mobile number']; ?></td>  
                  <td><?php echo $results['position']; ?></td>  
                  <td><?php echo $results['reason']; ?></td>  
                  <td><?php echo $results['date']; ?></td> 
                  <td><a id="anchor" href="">Approve</a></td>
                  <td><a id="anchor" href="">Decline</a></td>
            </tr>

            <?php }  ?>
            </tbody>
        </table>
        </center>



    </div>
</body>
</html>