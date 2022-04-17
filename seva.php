<!DOCTYPE html>
<html lang="en">
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
    $ress=mysqli_query($conn,$sql);
if($ress){
  $query2="SELECT r_no FROM `receipts` WHERE r_no=(SELECT max(r_no) FROM `receipts`)";
  $re=mysqli_query($conn,$query2);
  if($re){
    $row2=mysqli_fetch_array($re);
    $rno = $row2['r_no'];
  header("Location:receipt_generate.php?rno=$rno");
  }
  else{
    echo "<script>alert(\'error while generating bill\')</script>";
  }
}
else{
  echo "<script>alert(\'Error while inserting record\')</script>";
}
}
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seva</title>
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 6px;
}

tr:nth-child(n) {
  background-color:#7ae7ff;
}

</style>
  <link rel="stylesheet" href="css/custdash.css">
  <link rel='stylesheet' href='css/main.css'>
  <link rel="stylesheet" href="css/dash.css">
  <link rel="stylesheet" href="css/receipt_form.css">
</head>

<body>    
    <div class="header">
      <p class="logo">TEMPLE MANAGEMENT SYSTEM</p>
      <div class="header-right">
        <a class="active" href="index.php">Logout</a>
      </div>
    </div>

  <div>
  <a href="home.php" class="tablink" style="width: 25%;">Home</a>
  <a href="seva.php" class="tablink" style="width: 25%;">Seva</a>
  <a href="donation.php" class="tablink" style="width: 25%;">Donation</a>
  <a href="stay.php" class="tablink" style="width: 25%;">Stay</a>


<div style="padding-left:16px">
<h2>Seva List</h2>
<button type='button' class='button' ><a href="insert_seva.php"> Add a new Seva </button></a>
<br><br>
  <div class="tables">
<table id="DisplayTable">
  <tr>
    <th>Seva no.</th>
    <th>Seva name</th>
    <th>Time</th>
    <th>Amount</th>
    <th>Operations</th>
  </tr>
  <?php

  $sql= "Select * from `seva`;";

  $result= mysqli_query($conn,$sql);

  if($result){
      while($row=mysqli_fetch_assoc($result))
      {
        
        $sno=$row['seva_no'];
        $sname=$row['sevaname'];
        $time=$row['time'];
        $amount=$row['amount'];
        
        
        echo '<tr>
        <td>'.$sno.'</td>
        <td>'.$sname.'</td>
        <td>'.$time.'</td>
        <td>'.$amount.'</td>
        <td>
                <button ><a href="update_seva.php?sno='.$sno.'">Update</a></button>
                <button ><a href="delete_seva.php?sno='.$sno.'">Delete</a></button>
    </td>
    </tr>';

      }
    }   
  ?>
</table>
</div>
</div>
</div>
<br>
<br>
<div class="receipt">
<h3 style="margin-left:10%; color:white;">Receipt Form</h3>
  <form method="post">
  <br>
        <input type="text" id="fname" name="sevano" placeholder="Seva no.">
      <br>
        <input type="text" id="lname" name="quantity" placeholder="Quantity">
        <br>
        <input type="submit" name="submit" value="Submit">

  </form>


</div>

</body>
</html>