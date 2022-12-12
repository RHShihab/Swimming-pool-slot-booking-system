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

            <div class="form-check row row-cols-1 row-cols-md-3 g4" id="slot-list">
                <input class="btn-check slot" type="radio" name="Slot" id="Morning">
                <label class=" btn btn-outline-primary" for="Morning">
                    Morning Slot
                </label>
                <input class="btn-check slot" type="radio" name="Slot" id="Afternoon">
                <label class=" btn btn-outline-primary" for="Afternoon">
                    Afternoon Slot
                </label>
                <input class="btn-check slot" type="radio" name="Slot" id="Evening">
                <label class=" btn btn-outline-primary" for="Evening">
                    Evening Slot
                </label>
            </div>

            <div class="slot-group d-none" id="Morning-slot">
                <h1>Morning Slot</h1>
                <div class="form-check row row-cols-1 row-cols-md-4 g-4">
                    <input class="btn-check" type="radio" name="time" id="morning6">
                    <label class=" btn btn-outline-primary" for="morning6">
                        6:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="morning7">
                    <label class=" btn btn-outline-primary" for="morning7">
                        7:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="morning8">
                    <label class=" btn btn-outline-primary" for="morning8">
                        8:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="morning9">
                    <label class=" btn btn-outline-primary" for="morning9">
                        9:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="morning10">
                    <label class=" btn btn-outline-primary" for="morning10">
                        10:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="morning11">
                    <label class=" btn btn-outline-primary" for="morning11">
                        11:00
                    </label>
                </div>
            </div>

            <div class="slot-group d-none" id="Afternoon-slot">
                <h1>Afternoon Slot</h1>
                <div class="form-check row row-cols-1 row-cols-md-4 g-4">
                    <input class="btn-check" type="radio" name="time" id="afternoon1">
                    <label class=" btn btn-outline-primary" for="afternoon1">
                        1:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="afternoon2">
                    <label class=" btn btn-outline-primary" for="afternoon2">
                        2:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="afternoon3">
                    <label class=" btn btn-outline-primary" for="afternoon3">
                        3:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="afternoon4">
                    <label class=" btn btn-outline-primary" for="afternoon4">
                        4:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="afternoon5">
                    <label class=" btn btn-outline-primary" for="afternoon5">
                        5:00
                    </label>
                </div>
            </div>

            <div class="slot-group d-none" id="Evening-slot">
                <h1>Evening Slot</h1>
                <div class="form-check row row-cols-1 row-cols-md-4 g-4">
                    <input class="btn-check" type="radio" name="time" id="evening6">
                    <label class=" btn btn-outline-primary" for="evening6">
                        6:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="evening7">
                    <label class=" btn btn-outline-primary" for="evening7">
                        7:00
                    </label>
                    <input class="btn-check" type="radio" name="time" id="evening8">
                    <label class=" btn btn-outline-primary" for="evening8">
                        8:00
                    </label>
                </div>
            </div>

            <script>
                const slotBtn = document.getElementsByClassName("slot");
                const slotGroup = document.getElementsByClassName("slot-group");

                for (let i = 0; i < slotBtn.length; i++) {
                    slotBtn[i].addEventListener("click", handleSlotChange);
                }

                function handleSlotChange(e) {
                    e.preventDefault();

                    if(e.target.id === "Morning"){
                        document.getElementById("Morning-slot").classList.remove("d-none");
                        document.getElementById("Afternoon-slot").classList.add("d-none");
                        document.getElementById("Evening-slot").classList.add("d-none");
                    }
                    else if(e.target.id === "Afternoon"){
                        document.getElementById("Morning-slot").classList.add("d-none");
                        document.getElementById("Afternoon-slot").classList.remove("d-none");
                        document.getElementById("Evening-slot").classList.add("d-none");
                    }
                    else if(e.target.id === "Evening"){
                        document.getElementById("Morning-slot").classList.add("d-none");
                        document.getElementById("Afternoon-slot").classList.add("d-none");
                        document.getElementById("Evening-slot").classList.remove("d-none");
                    }
                }
            </script>
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