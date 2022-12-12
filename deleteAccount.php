<?php
include('connection.php');
$id = $_GET['id'];

    $sql = 'Delete from accounts where id='.$id;
    $res = mysqli_query($conn,$sql);
    echo "<script>alert('Deleted successfully')</script>";
    header('location:accountManager.php');
?>