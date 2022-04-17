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

$dno=$_GET['dno'];

$sql="SELECT * FROM `donation` WHERE `dno`=$dno;";
$res1=mysqli_query($conn,$sql);
$row1=mysqli_fetch_assoc($res1);
$dnum=$row1['dno'];
$dname=$row1['donorname'];
$Phone=$row1['phone'];
$amount=$row1['amount'];

?>

<body>
<h2>Receipt Generated!</h2>
<div class="container">
  <form action="" class="contain">
  
  <h3>Donation receipt</h3>

    <div><b>Donation No. :</b><?php echo $dnum; ?></div>
    <div><b>Donor name :</b><?php echo $dname; ?></div>
    <div><b>Date/Time :</b><?php echo date("d-m-Y"); ?></div>
	<div><b>Phone no. :</b><?php echo "$Phone"; ?></div>
    <div><b>Total Amount :</b><?php echo "$amount"; ?></div>
    <b>Thank you for your contribution</b><br><br>
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
