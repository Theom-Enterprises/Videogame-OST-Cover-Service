<?php

namespace THEOM\Videogame_OST_Cover_Service;

require_once 'Seeder.php';

header("content-type:application/json");

if (isset($_GET['ost'])) {
    $soundtracks = Seeder::seed();
    if ($_GET['ost'] == 'all') {
        echo json_encode($soundtracks);
    } else if (array_key_exists($_GET['ost']-1, $soundtracks)) {
        echo json_encode($soundtracks[$_GET['ost']-1]);
    } else {
        echo json_encode(['Fehler' => "Dieses OST wurde nicht gefunden: {$_GET['ost']}"]);
    }
}