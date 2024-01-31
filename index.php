<?php
require __DIR__.'/Models/Movie.php';

$movie_1 = new Movie("Il Castello Errante Di Howl", ["Cinema fantastico", "Avventura" ], 2004,"Hayao Miyazaki");
$movie_2 = new Movie("Your Name",  ["Cinema fantastico", "Romantico" ], 2016,"Makoto Shinkai");


$movie_1->poster = "https://pad.mymovies.it/filmclub/2016/10/099/locandina.jpg";
$movie_2->poster = "https://pad.mymovies.it/filmclub/2004/08/005/locandina.jpg";





$movies = [
    $movie_1, $movie_2
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="./css/style.css">
    <title>Movies</title>
</head>

<body>
    <main class='bg-dark'>
        <div class="container">
            <div class="row">
                <div class="col-12 m-2">
                    <h1 class='text-white'>Film da vedere:</h1>
                </div>
                <div class="col-12">
                    <ul class="list-unstyled d-flex">
                        <?php foreach ($movies as $movie) { ?>
                            <div class="movie-container me-4">
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo $movie->poster?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $movie->title;?></h5>
                                            <p class="card-text"><?php echo $movie->title . " è un film del " . $movie->year . ",diretto da " . $movie->author . ", genere " . implode("/", $movie->genres) . ". Sono passati " . $movie->getAge() . " anni da quando è stato proiettato per la prima volta.";?></p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?php echo "<b>Regista</b>: {$movie->author}";?></li>
                                            <li class="list-group-item"><?php echo "<b>Anno di uscita</b>: {$movie->year}";?></li>
                                            <li class="list-group-item"><?php echo "<b>Genere</b>: " . implode("/", $movie->genres);?></li>
                                        </ul>
                                        <div class="card-body">
                                            <a href="#" class="card-link">MoviePlayer link</a>
                                            <a href="#" class="card-link">Another infos </a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
