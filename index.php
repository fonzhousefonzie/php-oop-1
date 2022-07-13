<?php
require_once "class.php";

$twoCoolMovies = [
    $kubo = new Movie("https://www.themoviedb.org/t/p/w1280/txdhBQ03G6xjD3YC0DOiIsdQfpv.jpg", "Kubo e la spada magica", 2016, "Kubo vive una vita normale e tranquilla in un piccolo villaggio costiero fino a quando uno spirito del passato sconvolge la sua esistenza riaccendendo una secolare faida. Ciò fa sì che ogni sorta di spiriti e di mostri dia la caccia a Kubo, che per sopravvivere deve individuare una magica armatura indossata una volta dal defunto padre, leggendario guerriero samurai."),
    $castaway = new Movie("https://www.themoviedb.org/t/p/w1280/ya7kf9AWA3Dd5aTD0uvrLxqq6zX.jpg", "Castaway on the Moon", 2009, "Kim è un uomo disperato. Al punto che un giorno decide di saltare da uno dei più alti ponti di Seul sul fiume Han. Ma il tentato suicidio fallisce e Kim si ritrova il mattino dopo su un'isoletta in mezzo al fiume. Nonostante la città sia tutt'intorno, Kim non sa nuotare e non riesce a farsi notare da nessuno. Deve rassegnarsi a fare il naufrago, nutrendosi di funghi. Lo noterà, guardando dalla finestra con un cannocchiale, una donna che vive da anni segregata volontariamente in un appartamento e che si deciderà, affascinata da quella strana figura, a uscire dal suo eremitaggio metropolitano.")
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two cool movies</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <style>
        .container>div {
            text-align: center;
            width: 50%;
        }

        .container .movie-cont {
            text-align: left;
            color: whitesmoke;
            background: #032541;
            border-radius: 0.5rem;
            box-shadow: 0 1rem 2rem #032541;
            display: flex;
        }

        .container .movie-cont img {
            max-height: 400px;
            margin: 1rem;
        }

        a{
            padding: 1rem 2rem;
            color: whitesmoke;
            background: #032541;
            border-radius: 0.5rem;
            box-shadow: 0 1rem 2rem #032541;
            text-decoration: none;
            transition: 200ms;
        }

        a:hover{
            background: #032590;
            color: whitesmoke;
            font-weight: bold;
        }

        a:active{
            background: whitesmoke;
            color: #032541;
        }
    </style>
</head>

<body>
    <div class="container py-5 d-flex">
        <?php
        foreach ($twoCoolMovies as $movie) { ?>
            <div>
                <div class="p-3 my-5 mx-3 movie-cont">
                    <?php $movie->printMovie(); ?>
                </div>

                <a target="blank" href="https://www.themoviedb.org/search?query=<?php echo $movie->title ?>">Scopri di più</a>
            </div>
        <?php } ?>
    </div>
</body>

</html>