<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}
else{
   $type= $_SESSION['type'];
   if ($type!== 'Manager' ){
    header('location:notauthorized.php');
}
}


include ('connection.php');
    $email = $_SESSION['email'];
    $sql = "select * from accounts where not  `email`='$email' ";
    $res = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
session_start();
include('adminNav.php');?>

    <section class="list d-flex flex-column align-items-center justify-content-center">
    <h1 class="mb-4">Accounts List</h1>
    <a class="btn btn-primary" href="registration.php">Create an Admin Account</a>
    <table id="example" class="table table-striped ">
        <thead>
        <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
           
           
        </thead>
        <tbody>
        <?php
        if (mysqli_num_rows($res) > 0) {
            while ($rows = mysqli_fetch_assoc($res)) {
                $id = $rows["id"];
                echo ' <tr>
                <td>' .$rows["name"].'</td>
                <td>' .$rows["email"].'</td>
                <td>' .$rows["type"].'</td>
                <td><a class="btn btn-danger" href='."deleteAccount.php?id=".$id.'>Delete</a></td>

            </tr>
                ';
            }
        }
            ?>
           
        </tbody>
    </table>
    </section>
</body>
</html>