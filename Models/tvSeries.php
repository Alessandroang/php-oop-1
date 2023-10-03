<?php
require_once 'Production.php';

class TvSeries extends Production {
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;
    


    public function __construct($title, $author, $year, $aired_from_year, $aired_to_year, $number_of_episodes, $number_of_seasons) {
        parent::__construct($title, $author, $year);
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
      
    }

    public function getInfo() {
        return parent::getInfo() . "<br>Anno di messa in onda dal: {$this->aired_from_year}<br>Anno di messa in onda al: {$this->aired_to_year}<br>Numero di episodi: {$this->number_of_episodes}<br>Numero di stagioni: {$this->number_of_seasons}";
    }
}
?>
