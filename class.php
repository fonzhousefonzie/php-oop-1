<?php
class Movie
{
    public $title;
    public $year;
    public $plot;
    public $image;

    function __construct($_image, $_title, $_year, $_plot)
    {
        $this->setImage($_image);
        $this->setTitle($_title);
        $this->setYear($_year);
        $this->setPlot($_plot);
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     */
    public function setYear($year): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of plot
     */
    public function getPlot()
    {
        return $this->plot;
    }

    /**
     * Set the value of plot
     */
    public function setPlot($plot): self
    {   if(strlen($plot) < 420){
        $this->plot = $plot;
    } else {
        $this->plot = substr($plot,0,417).'...';
    }
        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;
        return $this;
    }

    public function printMovie()
    {
        $movieTitle = $this->title;
        $movieYear = $this->year;
        $moviePlot = $this->plot;
        $movieImage = $this->image;

        echo "
            <img src='$movieImage'>
            <div>
            <h1>$movieTitle ($movieYear)</h1>
            <p>$moviePlot</p>
            </div>";
    }
}
