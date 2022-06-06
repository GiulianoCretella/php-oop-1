<?php
class Movie{
    protected $title;
    protected $year;
    protected $genre;
    private $poster;
    function __construct($_title,$_year,$_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getYear(){
        return $this->year;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function setPoster($_poster){
        $this->poster=$_poster;
    }
    public function getPoster(){
        return $this->poster;
    }
    public function getAnniFa(){
        return idate("Y")- $this->year;
    }
}
?>