<?php

namespace THEOM\Videogame_OST_Cover_Service;

require_once 'OST.php';
require_once 'Song.php';

$songs[] = new Song("abc", "Omar Faid Disstrack", "Martin Windhager", 1, "02:32");
$songs[] = new Song("def", "Omar Faid Disstrack", "Martin Windhager", 1, "02:32");

$ost = new OST("ghi", "OST 1", "Fortnite", 2020, $songs);