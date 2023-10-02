<?php

require_once 'Models/Movie.php';
require_once 'Models/Genre.php';
require_once 'db.php';

// Creazione di un'istanza della classe Genre

// $genre1 = new Genre($genresData[0]);
// $genre2 = new Genre($genresData[1]);

// Creazione di un'istanza della classe Movie

// $movie1 = new Movie($moviesData[0]['title'], $moviesData[0]['author'], $moviesData[0]['year'], $genre1->genre);
// $movie2 = new Movie($moviesData[1]['title'], $moviesData[1]['author'], $moviesData[1]['year'], $genre2->genre);

// Stampare le informazioni sul primo film

// echo "Informazioni sul primo film:<br>";
// echo $movie1->getMovieInfo() . "<br><br>";
// echo "Genere del primo film:<br>";  
// echo $genre1->getGenre() . "<br><br>";

// Stampare le informazioni sul secondo film

// echo "Informazioni sul secondo film:<br>";
// echo $movie2->getMovieInfo() . "<br><br>";
// echo "Genere del secondo film:<br>";  
// echo $genre2->getGenre() . "<br>";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>
    <div class="container mt-4">
        <div class="row">

            <?php foreach ($moviesData as $index => $movie) : ?>
                <div class="col-md-6">
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie['title'] ?></h5>
                            <p class="card-text">Autore: <?= $movie['author'] ?></p>
                            <p class="card-text">Anno: <?= $movie['year'] ?></p>
                            <p class="card-text">Genere: <?= $genresData[$index] ?></p>
                        </div>
                    </div> 
                </div>
            <?php endforeach; ?>

        </div>
    </div>

</body>

</html>
