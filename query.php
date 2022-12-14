<?php
include ('connection.php');
if(isset($_POST['submit'])){
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $sub = $_POST['sub']; 
    $msg = $_POST['msg']; 
    $sql="INSERT INTO queries (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$sub', '$msg')";


if (mysqli_query($conn, $sql)) {
  header('location:done.html');

} else {
  echo "<script>alert('Error: '.$sql.'<br>' . mysqli_error($conn))</script>" ;
}
}
?>