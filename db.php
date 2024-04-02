<?php

require './Models/movie.php';

$movie1 = new Movie("Star Wars, Una nuva speranza", '1977');

$movie2 = new Movie("Star Wars, L'impero colpisce ancora", '1980');

$movie3 = new Movie("Star Wars, Il ritorno degli Jedi", '1983');

$movie4 = new Movie("Star Wars, L'avventura degli Ewoks", '1984');

$movie5 = new Movie("Star Wars, Il ritorno degli Ewoks", '1985');

$movie6 = new Movie("Star Wars, La minaccia fantasma", '1999');

$movie7 = new Movie("Star Wars, L'attacco dei cloni", '2002');

$movie8 = new Movie("Star Wars, La vendetta dei Sith", '2005');

$movie9 = new Movie("Star Wars, Il risveglio della forza", '2015');



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