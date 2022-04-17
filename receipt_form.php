<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/receipt_form.css">
</head>
<?php

include('connect.php');


if(isset($_POST['submit']))
{
    $sno=$_POST['sevano'];
    $quantity= $_POST['quantity'];

    $query="SELECT amount from `seva` where seva_no=$sno";
    $res1=mysqli_query($conn,$query);
    $row1=mysqli_fetch_assoc($res1);

    $amount=$row1['amount'];

    $totamount=$amount*$quantity;


    $sql="INSERT INTO `receipts`(`seva_no`, `date_time`, `quantity`,`total_amount`) VALUES ('$sno',NOW(),'$quantity','$totamount')";
    $result=mysqli_query($conn,$sql);

?>
<body>

<h3>Receipt Form</h3>

<div class="container">
  <form method="post">
    <div class="row">
      <div class="col-75">
        <input type="text" id="fname" name="sevano" placeholder="Seva no.">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="text" id="lname" name="quantity" placeholder="Quantity">
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
