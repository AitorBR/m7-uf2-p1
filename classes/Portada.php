<?php
namespace AutoTest;

//>= Títol 1
//== Subtítol
//[cover]
//>>>


class Portada {
    public $titol;
    public $subtitol;
    public $cover;

    public function __construct(string $titol="", string $subtitol="", string $cover="") {
        $this->titol = $titol;
        $this->subtitol = $subtitol;
        $this->cover = $cover;
    }

    public function getTitol()
    {
        return $this->titol;
    }

    public function setTitol($titol)
    {
        $this->titol = $titol;

        return $this;
    }

    public function getSubtitol()
    {
        return $this->subtitol;
    }

    public function setSubtitol($subtitol)
    {
        $this->subtitol = $subtitol;
        return $this;
    }

    public function getCover()
    {
        return $this->cover;
    }

    public function setCover($cover)
    {
        $this->cover = $cover;
        return $this;
    }

}