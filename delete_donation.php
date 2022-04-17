<?php
include 'connect.php';
if(isset($_GET['dno'])){
    $id=$_GET['dno'];
    $sql="DELETE FROM `donation` WHERE `dno`='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:donation.php');
    }
    else{
        echo "<script>alert('Didnt delete');</script>";
        header('location:donation.php');
    }
}
?>