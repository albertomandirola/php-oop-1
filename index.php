<?php
class Movie{
    public $title;
    public $year;
    public $author;
    public $genres;

    function __construct($_title, $_genres, $_year)
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
    }
    public function getAge()
    {
        $currentYear = 2024;
        return $currentYear - $this->year;
    }

}
$movie_1 = new Movie("Il Castello Errante Di Howl", ["Cinema fantastico", "Avventura" ], 2004);
$movie_2 = new Movie("Your Name",  ["Cinema fantastico", "Romantico" ], 2016);

$movie_1->author = "Hayao Miyazaki";
$movie_2->author = "Makoto Shinkai";


echo $movie_1->title . " è un film del " . $movie_1->year . ", diretto da " . $movie_1->author . ", genere " . implode("/", $movie_1->genres) . ". Sono passati " . $movie_1->getAge() . " anni da quando è uscito per la prima volta.";
echo "<br><br>";
echo $movie_2->title . " è un film del " . $movie_2->year . ", diretto da " . $movie_2->author . ", genere " . implode("/", $movie_2->genres) . ". Sono passati " . $movie_2->getAge() . " anni da quando è uscito per la prima volta.";


?>
