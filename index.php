<?php

require_once 'Models/movie.php';
require_once 'Models/genre.php';
require_once 'Models/production.php';
require_once 'Models/tvSeries.php';

$movies = [
  new Movie('Tre uomini e una gamba', 'Aldo, Giovanni e Giacomo', 1999, new Genre('Comedy'), 110, 'img/images.jpeg'),
  new Movie('La vita è bella', 'Roberto Benigni', 1997, new Genre('Drama'), 116),
  new Movie('Il padrino', 'Francis Ford Coppola', 1972, new Genre('Crime'), 175),
  new Movie('Forrest Gump', 'Robert Zemeckis', 1994, new Genre('Drama'), 142),
  new Movie('Inception', 'Christopher Nolan', 2010, new Genre('Action'), 148),
  new Movie('The Shawshank Redemption', 'Frank Darabont', 1994, new Genre('Drama'), 142)
];

// Creazione degli oggetti TvSeries
$tvSeries = [
  new TvSeries('Breaking Bad', 'Vince Gilligan', 2008, 2008, 2013, 62, 5),
  new TvSeries('Stranger Things', 'The Duffer Brothers', 2016, 2016, 2023, 34, 4),
  new TvSeries('Game of Thrones', 'David Benioff, D. B. Weiss', 2011, 2011, 2019, 73, 8)
];



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
  <h1>Film</h1>
        <div class="row">
            <?php foreach ($movies as $movie) : ?>
                <div class="col-md-6">
                  <div class="card mt-4">
                        <div class="card-body">
                        <h6 class="card-title"><?= $movie->getInfo() ?></h6>
                        </div>
                  </div>
                </div>
            <?php endforeach; ?>
<h1>Serie Tv</h1>
            <?php foreach ($tvSeries as $tvSerie) : ?>
                <div class="col-md-6">
                  <div class="card mt-4">
                    <div class="card-body">
                    <h6 class="card-title"><?= $tvSerie->getInfo() ?></h6>
                    </div>
                      
                  </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>
