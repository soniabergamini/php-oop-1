<?php
require __DIR__ . '/models/movie_class.php';

$movies = [
    new Movie('Geostorm', 'Dean Devlin', 'USA', 'English', 2017, 'Gerard Butler', ['Action', 'Adventure', 'Sci-fi']),
    new Movie('Avatar', 'James Cameron', 'USA', 'English', 2009, 'Sam Worthington', ['Fantasy', 'Action', 'Adventure', 'Sci-fi']),
    new Movie('Titanic', 'James Cameron', 'USA', 'English', 1997, 'Leonardo DiCaprio', ['Romantic', 'Historical Drama', 'Tragedy']),
    new Movie('John Wick', 'Chad Stahelski', 'USA', 'English', 2014, 'Keanu Reeves', ['Action', 'Thriller']),
    new Movie('P.S. I Love You', 'Richard LaGravenese', 'USA', 'English', 2007, 'Hilary Swank', ['Romantic', 'Drama', 'Comedy']),
    new Movie('Red Sparrow', 'Francis Lawrence', 'USA', 'English', 2018, 'Jennifer Lawrence', ['Thriller', 'Mystery', 'Spy']),
    new Movie('P.S. I Love You', 'Richard LaGravenese', 'USA', 'English', 2007, 'Hilary Swank', ['Romantic', 'Drama', 'Comedy']),
    new Movie('Red Sparrow', 'Francis Lawrence', 'USA', 'English', 2018, 'Jennifer Lawrence', ['Thriller', 'Mystery', 'Spy']),
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