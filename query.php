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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    <title>Contact form </title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.png" height="56" width="144" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="query.php">Query</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="contact">
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0870217953993!2d90.42535481478541!3d23.81550438455726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64be6744a57%3A0xeacead51ebe2bf60!2sIndependent%20University%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1670869182579!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="qform">
            <h1>Contact Us</h1>
            <form action="query.php" method="post">
                <div class="qform-group">
                    <input type="text" name="name" placeholder="Enter Your Name" required>
                </div>
                <div class="qform-group">
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                </div>
                <div class="qform-group">
                    <input type="text" name="sub" placeholder="Enter Your Subject" required>
                </div>
                <div class="qform-group">
                    <input type="text" name="msg" placeholder="Enter Your Message" required>
                </div>
                <div class="btn">
                    <input type="submit" name="submit" value="submit">

                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>