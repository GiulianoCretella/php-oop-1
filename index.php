<?php
require_once __DIR__.'/classes/Movie.php';
$movie1= new Movie('Il Ciclone',1996,'Commedia');
$movie1->setPoster('https://pad.mymovies.it/filmclub/2002/08/330/locandina.jpg');
$movie1->getPoster();
$movie2= new Movie('Operation Finale',2018,'Storia');
$movie2->setPoster('https://pad.mymovies.it/filmclub/2018/06/018/locandina.jpg');
var_dump($movie1);
var_dump($movie2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="movie">
        <h1><?php echo $movie1->getTitle()?></h1>
        <img src="<?php echo $movie1->getPoster()?>" alt="<?php echo $movie1->getTitle()?>">
        <h4>Anno: <?php echo "{$movie1->getYear()} <br> Genere: {$movie1->getGenre()}"?></h4>
        <p>Pubblicato: <?php echo "{$movie1->getAnniFa()} anni fa"?></p>
    </div>
    <hr>
    <div class="movie">
        <h1><?php echo $movie2->getTitle()?></h1>
        <img src="<?php echo $movie2->getPoster()?>" alt="<?php echo $movie2->getTitle()?>">
        <h4>Anno: <?php echo "{$movie2->getYear()} <br> Genere: {$movie2->getGenre()}"?></h4>
        <p>Pubblicato: <?php echo "{$movie2->getAnniFa()} anni fa"?></p>
    </div>
    
</body>
</html>