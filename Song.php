<?php

namespace THEOM\Videogame_OST_Cover_Service;

class Song
{
    private $uid;
    private $name;
    private $artist;
    private $trackNumber;
    private $duration;

    /**
     * @param $uid
     * @param $name
     * @param $artist
     * @param $trackNumber
     * @param $duration
     */
    public function __construct($uid, $name, $artist, $trackNumber, $duration)
    {
        $this->uid = $uid;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @return mixed
     */
    public function getTrackNumber()
    {
        return $this->trackNumber;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

}