<?php

class Movie
{
    public $title;
    public $releaseDate;
    public $duration;
    /* argomento obbligatorio */
    public function __construct(string $_title)
    {
        $this->title = $_title;
    }


    public function getFullInfoMovie()
    {
        return $this->title . " <br> " . $this->releaseDate . " <br>" . $this->duration;
    }
}
