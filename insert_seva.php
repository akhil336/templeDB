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
    <title>Add Seva</title>
</head>
<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $sname=$_POST['sevaname'];
    $time= $_POST['time'];
    $amount = $_POST['amount'];
    $sql="INSERT INTO `seva`(`sevaname`, `time`, `amount`) VALUES ('$sname','$time','$amount')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:seva.php");
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
                <label for='sevaname'>Seva Name</label>
                <input type="text" name='sevaname' required placeholder="Sevaname">
                <label for='time'>Time</label>
                <input type="text" name='time' required placeholder="Time">
                <label for='amount'>Amount</label>
                <input type="text"name='amount' required placeholder="Amount">
                <input type="submit" name="submit" value="Add seva">   
            </form>
                                       
    </div>
</div>
</div>
</body>
</html>

