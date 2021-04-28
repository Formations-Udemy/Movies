<?php
require 'header.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <title>The Wolf of Wall Street</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS POUR LE CAROUSEL -->
    <link rel="stylesheet" href="public/glide-master/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="public/glide-master/dist/css/glide.theme.min.css">

    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- CSS PERSO -->
    <link rel="stylesheet" href="films.css">
</head>

<body>
    <div class="container-fluid">
        <h1 style="text-align: center;">The Wolf of Wall Street</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="public/filmsforsite/wolfof.jpg" alt="" style="max-width: 100%;">
                <img class="img-fluid" src="public/filmsforsite/wolfof.jpg" alt="" style="max-width: 100%;">
                <img class="img-fluid" src="public/filmsforsite/wolfof.jpg" alt="" style="max-width: 100%;">
                <img class="img-fluid" src="public/filmsforsite/wolfof.jpg" alt="" style="max-width: 100%;">
            </div>
            <div class="col">
                Based on the true story of Jordan Belfort, from his rise to a wealthy stock-broker living the high life to his fall involving crime, corruption and the federal government. <br>
                <strong>Stars: Leonardo DiCaprio, Jonah Hill, Margot Robbie</strong>
            </div>
        </div>
    </div>

    <!-- DEBUT CAROUSEL -->
    <div class="glide" style="margin-top: 450px;">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
            <li class="glide__slide" style="text-align: center;"><a href="americanbeauty.php"><img src="public/filmsforsite/americanbeuaty.jpg" alt="" width="200px;" style="border-radius: 10px;"></a></li>
                    <li class="glide__slide" style="text-align: center;"><a href="casino.php"><img src="public/filmsforsite/casino.jpg" alt="" width="200px;" style="border-radius: 10px;"></a></li>
                    <li class="glide__slide" style="text-align: center;"><a href="clockwork.php"><img src="public/filmsforsite/clockwork.jpg" alt="" width="200px;" style="border-radius: 10px;"></a></li>
                    <li class="glide__slide" style="text-align: center;"><a href="fightclub.php"><img src="public/filmsforsite/flightclub.jpg" alt="" width="200px;" style="border-radius: 10px;"></a></li>
                    <li class="glide__slide" style="text-align: center;"><a href="goodfellas.php"><img src="public/filmsforsite/goodfellas.jpg" alt="" width="200px;" style="border-radius: 10px;"></a></li>
                    <li class="glide__slide" style="text-align: center;"><a href="requiem-for-a-dream.php"><img src="public/filmsforsite/requiem-for.jpg" alt="" width="200px;" style="border-radius: 10px;"></a></li>
                    <li class="glide__slide" style="text-align: center;"><a href="wolfof.php"><img src="public/filmsforsite/wolfof.jpg" alt="" width="200px;" style="border-radius: 10px;"></a></li>
                    <li class="glide__slide" style="text-align: center;"><a href="scream.php"><img src="public/filmsforsite/scream.jpg" alt="" width="200px;" style="border-radius: 10px;"></a></li>
                    <li class="glide__slide" style="text-align: center;"><a href="scarface.php"><img src="public/filmsforsite/scarface.jpg" alt="" width="200px;" style="border-radius: 10px;"></a></li>
            </ul>
            <!-- FLECHES DU CAROUSEL -->
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i></button>
            </div>
            <!-- FIN FLECHES -->
        </div>
    </div>
    <!-- FIN CAROUSEL -->

    <!-- JS POUR LE CAROUSEL -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
        const myVar = {
            type: 'carousel',
            perView: 4,
            breakpoints: {
                1100: {
                    perView: 3
                },
                1000: {
                    perView: 3
                },
                900: {
                    perView: 3
                },
                800: {
                    perView: 2
                },
                600: {
                    perView: 1
                }
            }
        }
        new Glide('.glide', myVar).mount()
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>