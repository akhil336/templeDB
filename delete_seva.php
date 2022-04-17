<?php
include 'connect.php';
if(isset($_GET['sno'])){
    $id=$_GET['sno'];
    $sql="DELETE FROM `seva` WHERE `seva_no`='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:seva.php');
    }
    else{
        echo "<script>alert('Didnt delete');</script>";
        header('location:seva.php');
    }
}
?>