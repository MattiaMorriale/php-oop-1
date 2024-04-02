<?php

require './models/movie.php';
require './models/director.php';



$getDirectorMovie = new Director("George Walton", "Lucas", "Americano");


// ____________________________________________________________________

$movie1 = new Movie("Star Wars, Una nuva speranza", '1977');
$movie1->director = $getDirectorMovie;

$movie2 = new Movie("Star Wars, L'impero colpisce ancora", '1980');
$movie2->director = $getDirectorMovie;

$movie3 = new Movie("Star Wars, Il ritorno degli Jedi", '1983');
$movie3->director = $getDirectorMovie;

$movie4 = new Movie("Star Wars, L'avventura degli Ewoks", '1984');
$movie4->director = $getDirectorMovie;

$movie5 = new Movie("Star Wars, Il ritorno degli Ewoks", '1985');
$movie5->director = $getDirectorMovie;

$movie6 = new Movie("Star Wars, La minaccia fantasma", '1999');
$movie6->director = $getDirectorMovie;

$movie7 = new Movie("Star Wars, L'attacco dei cloni", '2002');
$movie7->director = $getDirectorMovie;

$movie8 = new Movie("Star Wars, La vendetta dei Sith", '2005');
$movie8->director = $getDirectorMovie;

$movie9 = new Movie("Star Wars, Il risveglio della forza", '2015');
$movie9->director = $getDirectorMovie;



$movies = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $movie6,
    $movie7,
    $movie8,
    $movie9,
];

?>