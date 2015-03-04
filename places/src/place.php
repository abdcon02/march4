<?php

class Place {

    private $city;

    function __construct($place_city)
    {
        $this->city = $place_city;
    }
    function setName($new_city)
    {
        $this->city = (string) $new_city;
    }
    function getName()
    {
        return $this->city;
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
