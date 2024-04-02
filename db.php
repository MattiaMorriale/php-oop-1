<?php

require './Models/movie.php';

$movie1 = new Movie("ciao", '23/04/2001');

$movie2 = new Movie("bella", '1/2/1212');

$movies = [
    $movie1,
    $movie2,
];

?>