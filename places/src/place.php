<?php

class Place {

    private $city;
    private $country;
    //private $image;

    function __construct($place_city, $place_country)//, $place_image)
    {
        $this->city = $place_city;
        $this->country = $place_country;
        //$this->image = $place_image;
    }
    function setName($new_city)
    {
        $this->city = (string) $new_city;
    }
    function getName()
    {
        return $this->city;
    }
    function setCountry($new_country)
    {
        $this->country = (string) $new_country;
    }
    function getCountry()
    {
        return $this->country;
    }
    function setImage($new_image)
    {
        $this->image = (string) $new_image;
    }
    function getImage()
    {
        return $this->image;
    }

    static function getAll()
    {
        return $_SESSION['places'];
    }
    function save()
    {
        array_push($_SESSION['places'], $this);
    }
    static function deleteAll()
    {
        $_SESSION['places'] = array();
    }
}


?>
