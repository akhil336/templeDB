<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/custdash.css">
  <link rel='stylesheet' href='css/main.css'>
  <link rel="stylesheet" href="css/dash.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Donation</title>
</head>
<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $dname=$_POST['donorname'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];
    $amount = $_POST['amount'];
    $sql="INSERT INTO `donation`(`donorname`, `phone`, `address`,`amount`) VALUES ('$dname','$phone','$address','$amount')";
    $result=mysqli_query($conn,$sql);
    if($result){
      $sql1="SELECT MAX(`dno`) AS dno FROM `donation`;";
      $res2=mysqli_query($conn,$sql1);
      $row1=mysqli_fetch_assoc($res2);
      $dno = $row1['dno'];
        header("Location:donor_receipt.php?dno=$dno");
     }
     else
     {
      echo "<script>alert(\"Failed to add Donation details\")</script>";
     }
}
?>

<body>    
    <div class="header">
      <p class="logo">TEMPLE MANAGEMENT SYSTEM</p>
      <div class="header-right">
        <a class="active" href="index.php">Logout</a>
      </div>
    </div>

<!--------------------------------------------FULL PAGE------------------------------------------------>
  <div style="height: 100%;">
  <a href="home.php" class="tablink" style="width: 25%;">Home</a>
  <a href="seva.php" class="tablink" style="width: 25%;">Seva</a>
  <a href="donation.php" class="tablink" style="width: 25%;">Donation</a>
  <a href="stay.php" class="tablink" style="width: 25%;">Stay</a>


            <form method="post" style="margin-top:0px;margin-left:10px;">
                <label for='donorname'>Donorname</label>
                <input type="text" name='donorname' required placeholder="donorname"><br>
                <label for='phone'>Phone</label>
                <input type="text" name='phone' required placeholder="phone"><br>
                <label for='address'>Address</label>
                <input type="text" name='address' required placeholder="address"><br>
                <label for='amount'>Amount</label>
                <input type="text"name='amount' required placeholder="amount"><br>
                <input type="submit" name="submit" style="margin-left:20px;"value="Add Donation"> 
            </form>
                                       
    </div>
</div>
</div>
</body>
</html>