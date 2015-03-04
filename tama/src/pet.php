<?php

class Pet
{
    private $name;
    private $food;
    private $attention;
    private $rest;

    function __construct($name, $food, $attention, $rest)
    {
    $this->name = $name;
    $this->food = $food;
    $this->attention = $attention;
    $this->rest = $rest;
    }
    function setName($new_name)
    {
        $this->name = $new_name
    }
    function setFood($new_food)
    {
        $this->food = $new_food;
    }
    function setAttention($new_attention)
    {
        $this->attention = $new_attention;
    }
    function setRest($new_rest)
    {
        $this->rest = $new_rest
    }
    function getName()
    {
        return $this->name;
    }
    function getFood()
    {
        return $this->food;
    }
    function getAttention()
    {
        return $this->attention;
    }
    function getRest()
    {
        return $this->rest;
    }
    function save()
    {
        array_push($_SESSION['pet_care'], $this);
    }
    static function getAll()
    {
        return $_SESSION['pet_care'];
    }
    static function deleteAll()
    {
        $_SESSION['pet_care'] = array();
    }
}



?>
