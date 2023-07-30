<?php
namespace AutoTest;
class Presentacion
{
    public $data;
    public $colorTitle;
    public $colorSubtitle;
    public $font;
    public $position;
    public $autoDiapo;

    public function __construct(string $data = "", string $colorTitle = "black", string $colorSubtitle = "black", string $font = "Arial", $position = "center", $autoDiapo = false)
    {
        $this->data = $data;
        $this->colorTitle = $colorTitle;
        $this->colorSubtitle = $colorSubtitle;
        $this->font = $font;
        $this->position = $position;
        $this->autoDiapo = $autoDiapo;
    }

    /**
     * Get the value of data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Get the value of colorTitle
     */
    public function getColorTitle()
    {
        return $this->colorTitle;
    }

    /**
     * Set the value of colorTitle
     *
     * @return  self
     */
    public function setColorTitle($colorTitle)
    {
        $this->colorTitle = $colorTitle;
        return $this;
    }

    /**
     * Get the value of font
     */
    public function getFont()
    {
        return $this->font;
    }

    /**
     * Set the value of font
     *
     * @return  self
     */
    public function setFont($font)
    {
        $this->font = $font;
        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Get the value of colorSubtitle
     */
    public function getColorSubtitle()
    {
        return $this->colorSubtitle;
    }

    /**
     * Set the value of colorSubtitle
     *
     * @return  self
     */
    public function setColorSubtitle($colorSubtitle)
    {
        $this->colorSubtitle = $colorSubtitle;
        return $this;
    }

    /**
     * Get the value of autoDiapo
     */
    public function getAutoDiapo()
    {
        return $this->autoDiapo;
    }

    /**
     * Set the value of autoDiapo
     *
     * @return  self
     */
    public function setAutoDiapo($autoDiapo)
    {
        $this->autoDiapo = $autoDiapo;
        return $this;
    }
}