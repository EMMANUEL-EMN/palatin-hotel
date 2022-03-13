<?php
require_once '../database/dbconnection.php';

$sql="SELECT * FROM `admin` ";
$runq=$connection->query($sql);
$results=$runq->fetch_assoc();
$imgurl="../profile/$results[image]";
?>

<div class="content_wrapper">
    <div id="info">
         <p>Welcome Admin</p>
        <img src="<?php echo $imgurl; ?>" alt="" height="150px" width="160px" id="img">
        <p><?php echo $results['first name']." ".$results['last name']; ?></p>
       
    </div>
    <div>
        <h3><a id="anchor" href="index.php">Dashboard</a></h3>
    </div>
    <div>
        <ul class="nav">
            <li><a id="anchor" href="active.php">Active Staff</a></li>
            <li><a id="anchor" href="passive.php">Passive Staff</a></li>
            <li><a id="anchor" href="booking.php">Bookings</a></li>
            <li><a id="anchor" href="current_clients.php">Current Clients</a></li>
            <li><a id="anchor" href="news.php">News</a></li>
            <li><a id="anchor" href="comment.php">Comments</a></li>
            <li><a id="anchor" href="operation.php">Operation</a></li>
            <li><a id="anchor" href="add.php">Add Admin</a></li>
            <li><a id="anchor" href="leave.php">Leave</a></li>
            <li><a id="anchor" href="../main/logout.php">Logout</a></li>
        </ul>
    </div>
</div>