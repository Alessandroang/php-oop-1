<?php

class Movie {
    // Variabili d'istanza (attributi)
    public $title;
    public $genre;
    public $year;

    // Costruttore
    public function __construct($title, $genre, $year) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    // Metodo per ottenere informazioni sul film
    public function getMovieInfo() {
        return "Titolo: {$this->title}, Genere: {$this->genre}, Anno: {$this->year}";
    }
}

// Creazione di un'istanza delle classe Movie

$movie1 = new Movie("Il padrino", "Crime", 1972);
$movie2 = new Movie("Forrest Gump", "Drama", 1994);

// Stampare le informazioni sui film

echo "Informazioni sul primo film:<br>";
echo $movie1->getMovieInfo() . "<br><br>";

echo "Informazioni sul secondo film:<br>";
echo $movie2->getMovieInfo();

?>
