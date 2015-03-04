<?php
      require_once __DIR__."/../vendor/autoload.php";
      require_once __DIR__."/../src/pet.php";

    session_start();
    if(empty($_SESSION['pet_care'])) {
        $_SESSION['pet_care'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() {
        return "home";
    });



    return $app;

?>
