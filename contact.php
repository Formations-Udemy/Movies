<?php
require 'header.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <title>Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>
    <div class="container-fluid">
        <h1 style="text-align: center;">Contact</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <form action="#" method="#">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="message" class="form-control" name="message"></textarea>
                        <small class="form-text text-muted">If you have any inquiries about the movie displayed don't hesitate</small>
                    </div>
                    <button class="btn btn-success" type="submit">Send</button>
                </form>
            </div>
            <div class="col-lg-6 mt-md-2">
                <div id="myMap" style="width: 100%; height: 400px;">

                </div>
            </div>
        </div>
    </div>

    <!-- Générer une clé API et la mettre dans le src où il y a "YOUR_KEY" -->
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=YOUR_KEY&language=fr"> </script>
    <!-- Google Maps settings -->
    <script>
        // Regular map
        function regular_map() {
            var var_location = new google.maps.LatLng(34.134117, -118.321495);

            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };

            var var_map = new google.maps.Map(document.getElementById("myMap"),
                var_mapoptions);

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "Los Angeles"
            });
        }
        // Initialize maps
        google.maps.event.addDomListener(window, 'load', regular_map);

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>