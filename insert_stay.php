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
    <title>Add devotee</title>
</head>
<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $devoteename= $_POST['devoteename'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $sql="INSERT INTO `stay`( `devoteename`, `phone`,`address`,`checkin`,`checkout`) VALUES ('$devoteename','$phone','$address','$checkin','$checkout')";
    $result=mysqli_query($conn,$sql);
    if($result){
      $sql1="SELECT MAX(`sno`) AS sno FROM `stay`;";
      $res2=mysqli_query($conn,$sql1);
      $row1=mysqli_fetch_assoc($res2);
      $sno = $row1['sno'];
        header("Location:stay_receipt.php?sno=$sno");
     }
     else
     {
      echo "<script>alert(\"Failed to add Seva details\")</script>";
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


            <form method="post">
                <label for='devoteename'>devoteename</label>
                <input type="text" name='devoteename' required placeholder="Devoteename"><br>
                <label for='phone'>phone</label>
                <input type="text"name='phone' required placeholder="Phone"><br>
                <label for='address'>address</label>
                <input type="text"name='address' required placeholder="Address"><br>
                <label for='checkin'>checkin</label>
                <input type="datetime-local" name='checkin' required placeholder="Checkin"><br>
                <label for='checkout'>checkout</label>
                <input type="datetime-local" name='checkout' required placeholder="Checkout"><br>
                <input type="submit" name="submit" value="Add devotee">   
            </form>
                                       
    </div>
</div>
</div>
</body>
</html>

