<?php 
class Genre {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getInfo() {
        return "Genere: {$this->name}";
    }
}

?>

