<?php

namespace THEOM\Videogame_OST_Cover_Service;

use JsonSerializable;

require_once 'Song.php';

class Soundtrack implements JsonSerializable
{
    private int $uid;
    private string $name;
    private string $videoGameName;
    private float $releaseYear;
    private array $trackList;

    /**
     * @param int $uid
     * @param string $name
     * @param string $videoGameName
     * @param int $releaseYear
     * @param array $trackList
     */
    public function __construct(int $uid, string $name, string $videoGameName, int $releaseYear, array $trackList)
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
     * @return array
     */
    public function getTrackList(): array
    {
        return $this->trackList;
    }

    public function jsonSerialize()
    {
        return [
            'uid' => $this->getUid(),
            'name' => $this->getName(),
            'videoGameName' => $this->getVideoGameName(),
            'releaseYear' => $this->getReleaseYear(),
            'trackList' => $this->getTrackList(),
        ];
    }
}