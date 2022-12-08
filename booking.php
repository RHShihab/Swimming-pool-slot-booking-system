<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.png" height="56" width="144" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="book-slot text-center">
            <div class="form-check row row-cols-1 row-cols-md-3 g4" id="slot">
                <input class="btn-check" type="radio" name="Morning" id="flexRadioDefault1">
                <label class=" btn btn-outline-primary" for="flexRadioDefault1">
                    Morning Slot
                </label>
                <input class="btn-check" type="radio" name="Afternoon" id="flexRadioDefault2">
                <label class=" btn btn-outline-primary" for="flexRadioDefault2">
                    Afternoon Slot
                </label>
                <input class="btn-check" type="radio" name="Evening" id="flexRadioDefault3">
                <label class=" btn btn-outline-primary" for="flexRadioDefault3">
                    Evening Slot
                </label>
            </div>
            <script>
                var slot = document.getElementById('#slot');
                console.log(slot);
            </script>
            <div class="form-check row row-cols-1 row-cols-md-4 g-4">
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class=" btn btn-outline-primary" for="flexRadioDefault1">
                    6:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class=" btn btn-outline-primary" for="flexRadioDefault2">
                    7:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class=" btn btn-outline-primary" for="flexRadioDefault3">
                    8:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                <label class=" btn btn-outline-primary" for="flexRadioDefault4">
                    9:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                <label class=" btn btn-outline-primary" for="flexRadioDefault5">
                    10:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                <label class=" btn btn-outline-primary" for="flexRadioDefault6">
                    11:00
                </label>
            </div>
            <h1>Morning Slot</h1>
            <div class="form-check row row-cols-1 row-cols-md-4 g-4">
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class=" btn btn-outline-primary" for="flexRadioDefault1">
                    6:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class=" btn btn-outline-primary" for="flexRadioDefault2">
                    7:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class=" btn btn-outline-primary" for="flexRadioDefault3">
                    8:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                <label class=" btn btn-outline-primary" for="flexRadioDefault4">
                    9:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                <label class=" btn btn-outline-primary" for="flexRadioDefault5">
                    10:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                <label class=" btn btn-outline-primary" for="flexRadioDefault6">
                    11:00
                </label>
            </div>
            <h1>Morning Slot</h1>
            <div class="form-check row row-cols-1 row-cols-md-4 g-4">
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class=" btn btn-outline-primary" for="flexRadioDefault1">
                    6:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class=" btn btn-outline-primary" for="flexRadioDefault2">
                    7:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class=" btn btn-outline-primary" for="flexRadioDefault3">
                    8:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                <label class=" btn btn-outline-primary" for="flexRadioDefault4">
                    9:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                <label class=" btn btn-outline-primary" for="flexRadioDefault5">
                    10:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                <label class=" btn btn-outline-primary" for="flexRadioDefault6">
                    11:00
                </label>
            </div>
         
            <div class="form-check row row-cols-1 row-cols-md-4 g-4">
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class=" btn btn-outline-primary" for="flexRadioDefault1">
                    6:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class=" btn btn-outline-primary" for="flexRadioDefault2">
                    7:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class=" btn btn-outline-primary" for="flexRadioDefault3">
                    8:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                <label class=" btn btn-outline-primary" for="flexRadioDefault4">
                    9:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                <label class=" btn btn-outline-primary" for="flexRadioDefault5">
                    10:00
                </label>
                <input class="btn-check" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                <label class=" btn btn-outline-primary" for="flexRadioDefault6">
                    11:00
                </label>
            </div>

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
    </section>
</body>

</html>