<?php

namespace THEOM\Videogame_OST_Cover_Service;

use JsonSerializable;

class Song implements JsonSerializable
{
    private int $uid;
    private string $name;
    private string $artist;
    private int $trackNumber;
    private int $duration; // duration in minutes

    /**
     * @param int $uid
     * @param string $name
     * @param string $artist
     * @param int $trackNumber
     * @param int $duration
     */
    public function __construct(int $uid, string $name, string $artist, int $trackNumber, int $duration)
    {
        $this->uid = $uid;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
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
    public function getArtist(): string
    {
        return $this->artist;
    }

    /**
     * @return int
     */
    public function getTrackNumber(): int
    {
        return $this->trackNumber;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    public function jsonSerialize()
    {
        return [
            'uid' => $this->getUid(),
            'name' => $this->getName(),
            'artist' => $this->getArtist(),
            'trackNumber' => $this->getTrackNumber(),
            'duration' => $this->getDuration(),
        ];
    }
}