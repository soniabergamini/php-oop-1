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
    public $genres = [];

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

class Genres
{
}

$movies = [
    new Movie('Geostorm', 'Dean Devlin', 'USA', 'English', '2017', 'Gerard Butler', ['Action', 'Adventure', 'Sci-fi']),
    new Movie('Avatar', 'James Cameron', 'USA', 'English', '2009', 'Sam Worthington', ['Fantasy', 'Action', 'Adventure', 'Sci-fi']),
    new Movie('Titanic', 'James Cameron', 'USA', 'English', '1997', 'Leonardo DiCaprio', ['Romantic', 'Historical Drama', 'Tragedy']),
    new Movie('John Wick', 'Chad Stahelski', 'USA', 'English', '2014', 'Keanu Reeves', ['Action', 'Thriller']),
    new Movie('P.S. I Love You', 'Richard LaGravenese', 'USA', 'English', '2007', 'Hilary Swank', ['Romantic', 'Drama', 'Comedy']),
    new Movie('Red Sparrow', 'Francis Lawrence', 'USA', 'English', '2018', 'Jennifer Lawrence', ['Thriller', 'Mystery', 'Spy']),
];
// var_dump($movies);

$movies[0]->setCover('https://pad.mymovies.it/filmclub/2017/01/032/locandina.jpg');
$movies[1]->setCover('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROdMuSTfpo00w-hH4nb-SayuXK06ElVKysEA&usqp=CAU');
$movies[2]->setCover('https://pad.mymovies.it/filmclub/2004/06/506/locandinapg9.jpg');
$movies[4]->setCover('https://www.film.it/fileadmin/mediafiles/film/opere/200801/images/150x220/6814600_iloveyou.jpg');
$movies[5]->setCover('https://upload.wikimedia.org/wikipedia/en/5/5a/Red_Sparrow.png');

// $movie_geostorm = new Movie('Geostorm', 'Dean Devlin', 'USA', 'English', '2017', 'Gerard Butler', 'Action');
// $movie_avatar = new Movie('Avatar', 'James Cameron', 'USA', 'English', '2009', 'Sam Worthington', 'Fantasy');
// var_dump($movie_geostorm, $movie_avatar);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>OOP Movie</title>
</head>

<body class="bg-slate-900 text-white">

    <!-- Page title -->
    <header class="py-7">
        <h1 class="text-center font-bold text-5xl text-red-600">🍿 MOVIES</h1>
    </header>

    <!-- Main Contents -->
    <main class="flex gap-4 justify-center">

        <!-- Movie Cards -->
        <?php foreach ($movies as $film) { ?>
            <div class="border py-4 px-3 w-[calc(100%/6-80px)] text-sm">
                <ul>
                    <?php foreach ($film as $property => $value) { ?>
                        <li class="my-1.5">
                            <?php if ($property == 'cover') { ?>
                                <div class="flex justify-center mb-4">
                                    <img src="<?php echo $value ?>" alt="movie_cover" class="w-[250px] h-[285px] object-cover object-center">
                                </div>
                            <?php } elseif ($property != 'genres') { ?>
                                <strong><?php echo strtoupper($property) ?>: </strong>
                                <span><?php echo $value ?></span>
                            <?php } else { ?>
                                <strong><?php echo strtoupper($property) ?>: </strong>
                                <?php foreach ($film->genres as $gen) { ?>
                                    <span> <?php echo $gen?></span>
                                <?php } ?>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

    </main>
</body>

</html>