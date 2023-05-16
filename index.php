<?php

class Movie{
    public $title;
    public $description;
    public $genre;

    function __construct($_title)
    {
        $this->title = $_title;
    }

    public function setGenre(...$_genre){
        $this->genre =$_genre;
    } 
    
    public function AddGenre($_genre){
        $this->genre[] =$_genre;
    } 
}

$movie1 = new Movie('Bella ciao');
$movie1->setGenre('drammatico');
$movie2 = new Movie('La Mummia');
$movie2->setGenre('horror');
var_dump($movie1,$movie2);