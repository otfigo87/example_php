<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#">Photo Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Nature</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Architecture</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Travel</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/nature1.jpg" class="d-block w-100" alt="nature">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Nature</h3>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="mages/nature2.jpg" class="d-block w-100" alt="nature">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Architecture</h3>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="mages/nature3.jpg" class="d-block w-100" alt="travel">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Travel</h3>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Our Work</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature3.jpg" alt="nature">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature1.jpg" alt="nature">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nature2.jpg" alt="nature">
                </div>
            </div>
        </div>
    </section>

    <section class="my-4 text-center">
        <div class="py-4">
            <h2 class="text-center">Contact Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="about.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>

    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <h3 class="text-center">MAC</h3> <br>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, dicta? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, dicta?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, dicta?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, dicta?</p>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>