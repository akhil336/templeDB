<?php
include 'connect.php';
if(isset($_GET['sno'])){
    $id=$_GET['sno'];
    $sql="DELETE FROM `stay` WHERE `sno`='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:stay.php');
    }
    else{
        echo "<script>alert('Didnt delete');</script>";
        header('location:stay.php');
    }
}
?>