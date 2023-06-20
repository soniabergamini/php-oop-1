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
        $this->cover = './pngwing.com.png';
    }
}

$movies = [
    new Movie('Geostorm', 'Dean Devlin', 'USA', 'English', '2017', 'Gerard Butler', 'Action'),
    new Movie('Avatar', 'James Cameron', 'USA', 'English', '2009', 'Sam Worthington', 'Fantasy'),
    new Movie('Titanic', 'James Cameron', 'USA', 'English', '1997', 'Leonardo DiCaprio', 'Romantic'),
];
var_dump($movies);

$geostorm = $movies[0];
$geostorm->setCover('https://pad.mymovies.it/filmclub/2017/01/032/locandina.jpg');

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
    <header>
        <h1 class="text-center font-bold text-5xl text-red-600">🍿 MOVIES</h1>
    </header>

    <!-- Main Contents -->
    <main class="flex ">

        <!-- Movie Cards -->
        <?php foreach ($movies as $film) { ?>
            <div class="border p-3">
                <?php foreach ($film as $key => $value) { ?>
                    <?php if ($key == 'cover') { ?>
                        <img src="<?php echo $value ?>" alt="movie_cover" class="max-w-[250px] h-[285px] object-cover object-center">
                    <?php } else { ?>
                        <ul class="my-3">
                            <li>
                                <strong><?php echo strtoupper($key) ?>: </strong>
                                <span><?php echo $value ?></span>
                            </li>
                        </ul>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>

    </main>
</body>

</html>