<?php

namespace THEOM\Videogame_OST_Cover_Service;

require_once 'Song.php';

class Soundtrack
{
    private int $uid;
    private string $name;
    private string $videoGameName;
    private float $releaseYear;
    private Song $trackList;

    /**
     * @param int $uid
     * @param string $name
     * @param string $videoGameName
     * @param int $releaseYear
     * @param $trackList
     */
    public function __construct(int $uid, string $name, string $videoGameName, int $releaseYear, $trackList)
    {
        $this->uid = $uid;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

    /**
     * @return int
     */
    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getVideoGameName(): string
    {
        return $this->videoGameName;
    }

    /**
     * @return int
     */
    public function getReleaseYear(): int
    {
        return $this->releaseYear;
    }

    /**
     * @return Song
     */
    public function getTrackList(): Song
    {
        return $this->trackList;
    }



}