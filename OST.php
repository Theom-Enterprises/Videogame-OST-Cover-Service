<?php

namespace THEOM\Videogame_OST_Cover_Service;

require_once 'Song.php';

class OST
{
    private string $uid;
    private string $name;
    private string $videoGameName;
    private float $releaseYear;
    private $trackList;

    /**
     * @param string $uid
     * @param string $name
     * @param string $videoGameName
     * @param float $releaseYear
     * @param $trackList
     */
    public function __construct(string $uid, string $name, string $videoGameName, float $releaseYear, $trackList)
    {
        $this->uid = $uid;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

    /**
     * @return string
     */
    public function getUid(): string
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
     * @return float
     */
    public function getReleaseYear(): float
    {
        return $this->releaseYear;
    }

    /**
     * @return mixed
     */
    public function getTrackList()
    {
        return $this->trackList;
    }



}