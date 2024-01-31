<?php
class Movie{
    public $title;
    public $year;
    public $author;
    public $genres;
    public $poster;

    function __construct($_title, $_genres, $_year, $_author)
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
        $this->author = $_author;

    }
    public function getAge()
    {
        $currentYear = 2024;
        return $currentYear - $this->year;
    }

}
?>