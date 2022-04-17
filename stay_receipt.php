<!DOCTYPE html>
<html>
<style>
    .container {
  position: absolute;
  left:30%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: #e8e272;
}

/* Full-width input fields */
div {
  width: 90%;
  padding: 15px;
  margin: 5px 0 10px 0;
  border: none;
  background: #f8ffc3;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
form .container{
    background-color:#ba817d;
}
</style>
<?php

include 'connect.php';

$sno=$_GET['sno'];

$sql="SELECT * FROM `stay` WHERE `sno`=$sno;";
$res1=mysqli_query($conn,$sql);
$row1=mysqli_fetch_assoc($res1);
$snum=$row1['sno'];
$dname=$row1['devoteename'];
$Phone=$row1['phone'];
$address=$row1['address'];
$cin=$row1['checkin'];
$cout=$row1['checkout'];

?>

<body>
<h2>Receipt Generated!</h2>
<div class="container">
  <form action="" class="contain">
  
  <h3>Stay receipt</h3>

    <div><b>Stay No. :</b><?php echo $snum; ?></div>
    <div><b>Devotee name :</b><?php echo $dname; ?></div>
	<div><b>Phone no. :</b><?php echo "$Phone"; ?></div>
    <div><b>Address :</b><?php echo "$address"; ?></div>
    <div><b>Check-in :</b><?php echo "$cin"; ?></div>
    <div><b>Check-out :</b><?php echo "$cout"; ?></div>
    <button type="button" onclick="printFunction()" class="btn">Print</button>

  </form>
</div>
</body>
<script>
    function printFunction() { 
        window.print(); 
      }
</script>
</html>
