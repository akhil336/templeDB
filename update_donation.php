<?php
include 'connect.php';

$id=$_GET['dno'];
$QUERY="SELECT * FROM `donation` WHERE `dno`='$id'";
$res=mysqli_query($conn,$QUERY);
$Row=mysqli_fetch_array($res);
$dname=$Row['donorname'];
$phone=$Row['phone'];
$address=$Row['address'];
$amount=$Row['amount'];

if(isset($_POST['submit'])){
    $id=$_GET['dno'];
    $dname=$_POST['donorname'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $amount=$_POST['amount'];
    $sql="UPDATE `donation` SET `donorname`='$dname',`phone`='$phone',`address`='$address',`amount`='$amount' WHERE `dno`=$id";
   
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location:donation.php");
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
    <title>Update donation</title>
</head>
<body>

<div>

<form method="post">
    <label for='donorname'>donorname</label>
        <input type="text"  name='donorname' required value=<?php echo $dname; ?> >
    <label for='phone'>phone</label>
        <input type="text"  name='phone'required  value=<?php echo $phone ?> >
   <label for='address'>address</label>
        <input type="text"  name='address'required  value=<?php echo $address ?> >
    <label for='amount'>amount</label>
        <input type="text"  name='amount' required value=<?php echo $amount ?> >
        <input type="submit" name="submit" value="Update">   
</form>
           
  <button ><a href="donation.php">Back</a></button>
                                       
</div>

</body>
</html>