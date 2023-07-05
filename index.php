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
$chambreStrasbourg1 = new Chambre(1, 120, false);
$chambreStrasbourg2 = new Chambre(2, 120, false);
$chambreStrasbourg3 = new Chambre(3, 120, false);
$chambreStrasbourg16 = new Chambre(16, 300, true);
$chambreStrasbourg17 = new Chambre(16, 300, true);
$chambreStrasbourg18 = new Chambre(16, 300, true);
$chambreStrasbourg19 = new Chambre(16, 300, true);
$chambreParis1 = new Chambre(1, 120, false);
$chambreParis2 = new Chambre(2, 120, false);
$chambreParis3 = new Chambre(3, 300, true);

// Réservations
$reservation1 = new Reservation("2021-01-01", "2021-01-01");
$reservation2 = new Reservation("2021-03-11", "2021-03-11");
$reservation3 = new Reservation("2021-04-01", "2021-04-01");