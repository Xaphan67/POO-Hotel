<?php

// Auto-load des fichiers contenant les classes requises
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

// Hôtels
$hotel1 = new Hotel("Hilton **** Strasbourg", "10 route de la Gare", "67000", "STRASBOURG");