<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .container {
  position: absolute;
  left:30%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: #d4a8a5;
}

/* Full-width input fields */
div {
  width: 90%;
  padding: 15px;
  margin: 5px 0 10px 0;
  border: none;
  background: #f1f1f1;
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

$rno = $_GET['rno'];
// `receipts`.r_no,`receipts`.seva_no,`seva`.sevaname,`receipts`.date_time,`seva`.amount,`receipts`.quantity,`receipts`.Total_amount
$query="SELECT `receipts`.r_no,`receipts`.seva_no,`seva`.sevaname,`receipts`.date_time,`seva`.amount,`receipts`.quantity,`receipts`.Total_amount from `receipts`,`seva` where `receipts`.r_no=$rno and `receipts`.seva_no=`seva`.seva_no";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
$r_no = $row['r_no'];
$s_no = $row['seva_no'];
$sname = $row['sevaname'];
$datetime = $row['date_time'];
$amt = $row['amount'];
$quantity = $row['quantity'];
$Total = $row['Total_amount'];
?>
    <title>Receipt</title>
</head>
<body>

<h2>Receipt Generated!</h2>
<div class="container">
  <form action="" class="contain">
  
  <h3>Receipt</h3>

    <div><b>Receipt No. :</b><?php echo "$r_no"; ?></div>
    <div><b>Seva No. :</b><?php echo "$s_no"; ?></div>
    <div><b>Seva name :</b><?php echo "$sname"; ?></div>
    <div><b>Date/Time :</b><?php echo "$datetime"; ?></div>
    <div><b>Amount :</b><?php echo "$amt"; ?></div>
	<div><b>Quantity :</b><?php echo "$quantity"; ?></div>
    <div><b>Total Amount :</b><?php echo "$Total"; ?></div>
    <button type="button" onclick="printFunction()" class="btn">Print</button>

  </form>
</div>
<script>
    function printFunction() { 
        window.print(); 
      }
</script>

</body>
</html>
