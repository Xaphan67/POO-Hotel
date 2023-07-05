<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>POO Hotel</title>
        <link rel="stylesheet" href="style.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap');
        </style>
    </head>
    <body>
        <?php

        // Auto-load des fichiers contenant les classes requises
        spl_autoload_register(function ($class_name) {
            require_once $class_name . '.php';
        });

        // Hôtels
        $hotel1 = new Hotel("Hilton **** Strasbourg", "10 route de la Gare", "67000", "STRASBOURG");
        $hotel2 = new Hotel("Regent **** Paris", "25 avenue des champs elysées","75008", "PARIS");

        // Clients
        $client1 = new Client("GIBELLO", "Virgile");
        $client2 = new Client("MURMANN", "Mickael");

        // Chambres
        $chambreStrasbourg1 = new Chambre($hotel1, 1, 120, false);
        $chambreStrasbourg2 = new Chambre($hotel1, 2, 120, false);
        $chambreStrasbourg3 = new Chambre($hotel1, 3, 120, false);
        $chambreStrasbourg4 = new Chambre($hotel1, 4, 120, false);
        $chambreStrasbourg16 = new Chambre($hotel1, 16, 300, true);
        $chambreStrasbourg17 = new Chambre($hotel1, 17, 300, true);
        $chambreStrasbourg18 = new Chambre($hotel1, 18, 300, true);
        $chambreStrasbourg19 = new Chambre($hotel1, 19, 300, true);
        $chambreParis1 = new Chambre($hotel2, 1, 120, false);
        $chambreParis2 = new Chambre($hotel2, 2, 120, false);
        $chambreParis3 = new Chambre($hotel2, 3, 300, true);

        // Réservations
        $reservation1 = new Reservation($client1, $chambreStrasbourg17, "2021-01-01", "2021-01-01");
        $reservation2 = new Reservation($client2, $chambreStrasbourg3, "2021-03-11", "2021-03-15");
        $reservation3 = new Reservation($client2, $chambreStrasbourg4, "2021-04-01", "2021-04-17");

        // Afficher les informations d'un hôtel
        echo $hotel1->afficherInformations();

        // Afficher les réservations d'un hôtel
        echo $hotel1->afficherReservations();
        echo $hotel2->afficherReservations();

        // Afficher les réservations d'un client
        echo $client2->afficherReservations();

        // Afficher le statut des chambres d'un hôtel
        echo $hotel1->afficherStatut();
        ?>
    </body>
</html>