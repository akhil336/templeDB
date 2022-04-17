<?php
 
  include('connect.php');
 
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>stay details</title>
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
</head>

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


<div style="padding-left:16px">
<h2>Stay details</h2>
<button type='button' class='button' ><a href="insert_stay.php"> Add </button></a>
<br><br>
<table id="DisplayTable">
  <tr>
    <th>sno</th>
    <th>devoteename.</th>
    <th>phone</th>
    <th>address</th>
    <th>checkin</th>
    <th>checkout</th>
    <th>Operations</th>
  </tr>
  <?php

  $sql= "Select * from `stay`;";

  $result= mysqli_query($conn,$sql);

  if($result){
      while($row=mysqli_fetch_assoc($result))
      {
        $sno=$row['sno'];
        $dname=$row['devoteename'];
        $phone=$row['phone'];
        $address=$row['address'];
        $checkin=$row['checkin'];
        $checkout=$row['checkout'];
        
        
        echo '<tr>
        <td>'.$sno.'</td>
        <td>'.$dname.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
        <td>'.$checkin.'</td>
        <td>'.$checkout.'</td>
        <td>
                <button ><a href="update_stay.php?sno='.$sno.'">Update</a></button>
                <button ><a href="delete_stay.php?sno='.$sno.'">Delete</a></button>
    </td>
    </tr>';

      }
    }   
  ?>
</table>
</div>
</body>
</html>