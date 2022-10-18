<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Discovering Bootstrap 5.1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Photos</a></li>
                        <li><a class="dropdown-item" href="#">Articles</a></li>
                        <li><a class="dropdown-item" href="#">Projects</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>




<div class="row">
    <div class="page-title"><h1>Journey into Bootstrap Classes</h1></div>
</div>
<div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">
    <div class="col">
        <div class="card h-100">
            <img src="assets/mountains.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="assets/forest.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a short card.</p>
            </div>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="assets/sunrise.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                    content.</p>
            </div>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="assets/winter.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
</div>
<div class="card text-center">
    <div class="card-body card-bottom">
        <h5 class="card-title">The CSS frameworks are very useful</h5>
        <p class="card-text">Learning then comes with practice</p>
    </div>
</div>
<footer class="fixed-bottom">
    <div class="text-center p-2 " style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 wilders | images @pixabay
    </div>
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>
