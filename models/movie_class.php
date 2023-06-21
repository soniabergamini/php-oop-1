<?php
class Movie
{
    public $cover;
    public $title;
    public $producer;
    public $country;
    public $language;
    public $year;
    public $actor_hero;
    public $genres;

    public function setCover($img)
    {
        $this->cover = $img;
    }

    function __construct($title, $producer, $country, $lang, $year, $hero, $genre)
    {
        $this->title = $title;
        $this->producer = $producer;
        $this->country = $country;
        $this->language = $lang;
        $this->year = $year;
        $this->actor_hero = $hero;
        $this->genres = $genre;
        $this->cover = 'https://printworks-manchester.com/cinema-poster/images/film-poster-placeholder.png';
    }
}
 ?>