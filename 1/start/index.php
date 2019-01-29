<meta charset="utf8">
<?php

include 'CurrentWeatherDisplay.class.php';
include 'DangerousWeatherAlert.class.php';
include 'TomorrowWeatherDisplay.class.php';

include 'WeatherStation.class.php';


// Création de la station météo (le sujet).
$weatherStation = new WeatherStation();

// Exécution de la station météo.
$weatherStation->run();