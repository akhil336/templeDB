<?php
 
  include('connect.php');
 
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>donation</title>
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
<h2>Donation details</h2>
<button type='button' class='button' ><a href="insert_donation.php"> Add donation </button></a>
<br><br>
<table id="DisplayTable">
  <tr>
    <th>dno</th>
    <th>donor name</th>
    <th>phone</th>
    <th>address</th>
    <th>Amount</th>
    <th>Operations</th>
  </tr>
  <?php

  $sql= "Select * from `donation`;";

  $result= mysqli_query($conn,$sql);

  if($result){
      while($row=mysqli_fetch_assoc($result))
      {
        $dno=$row['dno'];
        $dname=$row['donorname'];
        $phone=$row['phone'];
        $address=$row['address'];
        $amount=$row['amount'];
        
        
        echo '<tr>
        <td>'.$dno.'</td>
        <td>'.$dname.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
        <td>'.$amount.'</td>
        <td>
                <button ><a href="update_donation.php?dno='.$dno.'">Update</a></button>
                <button ><a href="delete_donation.php?dno='.$dno.'">Delete</a></button>
    </td>
    </tr>';

      }
    }   
  ?>
</table>
</div>
</body>
</html>