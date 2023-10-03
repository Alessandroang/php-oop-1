<?php


class Production {
    public $title;
    public $author;
    public $year;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getInfo() {
        return "Titolo: {$this->title}<br>" .
            "Autore: {$this->author}<br>" .
            "Anno: {$this->year}";
    }
}

?>