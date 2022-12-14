<?php
include('connection.php');
$id = $_GET['id'];

    $sql = 'Delete from queries where id='.$id;
    $res = mysqli_query($conn,$sql);
    echo "<script>alert('Deleted successfully')</script>";
    header('location:queriesList.php');
?>