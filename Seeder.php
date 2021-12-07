<?php

namespace THEOM\Videogame_OST_Cover_Service;

require_once 'Soundtrack.php';
require_once 'Song.php';

class Seeder
{

    public static function seed(): array
    {
        $aloneInTheDarkSongs[] = new Song(11, 'Prelude to an End', 'Olivier Deriviere', 1, 60+33);
        $aloneInTheDarkSongs[] = new Song(12, 'Edward Carnby', 'Olivier Deriviere', 2, 2*60+36);
        $aloneInTheDarkSongs[] = new Song(13, 'The Fissure', 'Olivier Deriviere', 3, 3*60+43);
        $aloneInTheDarkSongs[] = new Song(14, 'Collapsing Floors', 'Olivier Deriviere', 4, 4*60+35);

        $starControlOriginsSongs[] = new Song(21, 'Boundaries and Bylaws', 'Mason Fisher', 1, 3*60+8);
        $starControlOriginsSongs[] = new Song(22, 'Take to the Stars', 'Riku Nuottajärvi', 2, 5*60+46);
        $starControlOriginsSongs[] = new Song(23, 'A Higher Power', 'Riku Nuottajärvi', 3, 2*60+57);
        $starControlOriginsSongs[] = new Song(24, 'Rich Vein', 'Riku Nuottajärvi', 4, 60+47);

        $needForSpeedSongs[] = new Song(31, 'The Crew', 'Photek', 1, 60+35);
        $needForSpeedSongs[] = new Song(32, 'Pursuit Low', 'Photek', 2, 3*60+18);
        $needForSpeedSongs[] = new Song(33, 'Pursuit Hi', 'Photek', 3, 4*60+43);
        $needForSpeedSongs[] = new Song(34, 'Cool Down', 'Photek', 4, 60+47);

        return [
            new Soundtrack(1, 'Alone in the Dark (Original Soundtrack from the Video Game)', 'Alone in the Dark', 2008, $aloneInTheDarkSongs),
            new Soundtrack(2, 'Star Control: Origins (Original Soundtrack)', 'Star Control: Origins', 2018, $starControlOriginsSongs),
            new Soundtrack(3, 'Need for Speed (EA Games Soundtrack)', 'Need for Speed', 2016, $needForSpeedSongs),
        ];
    }
}