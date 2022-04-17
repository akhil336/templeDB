<?php
include 'connect.php';

$id=$_GET['sno'];
$QUERY="SELECT * FROM `seva` WHERE seva_no=$id;";
$res=mysqli_query($conn,$QUERY);
$Row=mysqli_fetch_array($res);
$sname=$Row['sevaname'];
$time=$Row['time'];
$amount=$Row['amount'];

if(isset($_POST['submit'])){
    $id=$_GET['sno'];
    $sname=$_POST['sevaname'];
    $time=$_POST['time'];
    $amount=$_POST['amount'];
    $sql="UPDATE `seva` SET `sevaname`='$sname',`time`='$time',`amount`='$amount' WHERE `seva_no`=$id";
   
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location:seva.php");
    }else{
        echo "<script>alert(\"Not updated\")</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Seva</title>
</head>
<body>

<div>

<form method="post">
    <label for='sevaname'>Seva Name</label>
        <input type="text"  name='sevaname' required value=<?php echo $sname; ?> >
    <label for='time'>Time</label>
        <input type="text"  name='time'required  value=<?php echo $time ?> >
    <label for='Company'>Amount</label>
        <input type="text"  name='amount' required value=<?php echo $amount ?> >
        <input type="submit" name="submit" value="Update">   
</form>
           
  <button ><a href="seva.php">Back</a></button>
                                       
</div>

</body>
</html>