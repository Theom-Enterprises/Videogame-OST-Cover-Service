<?php

namespace THEOM\Videogame_OST_Cover_Service;

require_once 'Seeder.php';

header("content-type:application/json");

if (isset($_GET['ost'])) {
    $soundtracks = Seeder::seed();
    $ost = preg_replace('/\D/', '', $_GET['ost']);
    if ($_GET['ost'] === 'all') {
        echo json_encode($soundtracks);
    } else if (findSoundtrackByID($soundtracks, $ost)) {
        $soundtrack = findSoundtrackByID($soundtracks, $ost);
        if (isset($_GET['song'])) {
            $song = preg_replace('/\D/', '', $_GET['song']);
            $songs = $soundtrack->getTrackList();
            if (findSongByID($songs, $song)) {
                echo json_encode(findSongByID($songs, $song));
            } else {
                echo json_encode(['Fehler' => "Dieser Song wurde nicht gefunden: $song"]);
            }
        } else {
            echo json_encode($soundtrack);
        }
    } else {
        echo json_encode(['Fehler' => "Dieses OST wurde nicht gefunden: $ost"]);
    }
}

/**
 * @param Soundtrack[] $soundtracks
 */
function findSoundtrackByID(array $soundtracks, $id)
{
    foreach ($soundtracks as $soundtrack) {
        if ((int)$id === $soundtrack->getUid()) {
            return $soundtrack;
        }
    }
    return false;
}

/**
 * @param Song[] $songs
 */
function findSongByID(array $songs, $id)
{
    foreach ($songs as $song) {
        if ((int)$id === $song->getUid()) {
            return $song;
        }
    }
    return false;
}

