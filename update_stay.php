<?php
include 'connect.php';

$id=$_GET['sno'];
$QUERY="SELECT * FROM `stay` WHERE sno=$id;";
$res=mysqli_query($conn,$QUERY);
$Row=mysqli_fetch_array($res);
$dname=$Row['devoteename'];
$phone=$Row['phone'];
$address=$Row['address'];
$checkin=$Row['checkin'];
$checkout=$Row['checkout'];

if(isset($_POST['submit'])){
    $id=$_GET['sno'];
    $dname=$_POST['devoteename'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $sql="UPDATE `stay` SET `devoteename`='$dname',`phone`='$phone',`address`='$address',`checkin`='$checkin',`checkout`='$checkout' WHERE `sno`=$id";
   
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location:stay.php");
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
    <title>Update stay</title>
</head>
<body>

<div>

<form method="post">
    <label for='devoteename'>devoteename</label>
        <input type="text"  name='devoteename' required value=<?php echo $dname; ?> >
    <label for='phone'>phone</label>
        <input type="text"  name='phone'required  value=<?php echo $phone ?> >
    <label for='address'>address</label>
        <input type="text"  name='address' required value=<?php echo $address ?> >
     <label for='checkin'>checkin</label>
        <input type="text"  name='checkin' required value=<?php echo $checkin ?> >
     <label for='checkout'>checkout</label>
        <input type="text"  name='checkout' required value=<?php echo $checkout ?> >
        <input type="submit" name="submit" value="Update">   
</form>
           
  <button ><a href="stay.php">Back</a></button>
                                       
</div>

</body>
</html>